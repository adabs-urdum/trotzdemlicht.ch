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

  <div class="footer__socialContainer">
    <h3 class="footer__socialTitle"><?= pll__('Teilen') ?></h3>
    <div class="footer__socialIcons">
      <a class="footer__socialWrapper" href="https://www.facebook.com/sharer/sharer.php?u=https://trotzdemlicht.ch" target="_blank" rel="noopener">
        <canvas width="38" height="38"></canvas>
        <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M38 19C38 8.50547 29.4945 0 19 0C8.50547 0 0 8.50547 0 19C0 29.4945 8.50547 38 19 38C19.1113 38 19.2227 38 19.334 37.9926V23.2082H15.252V18.4508H19.334V14.9477C19.334 10.8879 21.8129 8.67617 25.4348 8.67617C27.1715 8.67617 28.6633 8.80234 29.0938 8.86172V13.107H26.6C24.6332 13.107 24.2473 14.0422 24.2473 15.4152V18.4434H28.9602L28.3441 23.2008H24.2473V37.2652C32.1887 34.9867 38 27.6762 38 19Z" fill="white"/>
        </svg>
      </a>
      <a class="footer__socialWrapper" href="https://twitter.com/intent/tweet?url=https://trotzdemlicht.ch&text=" target="_blank" rel="noopener">
        <canvas width="38" height="38"></canvas>
        <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M19 0C8.50819 0 0 8.50819 0 19C0 29.4918 8.50819 38 19 38C29.4918 38 38 29.4918 38 19C38 8.50819 29.4918 0 19 0ZM27.6752 14.8142C27.6836 15.0012 27.6877 15.189 27.6877 15.3778C27.6877 21.1405 23.3012 27.7856 15.2795 27.7859H15.2798H15.2795C12.8167 27.7859 10.5249 27.064 8.59488 25.827C8.93611 25.8673 9.28343 25.8873 9.6351 25.8873C11.6784 25.8873 13.5588 25.1903 15.0516 24.0205C13.1425 23.9851 11.5329 22.7243 10.9774 20.9914C11.2433 21.0425 11.5167 21.0703 11.797 21.0703C12.1951 21.0703 12.5807 21.0167 12.9471 20.9166C10.9516 20.5171 9.44839 18.7536 9.44839 16.6418C9.44839 16.6221 9.44839 16.6044 9.44897 16.5862C10.0366 16.9129 10.7087 17.1095 11.4242 17.1315C10.2532 16.3502 9.48347 15.0145 9.48347 13.5014C9.48347 12.7024 9.69946 11.9539 10.074 11.3094C12.2246 13.9482 15.4387 15.6836 19.0632 15.866C18.9884 15.5465 18.9498 15.2137 18.9498 14.8716C18.9498 12.4641 20.903 10.5109 23.3114 10.5109C24.5658 10.5109 25.6988 11.0412 26.4946 11.8889C27.4882 11.6929 28.4211 11.33 29.2639 10.8304C28.9378 11.8483 28.2466 12.7024 27.3461 13.2425C28.2283 13.137 29.0691 12.903 29.8504 12.5557C29.2668 13.4304 28.5267 14.1987 27.6752 14.8142Z" fill="white"/>
        </svg>
      </a>
    </div>
  </div>

  <div class="footer__logoWrapper">
    <h1 class="footer__logo"><?= pll__('Trotzdem') ?><br /><?= pll__('Licht') ?></h1>
  </div>
</footer>
