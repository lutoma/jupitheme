<?php get_header(); ?>
    <aside>
      <?php dynamic_sidebar(); ?> 
      <a href="https://anmelden.junge-piraten.de/"><img src="<?php bloginfo('template_directory'); ?>/img/mitgliedwerden-banner.png" /></a>
<!--      <img src="http://berlin.piratenpartei.de/wp-content/uploads/2011/08/banner_grundsatzprogramm.png" />
      <img src="http://berlin.piratenpartei.de/wp-content/uploads/2011/08/banner_wahlprogramm.png" />-->
      <a href="/die-jungen-piraten/bankverbindung/"><img src="<?php bloginfo('template_directory'); ?>/img/spenden-banner.png" /></a>
    </aside>
    <?php while (have_posts()) : the_post() ?>
    <article>
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <div class="content">
          <?php if(!is_page()): ?>
            <div class="meta">
              <?php the_author(); ?> – Allgemeines – <?php the_date('d. m. Y'); ?>
            </div>
          <?php endif; ?>
          <?php the_content(); ?>
        
          <?php if(!is_single() && !is_page()) comments_popup_link(__('Leave a comment', 'jupisnova'), __('1 Comment', 'jupisnova'), _('% Comments', 'jupisnova'), 'comment-button btn'); ?>
          <?php if(is_single() && !is_page()) { comments_template(); } ?>
        </div>
      </div>
    </article>
    <?php endwhile; ?>
  <br class="clear" />
<?php get_footer(); ?>
