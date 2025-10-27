<?php
/*
Template Name: Outil — VaguExpans
Description: Page détaillée VaguExpans (principe, bienfaits, déroulé, recommandations, contre-indications).
*/
defined('ABSPATH') || exit;
get_header();
?>

<main id="primary" class="site-main outil-page outil-vaguexpans">

  <div class="img-page">
    <img src="https://picsum.photos/seed/kpe/960/640" width="960" height="640" alt="VaguExpans">
  </div>

  <section class="about-head">
    <div class="container">
      <p class="headline">«&nbsp;Ne me jugez pas sur mes succès, jugez moi sur combien de fois je suis tombé et je me suis relevé - Nelson Mandela&nbsp;»</p>
    </div>
  </section>

  <section class="outil-hero" data-aos="fade-up" data-aos-delay="0">
    <div class="container">
      <h1>VaguExpans</h1>
      <p class="lede">Approche manuelle douce qui favorise la détente profonde en stimulant naturellement le nerf vague, chef d’orchestre du système nerveux autonome.</p> <br>
      <p class="lede">La séance se pratique habillé, allongé sur le dos. Des mouvements lents et fluides, comme des vagues, invitent le corps à relâcher tensions physiques et émotionnelles.</p> <br>
      <p class="lede">Créée par Yannick Vérité, cette méthode s’inscrit dans une démarche globale de mieux-être.</p>
    </div>
  </section>

  <section class="outil-bienfaits" data-aos="fade-up" data-aos-delay="15">
    <div class="container">
      <h2>Bienfaits</h2>
      <ul class="check">
        <li>Libération des tensions (musculaires, viscérales, émotionnelles)</li>
        <li>Apaisement du stress, de l’anxiété, du mental, burn-out</li>
        <li>Amélioration du sommeil, de la digestion, de l’équilibre hormonal</li>
        <li>Reconnexion à soi, regain d’énergie et de clarté</li>
      </ul>
    </div>
  </section>

  <section class="outil-deroule" data-aos="fade-up" data-aos-delay="30">
    <div class="container">
      <h2>Déroulé d’une séance</h2>
      <ul class="steps">
        <li><strong>Durée&nbsp;:</strong> environ 1&nbsp;heure</li>
        <li>Sans huile, sans déshabillage</li>
        <li>Approche douce, respectueuse du rythme de chacun</li>
      </ul>
      <p class="note">Pour des effets durables, il est recommandé 3 séances à 15 jours d’intervalle.</p>
    </div>
  </section>

  <section class="outil-pourqui">
    <div class="container">
      <h2 data-aos="fade-up" data-aos-delay="35">Idéal si vous souhaitez</h2>
      <ul class="tags">
        <li data-aos="fade-up" data-aos-delay="40">Réduire stress et anxiété</li>
        <li data-aos="fade-up" data-aos-delay="45">Soulager tensions physiques et nerveuses</li>
        <li data-aos="fade-up" data-aos-delay="50">Améliorer sommeil, digestion et vitalité</li>
        <li data-aos="fade-up" data-aos-delay="55">Vous recentrer et lâcher prise</li>
      </ul>
    </div>
  </section>

  <section class="outil-ci" data-aos="fade-up" data-aos-delay="60">
    <div class="container">
      <h2>Contre-indications</h2>
      <ul class="no">
        <li>Femmes enceintes, en PMA/FIV</li>
        <li>Greffe d’organes</li>
        <li>Occlusion intestinale ou suspicion de calculs biliaires</li>
        <li>Antibiotiques/anticoagulants, épisode infectieux, fièvre, épilepsie</li>
      </ul>
    </div>
  </section>
</main>

<?php get_template_part('partials/home-contact.tpl'); ?>

<?php get_footer(); ?>