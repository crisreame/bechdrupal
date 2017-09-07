<?php

/**
 * @file
 * Theme settings form.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function jvseven_form_system_theme_settings_alter(&$form, &$form_state) {
  $form['jvseven'] = [
    '#type' => 'details',
    '#title' => t('Extra'),
    '#open' => TRUE,
  ];

  $form['jvseven']['container_width'] = [
    '#type' => 'number',
    '#title' => t('Container width'),
    '#min' => 680,
    '#max' => 1800,
    '#step' => 120,
    '#size' => 30,
    '#default_value' => theme_get_setting('container_width'),
    '#description' => t('The maximum width of the content area in pixels.'),
  ];

  $form['jvseven']['font_size'] = [
    '#type' => 'number',
    '#title' => t('Font size'),
    '#min' => 8,
    '#max' => 8000,
    '#default_value' => theme_get_setting('font_size'),
  ];

  $fonts[''] = t('- Default -');

  $fonts['Standard'] = [
    'impact' => 'Impact',
    'palatino_linotype' => 'Palatino Linotype',
    'tahoma' => 'Tahoma',
    'century-gothic' => 'Century Gothic',
    'lucida-sans-unicode' => 'lucida Sans Unicode',
    'arial-black' => 'Arial Black',
    'times-new-roman' => 'Times New Roman',
    'arial-warrow' => 'Arial Narrow',
    'verdana' => 'Verdana',
    'copperplate-gothic_light' => 'Copperplate Gothic Light',
    'lucida-console' => 'Lucida Console',
    'gill-sans' => 'Gill Sans',
    'trebuchet-ms' => 'Trebuchet MS',
    'courier-new' => 'Courier New',
    'arial' => 'Arial',
    'georgia' => 'Georgia',
  ];

  $fonts['Google fonts'] = [
    'ubuntu' => 'Ubuntu ',
    'open-sans' => 'Open Sans',
    'josefin-slab' => 'Josefin Slab',
    'pt-sans' => 'PT Sans',
    'roboto' => 'Roboto',
    'source-sans-pro' => 'Sanc Pro',
    'exo' => 'Exo',
  ];
  
  $form['jvseven']['font_family'] = [
    '#type' => 'select',
    '#title' => t('Font family'),
    '#options' => $fonts,
    '#default_value' => theme_get_setting('font_family'),
  ];
  
  
  $backgrounds[''] = t('- Default -');
  
  //http://www.designbolts.com/2013/02/04/50-free-grey-seamless-patterns-for-website-background/
  $backgrounds['Standard'] = [
      'bg' => 'Standard background',
      'knitted_netting' => 'Knitted netting',
      'always_grey' => 'Always grey',
      'subtle_zebra_3d' => 'Subtle zebra 3d',
      'vaio_hard_edge' => 'Vaio Hard Edge',
      'wavecute' => 'Wavecute',
      'wide_rectangles' => 'Wide rectangles',
	  'escheresque' => 'Escheresque',
	  'white_carbonfiber' => 'White carbonfiber',
	  'embossed_paper' => 'Embossed paper',	  
  ];
  $form['jvseven']['background_image'] = [
    '#type' => 'select',
    '#title' => t('Background image'),
    '#options' => $backgrounds,
    '#default_value' => theme_get_setting('background_image'),
  ];
	  
}
