<li <?php post_class(); ?> id="post_<?php the_ID(); ?>">
		
	<?php if ( has_post_thumbnail() ) get_template_part( 'post', get_post_format() ); ?>
			
	<div class="blog_section_post <?php if ( ! has_post_thumbnail() ) echo 'full_width'; ?>">
		
		<span class="post_title">
			<a title="<?php printf( esc_attr__('Перейти в %s', 'haku'), the_title_attribute('echo=0') ); ?>" href="<?php the_permalink(); ?>" rel="bookmark"><?php echo retro_filter( get_the_title() ? get_the_title() : get_the_time('F j') ); ?></a>
		</span>
						
	</div>
	
	<?php the_content( __('[Подробнее]', 'haku') ); ?>
	
	<div class="clr"></div>
		
</li>