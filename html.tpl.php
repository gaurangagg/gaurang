<!DOCTYPE html>
<html lang="en">
<head>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83412676-1', 'auto');
  ga('send', 'pageview');

</script>	
	<meta charset="UTF-8">
	<?php print $head; ?>
	<title><?php print $head_title ?></title>

	<?php print $styles; ?>
	<?php print $scripts; ?> 
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet"> 
</head>
<body class="<?php print $classes; ?> " <?php print $attributes; ?>>
	<?php print $page_top; ?>

	<?php print $page; ?>

	<?php print $page_bottom; ?>

</body>
</html>
