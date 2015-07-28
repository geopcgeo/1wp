<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * bp_care_button()
 *
 * Outputs the 'Care,Thanks,hugs,prayers' button.
 * 
 * TODO: Need to find/make function for getting activity type.
 * Also idea to get all registered types on site, and alert admin of unspoorted types,
 * and ask them to report them to myself.
 *
 */
function bp_care_button( $id = '' , $type = '' ) {

    /* Set the type if not already set, and check whether we are outputting the button on a blogpost or not. */
    if ( !$type && !is_single() ) {
        $type = 'activity';
    } elseif ( !$type && is_single() ) {
        $type = 'blogpost';
    }
    if ( $type == 'activity' ) {
        bplike_activity_button();
    } elseif ( $type == 'blogpost' ) {
        bplike_blog_button();
        bp_get_activity_type();
    }
}

// Filters to display OneVoice Care button.
add_filter( 'bp_activity_entry_meta' , 'bp_care_button', 1000 );
add_action( 'bp_before_blog_single_post' , 'bp_care_button' , 1000 );
add_filter( 'bp_activity_comment_options' , 'bp_care_button', 1000 );

/*
 * bplike_activity_button()
 * 
 * Outputs the 'Care,Thanks,hugs,prayers' button.
 * 
 * TODO: Try to have one function for all. 
 * Make simplier.
 * Get type in a better way. (comment or activty item, etc)
 */

function bplike_activity_button() {

    // Debugging.
    // echo bp_get_activity_type();

    $liked_count = 0;
    $bp_care_comment_id = bp_get_activity_comment_id();

    if ( empty( $bp_care_comment_id ) ) {

        $bp_care_id = bp_get_activity_id();
        $bp_care_view = 'button view-likes';

        if ( bp_care_is_liked( $bp_care_id , 'activity' ) ) {
            $bp_care_css = 'button unlike';
        } else {
            $bp_care_css = 'button like';
        }
    } else {

        $bp_care_id = bp_get_activity_comment_id();
        $bp_care_view = 'acomment-reply bp-primary-action view-likes';

        if ( bp_care_is_liked( $bp_care_id , 'activity' ) ) {
            $bp_care_css = 'acomment-reply bp-primary-action unlike';
        } else {
            $bp_care_css = 'acomment-reply bp-primary-action like';
        }
    }

    // Debugging.
    //print_r( bp_activity_get_meta( $bp_care_id , 'liked_count' , true ));


    $activity = bp_activity_get_specific( array('activity_ids' => $bp_care_id) );
    $activity_type = $activity['activities'][0]->type;
    // Debugging.
    //print_r($activity);

    if ( $activity_type === null ) {
        $activity_type = 'activity_update';
    }

    if ( is_user_logged_in() && $activity_type !== 'activity_liked' ) {

        if ( bp_activity_get_meta( $bp_care_id , 'liked_count' , true ) ) {
            $users_who_like = array_keys( bp_activity_get_meta( $bp_care_id , 'liked_count' , true ) );
            $liked_count = count( $users_who_like );
        }

        if ( !bp_care_is_liked( $bp_care_id , 'activity' ) ) {            

		$uid=get_current_user_id();
		global $wpdb;
		$count_thanks=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$bp_care_id' and thanks='1'");		
		$count_hugs=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$bp_care_id' and hugs='1'");		
		$count_prayers=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$bp_care_id' and prayers='1'");
		$count_cares=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$bp_care_id' and cares='1'");				
		$count_cared=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$bp_care_id' and cares='1' and userid='$uid'");		
		$care=$count_thanks+$count_hugs+$count_prayers+$count_cares;
		?>
			<div class="courage_post_foot_enc" >
					
					<?php 
						// ****************care****start**************
					if($count_cares >0){	
					if($count_cared >0){?>
				<span class="cared_trigger" onclick="care(<?php echo $bp_care_id ?>,<?php echo $uid ?>)">
					<span class="carebut" id="caredid_<?php echo $bp_care_id ?>"><sub></sub> cared&nbsp;&nbsp;</span>&nbsp;
					<span class="enc_counter" id="careid_<?php echo $bp_care_id ?>" ><?php echo $care ;?></span>
					</span>
				
				<?php }
				else
				{?>	

				<span class="cared_trigger" onclick="care(<?php echo $bp_care_id ?>,<?php echo $uid ?>)">
				<span class="carebut" id="caredid_<?php echo $bp_care_id ?>"><sub>+</sub> care&nbsp;&nbsp;</span>&nbsp;
					<span class="enc_counter" id="careid_<?php echo $bp_care_id ?>" ><?php echo $care ;?></span>
					</span>			
				<?php 
				}					
					}else{
						?>
				    <span class="cared_trigger" onclick="care(<?php echo $bp_care_id ?>,<?php echo $uid ?>)">
					<span class="carebut" id="caredid_<?php echo $bp_care_id ?>"><sub>+</sub> care&nbsp;&nbsp;</span>&nbsp;
					<span class="enc_counter" id="careid_<?php echo $bp_care_id ?>" ><?php echo $care ;?></span>
					</span>
					<?php }
						// **************care****end****************	
					?>
					
					<div class="courage_post_foot_enc_opts">
									<?php
				// *****************hugs *****************					

				$count_huged=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$bp_care_id' and hugs='1' and userid='$uid'");		

				if($count_hugs >0){
				if($count_huged >0){?>
				<div class="enc_hug enc_trigger" style="color: rgb(62, 76, 74); background-color: rgb(1, 139, 205);"id="hugid_<?php echo $bp_care_id ?>" onClick="hugs(<?php echo $bp_care_id ?>,<?php echo $uid ?>)">
						<div class="care-comb"><span class="icon-hugs"></span><span class="typechange">hugged</span></div>	
						<div class="enc_hug_num enc_val"><?php echo $count_hugs ?></div>
						<span class="enc_hug_ch_h"></span>
						</div>
				
				<?php }
				else
				{?>	

				<div class="enc_hug enc_trigger" id="hugid_<?php echo $bp_care_id ?>" onClick="hugs(<?php echo $bp_care_id ?>,<?php echo $uid ?>)">
						<div class="care-comb"><span class="icon-hugs"></span><span class="plus">+</span> <span class="typechange">hugs</span></div>	
						<div class="enc_hug_num enc_val"><?php echo $count_hugs ?></div>
						<span class="enc_hug_ch"></span>
						</div>				
				<?php }
				}
				else
				{?>

				<div class="enc_hug enc_trigger" id="hugid_<?php echo $bp_care_id ?>" onClick="hugs(<?php echo $bp_care_id ?>,<?php echo $uid ?>)">
						<div class="care-comb"><span class="icon-hugs"></span> <span class="plus">+</span>  <span class="typechange">hugs</span></div>	
						<div class="enc_hug_num enc_val">0</div>
						<span class="enc_hug_ch"></span>
						</div>	
				<?php }

				// *****************hugs end*****************			
				// *****************thanks*****************						
			$count_thanked=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$bp_care_id' and thanks='1' and userid='$uid'");		

			if($count_thanks >0){
			if($count_thanked >0){?>
			
            <div class="enc_thank enc_trigger" style="color: rgb(62, 76, 74); background-color: rgb(1, 139, 205);" onClick="thanks(<?php echo $bp_care_id ?>,<?php echo $uid ?>)" id="fetchid_<?php echo $bp_care_id ?>">
			<div class="care-comb"><span class="icon-thanks"></span> <span class="typechange">thanked</span></div>	
			<div class="enc_thank_num enc_val"><?php echo $count_thanks ?></div>
			<span class="enc_thank_ch_h"></span>
			</div>				
			<?php }
			else
			{?>	
			
            <div class="enc_thank enc_trigger" onClick="thanks(<?php echo $bp_care_id ?>,<?php echo $uid ?>)" id="fetchid_<?php echo $bp_care_id ?>">
			<div class="care-comb"><span class="icon-thanks"></span><span class="plus">+</span> <span class="typechange">thanks</span></div>	
			<div class="enc_thank_num enc_val"><?php echo $count_thanks ?></div>
			<span class="enc_thank_ch"></span>
			</div>				
			<?php }
			}
			else
			{?>
			
			<div class="enc_thank enc_trigger" onClick="thanks(<?php echo $bp_care_id ?>,<?php echo $uid ?>)" id="fetchid_<?php echo $bp_care_id ?>">
			<div class="care-comb"><span class="icon-thanks"></span> <span class="plus">+</span> <span class="typechange">thanks</span></div>	
			<div class="enc_thank_num enc_val">0</div>
			<span class="enc_thank_ch"></span>
			</div>	

			<?php }

			// *****************thanks end*************	
			// *****************prayer*****************					
			$count_prayered=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$bp_care_id' and prayers='1' and userid='$uid'");			 
			if($count_prayers >0){
			if($count_prayered >0){?>
				
			<div id="prayid_<?php echo $bp_care_id ?>" style="color: rgb(62, 76, 74); background-color: rgb(1, 139, 205);" class="enc_pray enc_trigger" onClick="pray(<?php echo $bp_care_id ?>,<?php echo $uid ?>)">
				<div class="care-comb"><span class="icon-prayers"></span><span class="typechange">prayed</span></div>	
				<div class="enc_pray_num enc_val"><?php echo $count_prayers ?></div>		
				<span class="enc_pray_ch_h" style="color: #076591;"></span>				
				</div>
			<?php }
			else
			{?>	

			<div id="prayid_<?php echo $bp_care_id ?>" class="enc_pray enc_trigger" onClick="pray(<?php echo $bp_care_id ?>,<?php echo $uid ?>)">
				<div class="care-comb"><span class="icon-prayers"></span><span class="plus">+</span>  <span class="typechange">prayers</span></div>	
				<div class="enc_pray_num enc_val"><?php echo $count_prayers ?></div>	
				<span class="enc_pray_ch"></span>				
				</div>			
			<?php }
			}
			else
			{?>

			<div id="prayid_<?php echo $bp_care_id ?>" class="enc_pray enc_trigger" onClick="pray(<?php echo $bp_care_id ?>,<?php echo $uid ?>)">
				<div class="care-comb"><span class="icon-prayers"></span> <span class="plus">+</span> <span class="typechange">prayers</span></div>	
				<div class="enc_pray_num enc_val">0</div>		<span class="enc_pray_ch"></span>		
				</div>			
			<?php }

			// *****************prayer end*****************	?>			
					</div>
				</div>
			<?php
   
				} 
				

        // Checking if there are users who like item.
        if ( isset ($users_who_like) ) {
            view_who_likes();
        }
    }
}




?>