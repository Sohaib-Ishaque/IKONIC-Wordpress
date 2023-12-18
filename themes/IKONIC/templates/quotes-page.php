<?php
	/* Template Name: Quotes Page */ 
	get_header();
?>

      <section class="services">
            <h1 class="heading">Top Quotes From Kanye API</h1>
            <?php
            	echo do_shortcode('[kanye_quotes]');
		?>
      </section>
      <section class="services qoutes_script">
            <h2 class="heading">Top Quotes From Kanye API Using JQuery AJAX </h2>
			<div class="box-container mt-10" id="quotes">
            </div>
      </section>
<?php
	get_footer();
?>









