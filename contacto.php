<?php declare(strict_types=1); require __DIR__ . "/includes/contact.php"; ?>
<!doctype html><html lang="es-AR"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Contacto · Marmolería Marceillac</title><link rel="icon" href="assets/img/logo.jpg"><link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600&family=Newsreader:opsz,wght@6..72,400;6..72,500&display=swap" rel="stylesheet"><link rel="stylesheet" href="assets/css/redesign.css?v=3"><link rel="stylesheet" href="assets/css/contact-form.css?v=1"><script defer src="assets/js/contacto/menu.js?v=5"></script></head><body><div class="utility"><span>Olazábal 1045 · Mar del Plata</span><span>Lun–Vie 8–16 h · Sáb 9–12 h</span><a href="tel:2234739138">223 473-9138</a></div><header class="site-head"><a class="logo" href="index.php"><img src="assets/img/logo.jpg" alt="Marmolería Marceillac"><span><strong>MARCEILLAC</strong><small>MARMOLERÍA · DESDE 1915</small></span></a><button class="menu">Menú</button><nav class="nav"><a href="index.php">Inicio</a><a href="configurador.php">Diseñá tu mesada</a><a href="materiales.php">Materiales</a><a href="nosotros.php">Nosotros</a><a class="active" href="contacto.php">Contacto</a></nav><div class="socials"><a href="https://wa.me/5492236191251" aria-label="WhatsApp"><svg viewBox="0 0 24 24"><path d="M20 11.7a8 8 0 0 1-11.8 7L4 20l1.4-4A8 8 0 1 1 20 11.7Z"/><path d="M9 8.5c.6 2.2 2 3.6 4.3 4.5l1.2-1.2 2 .9c-.2 1.3-1 2.2-2.3 2.3-3.7-.3-6.8-3.3-7.2-7 .1-1.2.8-2 2-2.3l1 1.8Z"/></svg></a><a href="https://www.instagram.com/marmoleriamarceillac/" aria-label="Instagram"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><path d="M17.5 6.5h.01"/></svg></a><a href="mailto:marmoleriamarceillac@gmail.com" aria-label="Email"><svg viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="14" rx="1"/><path d="m4 7 8 6 8-6"/></svg></a></div></header><main><section class="page-hero"><p class="kicker">Contacto</p><h1>Hablemos de tu proyecto.</h1><p>Visitá el taller o envianos medidas, fotos y una idea aproximada para empezar.</p></section><section class="section contact-grid"><div><p class="kicker">Marmolería Marceillac</p><h2>Visitá el taller.</h2><div class="contact-list"><a href="https://wa.me/5492236191251"><small>WhatsApp</small><b>223 619-1251</b></a><a href="mailto:marmoleriamarceillac@gmail.com"><small>Email</small><b>marmoleriamarceillac@gmail.com</b></a><a href="tel:2234739138"><small>Teléfono</small><b>223 473-9138</b></a><div><small>Dirección</small><b>Olazábal 1045, Mar del Plata</b></div><div><small>Horarios</small><b>Lun–Vie 8–16 h · Sáb 9–12 h</b></div></div></div><div><iframe class="map" title="Mapa de Marmolería Marceillac" loading="lazy" src="https://www.google.com/maps?q=Marmoler%C3%ADa+Marceillac,+Olaz%C3%A1bal+1045,+Mar+del+Plata&output=embed"></iframe><a class="google-card" href="https://www.google.com/maps/search/?api=1&query=Marmoler%C3%ADa+Marceillac+Olaz%C3%A1bal+1045+Mar+del+Plata"><span><small>Google</small><br><b>Marmolería Marceillac</b><br>Olazábal 1045 · Cómo llegar y ver la ficha</span><strong>ABRIR ↗</strong></a></div></section>
<section class="section contact-form-section" aria-labelledby="titulo-formulario">
  <div class="contact-form-intro">
    <p class="kicker">Escribinos</p>
    <h2 id="titulo-formulario">Contanos qué necesitás.</h2>
    <p>Dejanos tus datos y una breve descripción. También podés contactarnos directamente por WhatsApp.</p>
  </div>
  <div class="contact-form-card">
    <?php if ($contactErrors): ?>
      <div class="contact-feedback contact-feedback-error" role="alert">
        <strong>Revisá estos datos:</strong>
        <ul><?php foreach ($contactErrors as $message): ?><li><?= escapeContact($message) ?></li><?php endforeach; ?></ul>
      </div>
    <?php endif; ?>
    <?php if ($contactNotice !== ''): ?>
      <p class="contact-feedback contact-feedback-<?= escapeContact($contactNoticeType) ?>" role="status"><?= escapeContact($contactNotice) ?></p>
    <?php endif; ?>
    <form method="post" action="contacto.php#titulo-formulario" class="contact-form">
      <input type="hidden" name="contact_token" value="<?= escapeContact($_SESSION['contact_token']) ?>">
      <div class="contact-honeypot" aria-hidden="true"><label for="sitio_web">Dejá este campo vacío</label><input id="sitio_web" type="text" name="sitio_web" tabindex="-1" autocomplete="off"></div>
      <label for="nombre">Nombre <span aria-hidden="true">*</span><input id="nombre" name="nombre" autocomplete="name" maxlength="120" required value="<?= escapeContact($contactValues['nombre']) ?>"></label>
      <div class="contact-form-row">
        <label for="telefono">Teléfono<input id="telefono" name="telefono" type="tel" autocomplete="tel" maxlength="40" value="<?= escapeContact($contactValues['telefono']) ?>"></label>
        <label for="email">Email<input id="email" name="email" type="email" autocomplete="email" maxlength="190" value="<?= escapeContact($contactValues['email']) ?>"></label>
      </div>
      <p class="contact-form-note">Indicá al menos un teléfono o un email para que podamos responderte.</p>
      <label for="mensaje">Tu consulta <span aria-hidden="true">*</span><textarea id="mensaje" name="mensaje" rows="6" maxlength="5000" required><?= escapeContact($contactValues['mensaje']) ?></textarea></label>
      <button class="btn" type="submit">Enviar consulta</button>
    </form>
  </div>
</section>
<section class="cta rust"><h2>Podés preparar la consulta antes de escribirnos.</h2><a class="btn light" href="configurador.php">Diseñá tu mesada</a></section></main><footer class="site-footer"><div><p class="kicker">Marmolería Marceillac</p><h3>Una idea, medida con precisión.</h3></div><nav><a href="index.php">Inicio</a><a href="configurador.php">Diseñá tu mesada</a><a href="materiales.php">Materiales</a><a href="nosotros.php">Nosotros</a></nav><div><p>Olazábal 1045 · Mar del Plata<br>223 473-9138</p></div></footer></body></html>
