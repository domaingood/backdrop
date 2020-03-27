<?php
/**
 * @file
 * Theme settings file for Basis.
 *
 * Although Basis itself does not provide any settings, we use this file to
 * inform the user that the module supports color schemes if the Color module
 * is enabled.
 */
if (module_exists('color')) {
    $form['header'] = [
        '#type'        => 'fieldset',
        '#title'       => t('Header Settings'),
        '#collapsible' => true,
    ];
    $fields = [
        'header',
        'base',
        'slogan',
        'titleslogan',
        'hovermenu',
        'menutoggle',
    ];
    foreach ($fields as $field) {
        $form['header'][$field] = color_get_color_element('basis', $field, $form);
    }

    $form['general'] = [
        '#type'        => 'fieldset',
        '#title'       => t('General Settings'),
        '#collapsible' => true,
    ];
    $fields = [
        'bg',
        'text',
        'link',
        'borders',
        'formfocusborder',
    ];
    foreach ($fields as $field) {
        $form['general'][$field] = color_get_color_element('basis', $field, $form);
    }

    $form['primary_tabs'] = [
        '#type'        => 'fieldset',
        '#title'       => t('Tabs and Breadcrumb'),
        '#collapsible' => true,
    ];
    $fields = [
        'primarytabs',
        'primarytabstext',
        'buttons',
    ];
    foreach ($fields as $field) {
        $form['primary_tabs'][$field] = color_get_color_element('basis', $field, $form);
    }

    $form['footer'] = [
        '#type'        => 'fieldset',
        '#title'       => t('Footer Settings'),
        '#collapsible' => true,
    ];
    $fields = [
        'footerborder',
        'footer',
        'footertext',
    ];
    foreach ($fields as $field) {
        $form['footer'][$field] = color_get_color_element('basis', $field, $form);
    }
} else {
    $form['color'] = [
        '#markup' => '<p>'.t('This theme supports custom color palettes if the Color module is enabled on the <a href="!url">modules page</a>. Enable the Color module to customize this theme.', ['!url' => url('admin/modules')]).'</p>',
    ];
}
