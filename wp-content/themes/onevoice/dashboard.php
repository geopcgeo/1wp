<?php
/**
Template Name: Dasboard Template
 *
 * @package WordPress
 * @subpackage One_voice
 * @since Onevoice 1.0
 */
get_header(); ?>



<?php

global $wpdb;
$result1=$wpdb->get_results("SELECT actid, COUNT( actid )as careid
FROM wp_bp_activity_metausers where actid in(SELECT id from wp_bp_activity where type='activity_update')
GROUP BY actid
ORDER BY COUNT( actid ) DESC 
",ARRAY_A);	
$result= array();
foreach($result1 as $key=>$val){
$result[$val['actid']]=$val['careid'];
}
$result2=$wpdb->get_results("SELECT item_id,COUNT( item_id) as cmtid FROM wp_bp_activity where type='activity_comment'
GROUP BY item_id ORDER BY COUNT( item_id) DESC",ARRAY_A);	
foreach($result2 as $key=>$val){
$result[$val['item_id']]=(int)$result[$val['item_id']]+(int)$val['cmtid'];	
}
$array=$result;
$res=max(array_values($result));
$maxs =array_search("$res",$result);
$result_row=$wpdb->get_row("SELECT *,wp_bp_activity.user_id as userid  from wp_bp_activity inner join wp_users on wp_users.id=wp_bp_activity.user_id where wp_bp_activity.id='$maxs'");

$daytime=$result_row->date_recorded;
$new_date = date("M d, Y", strtotime($daytime));
$new1_date = date("H:i a", strtotime($daytime));
$fetured_row=$wpdb->get_row("SELECT * from wp_postmeta inner join wp_posts on wp_postmeta.post_id=wp_posts.ID where meta_key='wpcf-feature-this-post' order by meta_id desc limit 0,1");
$time=$fetured_row->post_date;
$feature_date = date("M d, Y", strtotime($time));
$feature_date1= date("H:i a", strtotime($time));
?>

<section id="primary-cont">


      	<div class="col-sm-12">
                    	<div class="content">
                            <div class="dash_head">
                                good morning,  <strong><?php global $current_user;
      get_currentuserinfo();

      echo   $current_user->display_name ;

?></strong>            	
                                <div class="dash_head_button "><a href="#"><img class="dropbinder ui-droppable" src="http://hd.demo.onevoice.world/wp-content/themes/twentyeleven/images/note-to-self.png"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                 <div class="dash-well">
                                        <div id="dash_courage" class="dash-well-head">
                                            top conversation
                                        </div>
                                        <div class="dash-well-cont">
                                      <?php echo stripslashes($result_row->content);?>

                                        </div>
                                        <div class="dash-footer">
                                            <a href="<?php echo bp_core_get_user_domain( $result_row->userid); ?>"> <?php echo ucfirst ($result_row->user_nicename); ?> </a>
                                            <span class="courage_post_posted_date"> <?php echo $new_date." at ".$new1_date ?> </span>
                                        </div>
										 <a class="poll_button" href="#">get rareRelated content</a>
                                    </div>
									<div class="dash-well">
                                     <div id="dash_curate" class="dash-well-head">
                                            featured content 
                                        </div>
                                        <div class="dash-well-cont">
                                      <?php echo substr($fetured_row->post_content,0,200);?>..

                                        </div>
                                        <div class="dash-footer">
                                            <a href="index.php?p=<?php echo $fetured_row->post_id ?>">Source: <?php echo $Journal= get_post_meta( $fetured_row->post_id, "wpcf-journal", true );echo " "; ?></a><br>
                                            <span class="courage_post_posted_date" style="font-size:10px;"><?php echo $feature_date." at ".$feature_date1 ?></span>
                                        </div>
									 <a class="poll_button" href="#">get content hand-curated  for you</a>
									</div>
									
									
									<div class="dash-well">
 <div class="center-col-title">recently added</div>
 <div class="dash-rel white">
                                        	<ul class="rare-list">
<?php
$getall_types = $wpdb->get_results("SELECT post_type,ID FROM (select post_type,ID from wp_posts  where  post_type Not In('page','forum','attachment','wp-types-group','revision','userdetail','media')  order by ID desc)x GROUP BY post_type order by ID desc");
foreach($getall_types as $items){
$post_type = $items->post_type;
 
$featured = $wpdb->get_row("(select ID,post_content,post_title,post_type from wp_posts  where post_type='$post_type' and post_status='publish' order by ID desc limit 0,1)");
 if($post_type=='people'){
      ?>

<li>
<div class="rel_icon"><span style="color:#1daaee;" class="icon-experts"></span></div>
<div class="rel_title">
   <a href="index.php?p=<?php echo $featured->ID ?>"><?php echo $featured->post_title; ?>    </a>              </div>
<div class="rel_source">
Source: <?php echo $Address= get_post_meta( $featured->ID, "wpcf-address", true );echo " "; ?></div>
</li>
<?php }
if($post_type=='evidance-education') {
?>
<li>
<div class="rel_icon"><span style="color:#84c659;" class="icon-evidence-and-education"></span></div>
<div class="rel_title">
  <a href="index.php?p=<?php echo $featured->ID ?>"><?php echo $featured->post_title; ?></a>
</div>
<div class="rel_source">Source: <?php echo $Journal= get_post_meta( $featured->ID, "wpcf-journal", true );echo " "; ?></div>
</li>
<?php }}?>
   
  
<?php $getall_activity = $wpdb->get_row("select * from wp_bp_activity where type In('activity_update') order by id desc  limit 0,1");
 if($getall_activity->content){?>
<li>
<div class="rel_icon"><span style="color:#10ac96;" class="icon-courage"></span></div>
<div class="rel_title">
<a href="<?php echo bp_core_get_user_domain( $getall_activity->user_id); ?>activity/<?php echo $getall_activity->id?>/"><?php echo $getall_activity->content;?></a></div>
<div class="rel_source">Source: rareCourage discussion</div>
</li>
 <?php }?>
   

</ul>
</div>
</div>
									
									
									
									
									
									
									
					
								</div>
                                <div class="col-sm-4">
                                    <div class="dash-well">
									 <div class="center-col-title">rare <strong>Poll</strong></div>
									<?php if ( dynamic_sidebar('dashboard-sidebar-2') ) : else : endif; ?>
                                        <!--
                                        <div class="poll_content">The need for technology solutions combining emotional support and knowledge resources is:
                                            <div class="poll_content_in">
                                                <input type="radio" id="p_crit" name="poll"><label for="p_crit">critical</label><br>
                                                <input type="radio" id="p_mid" name="poll"><label for="p_mid">somewhere in the middle</label><br>
                                                <input type="radio" id="p_low" name="poll"><label for="p_low">low</label><br>
                                            </div>
                                            <a class="poll_button" href="#">+ submit answer</a>
                                        </div>-->
                                    </div>
									<div class="dash-well">
                                        <div id="dash_social" class="dash-well-head">
                                            Social & Media 
                                        </div>
                                        <div class="dash-well-cont ">
                                        	<ul class="social-link-list">
                                            	<li>
													<div class="list-img-box">
                                                	  <a href="#">Huntington's Disease Clinical Research support</a>
                                                      <br>
                                                      <span style="font-size:13px;">Source: Facebook.com</span>
													 </div>
                                                </li>
                                                <li>	<div class="list-img-box">
                                                	  <a href="#">Huntington's Disease Clinical Research support</a>
                                                      <br>
                                                      <span style="font-size:13px;">Source: Twitter</span> </div>
                                                </li>
                                                <li>	<div class="list-img-box">
                                                	  <a href="#">Huntington's Disease Clinical Research support</a>
                                                      <br>
                                                      <span style="font-size:13px;">Source: Wordpress</span> </div>
                                                </li>
                                            </ul>
                                        </div>
                                       <div class="dash_trial_view_all">
                                       		<a href="/rareclinical/">view all 24</a>
                                       </div>
                                    </div>
                                    <div class="dash-well">
                                        <div id="dash_clinical" class="dash-well-head">
                                            recruiting trials 
                                        </div>
                                        <div class="dash-well-cont">
                                        	<ul class="dash_trialst">
                                            	<li>
                                                	  <a href="#">Randomized, Placebo Controlled Study Of The Efficacy</a>
                                                      <br>
                                                      <span style="font-size:13px;">Category: investigational/potential treatment or device</span>
                                                </li>
                                                <li>
                                                	  <a href="#">Randomized, Placebo Controlled Study Of The Efficacy</a>
                                                      <br>
                                                      <span style="font-size:13px;">Category: investigational/potential treatment or device</span>
                                                </li>
                                                <li>
                                                	  <a href="#">Randomized, Placebo Controlled Study Of The Efficacy</a>
                                                      <br>
                                                      <span style="font-size:13px;">Category: investigational/potential treatment or device</span>
                                                </li>
                                            </ul>
                                        </div>
                                       <div class="dash_trial_view_all">
                                       		<a href="/rareclinical/">view all 24</a>
                                       </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="dash-well">
                                       <div class="enc_power">
                                       		<div class="right-col-title">encouragement power</div>
                                            <div class="enc_power-img"> <img src="<?php echo get_template_directory_uri()?>/images/stripes-number.png" border="0"/> </div>
                                       </div>
                                    </div>
                                    <div class="dash-well">
                                        <div class="community_leaderboard">
                                            become a part of our<br> community leaderboard
                                        </div>
                                    </div>
                                    <div class="dash-well">
                                       	<div class="dash_new_member">
                                        	<div class="right-col-title">new members</div>
                                            <ul class="new_member-list">
                                                <li>  
                                                	<?php if ( dynamic_sidebar('dashboard-sidebar-3') ) : else : endif; ?>
                                                </li>
                                                
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="dash-well">
                                        <div class="right-col-title">suggestions</div>
                                        <div class="suggestions-box">
                                      <?php echo do_shortcode('[contact-form-7 id="151" title="Dashboard Contact"]'); ?>
                                        
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
					</section>
            </section>
    </section>
</div>

<?php get_footer(); ?>