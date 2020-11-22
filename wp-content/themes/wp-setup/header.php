<!DOCTYPE html>
<html <?php language_attributes(); ?> class="">
<head>

<!-- adabs.ch -->

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />


<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-76879621-3"></script> -->
<!-- <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-76879621-3', { 'anonymize_ip': true });
</script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-2092620-46', 'auto');
</script> -->


<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<span class="bgGradient"></span>

<header class="header" id="header">

  <div class="header__content">
    <nav class="header__nav">
      <div>
        <a href="#otherxmas" class="header__anchor"><?= pll__('Andere Weihnachten') ?></a>
      </div>
      <div class="header__logoWrapper">
        <h1 class="header__logo"><?= pll__('Trotzdem') ?><br /><?= pll__('Licht') ?></h1>
      </div>
      <div>
        <a href="#inspiration" class="header__anchor"><?= pll__('Inspiration & Links') ?></a>
      </div>
    </nav>
    <ul class="header__langSwitch">
      <?php
        pll_the_languages([
          'display_names_as' => 'name',
          'hide_current' => false,
          'hide_if_no_translation' => false,
          'hide_if_empty' => false
        ]);
      ?>
    </ul>
  </div>

</header>
