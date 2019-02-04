<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body>
    <?php 
    wp_nav_menu( array( 
        'fallback' => 'false',
        'theme_location' => 'primary',
        'walker' => new Custom_Walker_Menu()
        ) ); ?>
</html>


