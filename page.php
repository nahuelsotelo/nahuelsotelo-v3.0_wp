<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section>
  <header class="intro l-main">
    <div class="<?php echo $post->post_name ?> pg-banner grid-wrap">
      <hgroup class="pg-name g">
        <h1 class="f-beta"><?php the_title(); ?></h1>
        <h2 class="f-zeta"><?php echo get_post_meta($post->ID, 'page-tagline', true); ?></h2>
      </hgroup>
      <div class="pg-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-<?php echo $post->post_name ?>.png" alt="" class="fluid-media" />
      </div>
    </div>
  </header>
  
  <div class="l-main main-content">
      <div class="grid-wrap">
        <? if (is_page( 'about' ) ) { ?>
        <section class="about-photo g">
          <figure>
            <?php the_post_thumbnail(); ?>
          </figure>
        </section>
        <?php } ?>
      
        
        <?php the_content(); ?>
      
      </div>
    </div>
  </section>
  
  

<?php endwhile; // end of the loop. ?>


<?php get_sidebar('aside'); ?>

<?php get_footer(); ?>