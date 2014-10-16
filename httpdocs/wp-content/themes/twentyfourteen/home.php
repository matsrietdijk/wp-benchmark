<?php
global $post;

$projects = get_posts(array(
  'posts_per_page' => 5,
  'post_type' => 'project',
));

$employees = get_posts(array(
  'posts_per_page' => -1,
  'post_type' => 'employee',
));

get_header(); ?>

<div id="main-content">

  <?php if( !empty( $projects ) ) : ?>
    <?php foreach( $projects as $post ) : setup_postdata( $post ); ?>
      <div class="project">
        <h2 class="title"><?php the_title(); ?></h2>
        <a href="<?php echo get_permalink(); ?>">Meer lezen</a>
        <a href="<?php echo get_post_meta( get_the_ID(), 'url', true ); ?>">Project bezoeken</a>
        <p class="klant"><?php echo get_post_meta( get_the_ID(), 'customer', true ); ?></p>
      </div>
    <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>
  <?php endif; ?>

  <?php if( !empty( $employees ) ) : ?>
    <?php foreach( $employees as $post ) : setup_postdata( $post ); ?>
      <div class="employee">
        <h2>
          <?php echo get_post_meta( get_the_ID(), 'firstname', true ); ?>
          <?php echo get_post_meta( get_the_ID(), 'lastname', true ); ?>
        </h2>
        <a href="<?php echo get_permalink(); ?>">Meer lezen</a>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
