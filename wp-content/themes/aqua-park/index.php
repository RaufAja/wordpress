<?php get_header(); ?>
<main><section class="page-title"><div class="container"><h1><?php bloginfo('name'); ?></h1></div></section>
<section class="content"><div class="container">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><?php the_excerpt(); ?></article>
<?php endwhile; else: ?><p>Belum ada konten.</p><?php endif; ?>
</div></section></main>
<?php get_footer(); ?>
