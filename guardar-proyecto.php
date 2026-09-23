<?php
declare(strict_types=1);
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { http_response_code(405); exit('Método no permitido'); }
$configFile = __DIR__.'/config.php';
if (!is_file($configFile)) { http_response_code(500); exit('Falta configurar config.php'); }
$cfg = require $configFile;
function clean(string $key): string { return trim((string)($_POST[$key] ?? '')); }
$nombre=clean('nombre'); $telefono=clean('telefono');
if ($nombre==='' || $telefono==='') { http_response_code(422); exit('Nombre y teléfono son obligatorios.'); }
$archivo=null;
if (!empty($_FILES['archivo']['tmp_name'])) {
  if ($_FILES['archivo']['size'] > 6291456) { http_response_code(422); exit('El archivo supera 6 MB.'); }
  $finfo=new finfo(FILEINFO_MIME_TYPE); $mime=$finfo->file($_FILES['archivo']['tmp_name']);
  $permitidos=['image/jpeg'=>'jpg','image/png'=>'png','image/webp'=>'webp','application/pdf'=>'pdf'];
  if (!isset($permitidos[$mime])) { http_response_code(422); exit('Tipo de archivo no permitido.'); }
  $archivo=bin2hex(random_bytes(12)).'.'.$permitidos[$mime];
  if (!move_uploaded_file($_FILES['archivo']['tmp_name'], __DIR__.'/uploads/'.$archivo)) { http_response_code(500); exit('No se pudo guardar el archivo.'); }
}
$pdo=new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4",$cfg['db_user'],$cfg['db_pass'],[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
$medidas=json_encode(['lado_a'=>clean('lado_a'),'lado_b'=>clean('lado_b'),'profundidad'=>clean('profundidad')],JSON_UNESCAPED_UNICODE);
$sql='INSERT INTO presupuestos (nombre,telefono,zona,tipo_trabajo,forma,medidas,material,muebles,bacha,espesor,frente,anafe,plazo,observaciones,imagen,fecha) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,NOW())';
$pdo->prepare($sql)->execute([$nombre,$telefono,clean('zona'),clean('tipo'),clean('forma'),$medidas,clean('material'),clean('muebles'),clean('bacha'),clean('espesor'),clean('frente'),clean('anafe'),clean('plazo'),clean('observaciones'),$archivo]);
$mensaje="Hola, quisiera consultar por una mesada.\n\nTipo: ".clean('tipo')."\nForma: ".clean('forma')."\nMedidas: ".clean('lado_a')." × ".clean('lado_b')." cm\nProfundidad: ".clean('profundidad')." cm\nMaterial: ".clean('material')."\nMuebles: ".clean('muebles')."\nBacha: ".clean('bacha')."\nEspesor: ".clean('espesor')."\nFrente: ".clean('frente')."\nZona: ".clean('zona').($archivo?"\n\nTengo una foto o plano para enviarles.":'');
header('Location: https://wa.me/'.rawurlencode($cfg['whatsapp']).'?text='.rawurlencode($mensaje)); exit;
