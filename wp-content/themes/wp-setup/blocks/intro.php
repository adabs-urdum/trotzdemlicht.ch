<?php
  $eyebrow = get_field('eyebrow');
  $text = get_field( 'text' );
  $title = get_field( 'title' );
?>

<section class="intro">
  <div class="intro__wrapper">
    <h3 class="intro__eyebrow"><?= $eyebrow ?></h3>
    <h1 class="intro__title"><?= $title ?></h1>
    <div class="intro__text">
      <?= $text ?>
    </div>
  </div>
</section>
