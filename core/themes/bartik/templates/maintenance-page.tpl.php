<?php
/**
 * @file
 * Implementation to display a single Backdrop page while offline.
 *
 * All the available variables are mirrored in page.tpl.php.
 *
 * @see template_preprocess()
 * @see template_preprocess_maintenance_page()
 * @see bartik_process_maintenance_page()
 */
?>
<!DOCTYPE html>
<html<?php echo backdrop_attributes($html_attributes); ?>>
<head>
  <?php echo backdrop_get_html_head(); ?>
  <title><?php echo $head_title; ?></title>
  <?php echo backdrop_get_css(); ?>
  <?php echo backdrop_get_js(); ?>
</head>
<body class="<?php echo implode(' ', $classes); ?>"<?php echo backdrop_attributes($attributes); ?>>

  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php echo t('Skip to main content'); ?></a>
  </div>

  <div id="page-wrapper"><div id="page">

    <header id="header" role="banner">
      <?php if ($site_name || $site_slogan) { ?>
        <div id="name-and-slogan">
          <?php if ($site_name) { ?>
            <div class="site-name">
              <?php echo $site_name; ?>
            </div>
          <?php } ?>
          <?php if ($site_slogan) { ?>
            <div class="site-slogan">
              <?php echo $site_slogan; ?>
            </div>
          <?php } ?>
        </div> <!-- /#name-and-slogan -->
      <?php } ?>
    </header>

    <main id="content" class="column" role="main">
      <a id="main-content"></a>
      <?php if ($title) { ?><h1 class="page-title"><?php echo $title; ?></h1><?php } ?>
      <?php echo $content; ?>
      <?php if ($messages) { ?>
        <div id="messages">
          <?php echo $messages; ?>
        </div>
      <?php } ?>
    </main>

  </div></div> <!-- /#page, /#page-wrapper -->

</body>
</html>
