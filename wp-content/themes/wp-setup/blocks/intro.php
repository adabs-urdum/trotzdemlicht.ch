<?php
  $eyebrow = get_field('eyebrow');
  $text = get_field( 'text' );
  $title = get_field( 'title' );
  $img = get_field('image');
  $caption = $img['caption'];
  $src = $img['sizes']['L'];
  $srcset = wp_get_attachment_image_srcset($img['ID']);
  $alt = $img['alt'] ? $img['alt'] : $img['name'];
  $imgTitle = $img['title'] ? $img['title'] : $img['name'];
  $srcset = wp_get_attachment_image_srcset($img['ID']);
?>

<section class="intro">
  <div class="intro__wrapper">
    <h1 class="intro__eyebrow"><?= $eyebrow ?></h1>
    <h3 class="intro__title"><?= $title ?></h3>
    <div class="intro__text">
      <?= $text ?>
    </div>
  </div>
  <img class="intro__image" loading="lazy" src="<?= $src ?>" title="<?= $imgTitle ?>" alt="<?= $alt ?>" srcset="<?= $srcset ?>" sizes="">
</section>
