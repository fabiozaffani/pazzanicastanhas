<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
  $query_split = explode("=", $string);
  $search_query[$query_split[0]] = $query_split[1];
} // foreach

$search = new WP_Query($search_query);

get_header(); ?>
  <div id="main">
      <?php if (function_exists('breadcrumb')) breadcrumb(); ?>  

        <h1 class="TitleCategory round">
          Resultados para a busca por "<strong><?php the_search_query(); ?></strong>"
        </h1>
        <ul>
        <?php
          if ($search->have_posts()) {
            $contador = 0;
            $inicial = 3;
            while($search->have_posts()) : $search->the_post();
            $data = get_post_meta( $post->ID, 'key', true ); 
            $contador++;
            ?>
                 <li class="PostContent round <?php if ($contador%$inicial == 0) : echo 'last'; endif; ?>">
                  <h2 class="title">
                    <a href="<?php the_permalink(); ?>" rel="bookmark">
                      <?php the_title(); ?>
                    </a>
                  </h2>
                  <?php echo NewExcerpt(40); ?>
                </li>
              <?php endwhile; ?>
		<?php } else { ?>
        <h1>
          Sua busca não retornou nenhum resultado
        </h1> 
      <?php }; ?>
      </ul>
    </div> <!-- fim do #main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>