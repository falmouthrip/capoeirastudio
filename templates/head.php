<head>
	<title><?php bloginfo( 'name' ); ?></title>

	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta name="author" content="Quilombola Engineering">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">

	<!-- Twitter Card data -->
	<meta name="twitter:card" value="summary">

	<!-- Open Graph data -->
	<meta property="og:title" content="<?php bloginfo( 'name' ); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="https://s3.amazonaws.com/www-falmouth-rip/rip-icon-1600x1600px.png" />
	<meta property="og:url" content="<?php echo get_site_url(); ?>" />
	<meta property="og:description" content="<?php bloginfo( 'description' ); ?>" />

	<!-- Custom Fonts -->
	<link href='https://fonts.googleapis.com/css?family=GFS+Didot' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>


	<!-- FAVICON.ICO -->
	<link rel="shortcut icon" href="https://s3.amazonaws.com/www-falmouth-rip/rip-icon-1600x1600px.png" />

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>
