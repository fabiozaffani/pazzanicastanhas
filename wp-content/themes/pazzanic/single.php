<?php get_header(); ?>

  
  
  <div id="main">
    <?php if (function_exists('breadcrumb')) breadcrumb(); ?>  
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  

		  <h1><?php the_title(); ?></h1>
        
        <?php echo get_option('omr_adsense'); ?>
        
        <?php the_content(); ?>
            
        <?php endwhile; else: ?>
            
        <p><?php _e('Nada encontrado...'); ?></p>
        
        <?php endif; ?>
       
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>