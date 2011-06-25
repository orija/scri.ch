<!doctype html>
<!--

      /
     /
    /____
        /
       /
      /

scri.ch is a website that lets you draw.

More info: http://about.scri.ch

AUTHORS
=======

    Pierre Bertet
    http://pierrebertet.net/

    Raphaël Bastide
    http://raphaelbastide.com/

CONTACT
=======

    hi@scri.ch

-->
<html>
	<head>
		<meta charset="utf-8">
		<title><?php if (isset($title)) { echo $title . ' | '; } ?>scri.ch</title>
		<meta name="description" content="scri.ch is a website that lets you draw.">
		<meta name="keywords" content="scrich">
		<link rel="stylesheet" href="<?php echo SCRICH_URL ?>css/scrich.css?<?php echo SCRICH_VERSION ?>">
		<link rel="icon" type="image/png" href="<?php echo SCRICH_URL ?>favicon.png">
		<link rel="apple-touch-icon" href="<?php echo SCRICH_URL ?>apple-touch-icon.png">
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;">
		<style><?php if ($cur_img): ?>#save{display:none;}<?php else: ?>#buttons button,#about{display:none;}<?php endif; ?></style>
	</head>
	<body>
		<canvas id="draw"></canvas>
		<div id="buttons">
			<button id="new">New</button>
			<button id="save">Save</button>
			<a href="http://about.scri.ch/" id="about" title="About scri.ch">?</a>
		</div>
		<form action="" method="post" id="form"><input type="hidden" id="new_draw" name="new_draw" value=""></form>
<?php if ($cur_img): ?>
		<img id="img" src="<?php echo SCRICH_URL.$cur_img ?>.png" /><?php endif; ?>
		<script>var SCRICH_URL = '<?php echo SCRICH_URL ?>';</script>
		<script src="<?php echo SCRICH_URL ?>js/scrich<?php if (!DEBUG): ?>-min<?php endif; ?>.js?<?php echo SCRICH_VERSION ?>"></script>
	</body>
</html>