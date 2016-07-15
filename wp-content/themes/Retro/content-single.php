<?php 
/****************************/
/*   Single view content    */
$media = meta_obtain( 'url', '_retro_format_standard', $post->ID );
?>

<div id="blog_section_listing">

	<ul>
	
		<li <?php post_class(); ?> id="post_<?php the_ID(); ?>">
		
			<?php if ( has_post_thumbnail() ) get_template_part( 'post', get_post_format() ); ?>
					
			<div class="blog_section_post <?php if ( ! has_post_thumbnail() ) echo 'full_width'; ?>">

				</h4>
				
				<span class="post_comments"><?php comments_popup_link( __('Нет комментариев', 'haku') , __('1 Комментарий', 'haku') , __('% Комментариев', 'haku') ); ?></span>
				
				<div class="clr"></div>
				
			</div>
		
			
			
			<?php the_content(); ?>
				
		</li>
		
	</ul>

	<div class="clr"></div>
	
	<?php if ( haku_get_url_type( $media ) == 'audio' ) : ?>
	
	<?php 
	// Javascript
	global $retro_enqueue_audio_js;
	$retro_enqueue_audio_js = true;
	?>
	
	<!-- Audio player -->
	<div class="ajs-retro">
		<audio src="<?php echo esc_url( $media ); ?>" preload="none" controls />
	</div>
	<!-- end: Audio player -->
	
	<?php endif; ?>
		
</div><!-- end div #blog_section_listing -->

<!-- Post comments -->
<section id="comments" class="blog_comments">

	<?php comments_template( '', true ); ?>
	
</section>
<!-- end: Post comments -->