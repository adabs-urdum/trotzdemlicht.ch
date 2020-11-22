<?php
  $intro = get_field('intro');
  $ideas = get_field('ideas');
?>

<section class="otherxmas">
  <span id="otherxmas" class="sectionLabel"><?= pll__('Andere Weihnachten') ?></span>
  <div class="otherxmas__intro">
    <?= $intro ?>
  </div>
  <div class="otherxmas__ideas">
    <?php foreach($ideas as $idea): ?>
      <?php
        $text = $idea['text'];

        $img = $idea['image'];
        $caption = $img['caption'];
        $src = $img['sizes']['L'];
        $srcset = wp_get_attachment_image_srcset($img['ID']);
        $alt = $img['alt'] ? $img['alt'] : $img['name'];
        $imgTitle = $img['title'] ? $img['title'] : $img['name'];
        $srcset = wp_get_attachment_image_srcset($img['ID']);
      ?>
      <div class="otherxmas__idea">
        <div class="otherxmas__imgWrapper">
          <img class="otherxmas__img" loading="lazy" src="<?= $src ?>" title="<?= $imgTitle ?>" alt="<?= $alt ?>" srcset="<?= $srcset ?>" sizes="">
        </div>
        <div class="otherxmas__txtWrapper">
          <?= $text ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
