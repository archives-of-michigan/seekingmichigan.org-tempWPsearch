<?php
/**
 * Theme Header
 *
 */

global $e404_options;
if($post) {
	$e404_options['post_id'] = $post->ID;
	$e404_options['post_parent'] = $post->post_parent;
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?><?php bloginfo('name'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="http://localhost:8888/wp-content/themes/shiny-child/searchCustom/search_wp.css" />
<script type="text/javascript" src="http://localhost:8888/wp-includes/js/jquery/jquery.js"></script>
<script type="text/javascript" src="http://localhost:8888/wp-content/themes/shiny-child/searchCustom/cdm_for_wp.js"></script>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head();
?>
</head>

<body
<?php 
$isHomer = false;
if(substr(e404_get_current_template(), 0, 9) == 'home-page') {
	echo ' class="body_slider"';
	$isHomer = true;
} elseif(substr(e404_get_current_template(), 0, 9) == 'civil-war') {
	echo ' class="civilwar"';
} elseif(substr(e404_get_current_template(), 0, 5) == 'teach') {
	echo ' class="teach"';
} elseif(is_category( '2101' )) {
	echo ' class="civilwar"';
}
?>>

<?php do_action('after_body'); ?>
<div id="main_wrapper">
<div id="header_wrapper">
	<div id="header_bar_wrapper">
		<div id="header_bar">
			<div id="header_bar_inner">
				<?php if(!$e404_options['remove_top_contact_box']) : ?>
				<div id="header_info" class="leftside">
					<?php echo $e404_options['top_contact_box']; ?>
				</div>
				<?php endif; ?>
				
				<div id="social_icons" class="leftside">
					<?php e404_show_header_social_icons(); ?>
				</div>
			
				<div class="rightside">
					<?php if(!$e404_options['remove_search_form'] && !$isHomer) : ?>
					
					<div id="search">
						<div id="search_content" class="leftside">
							<div class="search_content_container leftside" style="margin-top: 3px;">
								<span id="search_content_text">Search Digital Archive:</span>
							</div>
							<div class="search_content_container leftside" style="margin-top: 0px;">
								<input id="search_content_box" class="search_content_box_noresults" type="text" autocomplete="off" value="" name="search_content_box" tabindex="1">
								<input id="search_results_button_mode" type="hidden" value="0">
							</div>
							<div class="search_content_container rightside" style="margin-top: 0px;">
								<input id="simple_search_button" class="search_content_button" type="button" value="go" tabindex="2">
							</div>
						</div>
					</div>
					<div class="search_content_container_advanced">
						<div id="search_content_adv_link" class="action_link_10" tabindex="6">Advanced Search</div>
					</div>
					
					<div id="search_content_close_icon" class="search_content_container_advanced cdm_hide spaceMar5L">
						<span class="icon_16 ui-icon-circle-close"></span>
					</div>
					
					<?php endif; ?>
				</div>
				<br class="clear" />
			</div>
			
				
				<div id="adv_search">
					<div id="adv_search_content" class="leftside">
						<div id="adv_search_col_1">
							<h2 class="cdm_style leftside" style="margin-bottom:0;">Find results with:</h2>
							<div id="adv_search_error" class="leftside spacePad10T spacePad10L spaceMar10L ui-state-error ui-corner-all" style="display:none;height:24px;width:500px;">
								<span class="icon_10 ui-icon-alert"></span>
									error div
							</div>
							<span class="clear"></span>
							<ul id="adv_search_query_builder_list" style="float:left;padding:0;margin:0;margin-bottom:15px;list-style-type:none;">
								<li id="rid0" class="adv_search_row ">
									<ul class="adv_search_ul_row">
										<li class="leftside">
											<select id="rid0_mode" class="adv_search_type_dd" onblur="this.style.position='';this.style.width=''" onchange="this.style.position='';this.style.width=''" onmousedown="if($.browser.msie){this.style.position='relative';this.style.width='auto'}">
												<option selected="selected" value="all">All of the words</option>
												<option value="any">Any of the words</option>
												<option value="exact">The exact phrase</option>
												<option value="none">None of the words</option>
											</select>
										</li>
										<li class="leftside spaceMar5L">
											<input id="rid0_term" class="adv_search_str" type="text" value="">
										</li>
										<li class="leftside spaceMar5L spacePad5">in</li>
										<li class="leftside spaceMar5L">
											<select id="rid0_field" class="adv_search_domain_dd" onblur="this.style.position='';this.style.width=''" onchange="this.style.position='';this.style.width=''" onmousedown="if($.browser.msie){this.style.position='relative';this.style.width='auto'}">
											<option selected="selected" value="all">All fields</option>
											<option value="title">Title</option>
											<option value="subjec">Subject</option>
											<option value="descri">Description</option>
											<option value="creato">Creator</option>
											<option value="publis">Publisher</option>
											<option value="contri">Contributors</option>
											<option value="date">Date</option>
											<option value="type">Type</option>
											<option value="format">Format</option>
											<option value="identi">Identifier</option>
											<option value="source">Source</option>
											<option value="langua">Language</option>
											<option value="relati">Relation</option>
											<option value="covera">Coverage</option>
											<option value="rights">Rights</option>
											<option value="audien">Audience</option>
											<option value="titlea">Title-Alternative</option>
											<option value="descria">Description-Table Of Contents</option>
											<option value="describ">Description-Abstract</option>
											<option value="datea">Date-Created</option>
											<option value="dateb">Date-Valid</option>
											<option value="datec">Date-Available</option>
											<option value="dated">Date-Issued</option>
											<option value="datee">Date-Modified</option>
											<option value="formata">Format-Extent</option>
											<option value="formatb">Format-Medium</option>
											<option value="relatia">Relation-Is Version Of</option>
											<option value="relatib">Relation-Has Version</option>
											<option value="relatic">Relation-Is Replaced By</option>
											<option value="relatid">Relation-Replaces</option>
											<option value="relatie">Relation-Is Required By</option>
											<option value="relatif">Relation-Requires</option>
											<option value="relatig">Relation-Is Part Of</option>
											<option value="relatih">Relation-Has Part</option>
											<option value="relatii">Relation-Is Referenced By</option>
											<option value="relatij">Relation-References</option>
											<option value="relatik">Relation-Is Format Of</option>
											<option value="relatil">Relation-Has Format Of</option>
											<option value="relatim">Relation-Conforms To</option>
											<option value="coveraa">Coverage-Spatial</option>
											<option value="coverab">Coverage-Temporal</option>
											<option value="audiena">Audience-Mediator</option>
										</select>
									</li>
									<li class="leftside spaceMar5L">
										<select id="rid0_connector" class="adv_search_and_or_dd">
											<option selected="selected" value="and">and</option>
											<option value="or">or</option>
										</select>
									</li>
									<li class="adv_search_option_remove_link_box leftside spaceMar10L spacePad5">
										<a class="remove_adv_search_row_link action_link_10" href="javascript://" rid="rid0"></a>
									</li>
								</ul>
								<span class="clear"></span>
							</li>
							<li id="rid1" class="adv_search_row adv_search_row_bgcolor">
								<ul class="adv_search_ul_row">
								<li class="leftside">
								<select id="rid1_mode" class="adv_search_type_dd" onblur="this.style.position='';this.style.width=''" onchange="this.style.position='';this.style.width=''" onmousedown="if($.browser.msie){this.style.position='relative';this.style.width='auto'}">
									<option selected="selected" value="all">All of the words</option>
									<option value="any">Any of the words</option>
									<option value="exact">The exact phrase</option>
									<option value="none">None of the words</option>
								</select>
							</li>
							<li class="leftside spaceMar5L">
								<input id="rid1_term" class="adv_search_str" type="text" value="">
							</li>
							<li class="leftside spaceMar5L spacePad5">in</li>
							<li class="leftside spaceMar5L">
								<select id="rid1_field" class="adv_search_domain_dd" onblur="this.style.position='';this.style.width=''" onchange="this.style.position='';this.style.width=''" onmousedown="if($.browser.msie){this.style.position='relative';this.style.width='auto'}">
									<option selected="selected" value="all">All fields</option>
									<option value="title">Title</option>
				<option value="subjec">Subject</option>
				<option value="descri">Description</option>
				<option value="creato">Creator</option>
				<option value="publis">Publisher</option>
				<option value="contri">Contributors</option>
				<option value="date">Date</option>
				<option value="type">Type</option>
				<option value="format">Format</option>
				<option value="identi">Identifier</option>
				<option value="source">Source</option>
				<option value="langua">Language</option>
				<option value="relati">Relation</option>
				<option value="covera">Coverage</option>
				<option value="rights">Rights</option>
				<option value="audien">Audience</option>
				<option value="titlea">Title-Alternative</option>
				<option value="descria">Description-Table Of Contents</option>
				<option value="describ">Description-Abstract</option>
				<option value="datea">Date-Created</option>
				<option value="dateb">Date-Valid</option>
				<option value="datec">Date-Available</option>
				<option value="dated">Date-Issued</option>
				<option value="datee">Date-Modified</option>
				<option value="formata">Format-Extent</option>
				<option value="formatb">Format-Medium</option>
				<option value="relatia">Relation-Is Version Of</option>
				<option value="relatib">Relation-Has Version</option>
				<option value="relatic">Relation-Is Replaced By</option>
				<option value="relatid">Relation-Replaces</option>
				<option value="relatie">Relation-Is Required By</option>
				<option value="relatif">Relation-Requires</option>
				<option value="relatig">Relation-Is Part Of</option>
				<option value="relatih">Relation-Has Part</option>
				<option value="relatii">Relation-Is Referenced By</option>
				<option value="relatij">Relation-References</option>
				<option value="relatik">Relation-Is Format Of</option>
				<option value="relatil">Relation-Has Format Of</option>
				<option value="relatim">Relation-Conforms To</option>
				<option value="coveraa">Coverage-Spatial</option>
				<option value="coverab">Coverage-Temporal</option>
				<option value="audiena">Audience-Mediator</option>
				</select>
				</li>
				<li class="leftside spaceMar5L">
				<select id="rid1_connector" class="adv_search_and_or_dd">
				<option selected="selected" value="and">and</option>
				<option value="or">or</option>
				</select>
				</li>
				<li class="adv_search_option_remove_link_box leftside spaceMar10L spacePad5">
				<a class="remove_adv_search_row_link action_link_10" href="javascript://" rid="rid1">remove</a>
				</li>
				</ul>
				<span class="clear"></span>
				</li>
				</ul>
				<span class="clear"></span>
				<div>
				<a id="adv_search_add_field_link" class="action_link_10" href="javascript://">Add another field</a>
				</div>
				<span class="clear"></span>
				<div id="adv_search_col_1_bottom" class="spaceMar10T">
				<span id="icon_adv_search_datearrow" class="icon_10 icon_adv_search ui-icon-triangle-1-e"></span>
				<span class="icon_10 icon_adv_search ui-icon-calendar"></span>
				<div id="adv_search_by_date_link" class="action_link_10">Search by date</div>
				<div id="adv_search_by_date_container" class="spaceMar10T">
				<ul id="adv_search_datepicker_list" style="list-style-type:none;padding:0;margin:0;">
				<li class="leftside">
				<select id="adv_search_date_range" class="adv_search_date_range">
				<option selected="selected" value="from">from</option>
				<option value="after">after</option>
				<option value="before">before</option>
				<option value="on">on</option>
				</select>
				</li>
				<li class="leftside spaceMar15L">
				<input id="datepicker1" class="datestring" type="text" value="mm/dd/yyyy">
				</li>
				<li class="leftside spaceMar15L spacePad5">
				<span id="datepickerTo">to</span>
				</li>
				<li class="leftside spaceMar15L">
				<input id="datepicker2" class="datestring" type="text" value="mm/dd/yyyy">
				</li>
				</ul>

				</div>
				</div>
				<span class="clear"></span>
				<div class="spaceMar15R spaceMar15T leftside">
				<input id="advanced_search_button" class="search_content_button" type="button" value="Search">
				</div>

				<span class="clear"></span>
				</div>
				</div>
				<div id="adv_search_col_2">
				<h3 class="cdm_style">Searching collections:</h3>
				<div id="advsearchAllMoreText" class="spaceMar10B light_gray_text">All Collections</div>
				<span class="clear"></span>
				<div>
				<a id="advanced_max_collections_link" class="action_link_10" href="javascript://"> Add or remove collections </a>
				</div>
				</div>
				<span class="clear"></span>

				</div>

			</div>


		</div>
			
			
		</div>
		
		
	

<span class="clear"></span>	
<div id="header_header_wrapper">
<div id="header">
	<div id="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo $e404_options['logo_url']; ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" /></a></div>
	<div id="navigation" class="rightside">
		<?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => false, 'menu_class' => 'sf-menu', 'link_before' => '<span class="menu-btn">', 'link_after' => '</span>')); ?>
		<br class="clear" />
	</div>
	<br class="clear" />
</div>
</div>

