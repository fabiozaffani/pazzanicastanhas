<?php get_header(); ?>
<div id="main-index">
  
  <div id="CarrosselWrapper">
     <div id="ControlesCarrossel">
       <a href="#">Esquerda</a>
     </div>
     <div id="Carrossel">
        <ul>
          <?php $destaques = new WP_Query('category_name=Carrossel&showposts=6');
                //Primeiro LOOP para os destaques
                $contador = 0;
                while ( $destaques->have_posts() ) : $destaques->the_post();
                $contador++; 
                ?>
            
            <li>
            	<div class="CarrosselResumo">
                    <h2>
                        <a href="<?php the_permalink();?>">
                            <?php the_title();?>
                        </a>
                    </h2>
                    <?php NewExcerpt(29); ?>
                </div>
                <?php the_post_thumbnail();?>
            </li>
          <?php endwhile;  ?>
        </ul>
      </div> <!-- Fim do #Carrossel -->
  </div>  
  
  <ul id="MainPosts">    

    <?php $principal = new WP_Query('showposts=9&cat=-3');
          // Segundo Loop para os posts 
		  $MainContador = 0;
          while ( $principal->have_posts() ) : $principal->the_post(); 
		  $MainContador++;
		  ?>
    <li <?php if ($MainContador % 2 == 0) echo "class=\"even\"";?>>
      <a href="<?php the_permalink();?>" class="MainLink">
        <h2><?php the_title();?></h2>
        <?php the_post_thumbnail('home-thumbnail');?>
      </a>
	
		<?php NewExcerpt(20); ?>
    </li>      
    
    <?php endwhile; ?>
    
  </ul> <!-- fim do #MainPosts -->
  
</div> <!-- Fim do #main -->

<?php get_footer(); ?>