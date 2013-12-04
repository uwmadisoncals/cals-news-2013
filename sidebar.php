<?php
/**
 * The Sidebar containing the main widget area.
 * @package WordPress
 * @subpackage CALSv1
 * @since CALS 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
		<div id="secondary" class="widget-area" role="complementary">
		
			<?php if ( !is_home() ) { get_template_part('nav_menu', 'sidebar'); } ?>
		
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<aside id="archives" class="widget">
					<h3 class="widget-title"><?php _e( 'Archives', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h3 class="widget-title"><?php _e( 'Meta', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>

<?php if ( 'content' == $current_layout ) : if ( !is_home() ) {
    // This is not the homepage
 ?>
	
	<?php get_template_part('nav_menu', 'sidebar');  ?>
	
	<div class="searchSidebar">
	<div class="recentPostsSideBar">
	<h4>Latest News</h4>
	<ul>
				 
				 <?php

	 query_posts( 'cat=-355,-356,-357,-366,-379,-380,-381,-386,-387,-388&order=DESC&orderby=DATE&posts_per_page=5' ); 

		// The Loop
		while ( have_posts() ) : the_post();
			echo '<li><a href="';
			the_permalink();
			echo '">';
			the_title();
			echo '</a></li>';
		endwhile;
		
		// Reset Query
		wp_reset_query();
		
		?>
              	</ul>
	</div>
	</div>

	
	<!--<div id="secondary" class="widget-area" role="complementary">
			
			
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
				
				
				
				<aside id="archives" class="widget">
					<h3 class="widget-title"><?php _e( 'Archives', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h3 class="widget-title"><?php _e( 'Meta', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
		</div>--><!-- #secondary .widget-area -->

<?php } endif; ?>