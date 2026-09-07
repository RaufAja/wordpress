<?php if (!defined('ABSPATH')) exit; ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
<div class="container nav">
<a class="logo" href="<?php echo esc_url(home_url('/')); ?>">🌊 AQUA<span>PARK</span></a>
<button class="menu-toggle" aria-label="Buka menu">☰</button>
<nav class="menu" aria-label="Menu utama">
<a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
<a href="<?php echo esc_url(home_url('/tiket')); ?>">Tiket</a>
<a href="<?php echo esc_url(home_url('/fasilitas')); ?>">Fasilitas</a>
<a href="<?php echo esc_url(home_url('/galeri')); ?>">Galeri</a>
<a href="<?php echo esc_url(home_url('/kontak')); ?>">Kontak</a>
<a class="btn" href="<?php echo esc_url(home_url('/booking')); ?>">Pesan Tiket</a>
</nav>
</div>
</header>
