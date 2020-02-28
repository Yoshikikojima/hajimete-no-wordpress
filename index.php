<?php get_header(); ?>

<main>
  <div class="container">
    <article>
      <h2>NEWS</h2>
      <dl class="table">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <dt><?php the_time('Y.m.d'); ?></dt><dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
        <?php endwhile; else : ?>
          <dd>まだ記事がありません</dd>
        <?php endif; ?>
      </dl>
    </article>
  </div>
</main>

<?php get_footer(); ?>