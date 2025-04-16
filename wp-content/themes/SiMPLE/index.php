<?php
/**
 *
 */
get_header(); ?>

<section id="content">
	<div id="main">

		<?php
      if ( have_posts() ) :
          while ( have_posts() ) : the_post();
      ?>
          <h1><?php the_title(); ?></h1>
          <section>
            <?php the_content(); ?>
          </section>
      <?php
          endwhile;
      endif;
      ?>
 		</div>
 		<div id="sidebar">
			<?php get_sidebar(); ?>
		
	</div>
</section>

<?php get_footer(); ?>