<?php
/**
 * @file
 * Template for a complex 3-3-4 column layout.
 *
 * This template mimics the display of the legacy "Bartik" layout, which
 * includes responsive and collapsible columns.
 *
 * Variables:
 * - $title: The page title, for use in the actual HTML content.
 * - $messages: Status and error messages. Should be displayed prominently.
 * - $tabs: Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links: Array of actions local to the page, such as 'Add menu' on
 *   the menu administration interface.
 * - $classes: Array of CSS classes to be added to the layout wrapper.
 * - $attributes: A string of attributes to be added to the layout wrapper.
 * - $content: An array of content, each item in the array is keyed to one
 *   region of the layout. This layout supports the following sections:
 *   - $content['header']
 *   - $content['top']
 *   - $content['content']
 *   - $content['sidebar_first']
 *   - $content['sidebar_second']
 *   - $content['triptych_first']
 *   - $content['triptych_middle']
 *   - $content['triptych_last']
 *   - $content['footer_firstcolumn']
 *   - $content['footer_secondcolumn']
 *   - $content['footer_thirdcolumn']
 *   - $content['footer_fourthcolumn']
 *   - $content['footer']
 */
?>
<div class="layout--three-three-four-column layout-legacy <?php echo implode(' ', $classes); ?>"<?php echo backdrop_attributes($attributes); ?>>
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
      <?php echo $content['content'] ? $content['content'] : '&nbsp;'; ?>
    </main>

    <?php if ($content['sidebar_first']) { ?>
      <div class="l-sidebar-first l-sidebar">
        <?php echo $content['sidebar_first']; ?>
      </div>
    <?php } ?>

    <?php if ($content['sidebar_second']) { ?>
      <div class="l-sidebar-second l-sidebar">
        <?php echo $content['sidebar_second']; ?>
      </div>
    <?php } ?>
  </div>

  <?php if ($content['triptych_first'] || $content['triptych_middle'] || $content['triptych_last']) { ?>
    <div class="l-triptych">
      <div class="l-triptych-first">
        <?php echo $content['triptych_first']; ?>
      </div>
      <div class="l-triptych-middle">
        <?php echo $content['triptych_middle']; ?>
      </div>
      <div class="l-triptych-last">
        <?php echo $content['triptych_last']; ?>
      </div>
    </div>
  <?php } ?>

  <?php if ($content['footer'] || $content['footer_firstcolumn'] || $content['footer_secondcolumn'] || $content['footer_thirdcolumn'] || $content['footer_fourthcolumn']) { ?>
    <div class="l-footer-wrapper">
      <?php if ($content['footer_firstcolumn'] || $content['footer_secondcolumn'] || $content['footer_thirdcolumn'] || $content['footer_fourthcolumn']) { ?>
        <div class="l-footer-columns">
          <div class="l-footer-first-column">
            <?php echo $content['footer_firstcolumn']; ?>
          </div>
          <div class="l-footer-second-column">
            <?php echo $content['footer_secondcolumn']; ?>
          </div>
          <div class="l-footer-third-column">
            <?php echo $content['footer_thirdcolumn']; ?>
          </div>
          <div class="l-footer-fourth-column">
            <?php echo $content['footer_fourthcolumn']; ?>
          </div>
        </div>
      <?php } ?>

      <?php if ($content['footer']) { ?>
        <footer class="l-footer">
          <?php echo $content['footer']; ?>
        </footer>
      <?php } ?>
    </div>
  <?php } ?>
</div>
