<?php
global $post;

$projects = get_posts(array(
  'posts_per_page' => 5,
  'post_type' => 'project',
  'suppress_filters' => 0,
));

$employees = get_posts(array(
  'posts_per_page' => -1,
  'post_type' => 'employee',
  'suppress_filters' => 0,
));

get_header(); ?>

<div id="main-content" class="site-content">

  <?php if( !empty( $projects ) ) : ?>
    <?php foreach( $projects as $post ) : setup_postdata( $post ); ?>
      <div class="project">
        <h2 class="title"><?php the_title(); ?></h2>
        <a href="<?php echo get_permalink(); ?>">Meer lezen</a>
        <a href="<?php the_field('url'); ?>">Project bezoeken</a>
        <p class="klant"><?php the_field('customer'); ?></p>
      </div>
    <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>
  <?php endif; ?>

  <?php if( !empty( $employees ) ) : ?>
    <?php foreach( $employees as $post ) : setup_postdata( $post ); ?>
      <div class="employee">
        <h2>
          <?php the_field('firstname'); ?>
          <?php the_field('lastname'); ?>
        </h2>
        <a href="<?php echo get_permalink(); ?>">Meer lezen</a>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
