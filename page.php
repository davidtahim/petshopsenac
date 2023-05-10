<<<<<<< HEAD
<?php get_header(); ?>

  <div class="container">   
    <div class="row">
      
      <div class="col-md-9">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="page-header">
            <h1><?php the_title(); ?></h1>
          </div>

          <?php the_content(); ?>

        <?php endwhile; else: ?>
          
          <div class="page-header">
            <h1>Oh no!</h1>
          </div>

          <p>No content is appearing for this page!</p>

        <?php endif; ?>


      </div>
      
<div class="col-md-3">
    <?php get_sidebar(); ?>
</div>

    </div>
</div>
=======
<?php get_header(); ?>

  <div class="container">   
    <div class="row">
      
      <div class="col-md-9">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="page-header">
            <h1><?php the_title(); ?></h1>
          </div>

          <?php the_content(); ?>

        <?php endwhile; else: ?>
          
          <div class="page-header">
            <h1>Oh no!</h1>
          </div>

          <p>No content is appearing for this page!</p>

        <?php endif; ?>


      </div>
      
      <?php get_sidebar(); ?>

    </div>

>>>>>>> 18f587fcdaf557f6ce572d261de7e3c5277e9683
<?php get_footer(); ?>