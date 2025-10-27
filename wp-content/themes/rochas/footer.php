<footer class="site-footer" role="contentinfo">

  <!-- Séparateur en vague (placé AVANT .footer-top) -->
  <div class="footer-wave" aria-hidden="true">
    <svg viewBox="0 0 1440 110" preserveAspectRatio="none">
      <!-- Remplissage : même couleur que le fond du footer -->
      <path class="wave-fill"
        d="M0,70 C160,100 320,110 480,96 C640,82 800,36 960,42 C1120,48 1280,92 1440,80 L1440,0 L0,0 Z" />
      <!-- filet doré discret -->
      <path class="wave-glow"
        d="M0,70 C160,100 320,110 480,96 C640,82 800,36 960,42 C1120,48 1280,92 1440,80"
        fill="none" />
    </svg>
  </div>

  <div class="footer-top">
    <div class="container">
      <div class="footer-grid">
        <!-- Col 1 — Identité -->
        <div class="footer-col footer-brand">
          <img class="footer-logo" src="<?= get_theme_file_uri('assets/images/logob1.png') ?>" alt="">
        </div>

        <!-- Col 2 — Contact -->
        <div class="footer-col contact">
          <h3 class="footer-title">Me contacter</h3>
          <ul class="footer-contact">
            <li><a href="tel:+33682806922">06&nbsp;82&nbsp;80&nbsp;69&nbsp;22</a></li>
            <li><a href="mailto:el.rochas@laposte.net">el.rochas@laposte.net</a></li>
            <li class="footer-adr">
              <span>Centre Symbiose</span><br>
              <span>995 Avenue Léopold Fabre</span><br>
              <span>38250 Lans en Vercors</span>
            </li>
            <!-- Astuce : mets l'adresse exacte dans q= pour un lien carte parfait -->
            <li>
              <a class="footer-map" target="_blank" rel="noopener"
                href="https://maps.app.goo.gl/Z3k7AZiRmz49eQYs7">
                Voir sur la carte
              </a>
            </li>
          </ul>
        </div>

        <!-- Col 3 — Liens utiles -->
        <div class="footer-col">
          <h3 class="footer-title">Liens utiles</h3>
          <ul class="footer-links">
            <li><a href="<?= home_url('/a-propos') ?>">À propos</a></li>
            <li><a href="<?= home_url('/kinesio') ?>">Kinésiologie psycho-émotionnelle</a></li>
            <li><a href="<?= home_url('/reequilibrage') ?>">Rééquilibrage énergétique</a></li>
            <li><a href="<?= home_url('/bye-bye-allergies') ?>">Bye Bye Allergies</a></li>
            <li><a href="<?= home_url('/vaguexpans') ?>">VaguExpans</a></li>
            <li><a href="<?= home_url('/tarifs') ?>">Tarifs</a></li>
            <li><a href="<?= home_url('/contact') ?>">Contact</a></li>

        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <ul>
          <li class="footer-links"><a href="<?= home_url('/politique-de-confidentialite') ?>">Politiques de confidentialité</a></li>
          <li><a href="<?= home_url('/mentions-legales') ?>">Mentions légales</a></li>
        </ul>
        <small>© <?= date('Y') ?> Elisabeth Rochas. Tous droits réservés.</small>
      </div>
      <div class="footer__jcdev">

        Site réalisé par <a href="https://www.jcdevandcode.fr" target="_blank" rel="noopener">JC Dev&amp;Code</a>
      </div>
    </div>
  </div>

</footer>

<button id="backToTop" class="back-to-top" aria-label="Retour en haut" title="Retour en haut">
  <span class="tip" aria-hidden="true"></span>
</button>

<?php wp_footer(); ?>
</body>

</html>