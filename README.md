# Marmolería Marceillac — sitio PHP/MySQL

Sitio responsive preparado para un hosting PHP tradicional. Conserva las secciones del sitio actual y suma un configurador visual de mesadas con guardado en MySQL y salida a WhatsApp.

## Instalación en Donweb / Ferozo

1. Creá una base MySQL desde el panel e importá `database.sql` con phpMyAdmin.
2. Duplicá `config.php.example` como `config.php` y completá los datos de la base.
3. Subí el contenido de esta carpeta a `public_html` (o a la carpeta del dominio).
4. Asegurate de que `uploads/` tenga permiso de escritura (`755`; si el hosting lo exige, `775`).
5. Abrí `index.php` y hacé una prueba completa del configurador.

## Requisitos

- PHP 8.0 o superior.
- Extensiones PDO MySQL y Fileinfo.
- MySQL 5.7+ o MariaDB 10.2+.

## Seguridad incluida

- Consultas preparadas con PDO.
- Validación real de MIME y límite de 6 MB para adjuntos.
- Nombres aleatorios para archivos subidos.
- Bloqueo web de `config.php`, `database.sql` y este README.

## Antes de publicar

- Reemplazá las claves de `config.php`.
- Confirmá los dos números de WhatsApp.
- Revisá los nombres y disponibilidad de materiales.
- Idealmente convertí las muestras remotas del catálogo a archivos locales propios.
