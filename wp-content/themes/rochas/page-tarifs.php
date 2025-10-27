<?php
/*
Template Name: Tarifs
Description: Page tarifs claire : grilles par méthode, mentions.
*/
defined('ABSPATH') || exit;
get_header();
?>

<main id="primary" class="site-main tarifs-page">

  <section class="tarifs-hero">
    <div class="container">
      <h1>Tarifs</h1>
      <p class="lede">Séances uniquement sur RDV, en présentiel au cabinet.</p>
    </div>
  </section>

  <section class="tarifs-grid">
    <div class="container">

      <article class="card">
        <h2>Bye-Bye Allergies (BBA)</h2>
        <ul class="lines">
          <li><strong>1<sup>ère</sup> séance (≈ 1h30)</strong> — 75&nbsp;€ <span class="sub">'Évaluation de terrain + manuel de suivi)</span></li>
          <li><strong>Séance de suivi (≈ 1h)</strong> — 55&nbsp;€</li>
          <li><strong>Deux séances et + dans le mois</strong> — 50&nbsp;€</li>
        </ul>
      </article>

      <article class="card">
        <h2>Kinésiologie psycho-émotionnelle</h2>
        <ul class="lines">
          <li><strong>Séance (≈ 1h30)</strong> — 75&nbsp;€</li>
        </ul>
      </article>

      <article class="card">
        <h2>Neuro-Bioénergie</h2>
        <ul class="lines">
          <li><strong>Séance (≈ 1h30–2h)</strong> — 95&nbsp;€ <span class="sub">(mélange kinésiologie + bioénergie)</span></li>
        </ul>
      </article>

      <article class="card">
        <h2>VaguExpans</h2>
        <ul class="lines">
          <li><strong>Séance (≈ 1h)</strong> — 80&nbsp;€</li>
        </ul>
      </article>
    </div>
  </section>

  <section class="tarifs-note">
    <div class="container">
      <p class="disclaimer">Toute séance, conseil ou accompagnement ne se substitue pas à un traitement médical en cours ou à venir.</p>

      <p class="payment-methods">Paiement accepté : <strong>carte bancaire (CB)</strong>, <strong>chèque</strong> et <strong>espèces</strong>.</p>
    </div>
  </section>

</main>

<?php get_template_part('partials/home-contact.tpl'); ?>

<?php get_footer(); ?>