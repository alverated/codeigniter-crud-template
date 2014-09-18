<!DOCTYPE html>
<html lang="en">
<head>

	<title><?php echo isset($title) ? $title : ''; ?></title>

	<?php echo isset($meta_char) ? '<meta charset="'.$meta_char.'">' : ''; ?>

	<?php echo isset($meta_auth) ? '<meta name="author" content="'.$meta_auth.'"/>' : ''; ?>

	<?php echo isset($meta_keys) ? '<meta name="keywords" content="'.$meta_keys.'"/>' : ''; ?>

	<?php echo isset($meta_desc) ? '<meta name="description" content="'.$meta_desc.'"/>' : ''; ?>
	
	<!-- CSS -->
	<link rel="icon" href="<?php echo img_url('favicon.jpg')?>" type="image/ico">
	<link type="text/css" rel="stylesheet" href="<?php echo css_url('normalize.css') ?>"/>
	<link type="text/css" rel="stylesheet" href="<?php echo css_url('style.css') ?>"/>
	<?php echo isset($css) ? $css : ''; ?>
	
	<!-- Javascript and JQuery -->
	<script type="text/javascript" src="<?php echo js_url('jquery-1.11.1.js') ?>"></script>
	<?php echo isset($js_top) ? $js_top : ''; ?>

</head>

<body>

<?php echo isset($header) ? $header : ''; ?>

<?php echo isset($body) ? $body : ''; ?>

<?php echo isset($sidebar) ? $sidebar : ''; ?>

<?php echo isset($footer) ? $footer : ''; ?>
	
<?php echo isset($js_bottom) ? $js_bottom : ''; ?>

</body>
</html>