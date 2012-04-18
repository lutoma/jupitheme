<?php get_header(); ?>
  <div id="wrapper">
    <aside>
      <h2>JuPis auf…</h2>
      <div class="box">
        <a href="/feed/"><img src="//www.junge-piraten.de/wp-content/uploads/2010/02/48px-Feed-icon.svg_-e1281671741681.png" style="border-width: 0px;" alt="RSS-/Atom-Feed-Icon" /></a><a href="//twitter.com/jungePiraten"><img src="https://www.junge-piraten.de/wp-content/uploads/2012/02/t_logo-a.png" style="margin-left: 10px; border-width: 0px;" alt="Twitter-Icon" /></a>
      </div>
      <h2>Piraten anderswo</h2>
      <div class="box">
        Derp herp
      </div>
    </aside>

    <div role="main">
      <?php while (have_posts()) : the_post() ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php the_content(); ?>
          <?php comments_popup_link(__('Leave a comment', 'your-theme'), __('1 Comment', 'your-theme'), _('% Comments', 'your-theme'), 'comment-button btn') ?>
        </div>
      <?php endwhile; ?>

    </div>
  </div>
<?php get_footer(); ?>
