<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title>
<?php 
	bloginfo('name'); 
	if ( is_single() ) { 
		echo " &raquo; Blog Archive";
	} 
	wp_title();
?>
</title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/print.css" type="text/css" media="print" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico"/>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

<script type="text/javascript">
	<!--
	function showMorePhotos(){
		var photoUl = document.getElementById("photosections");
		var secs = photoUl.childNodes;
		for (var i=0; i<secs.length; i++){
			if(secs[i].nodeName.toLowerCase() == 'li'){
				changeNodeClass(secs[i],'visible');
			}
		}

		var picsDiv = document.getElementById("showMorePics");
		changeNodeClass(picsDiv,'hidden');
	}

	function changeNodeClass(myNode,myNewClass){
		if (myNode.getAttributeNode("class")){
			myNode.getAttributeNode("class").value = myNewClass;
    		} else {
        		myNode.setAttribute('class',myNewClass);
    		}
	}
	-->
</script>

</head>

<body>
<div id="page">
<div id="header">
	<div id="headertitle">
		<h1><a href="<?php bloginfo('url') ?>" title="<?php bloginfo('name') ?>: <?php bloginfo('description') ?>"><?php bloginfo('name') ?></a></h1>
		<p><?php bloginfo('description') ?></p>
	</div> 
	<!-- Search box (If you prefer having search form as a sidebar widget, remove this block) -->
	<div class="search">
		<?php  include (TEMPLATEPATH . "/searchform.php"); ?>
	</div> 
	<!-- Search ends here-->
		
</div>

<div id="navbar">
<ul id="nav">
	<li><a href="<?php echo get_settings('home'); ?>"><?php _e('Blog') ?></a></li>
	<?php wp_list_pages('title_li=&depth=2&sort_column=menu_order') ?>
	<li><a href="http://moodle.digital-campus.org" title="Visit my Moodle site"><?php _e('Moodle') ?></a></li>
	<li><a href="http://www.flickr.com/photos/alex-little" title="My photos on Flickr"><?php _e('Flickr Photos') ?></a></li>
</ul>
</div>
<div id="wrapper">
