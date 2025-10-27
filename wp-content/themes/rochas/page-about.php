<?php
/*
Template Name: À propos — Présentation (Elisabeth Rochas)
Description: Page de présentation centrée sur le parcours d’Elisabeth (photo, histoire, déclic, formations, convictions). Pas de séances/outils ici.
*/
defined('ABSPATH') || exit;

get_header();
?>

<main id="primary" class="site-main about-page">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <section class="about-portrait" aria-labelledby="about-portrait-title" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
          <figure class="portrait-figure">
            <?php
            if (has_post_thumbnail()) {
              echo get_the_post_thumbnail(
                get_the_ID(),
                'large',
                [
                  'class'   => 'portrait-img',
                  'alt'     => 'Portrait d’Elisabeth Rochas',
                  'sizes'   => '(min-width: 900px) 260px, 210px',
                  'loading' => 'lazy',
                  'decoding' => 'async',
                ]
              );
            } else {

              echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/images/portrait.png') . '" class="portrait-img" alt="Portrait d’Elisabeth Rochas" loading="lazy" decoding="async">';
            }
            ?>
            <figcaption id="about-portrait-title" class="portrait-caption">Elisabeth Rochas</figcaption>
          </figure>
        </div>
      </section>

      <section class="about-story" data-aos="fade-up" data-aos-delay="15">
        <div class="container">
          <p>Parfois, la vie nous amène exactement là où nous devons être, au bon moment. Mon chemin vers les médecines douces s’est ouvert avec la maternité&nbsp;: en complément de la médecine conventionnelle, j’ai découvert des approches capables d’apaiser les petits maux du quotidien autant que d’éclairer des problématiques plus profondes.</p>
          <p>Au fil des années, j’ai compris que certaines charges que je portais ne m’appartenaient pas vraiment&nbsp;: des traces familiales, transgénérationnelles, des habitudes ancrées dans le corps. Les rencontrer, les comprendre, puis m’en alléger a transformé ma façon d’être. C’est cette expérience intime, concrète et progressive que je mets aujourd’hui au service des personnes que j’accompagne.</p>
        </div>
      </section>

      <section class="about-milestones">
        <div class="container">
          <article class="milestone" data-aos="fade-up" data-aos-delay="20">
            <h3>La maternité, un déclic fondateur</h3>
            <p>La naissance de mes enfants a été une révélation. Chercher des solutions douces, respectueuses du rythme du corps, m’a amenée à explorer des voies nouvelles. J’y ai trouvé une complémentarité précieuse avec le suivi médical&nbsp;: une manière d’écouter autrement, d’apaiser, d’accompagner.</p>
          </article>

          <article class="milestone" data-aos="fade-up" data-aos-delay="25">
            <h3>Des années de formation et d’explorations</h3>
            <p>Guidée par la conviction que le corps sait souvent avant nous, je me suis formée à différentes approches pour disposer d’outils justes et modulables. L’hypnose Ericksonienne m’a appris la douceur du changement, la Neuro-Bioénergie Quantique® a ouvert un langage subtil entre le corps et l’énergie, la kinésiologie neuro-intégrative a affiné l’écoute des réponses corporelles, tandis que d’autres méthodes m’ont permis d’agir sur les sensibilités et la régulation.</p>
          </article>

          <article class="milestone" data-aos="fade-up" data-aos-delay="30">
            <h3>Une sensibilité façonnée par l’humain</h3>
            <p>Mes années dans le commerce ont aiguisé mon sens de l’écoute et de la relation. Accueillir, comprendre, s’adapter, trouver le bon rythme&nbsp;: ces compétences humaines, loin d’être accessoires, sont devenues le socle de ma pratique d’accompagnement.</p>
          </article>

          <article class="milestone" data-aos="fade-up" data-aos-delay="35">
            <h3>Aujourd’hui&nbsp;: accompagner vers l’autonomie</h3>
            <p>Mon intention est simple&nbsp;: créer un espace sûr, apaisant et pragmatique, où l’on peut déposer ce qui pèse, dénouer ce qui bloque et repartir plus libre. J’avance avec vous, pas à pas, jusqu’à ce que vous puissiez cheminer seul·e, en confiance.</p>
          </article>
        </div>
      </section>

      <section class="about-certifs">
        <div class="container">
          <h2 data-aos="fade-up" data-aos-delay="38">Formations & certifications</h2>

          <ul class="cert-list">
            <li class="cert-item" data-aos="fade-up" data-aos-delay="40">
              <strong>Neuro-Bioénergie Quantique®</strong>
              <span class="cert-note">Approche mêlant bioénergie et kinésiologie neuro-intégrative, pour des rééquilibrages doux et profonds.</span>
            </li>
            <li class="cert-item" data-aos="fade-up" data-aos-delay="45">
              <strong>Bye-Bye Allergies®</strong>
              <span class="cert-note">Accompagnement des sensibilités et intolérances, en complément d’un suivi médical si nécessaire.</span>
            </li>
            <li class="cert-item" data-aos="fade-up" data-aos-delay="50">
              <strong>VaguExpans®</strong>
              <span class="cert-note">Travail autour de la régulation via le nerf vague, soutien du retour à l’équilibre.</span>
            </li>
            <li class="cert-item" data-aos="fade-up" data-aos-delay="55">
              <strong>Hypnose Ericksonienne</strong>
              <span class="cert-note">Une manière respectueuse d’accompagner le changement, au plus près de votre rythme.</span>
            </li>
          </ul>

          <p class="cert-ethic" data-aos="fade-up" data-aos-delay="60">Ces approches ne remplacent pas la médecine conventionnelle&nbsp;: elles la complètent avec tact et discernement.</p>
        </div>
      </section>

      <section class="about-content">
        <div class="container">
          <?php the_content(); ?>
        </div>
      </section>

  <?php endwhile;
  endif; ?>

</main>

<?php get_template_part('partials/home-contact.tpl'); ?>

<?php get_footer(); ?>