    <div id="sidebar">
        
        <div id="FaleConoscoSidebar">
          <a href="contato.php" id="FaleConoscoSidebarLink" >
            <img src="<?php bloginfo('template_directory'); ?>/images/FaleConoscoSidebar.gif" alt="Fale Conosco" title="Fale Conosco"/>
            <span>Fale Conosco</span>
          </a>
        </div>
        
        
        <ul>
          <li class="SideFirst">
            <h2>MAIS INFORMAÇÕES</h2>
            <ul>
            	<?php $SidebarLastPosts = new WP_Query('showposts=8'); 
					  while ( $SidebarLastPosts->have_posts() ) : $SidebarLastPosts->the_post(); 
				?>
	              <li><a href="<?php the_permalink();?>" ><?php the_title(); ?> </a></li>
              <?php endwhile; ?>
            </ul>
          </li>
          <li class="SideSecond">
            <h2>PAZZANI</h2>
            <ul>
              <?php wp_list_pages('title_li=&sort_column=post_modified&sort_order=DESC');  ?>
            </ul>
          </li>
        </ul>
    </div>
