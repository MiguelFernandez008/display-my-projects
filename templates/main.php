<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display My projects</title>
    <style>
        <?php echo apply_filters( 'dmyp_variables_css', ''); ?>
        <?php echo apply_filters( 'dmyp_core_css', ''); ?>
    </style>
    <link rel="preload" href="<?php echo apply_filters( 'dmyp_app_css', '' ); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?php echo apply_filters( 'dmyp_app_css', '' ); ?>"></noscript>
</head>
<body <?php body_class(); ?>>
    
</body>
</html>