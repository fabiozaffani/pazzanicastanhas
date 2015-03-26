<?php
/*
Template Name: Mapa do Site
*/
?>

<?php get_header(); ?>
        
  <div id="main">
    <?php if (function_exists('breadcrumb')) breadcrumb(); ?>
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <h1><?php the_title(); ?></h1>
      
    <h3><?php _e('Artigos', 'default'); ?></h3>
      <ul>
        <?php wp_get_archives('type=alpha'); ?>
      </ul>
    <h3><?php _e('P&aacute;ginas', 'default'); ?></h3>
      <ul>
        <?php wp_list_pages('sort_column=post_title&title_li='); ?>
      </ul>
    <?php endwhile; endif; ?>
  </div> <!-- Fim do #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>