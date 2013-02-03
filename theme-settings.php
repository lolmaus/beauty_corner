<?php

  function abrk_form_system_theme_settings_alter(&$form, &$form_state) {

    $form['libraries']['#description'] = "These libraries are applied only for IE 8 and older";

    $form['libraries']['boron_sulfide_nwmatcher'] = array(
      '#type'          => 'checkbox',
      '#title'         => t('NWMatcher'),
      '#default_value' => theme_get_setting('boron_sulfide_nwmatcher'),
      '#description'   => t('Add NWMatcher to header (required by selectivizr)')
    );

    $form['libraries']['boron_sulfide_selectivizr'] = array(
      '#type'          => 'checkbox',
      '#title'         => t('selectivizr'),
      '#default_value' => theme_get_setting('boron_sulfide_selectivizr'),
      '#description'   => t('Add selectivizr shim to header')
    );

    $form['libraries']['boron_sulfide_respond_js'] = array(
      '#type'          => 'checkbox',
      '#title'         => t('Respond.js'),
      '#default_value' => theme_get_setting('boron_sulfide_respond_js'),
      '#description'   => t('Add Respond.js shim to header')
    );

  }
