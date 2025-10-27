<?php
/*
Template Name: Outil — Bye-Bye Allergies (BBA)
Description: Page détaillée BBA (définition, fonctionnement, avantages, nombre de séances, avertissements).
*/
defined('ABSPATH') || exit;
get_header();
?>

<main id="primary" class="site-main outil-page outil-bba">

  <div class="img-page">
    <img src="<?= get_theme_file_uri('assets/images/byebye.svg') ?>" alt="image bye bye allergie">
  </div>


  <section class="about-head">
    <div class="container">
      <p class="headline">«&nbsp;Les émotions inexprimées ne meurent jamais. Elles sont enterrées vivantes et ressortent plus tard sous des formes plus laides - Sigmund Freud&nbsp;»</p>
    </div>
  </section>

  <section class="outil-hero" data-aos="fade-up" data-aos-delay="0">
    <div class="container">
      <h1>Bye-Bye Allergies (BBA)</h1>
      <p class="lede">Méthode naturelle et non invasive visant à réduire durablement allergies, intolérances et sensibilités, en rééquilibrant l’organisme.</p> <br>
      <p class="lede">BBA s’appuie sur des principes issus de la kinésiologie, de l’acupression, de l’ostéopathie énergétique et des médecines douces. L’objectif&nbsp;: agir sur la cause (dysfonctionnement interne) plutôt que sur les seuls symptômes.</p> <br>
      <p class="lede">Elle peut aussi mettre en lumière des blocages psychologiques (mémoires émotionnelles, chocs, traumatismes) et favoriser leur dénouement.</p> <br>

    </div>
  </section>

  <section class="outil-utilites">
    <div class="container">
      <h2 data-aos="fade-up" data-aos-delay="15">Pour quoi&nbsp;?</h2>
      <ul class="tags">
        <li data-aos="fade-up" data-aos-delay="20">Allergies / intolérances alimentaires</li>
        <li data-aos="fade-up" data-aos-delay="25">Allergies respiratoires</li>
        <li data-aos="fade-up" data-aos-delay="30">Allergies cutanées</li>
        <li data-aos="fade-up" data-aos-delay="35">Intolérances au stress, aux émotions, aux traumatismes</li>
      </ul>
    </div>
  </section>

<section class="outil-fonctionnement">
  <div class="container">
    <h2 data-aos="fade-up" data-aos-delay="40">Comment ça marche&nbsp;?</h2>

    <article class="block" data-aos="fade-up" data-aos-delay="45">
      <h3>Identification des allergènes</h3>
      <p>Test musculaire (kinésiologie) pour repérer les substances réactives. La séance se déroule habillé, allongé.</p>
    </article>

    <article class="block" data-aos="fade-up" data-aos-delay="50">
      <h3>Traitement énergétique</h3>
      <p>Acupression sur des points clés pour rétablir l’équilibre perturbé par l’allergène.</p>
    </article>

    <article class="block" data-aos="fade-up" data-aos-delay="55">
      <h3>Réintégration</h3>
      <p>Période d’éviction — en général 25&nbsp;h — pour permettre au corps d’intégrer le traitement.</p>
    </article>
  </div>
</section>


  <section class="outil-avantages" data-aos="fade-up" data-aos-delay="60">
    <div class="container">
      <h2>Avantages</h2>
      <ul class="check">
        <li>Naturelle et non invasive</li>
        <li>Efficace et durable (plusieurs séances possibles selon le terrain)</li>
        <li>Approche globale (corps & esprit)</li>
      </ul>
    </div>
  </section>

  <section class="outil-seances" data-aos="fade-up" data-aos-delay="65">
    <div class="container">
      <h2>Combien de séances&nbsp;?</h2>
      <p>La première séance dresse un «&nbsp;état des lieux du terrain&nbsp;». Parfois une à deux séances suffisent. Si le terrain est plus déséquilibré, on traite des groupes de substances pour un résultat durable, et on peut mobiliser d’autres méthodes (ex. kinésiologie).</p>
    </div>
  </section>

  <section class="outil-note" data-aos="fade-up" data-aos-delay="70">
    <div class="container">
      <p class="disclaimer">BBA est une méthode énergétique. Elle ne se substitue pas à la médecine, ni à un diagnostic ni à un suivi médical. Ne modifiez jamais votre traitement sans avis médical.</p>
      <p class="link"><a href="https://www.bba-byebyeallergies.org/" target="_blank" rel="noopener">Site officiel BBA</a></p>
    </div>
  </section>

</main>

<?php get_template_part('partials/home-contact.tpl'); ?>

<?php get_footer(); ?>
