<?
$options = get_fields('options');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <link rel="preload" href="<?=get_template_directory_uri()?>/webfonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?=get_template_directory_uri()?>/webfonts/PFDinDisplayPro-Bold.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="<?=get_template_directory_uri()?>/webfonts/PFDinDisplayPro-Light.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="<?=get_template_directory_uri()?>/webfonts/PFDinDisplayPro-Medium.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="<?=get_template_directory_uri()?>/webfonts/StartC.woff" as="font" type="font/woff" crossorigin>

    <?php wp_head(); ?>
</head>
<body>
