<?php

/**
 * BuddyPress - Activity Stream (Single Item)
 *
 * This template is used by activity-loop.php and AJAX functions to show
 * each activity.
 *
 * @package BuddyPress
 * @subpackage bp-legacy
 */

?>

<?php

/**
 * Fires before the display of an activity entry.
 *
 * @since BuddyPress (1.2.0)
 */
do_action( 'bp_before_activity_entry' ); ?>
            
                       
<!-- <li class="<?php bp_activity_css_class(); ?>" id="activity-<?php bp_activity_id(); ?>">-->
	   <div class="row courage_post">
	    <div class="col-sm-6">
<div class="courage_post-box">
<div class="courage_post-cont">	
<div class="courage_post_head">
<div class="courage_post_menu"><i class="fa fa-bars"></i></div>
<div class="courage_post_related"><input type="button" id="slide-right-btn" class="slide-right"/></div>


		    <div class="courage_post_head_img">
                                    <?php bp_activity_avatar(); ?>
                                    </div>
<?php// bp_activity_user_link(); ?>


		


	

		<div class="courage_post_head_text">

			<?php// bp_activity_action(); ?>
<?php 



global $activities_template;
$user_id = bp_get_activity_user_id();
$author_bp_profile = bp_core_get_user_domain( $user_id );?>
<a href="<?php //echo $author_bp_profile;?>"><?php echo $activities_template->activity->user_nicename;?></a>
<?php
//echo bp_activity_time_since;
//echo $activities_template->activity->user_login;
echo $action = bp_insert_activity_meta( $action );


?>


		</div></div>
		
		<?php //echo bp_get_activity_user_id();
//$myarray = bp_insert_activity_meta( ); 
//print_r($myarray);

		?>





		<?php if ( bp_activity_has_content() ) : ?>

			<div class="courage_post_content">

				<?php bp_activity_content_body(); ?>

			</div>	

		<?php endif; ?>

		

	<?php

	/**
	 * Fires before the display of the activity entry comments.
	 *
	 * @since BuddyPress (1.2.0)
	 */
	do_action( 'bp_before_activity_entry_comments' ); ?>

	<?php if ( ( bp_activity_get_comment_count() || bp_activity_can_comment() ) || bp_is_single_activity() ) : ?>

		<div class="courage_comments">
	
			<?php bp_activity_comments(); ?>

			<?php if ( is_user_logged_in() && bp_activity_can_comment() ) : ?>

				<form action="<?php bp_activity_comment_form_action(); ?>" method="post" id="ac-form-<?php bp_activity_id(); ?>" class="ac-form"<?php bp_activity_comment_form_nojs_display(); ?>>
					<div class="ac-reply-avatar"><?php bp_loggedin_user_avatar( 'width=' . BP_AVATAR_THUMB_WIDTH . '&height=' . BP_AVATAR_THUMB_HEIGHT ); ?></div>
				
					<div class="ac-reply-content">
						<div class="ac-textarea">
							<textarea id="ac-input-<?php bp_activity_id(); ?>" class="ac-input bp-suggestions" name="ac_input_<?php bp_activity_id(); ?>"></textarea>
						</div>
						<input type="submit" name="ac_form_submit" value="<?php esc_attr_e( 'Post', 'buddypress' ); ?>" /> &nbsp; <a href="#" class="ac-reply-cancel"><?php _e( 'Cancel', 'buddypress' ); ?></a>
						<input type="hidden" name="comment_form_id" value="<?php bp_activity_id(); ?>" />
					</div>

					<?php

					/**
					 * Fires after the activity entry comment form.
					 *
					 * @since BuddyPress (1.5.0)
					 */
					do_action( 'bp_activity_entry_comments' ); ?>

					<?php wp_nonce_field( 'new_activity_comment', '_wpnonce_new_activity_comment' ); ?>

				</form>

			<?php endif; ?>

		</div>

	<?php endif; ?>

	<?php

	/**
	 * Fires after the display of the activity entry comments.
	 *
	 * @since BuddyPress (1.2.0)
	 */
	do_action( 'bp_after_activity_entry_comments' ); ?>

</div>


<?php

/**
 * Fires after the display of an activity entry.
 *
 * @since BuddyPress (1.2.0)
 */
do_action( 'bp_after_activity_entry' ); ?>
		<div class="courage_post_footer">
                                	<div class="courage_post_care">
                                    	<span class="cared_trigger">
                                        	<span class="carebut"><?php

				/**
				 * Fires at the end of the activity entry meta data area.
				 *
				 * @since BuddyPress (1.2.0)
				 */
				do_action( 'bp_activity_entry_meta' ); ?>	</span>
                                            
                                        </span>
                                    </div>
                                    <div class="courage_post_foot_share">
                                        <div class="courage_post_foot_sub_talk"><?php if ( is_user_logged_in() ) : ?>

				<?php if ( bp_activity_can_comment() ) : ?>

					<a href="<?php bp_activity_comment_link(); ?>" class="button acomment-reply bp-primary-action" id="acomment-comment-<?php bp_activity_id(); ?>"><?php printf( __( '<span class="icon-talk"></span> talk <span>%s</span>', 'buddypress' ), bp_activity_get_comment_count() ); ?></a>

				<?php endif; ?></div>
                                        <div class="courage_post_foot_sub_share"><span class="icon-share-on-social"></span> <?php echo do_shortcode( '[LoginRadius_Share type="horizontal"]' ) ?></div>
                                    </div>
                                </div>

<?php

		/**
		 * Fires after the display of an activity entry content.
		 *
		 * @since BuddyPress (1.2.0)
		 */
		do_action( 'bp_activity_entry_content' ); ?>

		<div class="courage_comment_meta">


			<?php if ( bp_get_activity_type() == 'activity_comment' ) : ?>

				<a href="<?php bp_activity_thread_permalink(); ?>" class="button view bp-secondary-action" title="<?php esc_attr_e( 'View Conversation', 'buddypress' ); ?>"><?php _e( 'View Conversation', 'buddypress' ); ?></a>

			<?php endif; ?>

			

			
<?php /**	if ( bp_activity_can_favorite() ) : ?>

					<?php if ( !bp_get_activity_is_favorite() ) : ?>

						<a href="<?php bp_activity_favorite_link(); ?>" class="button fav bp-secondary-action" title="<?php esc_attr_e( 'Mark as Favorite', 'buddypress' ); ?>"><?php _e( 'Favorite', 'buddypress' ); ?></a>

					<?php else : ?>

						<a href="<?php bp_activity_unfavorite_link(); ?>" class="button unfav bp-secondary-action" title="<?php esc_attr_e( 'Remove Favorite', 'buddypress' ); ?>"><?php _e( 'Remove Favorite', 'buddypress' ); ?></a>

					<?php endif; ?>

				<?php endif;*/ ?> 
		

			<?php endif; ?>
			

			
			
	

                        
		</div>
	</div>
</div>
<div class="col-sm-6">
                        	<div class="rare_flyout_open" style="height:423px;">
                            	<h1>rareRelated</h1>
                                    <ul class="rare-list">
                                	<li>
                                    	<div class="rel_icon"><span style="color:#6e8fda;" class="icon-evidence-and-education"></span></div>
                                        <div class="rel_title">
                                            <a href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/evidence-and-education/recommendations-for-the-predictive-genetic-test-in-huntingtons-disease/">Recommendations for the predictive genetic test in Huntington's disease.</a>
                                        </div>
                                        <div class="rel_source">Source: Clin Genet</div>
                                    </li>
                                    <li>
                                    	<div class="rel_icon"><span style="color:#1daaee;" class="icon-experts"></span></div>
                                        <div class="rel_title">
                                            <a href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/lauren-korty-ms/">Lauren Korty, MS</a>
                                        </div><div class="rel_source">Source: Huntington's Disease Clinical Research Center, University of California , San Diego (UCSD) School of Medicine</div>
                                    </li>
                                    <li>
                                    	<div class="rel_icon"><span style="color:#84c659;" class="icon-research-grants"></span></div>
                                        <div class="rel_title">
                                            <a href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/rarecurate-nih-research-grants/families-at-risk-long-term-impact-of-huntingtons-presymptomatic-genetic-testing/">Families At Risk: Long-Term Impact of Huntington Presymptomatic</a>
                                        </div><div class="rel_source">Source: NIH RePORTER</div>
                                    </li>
                                    <li>
                                    	<div class="rel_icon"><span style="color:#fa9340;" class="icon-news-and-meetings"></span></div>
                                        <div class="rel_title">
                                            <a target="_blank" href="http://www.dailyrecord.co.uk/news/real-life/five-brave-siblings-face-life-changing-5757932">Five brave siblings face life-changing blood tests to</a>
                                        </div><div class="rel_source">Source: dailyrecord.co.uk</div>
                                    </li>
                                    <li>
                                    	<div class="rel_icon"><span style="color:#269fd9;" class="icon-clinical"></span></div>
                                        <div class="rel_title">
                                            <a href="http://hd.demo.onevoice.world/rclinical/family-health-after-predictive-huntington-disease-hd-testing/">Family Health After Predictive Huntington Disease (HD) Testing</a>
                                        </div><div class="rel_source">Source: rareClinical</div>
                                    </li>
                                    <li>
                                    	<div class="rel_icon"><span style="color:#237d76;" class="icon-videos-and-visuals"></span></div>
                                        <div class="rel_title"><a class="various fancybox.iframe" href="https://www.youtube.com/embed/cptrFznN7cE">Genetic Testing for Huntington Disease</a></div>
                                        <div class="rel_source">Source: HOPES (via YouTube)</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
	</div>