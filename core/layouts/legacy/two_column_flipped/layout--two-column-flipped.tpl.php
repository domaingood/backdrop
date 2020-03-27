<?php
/**
 * @file
 * Template for a 2 column flipped layout.
 *
 * This template provides a two column layout with the sidebar on the left and a
 * roughly 60/40 split.
 *
 * Variables:
 * - $title: The page title, for use in the actual HTML content.
 * - $messages: Status and error messages. Should be displayed prominently.
 * - $tabs: Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
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
 *   - $content['sidebar']
 *   - $content['footer']
 */
?>
<div class="layout--two-column-flipped layout-legacy <?php echo implode(' ', $classes); ?>"<?php echo backdrop_attributes($attributes); ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php echo t('Skip to main content'); ?></a>
  </div>

  <?php if ($content['header']) { ?>
    <header class="l-header" role="banner" aria-label="<?php echo t('Site header'); ?>">
      <?php echo $content['header']; ?>
    </header>
  <?php } ?>

  <?php if ($content['top']) { ?>
    <div class="l-top">
      <?php echo $content['top']; ?>
    </div>
  <?php } ?>

  <?php if ($messages) { ?>
    <div class="l-messages">
      <?php echo $messages; ?>
    </div>
  <?php } ?>

  <div class="l-container">
    <main class="l-content" role="main">
      <a id="main-content"></a>
      <?php echo render($title_prefix); ?>
      <?php if ($title) { ?>
        <h1 class="page-title">
          <?php echo $title; ?>
        </h1>
      <?php } ?>
      <?php echo render($title_suffix); ?>

      <?php if ($tabs) { ?>
        <div class="tabs">
          <?php echo $tabs; ?>
        </div>
      <?php } ?>

      <?php echo $action_links; ?>
      <?php echo $content['content']; ?>
    </main>

    <?php if ($content['sidebar']) { ?>
    <div class="l-sidebar">
      <?php echo $content['sidebar']; ?>
    </div>
    <?php } ?>
  </div>

  <?php if ($content['footer']) { ?>
    <footer class="l-footer">
      <?php echo $content['footer']; ?>
    </footer>
  <?php } ?>
</div>
