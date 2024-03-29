<h3><?php echo retro_filter( __('Комментарии', 'haku') ); ?></h3>

<?php if ( post_password_required() ) : ?>
		
<!-- Notice message -->
<em><?php _e('Эти сообщения защищены паролем. Введите свой пароль для просмотра.', 'haku'); ?></em>

<?php return; endif; ?>
	
<!-- Comments title -->
<p class="comments-data"><?php printf( _n('1 Комментарий', '%1$s Комментариев', get_comments_number(), 'haku'), get_comments_number() ); ?> <?php _e('для', 'haku'); ?> <?php echo single_post_title(); ?></p>

<?php if ( have_comments() ) : ?>

<!-- Comments list -->
<ul class="commentlist">

	<?php wp_list_comments('type=comment&callback=retro_comments'); ?>
	
</ul>
<!-- end: Comments list -->

<?php if ( get_theme_option('trackbacks') ) : ?>

<!-- Pings list -->
<ul class="pinglist">

	<?php wp_list_comments('type=pings&callback=retro_pings'); ?>
	
</ul>
<!-- end: Pings list -->

<?php endif; ?>

<?php if ( get_comment_pages_count() > 1 && get_option('page_comments') ) : ?>

<!-- Pagination navigation -->
<nav class="pagination">

	<?php previous_comments_link( __('Show more', 'haku') ); ?>
	<?php next_comments_link( __('Newer comments', 'haku') ); ?>
	
</nav>
<!-- end: Pagination navigation -->

<?php endif; ?>
		
<?php endif; ?>
	
<!-- Comment form -->
<?php

/*******************/
/*   Comment form  */
$form = array(
	'title_reply' => retro_filter( __('Оставить отзыв', 'haku') ), 
	'comment_notes_before' => '<p class="comments-data">' . __('Введите вашу почту. Она не будет опубликована на сайте.', 'haku' ) . '</p>',
	'comment_notes_after' => '',
	'logged_in_as' => '<p class="comments-data logged-in-as">' . sprintf( __( 'Вы вошли как <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Выйти?</a>', 'haku' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
	'fields' => apply_filters('comment_form_default_fields', array(
			'author' => '<fieldset id="leave_comment_left">' . '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" placeholder=" ' . esc_attr( __('Ваше имя*', 'haku') ) . '" />',
			'email' => '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" placeholder=" ' . esc_attr( __('Ваша почта*', 'haku') ) . '" />',
			'url' => '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" placeholder=" ' . esc_attr( __('Ваша страница вконтакте', 'haku') ) . '" /></fieldset>',
		)
	),
	'comment_field' => '<fieldset id="leave_comment_right" class="' . ( is_user_logged_in() ? 'logged_in' : 'not_logged_in' ) . '">' . '<textarea id="comment" name="comment" rows="12" placeholder="' . esc_attr( __('Введите ваш комментарий...', 'haku') ) . '"></textarea></fieldset>',
	'label_submit' => esc_attr( __('Отправить комментарий!', 'haku') )
);

comment_form( $form );

?>

<!-- end: Comment form -->