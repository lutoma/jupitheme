<?php get_header(); ?>
  <div id="wrapper">
    <aside>
      <img src="http://berlin.piratenpartei.de/wp-content/uploads/2012/03/spendenshirt.jpg" />
      <img src="http://berlin.piratenpartei.de/wp-content/uploads/2011/08/mitglied-werden_banner.5.jpg" />
      <img src="http://berlin.piratenpartei.de/wp-content/uploads/2011/08/banner_grundsatzprogramm.png" />
      <img src="http://berlin.piratenpartei.de/wp-content/uploads/2011/08/banner_wahlprogramm.png" />
      <img src="http://berlin.piratenpartei.de/wp-content/uploads/2011/08/spendenbanner.png" />
      <?php // dynamic_sidebar(); ?> 
    </aside>

      <?php while (have_posts()) : the_post() ?>
      <article>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="content">
            <?php the_content(); ?>
          
            <?php if(!is_single() && !is_page()) comments_popup_link(__('Leave a comment', 'your-theme'), __('1 Comment', 'your-theme'), _('% Comments', 'your-theme'), 'comment-button btn'); ?>
          </div>
        </div>
      </article>
      <?php endwhile; ?>
    <br class="clear" />
  </div>
<?php get_footer(); ?>
