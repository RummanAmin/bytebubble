      <div class="band bottom">
        <footer class="layout">
          <article>
            <ul class="tabs">
              <li class="active" rel="tab1"><h4>Find us</h4></li>
              <li rel="tab2"><h4>Explore</h4></li>
              <li rel="tab3"><h4>Lets talk</h4></li>
              <!-- <li rel="tab4">Tab 4</li> -->
            </ul>
            <div class="tab_container">
              <h4 class="d_active tab_drawer_heading" rel="tab1">Find us</h4>
              <div id="tab1" class="tab_content">
                <address>
                  ByteBubble Ltd<br>
                  Canary Wharf<br>
                  London
                </address><br>
                    
                <a href="tel: 07961916342">T: +44 (0)20 7510 7362</a><br>
                <a href="mailto:info@bytebubble.co.uk?Subject=Hello">E: info@bytebubble.co.uk</a>
              </div>
              <!-- #tab1 -->
              <h4 class="tab_drawer_heading" rel="tab2">Explore</h4>
              <div id="tab2" class="tab_content">
                <ul>
                  <li><a href="/about">About</a></li>
                  <li><a href="/services">Services</a></li>
                  <li><a href="/projects">Projects</a></li>
                  <li><a href="/contact">Contact</a></li>
                  <li><a href="/blog">Blog</a></li>
                </ul>
              </div>
              <!-- #tab2 -->
              <h4 class="tab_drawer_heading" rel="tab3">Lets talk</h4>
              <div id="tab3" class="tab_content">
                <ul>
                  <li><a href="https://www.instagram.com/bytebubble">Instagram</a></li>
                  <li><a href="https://www.twitter.com/byte_bubble">Twitter</a></li>
                  <li><a href="https://www.facebook.com/bytebubble">Facebook</a></li>
                  <li><a href="https://plus.google.com/103433790910722848431">Google+</a></li>
                  <li><a href="https://bytebubble.tumblr.com/">Tumblr</a></li>
                  <li><a href="https://www.linkedin.com/company/bytebubble">LinkedIn</a></li>
                </ul>
              </div>
              <!-- #tab3 -->
              <!-- <h4 class="tab_drawer_heading" rel="tab4">Tab 4</h4>
              <div id="tab4" class="tab_content">
                <a href="<?php echo esc_url( home_url() ) ?>"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/logo_letters.svg" alt=""></a>
              </div> -->
              <!-- #tab4 --> 
            </div>
          </article>
          <article>
            <a href="<?php echo esc_url( home_url() ) ?>"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/logo_letters.svg" alt=""></a>
          </article>
        </footer>
      </div>
        
    </div>

    <a id="go-top"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/scroll-up.svg"></a>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-74088797-1','auto');ga('send','pageview');
    </script>

    <?php wp_footer(); ?>
  </body>
</html>