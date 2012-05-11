<?php get_header(); ?>
<section>
  <header class="intro l-main">
    <div class="work pg-banner grid-wrap">
      <hgroup class="pg-name g">
        <h1 class="f-beta">My Work</h1>
        <h2 class="f-zeta">See my portfolio:</h2>
      </hgroup>
      <div class="pg-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-work.png" alt="" class="fluid-media" />
      </div>
    </div>
  </header>

  <div class="l-main main-content">
    <ul class="nav grid-wrap">
    
    <?php $countposts = 0; while(have_posts()) : the_post(); $countposts++; ?>
    
      <li class="pf-item menu-item g<?php if($countposts == 1) { ?> first<?php } ?>"><!-- PONER CLASS FIRST-->
        <?php $url = get_post_meta($post->ID, 'url', $single = true); ?>
        <a href="<?php echo $url ?>">
          <h3 class="f-zeta"><?php the_title() ?></h3>
        </a>
        <figure>
          <a href="<?php echo $url ?>">
            <?php the_post_thumbnail(); ?>
          </a>
        </figure>
        <p class="f-small">
          <strong>Services:</strong> <?php 
            $terms_as_text = get_the_term_list( get_the_ID(), 'services', '', ', ');
            if (!empty($terms_as_text)) echo strip_tags($terms_as_text); ?>
        </p>
    
      </li>
    <?php endwhile; // end of the loop. ?>
    
    </ul>
  </div>
</section>

<?php get_sidebar('aside'); ?>

<?php get_footer(); ?>