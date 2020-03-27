<?php
/**
 * @file
 * Template for the Simmons layout.
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
 *   - $content['sidebar']
 *   - $content['sidebar2']
 *   - $content['third1']
 *   - $content['third2']
 *   - $content['third3']
 *   - $content['quarter1']
 *   - $content['quarter2']
 *   - $content['quarter3']
 *   - $content['quarter4']
 *   - $content['bottom']
 *   - $content['footer']
 */
?>
<div class="layout--simmons <?php echo implode(' ', $classes); ?>"<?php echo backdrop_attributes($attributes); ?>>
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

      <div class="l-middle row">
        <main class="l-content col-md-6 col-md-push-3" role="main" aria-label="<?php echo t('Main content'); ?>">
          <?php echo $content['content']; ?>
        </main>
        <div class="l-sidebar l-sidebar-first col-md-3 col-md-pull-6">
          <?php echo $content['sidebar']; ?>
        </div>
        <div class="l-sidebar l-sidebar-second col-md-3">
          <?php echo $content['sidebar2']; ?>
        </div>
      </div><!-- /.l-middle -->

      <?php if (!empty($content['bottom'])) { ?>
        <div class="l-bottom">
          <?php echo $content['bottom']; ?>
        </div>
      <?php } ?>

    </div><!-- /.l-wrapper-inner -->
  </div><!-- /.l-wrapper -->

  <?php if ($content['third1'] || $content['third2'] || $content['third3']) { ?>
    <div class="l-triptych-wrapper">
      <div class="l-triptych container container-fluid">
        <div class="l-thirds row">
          <div class="l-triptych-first l-thirds-region col-md-4">
            <?php echo $content['third1']; ?>
          </div>
          <div class="l-triptych-middle l-thirds-region col-md-4">
            <?php echo $content['third2']; ?>
          </div>
          <div class="l-triptych-last l-thirds-region col-md-4">
            <?php echo $content['third3']; ?>
          </div>
        </div><!-- /.l-thirds -->
      </div><!-- /.l-triptych -->
    </div><!-- /.l-triptych-wrapper -->
  <?php } ?>

  <?php if ($content['footer'] || $content['quarter1'] || $content['quarter2'] || $content['quarter3'] || $content['quarter4']) { ?>
    <div class="l-footer-wrapper">
      <div class="l-footer-inner container container-fluid">
        <?php if ($content['quarter1'] || $content['quarter2'] || $content['quarter3'] || $content['quarter4']) { ?>
          <div class="l-footer-columns l-quarters row">
            <div class="l-footer-first-column l-quarters-region col-md-3">
              <?php echo $content['quarter1']; ?>
            </div>
            <div class="l-footer-second-column l-quarters-region col-md-3">
              <?php echo $content['quarter2']; ?>
            </div>
            <div class="l-footer-third-column l-quarters-region col-md-3">
              <?php echo $content['quarter3']; ?>
            </div>
            <div class="l-footer-fourth-column l-quarters-region col-md-3">
              <?php echo $content['quarter4']; ?>
            </div>
          </div><!-- /.l-quarters -->
        <?php } ?>

        <?php if ($content['footer']) { ?>
          <footer class="l-footer">
            <?php echo $content['footer']; ?>
          </footer>
        <?php } ?>
      </div><!-- /.l-footer-inner -->
    </div><!-- /.l-footer-wrapper -->
  <?php } ?>
</div><!-- /.layout--simmons -->
