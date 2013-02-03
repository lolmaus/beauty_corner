<?php

function beauty_corner_preprocess_html(&$vars) {


  $libraries = array();

  $libraries['nwmatcher'] = array(
    'element' => array(
      '#tag' => 'script',
      '#value' => '',
      '#attributes' => array(
        'src' => '//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js',
      ),
    ),
  );
  $libraries['selectivizr'] = array(
    'element' => array(
      '#tag' => 'script',
      '#value' => '',
      '#attributes' => array(
        'src' => '//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js',
      ),
    ),
  );
  $libraries['respond_js'] = array(
    'element' => array(
      '#tag' => 'script',
      '#value' => '',
      '#attributes' => array(
        'src' => '//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js',
      ),
    ),
  );

  foreach ($libraries as $key => $value) {
    $shimset = theme_get_setting("boron_sulfide_{$key}");
    $script = theme('html_tag', $value);

    if ($shimset == 1) { $vars["shims"][$key] = "\n<!--[if lt IE 9]>\n" . $script . "<![endif]-->\n"; }
  }

}