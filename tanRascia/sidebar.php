
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
            <p>
              <?php the_author_meta('description'); ?>
            </p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <?php wp_get_archives('type=monthly'); ?>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="<?php echo get_option('github'); ?>" target='_blank'>GitHub</a></li>
              <li><a href="<?php echo get_option('twitter'); ?>" target='_blank'>Twitter</a></li>
              <li><a href="<?php echo get_option('facebook'); ?>" target='_blank'>Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->