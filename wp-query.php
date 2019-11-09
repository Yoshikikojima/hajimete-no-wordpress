<article>
      <h2>MENU</h2>
      <div class="card-group">
        <!-- ここから -->
        <?php
        $args = array(
            'post_type' => 'menu', 
            'posts_per_page' => 4,
            'order' => 'ASC'
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post();
          ?>
        <div class="card">
          <img class="card-img-top" src="<?php the_field('item-picture')?>" alt="<?php the_title();?>">
          <div class="card-body">
            <h3 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title();?></a></h3>
            <p class="card-text"><?php the_field('item-description');?></p>
          </div>
        </div>
        <?php
          endwhile;
        endif;
        wp_reset_postdata();
        ?>
        <!-- ここまで -->
      </div>
      <div class="text-center">
        <a href="#" class="btn">もっと見る</a>
      </div>
    </article>