<?php get_header(); ?>

<section class="l-main intro">
  <h1 class="vhidden">Introduction</h1>
  <blockquote class="grid-wrap">
      <p class="g f-zeta">A picture is worth a thousand words. An interface is worth a thousand pictures.</p>
      <footer class="g">Ben Shneiderman</footer>
  </blockquote>
</section>
    
<section class="l-main main-content">
  <h1 class="vhidden">Site Sections</h1>
  <ul class="nav grid-wrap">
    <li class="work pg-banner menu-item cf">
      <a href="about">
        <div class="pg-name g">
          <h2 class="f-beta">My work</h2>
          <p class="f-zeta">See my portfolio.</p>
        </div>
        <div class="pg-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/img/icon-work.png" alt="" class="fluid-media" />
        </div>
      </a>
      </li>
      <li class="about pg-banner menu-item cf">
        <a href="about">
          <div class="pg-name g">
            <h2 class="f-beta">About Me</h2>
            <p class="f-zeta">Know who I am.</p>
          </div>
          <div class="pg-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-about.png" alt="" class="fluid-media" />
          </div>
        </a>
      </li>
      <li class="contact pg-banner menu-item cf">
        <a href="contact">
          <div class="pg-name g">
            <h2 class="f-beta">Contact</h2>
            <p class="f-zeta">Stay in touch.</p>
          </div>
          <div class="pg-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-contact.png" alt="" class="fluid-media" />
          </div>
        </a>
      </li>
    </ul>
  </section>
</div>
<?php get_sidebar('aside'); ?>

<?php get_footer(); ?>