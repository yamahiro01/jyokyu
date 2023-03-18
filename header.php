<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php bloginfo('name'); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="robots" content="noindex">
<!-- CSS -->
<!-- WordPressではhead内でCSSを読み込まない（functions.php内で行う） -->

<?php wp_head(); ?>