<!DOCTYPE html>
<html lang="<?= get_bloginfo('language'); ?>">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <?php wp_head(); ?>

  <script async src="https://www.googletagmanager.com/gtag/js?id=G-1Z2KE1DS9Z"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-1Z2KE1DS9Z');
  </script>
</head>

<body <?php body_class(); ?>>
  <aside class="social-dock" aria-label="Raccourcis"> <a class="dock-item" href="tel:+33682806922" aria-label="Appeler"> <i class="fas fa-phone-alt"></i> </a> <a class="dock-item" href="mailto:el.rochas@laposte.net" aria-label="E-mail"> <i class="fas fa-envelope"></i> </a> <!--<a class="dock-item" href="https://www.instagram.com/…" target="_blank" rel="noopener" aria-label="Instagram"> <i class="fab fa-instagram"></i> </a> <a class="dock-item" href="https://www.facebook.com/…" target="_blank" rel="noopener" aria-label="Facebook"> <i class="fab fa-facebook"></i> </a--> </aside>
  <header>
    <div class="container-menu">
      <div class="logo-menu"> <a href="<?= home_url('/') ?>"> <img class="img-logo" src="<?= get_theme_file_uri('assets/images/logob1.png') ?>" alt="Logo Elisabeth Rochas"> </a> </div>

      <button class="hamburger" id="burger"
        aria-controls="menu"
        aria-expanded="false"
        aria-label="Ouvrir le menu">
        <span class="hamburger_line line1"></span>
        <span class="hamburger_line line2"></span>
        <span class="hamburger_line line3"></span>
      </button>

      <nav id="menu" class="menu" aria-label="Navigation principale">
        <ul class="main-menu">
          <li class="menu-item"><a class="item-link" href="<?= home_url('/') ?>">Accueil</a></li>
          <li class="menu-item"><a class="item-link" href="<?= home_url('/a-propos') ?>">À propos</a></li>
          <li class="menu-item has-submenu">
            <div class="submenu-toggle">
              <a href="#" class="item-link">Outils</a>
            </div>
            <ul class="submenu">
              <li><a href="<?= home_url('/kinesio') ?>">Kinésiologie psycho-émotionnelle</a></li>
              <li><a href="<?= home_url('/reequilibrage') ?>">Rééquilibrage énergétique</a></li>
              <li><a href="<?= home_url('/bye-bye-allergies') ?>">Bye Bye Allergies</a></li>
              <li><a href="<?= home_url('/vaguexpans') ?>">VaguExpans</a></li>
            </ul>
          </li>
          <li class="menu-item"><a class="item-link" href="<?= home_url('/tarifs') ?>">Tarifs</a></li>
          <li class="menu-item"><a class="item-link" href="<?= home_url('/contact') ?>">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>