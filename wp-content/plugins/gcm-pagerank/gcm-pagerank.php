<?php
/*
Plugin Name: GCM PageRank Checker
Plugin URI: http://greenclickmedia.dk
Description: This awesome plugin contains functions for retrieving a PageRank for a website!
Version: 1.0
Author: Green Click Media
Author URI: http://greenclickmedia.dk
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

 class PR {
 public function get_pagerank($url) {
 $query="http://toolbarqueries.google.com/tbr?client=navclient-auto&ch=".$this->CheckHash($this->HashURL($url)). "&features=Rank&q=info:".$url."&num=100&filter=0";
 $data=file_get_contents($query);
 $pos = strpos($data, "Rank_");
 if($pos === false){} else{
 $pagerank = substr($data, $pos + 9);
 return $pagerank;
 }
 }
 public function StrToNum($Str, $Check, $Magic)
 {
 $Int32Unit = 4294967296; // 2^32
 $length = strlen($Str);
 for ($i = 0; $i < $length; $i++) {
 $Check *= $Magic;
 if ($Check >= $Int32Unit) {
 $Check = ($Check - $Int32Unit * (int) ($Check / $Int32Unit));
 $Check = ($Check < -2147483648) ? ($Check + $Int32Unit) : $Check;
 }
 $Check += ord($Str{$i});
 }
 return $Check;
 }
 public function HashURL($String)
 {
 $Check1 = $this->StrToNum($String, 0x1505, 0x21);
 $Check2 = $this->StrToNum($String, 0, 0x1003F);
 $Check1 >>= 2;
 $Check1 = (($Check1 >> 4) & 0x3FFFFC0 ) | ($Check1 & 0x3F);
 $Check1 = (($Check1 >> 4) & 0x3FFC00 ) | ($Check1 & 0x3FF);
 $Check1 = (($Check1 >> 4) & 0x3C000 ) | ($Check1 & 0x3FFF);
 $T1 = (((($Check1 & 0x3C0) << 4) | ($Check1 & 0x3C)) <<2 ) | ($Check2 & 0xF0F );
 $T2 = (((($Check1 & 0xFFFFC000) << 4) | ($Check1 & 0x3C00)) << 0xA) | ($Check2 & 0xF0F0000 );
 return ($T1 | $T2);
 }
 public function CheckHash($Hashnum)
 {
 $CheckByte = 0;
 $Flag = 0;
 $HashStr = sprintf('%u', $Hashnum) ;
 $length = strlen($HashStr);
 for ($i = $length - 1; $i >= 0; $i --) {
 $Re = $HashStr{$i};
 if (1 === ($Flag % 2)) {
 $Re += $Re;
 $Re = (int)($Re / 10) + ($Re % 10);
 }
 $CheckByte += $Re;
 $Flag ++;
 }
 $CheckByte %= 10;
 if (0 !== $CheckByte) {
 $CheckByte = 10 - $CheckByte;
 if (1 === ($Flag % 2) ) {
 if (1 === ($CheckByte % 2)) {
 $CheckByte += 9;
 }
 $CheckByte >>= 1;
 }
 }
 return '7'.$CheckByte.$HashStr;
 }
};

function get_google_pagerank($url){
	$pr = new PR();
	
	date_default_timezone_set('Europe/Copenhagen');
	
	$result = $pr->get_pagerank($url);
	
	$post = array(
  		'post_date'       => date('Y-m-d H:i:s'),
  		'post_date_gmt'   => gmdate('Y-m-d H:i:s'),
  		'post_status'     => 'publish',
  		'post_title'      => $url,
  		'post_type'       => 'pagerank_post_type'
	);  
	
	$temp_id = wp_insert_post( $post );
	
	update_post_meta($temp_id, 'ip_address', $_SERVER['REMOTE_ADDR']);
	update_post_meta($temp_id, 'result', $result);
	
	return $result;
};



/*-------------------------------------------------------------------------------------------*/
/* pagerank_post_type Post Type */
/*-------------------------------------------------------------------------------------------*/
class pagerank_post_type {
	
	function pagerank_post_type() {
		add_action('init',array($this,'create_post_type'));
	}
	
	function create_post_type() {
		$labels = array(
		    'name' => 'PageRank Submissions',
		    'singular_name' => 'PageRank Submission',
		    'add_new' => 'Add New',
		    'all_items' => 'PageRank Submissions',
		    'add_new_item' => 'Add New Submission',
		    'edit_item' => 'Edit Submission',
		    'new_item' => 'New Submission',
		    'view_item' => 'View Submission',
		    'search_items' => 'Search Submissions',
		    'not_found' =>  'No submissions found',
		    'not_found_in_trash' => 'No submissions found in trash',
		    'parent_item_colon' => 'Parent Submission:',
		    'menu_name' => 'PR Submissions'
		);
		$args = array(
			'labels' => $labels,
			'description' => "Submissions made on the PageRank checker",
			'public' => false,
			'exclude_from_search' => true,
			'publicly_queryable' => false,
			'show_ui' => true, 
			'show_in_nav_menus' => false, 
			'show_in_menu' => 'tools.php',
			'show_in_admin_bar' => false,
			'menu_position' => 40,
			'menu_icon' => 'dashicons-book',
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array(),
			'has_archive' => false,
			'rewrite' => false,
			'query_var' => false,
			'can_export' => true,
		); 
		register_post_type('pagerank_post_type',$args);
	}
}

$pagerank_post_type = new pagerank_post_type();

add_action( 'load-post-new.php', 'wpse_58290_disable_new_post' );
function wpse_58290_disable_new_post()
{
    if ( get_current_screen()->post_type == 'pagerank_post_type' )
        wp_die( "You ain't allowed to do that!" );
}

function hide_buttons()
{
	global $current_screen;
	if($current_screen->id == 'pagerank_post_type'){
		echo '<style>.add-new-h2{display: none;}</style>';
	}
}
add_action('admin_head','hide_buttons');


?>