<?php
/**
 * @file
 * Template for the Boxton layout.
 *
 * Variables:
 * - $title: The page title, for use in the actual HTML content.
 * - $messages: Status and error messages. Should be displayed prominently.
 * - $tabs: Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node.)
 * - $action_links: Array of actions local to the page, such as 'Add menu' on
 *   the menu administration interface.
 * - $classes: Array of CSS classes to be added to the layout wrapper.
 * - $attributes: Array of additional HTML attributes to be added to the layout
 *     wrapper. Flatten using backdrop_attributes().
 * - $content: An array of content, each item in the array is keyed to one
 *   region of the layout. This layout supports the following sections:
 *   - $content['header']
 *   - $content['top']
 *   - $content['content']
 *   - $content['bottom']
 *   - $content['footer']
 */
?>
<div class="layout--boxton <?php echo implode(' ', $classes); ?>"<?php echo backdrop_attributes($attributes); ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php echo t('Skip to main content'); ?></a>
  </div>

  <?php if ($content['header']) { ?>
    <header class="l-header" role="banner" aria-label="<?php echo t('Site header'); ?>">
      <div class="l-header-inner container container-fluid">
        <?php echo $content['header']; ?>
      </div>
    </header>
  <?php } ?>

  <div class="l-wrapper">
    <div class="l-wrapper-inner container container-fluid">

      <?php if ($messages) { ?>
        <div class="l-messages" role="status" aria-label="<?php echo t('Status messages'); ?>">
          <?php echo $messages; ?>
        </div>
      <?php } ?>

      <div class="l-page-title">
        <a id="main-content"></a>
        <?php echo render($title_prefix); ?>
        <?php if ($title) { ?>
          <h1 class="page-title"><?php echo $title; ?></h1>
        <?php } ?>
        <?php echo render($title_suffix); ?>
      </div>

      <?php if ($tabs) { ?>
        <nav class="tabs" role="tablist" aria-label="<?php echo t('Admin content navigation tabs.'); ?>">
          <?php echo $tabs; ?>
        </nav>
      <?php } ?>

      <?php echo $action_links; ?>

      <?php if (!empty($content['top'])) { ?>
        <div class="l-top">
          <?php echo $content['top']; ?>
        </div>
      <?php } ?>

      <div class="l-content" role="main" aria-label="<?php echo t('Main content'); ?>">
        <?php echo $content['content']; ?>
      </div>

      <?php if (!empty($content['bottom'])) { ?>
        <div class="l-bottom">
          <?php echo $content['bottom']; ?>
        </div>
      <?php } ?>

    </div><!-- /.l-wrapper-inner -->
  </div><!-- /.l-wrapper -->

  <?php if ($content['footer']) { ?>
    <footer class="l-footer">
      <div class="l-footer-inner container container-fluid">
        <?php echo $content['footer']; ?>
      </div><!-- /.container -->
    </footer>
  <?php } ?>
</div><!-- /.layout--boxton -->
