<?php get_header(); ?>
    <aside>
      <?php dynamic_sidebar(); ?>
    </aside>
    <?php while (have_posts()) : the_post() ?>
    <article>
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <div class="content">
          <?php if(!is_page()): ?>
            <div class="meta">
              <?php the_author_link(); ?>  – <?php the_category(', '); ?> – <?php the_date('d. m. Y'); ?>
            </div>
          <?php endif; ?>
          <?php the_content(); ?>
        
          <?php if(!is_single() && !is_page()) comments_popup_link(__('<i class="icon-plus-sign"></i> kommentieren', 'jupisnova'), __('<i class="icon-comment"></i> ein Kommentar', 'jupisnova'), _('<i class="icon-comments"></i> % Kommentare', 'jupisnova'), 'comment-button btn'); ?>
          <?php if(is_single() && !is_page()) { comments_template(); } ?>
        </div>
      </div>
    </article>
    <?php endwhile; ?>
  <br class="clear" />
<?php get_footer(); ?>
