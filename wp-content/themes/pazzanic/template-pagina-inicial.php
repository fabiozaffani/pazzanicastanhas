<?php
/*
Template Name: Pagina Inicial
*/
?>

<?php get_header(); ?>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        	<?php if ($data = get_post_meta( $post->ID, 'key', true )):  ?>
            
            <img src="<?php echo $data[ 'imagem1']; ?>" alt="<?php echo $data[ 'descricao1']; ?>" title="<?php echo $data[ 'descricao1']; ?>" height="<?php echo $data[ 'altura1']; ?>" width="<?php echo $data[ 'largura1']; ?>" />
            <img src="<?php echo $data[ 'imagem2']; ?>" alt="<?php echo $data[ 'descricao2']; ?>" title="<?php echo $data[ 'descricao2']; ?>" height="<?php echo $data[ 'altura2']; ?>" width="<?php echo $data[ 'largura2']; ?>" />
            <img src="<?php echo $data[ 'imagem3']; ?>" alt="<?php echo $data[ 'descricao3']; ?>" title="<?php echo $data[ 'descricao3']; ?>" height="<?php echo $data[ 'altura3']; ?>" width="<?php echo $data[ 'largura3']; ?>" />

            <?php endif; ?>
        <?php edit_post_link('Editar', '<p class="editar"', '</p>'); ?>
		<h1><?php the_title(); ?></h1>
       
        <?php
			  echo get_option('omr_adsense');
		?>
        
        <?php the_content(); ?>
            
        <?php endwhile; else: ?>
            
        <p><?php _e('Nada encontrado...'); ?></p>
        
        <?php endif; ?>
       
        <a href="#top" rel="nofollow">Topo &uarr;</a>
        
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>