<footer class="l-main l-frame">
    <nav class="grid-wrap h-nav" role="navigation">
        <?php
          wp_nav_menu(
            array(
              'theme_location'  => 'main',
              'container'       => false,
              'menu_class'      => 'cf'
            )
          );
        ?>
    </nav>
    <div class="grid-wrap cf">
      <div class="g copy">
          <p class="f-small">&copy; 2012 Nahuel Sotelo All rights... whatever...</p>
      </div>
      <div class="g humans">
          <p><a href="http://humanstxt.org/"><img src ="<?php echo get_template_directory_uri(); ?>/img/humanstxt.png" alt="humans.txt" /></a></p>
      </div>
    </div>
  </footer>

<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.7.2.min.js"><\/script>')</script>

  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
  <!--<script src="<?php echo get_template_directory_uri(); ?>/js/GGS.js"></script>-->
</body>
</html>