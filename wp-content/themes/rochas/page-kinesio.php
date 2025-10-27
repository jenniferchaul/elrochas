<?php
/*
Template Name: Outil — Kinésiologie
Description: Page détaillée Kinésiologie psycho-émotionnelle (intro, fonctionnement, étapes, libération).
*/
defined('ABSPATH') || exit;
get_header();
?>

<main id="primary" class="site-main outil-kinesiologie">
  <div class="img-page">
    <img src="<?= get_theme_file_uri('assets/images/kinesio_psycho.svg') ?>" alt="image kinésio">
  </div>

  <section class="about-head">
    <div class="container">
      <p class="headline">«&nbsp;On ne sait jamais ce que le passé nous réserve - Françoise Sagan&nbsp;»</p>
    </div>
  </section>

  <section class="outil-hero" data-aos="fade-up" data-aos-delay="0">
    <div class="container">
      <h1>Kinésiologie psycho-émotionnelle</h1>
      <p class="lede">Une approche holistique qui explore les interactions entre le corps et le vécu émotionnel, pour identifier et libérer les blocages qui freinent votre bien-être.</p> <br>
      <p class="lede">La kinésiologie psycho-émotionnelle combine des éléments de la kinésiologie et des aspects psychologiques pour aider à mettre en lumière des stress souvent inconscients qui influencent le comportement. C’est une méthode douce qui s’appuie sur le test musculaire pour accéder à la mémoire du corps.</p>
    </div>
  </section>

  <section class="outil-fonctionnement">
    <div class="container">
      <h2 data-aos="fade-up" data-aos-delay="10">Comment ça fonctionne&nbsp;?</h2>

      <article class="block" data-aos="fade-up" data-aos-delay="15">
        <h3>Le test musculaire</h3>
        <p>Une légère pression est exercée sur un muscle pour évaluer sa tonicité. Certaines réponses indiquent un stress lié à une émotion ou un souvenir. À l’aide de la roue des méridiens, les déséquilibres et leurs origines sont identifiés.</p>
      </article>

      <article class="block" data-aos="fade-up" data-aos-delay="20">
        <h3>Recherche de la cause du stress</h3>
        <ul class="check">
          <li>Émotions bloquées</li>
          <li>Croyances limitantes</li>
          <li>Événements passés ou présents liés au mal-être actuel</li>
        </ul>
      </article>

      <article class="block" data-aos="fade-up" data-aos-delay="25">
        <h3>Libération / rééquilibrage</h3>
        <p>Selon les besoins de votre corps, différentes techniques permettent de libérer les blocages et d’apaiser les mémoires traumatisantes ou limitantes, pour retrouver élan et clarté.</p>
      </article>
    </div>
  </section>

  <section class="outil-note" data-aos="fade-up" data-aos-delay="30">
    <div class="container">
      <p class="disclaimer">Pratique non médicale, complémentaire à la médecine conventionnelle. Elle ne la remplace pas.</p>
    </div>
  </section>

</main>

<?php get_template_part('partials/home-contact.tpl'); ?>

<?php get_footer(); ?>