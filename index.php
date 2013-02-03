<?php get_header(); ?>
    <?php while (have_posts()) : the_post() ?>
    <article>
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="content">
          <?php if(!is_page()): ?>
            <div class="meta">
              <!--<?php the_author_link(); ?>  – --><?php the_category(', '); ?> – <?php the_date('d. m. Y'); ?>
            </div>
          <?php endif; ?>
          <?php the_content(); ?>
        
          <?php if(!is_single() && !is_page()) comments_popup_link('Kommentieren', '1 Kommentar', '% Kommentare', 'comment-button btn'); ?>
          <?php if(is_single() && !is_page()) { comments_template(); } ?>
        </div>
      </div>
    </article>
    <?php endwhile; ?>
  <br class="clear" />
<section id="pagination">
  <?php posts_nav_link(); ?>
</section>
<?php
  get_footer();
?>
