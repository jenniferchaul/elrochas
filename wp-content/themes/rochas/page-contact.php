<?php
/* Template Name: Contact (ATVS) */
get_header(); ?>

<section class="contact-page">
  <div class="contact-head container">
    <h1 class="gradient-text">Contact</h1>
    <p>Une question, une prise de rendez-vous&nbsp;? Je vous réponds rapidement.</p>
  </div>

  <div class="contact-wrapper container">
    <!-- Encadré infos -->
    <aside class="contact-card">
      <h2>Infos de contact</h2>
      <ul class="contact-list">
        <li><i class="icon-phone"></i><a href="tel:+33682806922">06&nbsp;82&nbsp;80&nbsp;69&nbsp;22</a></li>
        <li><i class="icon-mail"></i><a href="mailto:el.rochas@laposte.net">el.rochas@laposte.net</a></li>
        <li><i class="icon-pin"></i> Centre Symbiose — 995 Avenue Léopold Fabre, 38250 Lans-en-Vercors</li>
        <li><i class="icon-clock"></i> Lun–Sam : 9h–18h</li>
      </ul>
    </aside>

    <!-- Formulaire -->
    <div class="form-card">
      <?php echo do_shortcode('[contact-form-7 id="8b5700c" title="Contact form 1"]'); ?>
    </div>
  </div>

<div class="contact-map container">
  <div class="map-card">
    <div class="map-embed">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2814.9492111632467!2d5.590924776592223!3d45.12736495584945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478a9334f94c4073%3A0x613b8c99e9e1ad59!2sElisabeth%20Rochas!5e0!3m2!1sfr!2sfr!4v1760709803296!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</div>

</section>

<?php get_footer(); ?>

