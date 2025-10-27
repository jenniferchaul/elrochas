<?php
/*
Template Name: Outil — Neuro-Bioénergie
Description: Page détaillée Neuro Bioénergie (mélange bioénergie quantique + kinésiologie).
*/
defined('ABSPATH') || exit;
get_header();
?>

<main id="primary" class="site-main outil-page outil-neuro-bioenergie">
  <div class="img-page">
    <img src="<?= get_theme_file_uri('assets/images/reequilibrage.svg') ?>" alt="image kinésio">
  </div>

  <section class="about-head">
    <div class="container">
      <p class="headline">«&nbsp;Ce qui ne vient pas à la conscience revient sous forme de destin - Carl Jung&nbsp;»</p>
    </div>
  </section>

  <section class="outil-hero">
    <div class="container" data-aos="fade-up" data-aos-delay="0">
      <h1>Rééquilibrage énergétique (Neuro-Bioénergie)</h1>
      <p class="lede">Une approche qui marie bioénergie quantique et kinésiologie pour agir sur les plans physique et psycho-émotionnel.</p> <br>
      <p class="lede">La Neuro-Bioénergie permet d’explorer l’origine des blocages conscients et inconscients, ainsi que les «&nbsp;pollutions&nbsp;» énergétiques qui entravent l’élan de vie. Ensemble, nous identifions ces facteurs et procédons à des corrections adaptées à vos besoins.</p><br>
      <p class="lede">Cette démarche peut vous aider à mieux comprendre votre fonctionnement et à reprendre les rênes de votre vie. Elle va souvent plus en profondeur qu’une séance de kinésiologie seule.</p>
    </div>
  </section>

  <section class="outil-profondeur" data-aos="fade-up" data-aos-delay="15">
    <div class="container">
      <h2>Progression & profondeur</h2>
      <p>Selon les situations, plusieurs séances peuvent être nécessaires pour aller au cœur du sujet, en identifier les racines et les libérer durablement.</p>
      <p>Toutes mes séances s’adressent aux personnes désireuses d’avancer vers une vie plus alignée et de gagner en autonomie.</p>
    </div>
  </section>

  <section class="outil-note" data-aos="fade-up" data-aos-delay="30">
    <div class="container">
      <p class="disclaimer">Pratique non médicale, complémentaire à la médecine conventionnelle. Elle ne la remplace pas. Ne jamais interrompre un traitement sans avis médical.</p>
    </div>
  </section>

</main>

<?php get_template_part('partials/home-contact.tpl'); ?>

<?php get_footer(); ?>