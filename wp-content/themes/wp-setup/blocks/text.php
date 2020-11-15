<?php
  $text = get_field( 'text' );
  $layout = get_field('layout');
?>

<section class="text text--<?= $layout ?>">
  <div class="text__wrapper">
    <?= $text ?>
  </div>
</section>
