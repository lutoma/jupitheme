<?php get_header(); ?>
  <div id="wrapper">
    <aside>
      <?php dynamic_sidebar(); ?> 
    </aside>

    <div role="main">
      <?php while (have_posts()) : the_post() ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php the_content(); ?>
          <?php if(!is_single() && !is_page()) comments_popup_link(__('Leave a comment', 'your-theme'), __('1 Comment', 'your-theme'), _('% Comments', 'your-theme'), 'comment-button btn'); ?>
        </div>
      <?php endwhile; ?>

    </div>
  </div>
<?php get_footer(); ?>
