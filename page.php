<?php get_header(); ?>

<div id="blog" class="grid_10">	
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<?php if ($post->ID != $featured_ID) { ?>
		<div class="blog-border">
	    <div class="type-post">

		<h2><?php the_title(''); ?></h2>


        <span class="post-meta">Posted on <?php the_time('M d'); ?> in <?php the_category(', '); ?> by <?php the_author_posts_link(); ?></span>

	  <div class="entry-content">
        	
<div id="body-ad">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-0301430055096164";
/* SP - Body Copy */
google_ad_slot = "9710668322";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div> <!--body-ad-->


<?php the_content(); ?>
        	<?php include(TEMPLATEPATH.'/social-share.php'); ?>
<h3>Previous Episodes</h3>
<p>This is just one episode of our many podcasts, why not check out one of our last five shows while you're here?  Sure know I would!</p>
<ul class="related">
  <?php do_action(
    'related_posts_by_category',
    array(
      'orderby' => 'post_date',
      'order' => 'DESC',
      'limit' => 5,
      'echo' => true,
      'before' => '<li>',
      'outside' => '',
      'after' => '</li>',
      'type' => 'post',
      'image' => array(25, 25),
      'message' => 'No matches'
    )
  ) ?>
</ul>

		<p class="entry-meta">
			<?php the_tags('<span class="tags">' . __('Tagged with') . ' ', ', ', '</span>'); ?> 
			<span class="sep">|</span> <?php comments_popup_link(__('Leave a response'), __('1 Response'), __('% Responses'), 'comments-link', __('Comments closed')); ?> 
		</p>
        
        <div id="comments-template">
		<a name="respond" id="respond"></a>
		<?php comments_template(); ?>
		</div>

		</div> <!--blog-post-ID -->
		</div> <!--blog-border-->
        
   <?php } ?>
	<?php endwhile; ?>
    <div id="posts_navigation">
		<?php previous_posts_link(); ?>
		<?php next_posts_link(); ?>
	</div>

<?php else : ?>

	<p class="no-posts">Sorry, no posts matched your criteria.</p>

<?php endif; ?>	
  
</div> <!--blog-->
      
<?php get_sidebar(); ?>

<?php get_footer(); ?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
