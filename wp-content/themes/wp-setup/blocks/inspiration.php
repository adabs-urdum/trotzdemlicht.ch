<?php
  $videoID = get_field('video');
  $showVideo = get_field('showVideo');
  $intro = get_field('intro');
  $links = get_field('links');
  $imgTxtCombo = get_field('imgTxtCombo');
?>

<section id="inspiration" class="inspiration">

  <?php if($showVideo): ?>
    <div class="inspiration__videoWrapper">
      <div class="inspiration__video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $videoID ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <canvas width="16" height="9"></canvas>
      </div>
    </div>
  <?php endif; ?>

  <div class="inspiration__contentWrapper">
    <div class="inspiration__content">
      <span class="sectionLabel sectionLabel--inspiration"><?= pll__('Inspiration & Links') ?></span>
      <div class="inspiration__intro">
        <?= $intro ?>
      </div>

      <div class="inspiration__links">
        <?php foreach($links as $kLink => $linkObj): ?>
          <?php
            $category = $linkObj['category'];
            $endlinks = $linkObj['links'];
          ?>
          <div class="inspiration__row">
            <input  class="inspiration__checkbox" type="checkbox" id="row<?=$kLink ?>">
            <label for="row<?= $kLink ?>" class="inspiration__category"><?= $category ?></label>
            <div class="inspiration__linklist">
              <div class="inspiration__doubleWrapper">
                <?php foreach($endlinks as $k => $link): ?>
                  <?php
                    $link = $link['link'];
                    $linkTitle = $link['title'];
                    $linkUrl = $link['url'];
                    $linkTarget = $link['target'];
                  ?>
                  <?php if($k != 0 && ($k + 1) % 2): ?>
                    </div>
                    <div class="inspiration__doubleWrapper">
                  <?php endif; ?>
                  <div class="inspiration__link">
                    <a class="inspiration__anchor" href="<?= $linkUrl ?>" rel="noopener" target="<?= $linkTarget ?>" title="<?= $linkTitle ?>">
                      <span class="inspiration__iconWrapper">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <line x1="0.646447" y1="23.6464" x2="23.6464" y2="0.646446" stroke="#2B5F63"/>
                          <line x1="23.5" y1="2.18557e-08" x2="23.5" y2="12" stroke="#2B5F63"/>
                          <line x1="24" y1="0.5" x2="12" y2="0.499999" stroke="#2B5F63"/>
                        </svg>
                        <canvas width="1" height="1"></canvas>
                      </span>
                      <span>
                        <?= $linkTitle ?>
                      </span>
                    </a>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="inspiration__imgTxtCombo">
        <?php
          $img = $imgTxtCombo['image'];
          $caption = $img['caption'];
          $src = $img['sizes']['L'];
          $srcset = wp_get_attachment_image_srcset($img['ID']);
          $alt = $img['alt'] ? $img['alt'] : $img['name'];
          $imgTitle = $img['title'] ? $img['title'] : $img['name'];
          $srcset = wp_get_attachment_image_srcset($img['ID']);
          $text = $imgTxtCombo['text'];
        ?>
          <div class="inspiration__comboImgWrapper">
            <img class="inspiration__comboImg" loading="lazy" src="<?= $src ?>" title="<?= $imgTitle ?>" alt="<?= $alt ?>" srcset="<?= $srcset ?>" sizes="">
          </div>
          <div class="inspiration__comboTxtWrapper">
            <?= $text ?>
          </div>
      </div>
    </div>
  </div>
</section>
