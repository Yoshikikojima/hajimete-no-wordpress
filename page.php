<?php
/**
 * Template Name: デフォルトテンプレート
 **/
?>

<?php get_header(); ?>

<main>
  <div class="container">
    <article>
      <h2><?php the_title(); ?></h2>
      <div>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; else : ?>
          <p>まだ記事がありません</p>
        <?php endif; ?>
      </div>
    </article>
  </div>
</main>

<?php get_footer(); ?>