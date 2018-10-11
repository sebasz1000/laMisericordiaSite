<?php
get_header();


if(have_posts()) :
  while(have_posts()) : the_post(); ?>
<article class="post page">
  <h2><?php the_title();  ?></h2>
  <p><?php the_content() ?></p>
</article>
<?php
  endwhile;
else : 
  echo '<p> There is not content to display </p>';
endif;  

get_footer();
?>
<?php if(is_page('nuestros-servicios')){ ?>
      <p>Esto en nuestros servicios</p>
<?php } ?>