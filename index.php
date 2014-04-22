<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 * @package WordPress
 * @subpackage CALSv1
 */

get_header(); ?>


  <div class="collegeFeature2">
  <?php if (function_exists( 'muneeb_ssp_slider')) {muneeb_ssp_slider( 109 );} ?>
   </div>




  <div id="main">
<div class="loadBar">
	<div class="progress"></div>
</div>
		<div id="primary">



			<?php $options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];
//$current_colorscheme = $options['link_color'];



if ( 'content' != $current_layout ) : ?>
	<div id="content" role="main">
    <?php if ( have_posts() ) : ?>

				<?php twentyeleven_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

				<?php twentyeleven_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

<?php endif; ?>


		<?php if ( 'content' == $current_layout ) : ?>

		<!--<div class="centeredContainerInset topspace">

  <h2 class="sectionTitle">Highlights</h2>
  </div>-->








			<div id="content" role="main">


			<div class="newsItem customize" style="display: none;">
			<span class="number">1</span>
			<div class="hiddendate">-9999999999</div>
    	<div class="categories">
	  		<div class="topics">
		  		<ul>


	    	<?php
$categories = get_categories();
foreach ($categories as $cat) {

if($cat->cat_name != 'Uncategorized') {
echo '<li><a href="#" data-cat="'.$cat->slug.'" class="selected categor">'.$cat->cat_name.'</a></li>';
}

}
?>
					<!--<li><a href="#" data-cat="Agriculture" class="selected agriculture categor"><span></span>Agriculture</a><a href="http://news.cals.wisc.edu/category/agriculture/" style="display: none;" class="more">See More</a></li>
					<li><a href="#" data-cat="Announcements" class="selected announcements categor"><span></span>Announcements</a><a href="http://news.cals.wisc.edu/category/highlights/" style="display: none;" class="more">See More</a></li>
			    	<li><a href="#" data-cat="Energy" class="selected energy categor"><span></span>Energy</a><a href="http://news.cals.wisc.edu/category/energy/" style="display: none;" class="more">See More</a></li>
			    	<li><a href="#" data-cat="Environment" class="selected environment categor"><span></span>Environment</a><a href="http://news.cals.wisc.edu/category/environment/" style="display: none;" class="more">See More</a></li>
			    	<li><a href="#" data-cat="Events" class="selected events categor"><span></span>Events</a><a href="http://twitter.com/uwmadisoncals" style="display: none;" class="more">See More</a></li>
			    	<li><a href="#" data-cat="Food" class="selected food categor"><span></span>Food</a><a href="http://ecals.cals.wisc.edu/category/food-2/" style="display: none;" class="more">See More</a></li>
			    	<li><a href="#" data-cat="Health" class="selected health categor"><span></span>Health</a><a href="http://news.cals.wisc.edu/category/health/" style="display: none;" class="more">See More</a></li>
			    	<li><a href="#" data-cat="People" class="selected people categor"><span></span>People</a><a href="http://ecals.cals.wisc.edu/category/people/" style="display: none;" class="more">See More</a></li>
			    	<li><a href="#" data-cat="social" class="selected social categor"><span></span>Social</a><a href="http://twitter.com/uwmadisoncals" style="display: none;" class="more">See More</a></li>-->

		  		</ul>
	  		</div>


		  	<div class="categoriesSort">
		    	 <ul id="sort" class="option-set clearfix" data-option-key="sortBy">
			    	<!--<li><a href="#" data-cat="number">Highlighted</a></li>-->
			        <li><a href="#" data-cat="chronological" class="selected">Chronological</a></li>

			        <li><a href="#" data-cat="alphabetical">Alphabetical</a></li>
			        <li><a href="#" data-cat="grouped">Grouped</a></li>
		  		</ul>
		  	</div>

	  		<a href="#" class="remembersettings selected" data-rem="yes">Remember My Settings</a>

  		</div>
    </div>



			<!-- CALS News Content Box -->
				<div class="row clearfix">

					<div class="span-50 box dropin">

							<h2>Highlights</h2>

							<?php //switch_to_blog(19); ?>
<?php query_posts("posts_per_page=1&cat=11"); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post();  ?>

  <?php	if ( has_post_thumbnail() ) {

		    				//the_post_thumbnail();
		    				echo get_the_post_thumbnail($page->ID, 'large');

		    				} else {
							//echo "<img src='".get_template_directory_uri()."/images/newsplaceholder1.jpeg' alt=' '>";
							 //echo '<img src="';
							 echo catch_that_news_image();
							// echo '" alt="" />';

						} ?>
			<div class="boxContent">
											<h3 class="spotlight_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> </h3>
											<p><?php the_time('l, F jS, Y') ?></p>
                                             </div>
                            <div class="topShade"></div>
							<div class="bottomShade"></div>






  <?php endwhile; ?>
<?php endif; ?>
<?php //restore_current_blog(); ?>
							<a href="<?php get_site_url(); ?>/category/highlights/" class="moreButton">More Highlights</a>


						<div class="windows8">
							<div class="wBall" id="wBall_1">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_2">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_3">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_4">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_5">
							<div class="wInnerBall">
							</div>
							</div>
						</div>

						<div class="shade"></div>

					</div>

					<div class="span-50 box videos dropin2">


                                                <h2>Videos</h2>
                                            <?php //switch_to_blog(19); ?>
<?php query_posts("category_name=featured-videos&posts_per_page=1"); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post();  ?>

  <?php	if ( has_post_thumbnail() ) {

		    				//the_post_thumbnail();
		    				echo get_the_post_thumbnail($page->ID, 'large');

		    				} else {


		    				$url = get_the_content();

		    				//$url = linkifyYouTubeURLs($content);
		    				//echo $url;
							//$url = "http://www.youtube.com/watch?v=C4kxS1ksqtw&feature=relate";
  parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
  $videoimg = "http://img.youtube.com/vi/".$my_array_of_vars['v']."/0.jpg";
							 echo '<img src="';
							 echo $videoimg;
							 //echo catch_that_image();
							echo '" alt="" />';

						} ?>
			<div class="boxContent">
											<h3 class="spotlight_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> </h3>
											<p><?php the_time('l, F jS, Y') ?></p>
                                             </div>
                            <div class="topShade"></div>
							<div class="bottomShade"></div>






  <?php endwhile; ?>
<?php endif; ?>
<?php //restore_current_blog(); ?>

							<a href="<?php get_site_url(); ?>/category/departments/featured-videos/" class="moreButton">More Videos</a>
						<div class="windows8">
							<div class="wBall" id="wBall_1">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_2">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_3">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_4">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_5">
							<div class="wInnerBall">
							</div>
							</div>
						</div>

						<div class="shade"></div>
					</div>

				</div>

				<div class="row clearfix">

					<div class="span-33 box dropin3">
							<h2>Announcements</h2>

							<?php switch_to_blog(19); ?>
<?php query_posts("cat=17&posts_per_page=1"); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post();  ?>

  <?php	if ( has_post_thumbnail() ) {

		    				//the_post_thumbnail();
		    				echo get_the_post_thumbnail($page->ID, 'large');

		    				} else {

							 //echo '<img src="';
							 echo catch_that_announcements_image();
							// echo '" alt="" />';

						} ?>
			<div class="boxContent">
											<h3 class="spotlight_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> </h3>
											<p><?php the_time('l, F jS, Y') ?></p>
                                             </div>
                            <div class="topShade"></div>
							<div class="bottomShade"></div>






  <?php endwhile; ?>
<?php endif; ?>
<?php restore_current_blog(); ?>
							<a href="http://ecals.dev.cals.wisc.edu" class="moreButton">More Announcements</a>
						<div class="windows8">
							<div class="wBall" id="wBall_1">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_2">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_3">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_4">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_5">
							<div class="wInnerBall">
							</div>
							</div>
						</div>

						<div class="shade"></div>
					</div>

					<div class="span-33 box eventsBox dropin4">
							<h2>Events</h2>
							<img src="<?php echo get_template_directory_uri(); ?>/images/aghall1.jpg" alt=" ">
							<div class="boxContent">
										<?php // Get RSS Feed(s)
  include_once(ABSPATH . WPINC . '/rss.php');
  $rss = fetch_rss('http://www.today.wisc.edu/events/feed/30.rss2');
  $maxitems = 2;
  $items = array_slice($rss->items, 0, $maxitems);
?>


  <?php if (empty($items)): ?>
   <h3 class="spotlight_title">No Upcoming Events</h3>
  <?php else:
      foreach ( $items as $item ):
        ?>
        <h3 class="spotlight_title">
          <a href='<?php echo $item['link']; ?>' title='<?php echo $item['title']; ?>'>

            <?php $tempTitle = $item['title']; $newTitle = substr($tempTitle, 20, 60); ?>
            <?php echo $newTitle."..."; ?>
          </a>
        </h3>
        <p><?php $tempDate = $item['title']; $newDate = substr($tempTitle, 0, 18); ?>
            <?php echo $newDate; ?></p>
        <?php
      endforeach;
    endif;
  ?>




                                             </div>
                            <div class="topShade"></div>
							<div class="bottomShade"></div>

								<a href="http://www.today.wisc.edu/events/feed/30" class="moreButton">More Events</a>

								<div class="windows8">
							<div class="wBall" id="wBall_1">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_2">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_3">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_4">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_5">
							<div class="wInnerBall">
							</div>
							</div>
						</div>

						<div class="shade"></div>

					</div>

					<div class="span-33 box dropin5">
							<h2>Podcals</h2>

							<?php switch_to_blog(20); ?>
<?php query_posts('post_type=podcast&posts_per_page=1'); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post();  ?>

  <?php	if ( has_post_thumbnail() ) {

		    				//the_post_thumbnail();
		    				echo get_the_post_thumbnail($page->ID, 'large');

		    				} else {
							echo "<img src='".get_template_directory_uri()."/images/podcastBg.jpg' alt=' '>";
							 //echo '<img src="';
							 //echo catch_that_news_image();
							// echo '" alt="" />';

						} ?>

			<div class="boxContent">
			<?php //the_powerpress_content(); ?>
											<h3 class="spotlight_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> </h3>
											<p><?php the_time('l, F jS, Y') ?></p>
                                             </div>
                            <div class="topShade"></div>
							<div class="bottomShade"></div>






  <?php endwhile; ?>
<?php endif; ?>
<?php restore_current_blog(); ?>
<?php wp_reset_query(); ?>
<a href="<?php get_site_url(); ?>/podcals/" class="moreButton">More Podcals</a>

<div class="windows8">
							<div class="wBall" id="wBall_1">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_2">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_3">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_4">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_5">
							<div class="wInnerBall">
							</div>
							</div>
						</div>

						<div class="shade"></div>
					</div>

				</div>

			<div id="container" style="opacity: 0;" class="super-list variable-sizes clearfix">


<?php	if ( is_home() ) { query_posts( 'showposts=3&offset=3&cat=7' ); } ?>

			<?php if ( have_posts() ) : ?>

				<?php //twentyeleven_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>






	<div class="newsItem <?php $category = get_the_category();
echo $category[0]->slug; ?>">

    		<div class="previousa">
    		<div class="additionalContent">



    				<?php

	    				if ( has_post_thumbnail() ) {

		    				//the_post_thumbnail();
		    				echo get_the_post_thumbnail($page->ID, 'large');

		    				} else {

							 //echo '<img src="';
							 echo catch_that_image();
							// echo '" alt="" />';

						}

    				?>


    		</div>

    		<div class="text">
    			<div class="glyph"><div class="symbol"></div></div>
    			<div class="titleheading">

    			<h3><?php the_title(); ?></h3>
    			</div>
    			<div class="excerpt">


			<?php the_content_rss('', FALSE, '', 180); ?>


    			</div>
    			<div class="dateheading">
    			<?php the_time('l, F jS, Y'); ?>
    			</div>
    			<div class="hiddendate"><?php echo "-"; the_time('Ymd') ?></div>
    			<div class="hiddengroup"><?php $category = get_the_category();
echo $category[0]->slug; ?></div>


					<span class="number">10</span>
    		</div>

    		<a href="<?php the_permalink(); ?>" class="highlight"><?php the_title(); ?></a>
    		<div class="windows8">
							<div class="wBall" id="wBall_1">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_2">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_3">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_4">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_5">
							<div class="wInnerBall">
							</div>
							</div>
						</div>

						<div class="shade"></div>
    	</div>

    </div>

				<?php endwhile; ?>

				<?php else : ?>



			<?php endif; ?>

<?php wp_reset_query(); ?>

			<!-- Main posts excluding CALS Faces, Podcals, Highlights -->
   		<?php	if ( is_home() ) { query_posts( 'showposts=5&offset=0&cat=-14,-17,-21,-25,-26,-27,-11,-7,-8' ); } ?>

			<?php if ( have_posts() ) : ?>

				<?php //twentyeleven_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>






	<div class="newsItem <?php $category = get_the_category();
echo $category[0]->slug; ?>">

    		<div class="previousa">
    		<div class="additionalContent">



    				<?php

	    				if ( has_post_thumbnail() ) {

		    				//the_post_thumbnail();
		    				echo get_the_post_thumbnail($page->ID, 'large');

		    				} else {

							 //echo '<img src="';
							 echo catch_that_image();
							// echo '" alt="" />';

						}

    				?>


    		</div>

    		<div class="text">
    			<div class="glyph"><div class="symbol"></div></div>
    			<div class="titleheading">
    			<div class="categoryItem"><?php
$category = get_the_category();
echo $category[0]->cat_name;
?></div>
    			<h3><?php the_title(); ?></h3>

    			</div>

    			<div class="excerpt">

	    		<!-- Cals in the media venue if conditional -->

	    		<?php $media_venu = get_post_meta($post->ID, 'media_venue', true);
				if($media_venu!=""){
					echo $media_venue;
				} ?>

				<div><?php $academic_info = get_post_meta($post->ID, 'academic_info', true);
				if($academic_info!=""){
					echo $academic_info;
				} ?></div>

			<?php the_content_rss('', FALSE, '', 180); ?>


    			</div>
    			<div class="dateheading">
    			<?php the_time('l, F jS, Y'); ?>
    			</div>
    			<div class="hiddendate"><?php echo "-"; the_time('Ymd') ?></div>
    			<div class="hiddengroup"><?php $category = get_the_category();
echo $category[0]->slug; ?></div>


					<span class="number">10</span>
    		</div>

    		<a href="<?php the_permalink(); ?>" class="highlight"><?php the_title(); ?></a>
    		<div class="windows8">
							<div class="wBall" id="wBall_1">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_2">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_3">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_4">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_5">
							<div class="wInnerBall">
							</div>
							</div>
						</div>

						<div class="shade"></div>
    	</div>

    </div>

				<?php endwhile; ?>



				<!--
				<?php



                            //Get sticky news post
							$sticky_posts = cals_fetch_feed('http://news.cals.wisc.edu/feed/?cat=-20%2C-21%2C-66%2C-67&tag=cals-home-sticky&post_thumb=1', 1, 0, 64);

							foreach ($sticky_posts as $sticky_post){
								//print_r($sticky);
								$postmeta = $sticky_post->get_item_tags('http://wordpress.org/export/1.0/', 'postmeta');
								$profile_thumbnail = $postmeta[0]['child']['http://wordpress.org/export/1.0/']['meta_value'][0]['data'];

								//$featuredImageSrc = $sticky_post->get_item_tags('', 'featuredImage');


								//$featuredImage = $featuredImageSrc[0]['data'];


								$sticky_post_id = $sticky_post->get_id();
								?>


								<div class="newsItem <?php //$category = get_the_category(); echo $category[0]->slug; ?>">
    	<a href="<?php echo $sticky_post->get_permalink();?>" title = "Permanent link to <?php echo $sticky_post->get_title(); ?>">
    		<div class="text">
    			<div class="glyph"><div class="symbol"></div></div>
    			<div class="titleheading">
    			<h3><?php echo $sticky_post->get_title(); ?></h3>
    			</div>
    			<div class="excerpt">


			<?php //echo $sticky_post->get_content(); ?>
    			<?php
                    $content = $sticky_post->get_content();

							echo substr($content,0,110).'...';


					?>

    			</div>
    			<div class="dateheading">
    			<?php echo $sticky_post->get_date('F j, Y'); ?>

    			</div>

					<span class="number">10</span>
    		</div>
    		<div class="additionalContent">

    				<?php //echo get_the_post_thumbnail($page->ID, 'large'); ?>

    				<?php
	    				/*if ( get_the_post_thumbnail($post_id) != '' ) {

		    				echo get_the_post_thumbnail($page->ID, 'large');

		    				} else {

							 echo '<img src="';
							 echo catch_that_image();
							 echo '" alt="" />';

						}*/

    				?>

    				<?php


											if ($profile_thumbnail!='') {?>
												<?php echo $profile_thumbnail;?>
											<?php } else {
												//get generic default image (attachment_id = 32)
												echo wp_get_attachment_image('232', array(300,300));
											}

										?>







    		</div>

    		<div class="highlight"></div>
    	</a>
    </div>



							<?php }


							//print_r($sticky_post);

							?>-->

							<?php
								//get news from eCALS
								//cals_fetch_feed('http://ecals.cals.wisc.edu/?cat=-356,-384,-385,-363,-358,-366,-355&feed=rss2', 4, 1, -1);

								//get news from CALS News
								//cals_fetch_feed('http://news.cals.wisc.edu/?feed=rss2&cat=-20,-21,-66,-67,0', 4, 1, -1);





								//cals_get_last_tweet();
							?>
							<?php get_sidebar( 'homepage' ); ?>
				<?php //twentyeleven_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

	<?php endif; ?>

</div>

<!--<div class="centeredContainerInset topspace mobilemargin">

  <h2 class="sectionTitle">About CALS</h2>
  </div>
<div class="aboutCALSMission">
	<div class="inner">
		<div class="column">
		<p>Located at the heart of the University of Wisconsin-Madison campus, the College of Agricultural and Life Sciences (CALS) is one of the oldest and most prestigious colleges devoted to the study of our living world.</p>


<a href="#" class="button">Learn more about the college’s history</a>
		</div>
	</div>
</div>-->
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
