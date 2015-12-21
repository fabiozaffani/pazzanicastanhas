<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><head profile="http://gmpg.org/xfn/11">

   	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<meta name="robots" content="index,follow,noodp,noydir" />

	<style type="text/css" media="screen">@import url(<?php bloginfo('stylesheet_url'); ?>);</style>

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/pazzanic.js" type="text/javascript" ></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/maskedinput.jquery.min.js" type="text/javascript" ></script>

	<?php wp_head(); ?>

	<script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-5962880-16']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
</head>

<body>


  <div id="wrapper-out">
      <div id="header">
		<h1 class="title"><a href="<?php bloginfo('url');?>" rel="bookmark"><?php bloginfo('name'); ?></a></h1>
		<div id="PazzaniInfo">
   			<p class="PazzaniInfoContato">Atendimento pelo e-mail vendas@amazonbrazilnuts.com.br </p>
            <form id="SearchForm" action="<?php bloginfo('home'); ?>" method="get" >
                <input type="text" value="Procurar..." name="s" id="s" class="CampoBusca" />
                <input type="submit" value="OKI" name="SearchSubmit" id="SearchSubmit" />
            </form>
		</div>
        <ul id="menu" class="clearfix">
        	<li>
            	<a href="<?php bloginfo('url');?>" class="MenuInicio">Inicio</a>
			</li>
			<?php wp_list_pages('title_li=&sort_column=post_modified'); ?>
		</ul>
      </div> <!-- Fim do #header -->

      <div id="container-top"></div>
      <div id="container" class="clearfix">
