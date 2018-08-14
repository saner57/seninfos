<?php if ( envo_blog_is_preview() ) { ?>
	<div class="homepage-widget-area"> 
		<?php
		the_widget( 'envo_blog_split_images_News', 'title=', 'before_title=<div class="widget-title"><h3>&after_title=</h3></div>&before_widget=<div class="widget widget_recent_entries">&after_widget=</div>' );
		?>
	</div>
<?php } else { ?>
	<div class="homepage-widget-area"> 
		<?php
		dynamic_sidebar( 'envo-blog-homepage-area' );
		?>
	</div>
<?php
}
