<?php
  /**
   * Template Name: Archive Project
   */

  get_header(); 


  $args = array(
      'post_type' => 'projects', 
      'posts_per_page' => 6, 
      'paged' => get_query_var('paged') ? get_query_var('paged') : 1, 
  );
  $projects_query = new WP_Query($args);
  ?>

  <?php if ($projects_query->have_posts()) : ?>
    <ul class="projects-archive">
        <?php while ($projects_query->have_posts()) : $projects_query->the_post(); ?>
            <li>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="project-content">
                    <?php the_excerpt(); ?>
                </div>
            </li>
        <?php endwhile; ?>
    </ul>
<?php else : ?>
    <p>No Projects found.</p>
<?php endif; ?>
<?php
// Display the pagination
if ($projects_query->max_num_pages > 1) :
    echo '<div class="projects-pagination">';
    echo paginate_links(array(
        'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $projects_query->max_num_pages,
        'prev_text' => __('&larr; Previous', 'text-domain'),
        'next_text' => __('Next &rarr;', 'text-domain'),
    ));
    echo '</div>';
endif;
?>

<?php get_footer(); ?>

