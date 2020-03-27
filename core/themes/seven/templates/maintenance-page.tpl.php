<!DOCTYPE html>
<html<?php echo backdrop_attributes($html_attributes); ?>>
  <head>
    <?php echo backdrop_get_html_head(); ?>
    <title><?php echo $head_title; ?></title>
    <?php echo backdrop_get_css(); ?>
    <?php echo backdrop_get_js(); ?>
  </head>
  <body class="<?php echo implode(' ', $classes); ?>">
    <div id="page">

    <?php if ($sidebar) { ?>
      <div id="sidebar" class="sidebar">
        <?php if ($logo) { ?>
          <img id="logo" src="<?php echo $logo ?>" alt="<?php echo $site_name ?>" />
        <?php } ?>
        <?php echo $sidebar ?>
      </div>
    <?php } ?>

    <main id="content" class="clearfix">
      <?php if ($title) { ?><h1 class="page-title"><?php echo $title; ?></h1><?php } ?>
      <?php if ($messages) { ?>
        <div id="console"><?php echo $messages; ?></div>
      <?php } ?>
      <?php echo $content; ?>
    </main>
  </div>

  <?php if (!empty($footer)) { ?>
    <footer role="contentinfo">
      <?php echo $footer; ?>
    </footer>
  <?php } ?>

  </body>
</html>
