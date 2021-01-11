<?php
return array(
    // Site
    'site' => [
        'body_class'        => 'h-full',
        'main_color'        => '#14513F',
        'name'              => 'Site Name',
        'tagline'           => 'Site Tagline'
    ],

    // Page
    'page' => [

        'metadata' => [
            'summary'       => 'Website summary.',
            'og:site_name'  => 'Website name - Website tagline',
            'og:url'        => 'https://www.designinnovations.net/',
            'og:title'      => 'Website',
            'og:description'=> 'Website description.',
            'og:image'      => '/theme/images/icons/open-graph-2400x1200.png',
            'twitter:site'  => '@design_innov',
            'twitter:card'  => 'summary_large_image',
            'fb:admins'     => '1385624584'
        ],

        'visible'   => true,
        'published' => true,
    ],

    'aliases' => [
        'theme://'                  => getenv('SITE')  ? '/theme/' : 'sites/pages-starter/theme/',
        'images://'                 => getenv('SITE') ? 'images/pages/'    : 'sites/pages-starter/images/',
        'src="images/pages-starter/articles/' => getenv('SITE') ? 'src="images/articles/' : 'src="images/pages-starter/articles/',
        '/images/pages-starter/articles/'     => getenv('SITE') ? 'images/articles/' : 'images/pages-starter/articles/',
    ],

    'social' => [ // Enter full URL into each one you want and it will automatically display.
        'accounts' => [
            'facebook'          => 'https://www.facebook.com/learncss', // https://www.facebook.com/custom_name
            'twitter'           => 'https://twitter.com/design_innovat', // https://twitter.com/custom_name
            'linkedin'          => 'https://www.linkedin.com/in/jonathan-shroyer/', // https://www.linkedin.com/in/custom_name
            'pinterest'         => 'https://www.pinterest.com/learncss', // https://www.pinterest.com/custom_name
            'dribbble'          => '', // https://dribbble.com/custom_name
            'github'            => 'https://github.com/learncss', // https://github.com/custom_name
            'instagram'         => 'https://www.instagram.com/design_innovations_llc', // https://www.instagram.com/custom_name
            'tumbler'           => '', // https://custom_name.tumblr.com/
            'vimeo'             => '', // https://vimeo.com/custom_name
            'youtube'           => '', //https://www.youtube.com/c/custom_name
            'tiktok'            => '' //https://www.youtube.com/c/custom_name
        ],
        'options' => [
            'icon-design'        => 'logo-only', // Choose 'logo-only' or 'logo-block'. Logo-block is the logo options within a block or circle generally.
            'icon-color'        => 'site-colors' // Choose 'brand-colors' to use original logos or choose a hex color. Leaving blank will use the text color.
        ]
    ],

    // Google Analytics
    'ga_code' => getenv('SITE') ? 'G-XXXXXXXXXX' : '',

);