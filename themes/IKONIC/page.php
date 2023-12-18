<?php
  get_header(); 


$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type'      => 'projects',
    'posts_per_page' => 6,
    'paged'          => $paged,
);

$query = new WP_Query($args);
?>
	<section id="about" class="courses_head">
	      <h2>LATEST FROM OUR PROJECTS LIST</h2>
	</section>
	<section id="courses">
	      <div class="course_box">
			<?php 
			while ($query->have_posts()) : $query->the_post();
		        $post_id    = get_the_ID();
		        $post_date  = get_the_date();
		        $thumbnail_id = get_post_thumbnail_id($post_id);
	              if ($thumbnail_id) {
	                  $image_info = wp_get_attachment_image_src($thumbnail_id, 'full'); 
	                  $image_url = $image_info[0];
	              }
	              	 $taxonomy = 'project type';
			       $terms = get_the_terms($post_id, $taxonomy);
			        
	              ?>  

		            <a href="<?php echo the_permalink( $post_id );?>">
			      	<div class="category">
			      		<?php 
			      		if ($terms) {
					            echo '<p>';
					            foreach ($terms as $term) {
					                echo $term->name;
					            }
					            echo '</p>';
					        }
					        ?>
			      		
			      	</div>
		                  <div class="courses">
		                        <img src="<?php echo $image_url;?>">
		                        <div class="details">
		                              <span>Added On <?php echo $post_date; ?></span>
		                              <h6><?php the_title(); ?></h6>
		                              <p><?php the_excerpt(); ?></p>
		                        </div>
		                  </div>
		            </a>
			<?php endwhile;?>
		</div>
		  <?php 
	      if ($query->max_num_pages > 1) :
		    ?>
		    <div class="pagination">
		        <?php if ($paged > 1) : ?>
		          <a href="<?php echo get_pagenum_link($paged - 1); ?>" class="btn_primary"><i class="fas fa-chevron-left"></i></a>
		        <?php endif; ?>

		        <?php for ($i = 1; $i <= $query->max_num_pages; $i++) : ?>
		            <a href="<?php echo get_pagenum_link($i); ?>" class="btn_primary <?php if ($paged === $i) echo 'active'; ?>"><?php echo $i; ?></a>
		        <?php endfor; ?>

		        <?php if ($paged < $query->max_num_pages) : ?>
		          <a href="<?php echo get_pagenum_link($paged + 1); ?>" class="btn_primary"><i class="fas fa-chevron-right"></i></a>
		        <?php endif; ?>
		    </div>
		    <?php
		  endif;?>
	</section>


<?php



wp_reset_postdata();

get_footer();
?>
