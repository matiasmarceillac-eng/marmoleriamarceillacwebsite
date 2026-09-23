<?php $titulo='Piedra trabajada a medida'; include 'includes/header.php'; ?>
<section class="hero cut-reveal">
  <div class="hero-media"><img src="assets/img/ambiente.webp" alt="Trabajo terminado por Marmolería Marceillac"><span class="cut-line"></span></div>
  <div class="hero-copy reveal"><p class="eyebrow">Cuatro generaciones · Mar del Plata</p><h1>Piedra trabajada<br><em>a medida.</em></h1><p>Desde 1915 transformamos mármoles, granitos y cuarzos en piezas que forman parte de la arquitectura cotidiana.</p><div class="actions"><a class="button" href="configurador.php">Diseñá tu mesada</a><a class="text-link" href="materiales.php">Explorar materiales →</a></div></div>
  <div class="hero-index">01 / Corte<br><span>Precisión de taller</span></div>
</section>

<section class="intro grid-2 observe">
  <div><p class="eyebrow">El oficio</p><h2>No vendemos solamente una mesada.</h2></div>
  <div><p class="large">Acompañamos cada proyecto desde la elección de la placa y la medición hasta el corte, el pulido y la instalación final.</p><p>La experiencia de cuatro generaciones, combinada con maquinaria actual y atención personalizada.</p></div>
</section>

<section class="process observe">
  <div class="section-head"><p class="eyebrow">Del plano a la obra</p><h2>Así toma forma una pieza.</h2></div>
  <div class="process-track">
    <?php foreach ([['01','Elegir','La piedra adecuada para el uso y el ambiente.'],['02','Medir','Relevamiento preciso en obra.'],['03','Cortar','Mecanizado y encuentros definidos.'],['04','Pulir','Terminaciones hechas por especialistas.'],['05','Instalar','Ajuste final y colocación responsable.']] as $p): ?>
    <article><span><?= $p[0] ?></span><h3><?= $p[1] ?></h3><p><?= $p[2] ?></p></article>
    <?php endforeach; ?>
  </div>
</section>

<section class="blueprint observe">
  <div class="blueprint-image"><img src="assets/img/proyecto-cuarzo.webp" alt="Mesada amplia de cuarzo Blanco Norte"><div class="drawing"><span>2400 mm</span><i></i><b>▭ BACHA</b></div></div>
  <div><p class="eyebrow">Idea → pieza real</p><h2>La medida se convierte en materia.</h2><p>Pasá el cursor o tocá la imagen para revelar el trabajo terminado.</p></div>
</section>

<section class="feature-cta observe"><p class="eyebrow">Presupuesto visual</p><h2>Configurá una primera idea de tu mesada.</h2><p>Elegí forma, medidas, material, bacha y terminaciones. Al final recibimos una consulta clara, lista para continuar por WhatsApp.</p><a class="button light" href="configurador.php">Empezar diseño</a></section>

<section class="project-grid observe">
  <figure><img src="assets/img/instalacion.webp" alt="Equipo instalando una pieza a medida"><figcaption><b>Precisión en obra</b><span>Medir, ajustar, instalar</span></figcaption></figure>
  <figure><img src="assets/img/detalle.webp" alt="Objeto realizado en piedra natural"><figcaption><b>El detalle también importa</b><span>Objetos y terminaciones</span></figcaption></figure>
  <figure><img src="assets/img/taller.webp" alt="Trabajo del equipo de Marmolería Marceillac"><figcaption><b>Detrás de cada proyecto</b><span>Oficio y equipo</span></figcaption></figure>
</section>
<?php include 'includes/footer.php'; ?>
