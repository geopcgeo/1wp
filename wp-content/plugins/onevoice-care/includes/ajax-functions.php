<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * bp_care_process_ajax()
 *
 * Runs the relevant function depending on what Ajax call has been made.
 *
 */
function bp_care_process_ajax() {
    global $bp;

    $id = preg_replace( "/\D/" , "" , $_POST['id'] );

    if ( $_POST['type'] == 'button like' ) {
        bp_care_add_user_like( $id , 'activity' );
        add_action( 'view_who_likes' , 'bp_care_get_some_likes' );
    }

    if ( $_POST['type'] == 'button unlike' ) {
        bp_care_remove_user_like( $id , 'activity' );
    }

    if ( $_POST['type'] == 'acomment-reply bp-primary-action like' ) {
        bp_care_add_user_like( $id , 'activity' );
    }

    if ( $_POST['type'] == 'acomment-reply bp-primary-action unlike' ) {
        bp_care_remove_user_like( $id , 'activity' );
    }

    if ( $_POST['type'] == 'button view-likes' ) {
        bp_care_get_likes( $id , 'activity' );
    }

    if ( $_POST['type'] == 'button like_blogpost' ) {
        bp_care_add_user_like( $id , 'blogpost' );
    }

    if ( $_POST['type'] == 'button unlike_blogpost' ) {
        bp_care_remove_user_like( $id , 'blogpost' );
    }

    if ( $_POST['type'] == 'acomment-reply bp-primary-action view-likes' ) {
        bp_care_get_likes( $id , 'activity' );
    }

    die();
}

add_action( 'wp_ajax_activity_like' , 'bp_care_process_ajax' );

// *****************************7/20/2015*******start*****************************

function enqueue_scripts_styles_init() {
	wp_enqueue_script( 'ajax-script', get_stylesheet_directory_uri().'/js/script.js', array('jquery'), 1.0 ); // jQuery will be included automatically
	wp_localize_script( 'ajax-script', 'ajax_object', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) ); // setting ajaxurl
}
add_action('init', 'enqueue_scripts_styles_init');
 
function thanks_action_stuff() {
	global $wpdb;
 // getting variables from ajax post
$id1=$_POST['post_bplikeid'];
$uid=$_POST['post_uid'];
$count1=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and thanks='1' and userid='$uid'");
if($count1 > 0){
$result = $wpdb->query("delete from wp_bp_activity_metausers where actid='$id1' and thanks='1' and userid='$uid'");	
$count_thanks=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and thanks='1'");
$count2=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and thanks='1' and userid='$uid'");
$count_prayers=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and prayers='1'");		
$count_hugs=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and hugs='1'");		
$count_cares=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and cares='1'");		
$care=$count_hugs+$count_prayers+$count_thanks+$count_cares;
echo $count2.','.$count_thanks.','.$care;
die(); // stop executing script	
}else{
	$query_result = $wpdb->query("SELECT id FROM wp_bp_activity_metausers");
      if(empty($query_result)) {
                $query = "CREATE TABLE `wp_bp_activity_metausers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(100) NOT NULL,
  `thanks` int(100) NOT NULL,
  `hugs` int(100) NOT NULL,
  `prayers` int(100) NOT NULL,
  `cares` int(100) NOT NULL,
  `actid` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;
";
                $result = $wpdb->query($query);
} 

$result = $wpdb->query("insert into wp_bp_activity_metausers(actid,thanks,userid)values('$id1','1','$uid')");	
$count_thanks=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and thanks='1'");
$count2=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and thanks='1' and userid='$uid'");
$count_prayers=$wpdb->get_var("select COUNT(*)  from wp_bp_activity_metausers where actid='$id1' and prayers='1'");		
$count_hugs=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and hugs='1'");		
$count_cares=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and cares='1'");		
$care=$count_hugs+$count_prayers+$count_thanks+$count_cares;;
echo $count2.','.$count_thanks.','.$care;
die(); // stop executing script	
}

}
add_action( 'wp_ajax_thanks_action', 'thanks_action_stuff' ); // ajax for logged in users
add_action( 'wp_ajax_nopriv_thanks_action', 'thanks_action_stuff' ); // ajax for not logged in users

// ********hugs**start*******
function ajax_action_hug() {
	global $wpdb;
 // getting variables from ajax post
$id1=$_POST['post_bplikeid'];
$uid=$_POST['post_uid'];
$count1=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and hugs='1' and userid='$uid'");

if($count1 > 0){
$result = $wpdb->query("delete from wp_bp_activity_metausers where actid='$id1' and hugs='1' and userid='$uid'");	
$count_hugs=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and hugs='1'");
$count2=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and hugs='1' and userid='$uid'");
$count_thanks=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and thanks='1'");		
$count_prayers=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and prayers='1'");		
$count_cares=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and cares='1'");		
$care=$count_hugs+$count_prayers+$count_thanks+$count_cares;
echo $count2.','.$count_hugs.','.$care;
die(); // stop executing script	
}else{
$query_result = $wpdb->query("SELECT id FROM wp_bp_activity_metausers");
      if(empty($query_result)) {
                $query = "CREATE TABLE `wp_bp_activity_metausers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(100) NOT NULL,
  `thanks` int(100) NOT NULL,
  `hugs` int(100) NOT NULL,
  `prayers` int(100) NOT NULL,
  `cares` int(100) NOT NULL,
  `actid` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;
";
                $result = $wpdb->query($query);
} 
$result = $wpdb->query("insert into wp_bp_activity_metausers(actid,hugs,userid)values('$id1','1','$uid')");	
$count_hugs=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and hugs='1'");
$count2=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and hugs='1' and userid='$uid'");
$count_thanks=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and thanks='1'");		
$count_prayers=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and prayers='1'");		
$count_cares=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and cares='1'");		
$care=$count_hugs+$count_prayers+$count_thanks+$count_cares;
echo $count2.','.$count_hugs.','.$care;
die(); // stop executing script	
}

}
add_action( 'wp_ajax_ajax_hugaction', 'ajax_action_hug' ); // ajax for logged in users

// ********Prayers**start*******
function ajax_action_prayer() {
	global $wpdb;
 // getting variables from ajax post
$id1=$_POST['post_bplikeid'];
$uid=$_POST['post_uid'];
$count1=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and prayers='1' and userid='$uid'");
if($count1 > 0){
$result = $wpdb->query("delete from wp_bp_activity_metausers where actid='$id1' and prayers='1' and userid='$uid'");	
$count_prayers=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and prayers='1'");
$count2=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and prayers='1' and userid='$uid'");
$count_thanks=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and thanks='1'");		
$count_hugs=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and hugs='1'");		
$count_cares=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and cares='1'");		
$care=$count_hugs+$count_prayers+$count_thanks+$count_cares;
echo $count2.','.$count_prayers.','.$care;
die(); // stop executing script	
}else{
$query_result = $wpdb->query("SELECT id FROM wp_bp_activity_metausers");
      if(empty($query_result)) {
                $query = "CREATE TABLE `wp_bp_activity_metausers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(100) NOT NULL,
  `thanks` int(100) NOT NULL,
  `hugs` int(100) NOT NULL,
  `prayers` int(100) NOT NULL,
  `cares` int(100) NOT NULL,
  `actid` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;
";
                $result = $wpdb->query($query);
} 
$result = $wpdb->query("insert into wp_bp_activity_metausers(actid,prayers,userid)values('$id1','1','$uid')");	
$count_prayers=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and prayers='1'");
$count2=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and prayers='1' and userid='$uid'");
$count_thanks=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and thanks='1'");		
$count_hugs=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and hugs='1'");		
$count_cares=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and cares='1'");		
$care=$count_hugs+$count_prayers+$count_thanks+$count_cares;
echo $count2.','.$count_prayers.','.$care;
die(); // stop executing script	
}

}
add_action( 'wp_ajax_ajax_prayaction', 'ajax_action_prayer' ); // ajax for logged in users
// ********care**start*******
function ajax_action_care() {
	global $wpdb;
 // getting variables from ajax post
$id1=$_POST['post_bplikeid'];
$uid=$_POST['post_uid'];
$count1=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and cares='1' and userid='$uid'");

if($count1 > 0){
$result = $wpdb->query("delete from wp_bp_activity_metausers where actid='$id1' and cares='1' and userid='$uid'");	
$count_hugs=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and hugs='1'");
$count2=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and cares='1' and userid='$uid'");
$count_thanks=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and thanks='1'");		
$count_prayers=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and prayers='1'");	
$count_cares=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and cares='1'");		
$care=$count_hugs+$count_prayers+$count_thanks+$count_cares;
echo $count2.','.$count_cares.','.$care;
die(); // stop executing script	
}else{
$query_result = $wpdb->query("SELECT id FROM wp_bp_activity_metausers");
      if(empty($query_result)) {
                $query = "CREATE TABLE `wp_bp_activity_metausers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(100) NOT NULL,
  `thanks` int(100) NOT NULL,
  `hugs` int(100) NOT NULL,
  `prayers` int(100) NOT NULL,
  `cares` int(100) NOT NULL,
  `actid` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;
";
                $result = $wpdb->query($query);
} 
$result = $wpdb->query("insert into wp_bp_activity_metausers(actid,cares,userid)values('$id1','1','$uid')");	
$count_hugs=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and hugs='1'");
$count2=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and cares='1' and userid='$uid'");
$count_thanks=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and thanks='1'");		
$count_prayers=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and prayers='1'");		
$count_cares=$wpdb->get_var("select COUNT(*) from wp_bp_activity_metausers where actid='$id1' and cares='1'");		
$care=$count_hugs+$count_prayers+$count_thanks+$count_cares;
echo $count2.','.$count_cares.','.$care;
die(); // stop executing script	
}

}
add_action( 'wp_ajax_ajax_careaction', 'ajax_action_care' ); // ajax for logged in users

?>
		
    