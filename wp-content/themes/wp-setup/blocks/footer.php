<?php
  $sponsors = get_field('sponsors');
  $contact = get_field('contact');
  $downloads = geT_field('downloads');
?>

<footer class="footer">
  <div class="footer__sponsors">
    <h5>Eine Aktion von:</h5>
    <?php foreach($sponsors as $sponsor): ?>
      <?php
        $img = $sponsor['logo'];
        $caption = $img['caption'];
        $src = $img['sizes']['L'];
        $srcset = wp_get_attachment_image_srcset($img['ID']);
        $alt = $img['alt'] ? $img['alt'] : $img['name'];
        $imgTitle = $img['title'] ? $img['title'] : $img['name'];
        $srcset = wp_get_attachment_image_srcset($img['ID']);

        $link = $sponsor['link'];
      ?>
      <div class="footer__logo">
        <a href="<?= $link['url'] ?>">
          <img class="footer__img" loading="lazy" src="<?= $src ?>" title="<?= $imgTitle ?>" alt="<?= $alt ?>" srcset="<?= $srcset ?>" sizes="">
        </a>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="footer__contact">
    <?= $contact ?>
  </div>

  <div class="footer__downloads">
    <?= $downloads ?>
  </div>

  <div class="footer__logoWrapper">
    <h1 class="footer__logo"><?= pll__('Trotzdem') ?><br /><?= pll__('Licht') ?></h1>
  </div>
</footer>
