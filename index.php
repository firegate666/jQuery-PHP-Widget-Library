<?php
/**
 * error print out to browser, show warnings & notices
 */
define('DEBUG', true);

require_once __DIR__.'/appBase/index.php';
use biz\behnke\jquery\jQuery;
use biz\behnke\jquery\ui\widgets\DatePicker;
use biz\behnke\jquery\ui\widgets\Slider;
use biz\behnke\jquery\ui\widgets\Button;

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>

		<link id="theme-switch" type="text/css" href="assets/jquery-ui-1.8.16.custom/css/ui-lightness/jquery-ui-1.8.16.custom.css" rel="stylesheet" />
		<script type="text/javascript" src="assets/jquery-ui-1.8.16.custom/js/jquery-1.6.2.min.js"></script>
		<script type="text/javascript" src="assets/jquery-ui-1.8.16.custom/js/jquery-ui-1.8.16.custom.min.js"></script>
    </head>
    <body>

		<h1>Some Widget Examples</h1>
			
		<div>Startdatum: <?php DatePicker::getInstance('startdate')->renderUI(); ?></div>

		<div>Enddatum: <?php DatePicker::getInstance('enddate')->renderUI(); ?></div>

		<div><?php Slider::getInstance('slider')->value(50)->animate(true)->renderUI(); ?></div>

		<div><?php Button::getInstance('button')->label('Buttontext')->renderUI(); ?></div>

		<div style="position: absolute; bottom: 0; right: 0;">
			<a href="assets/jquery-ui-1.8.16.custom/css/ui-lightness/jquery-ui-1.8.16.custom.css" class="theme-switch">ui-lightness</a> |
			<a href="assets/jquery-ui-1.8.16.custom/css/ui-darkness/jquery-ui-1.8.16.custom.css" class="theme-switch">ui-darkness</a>
		</div>

		<script type="text/javascript">
			jQuery('#startdate').datepicker();
			jQuery('.theme-switch').click(function(){
				jQuery('#theme-switch').attr('href', jQuery(this).attr('href'));
				return false;
			});
			<?php jQuery::renderJS(); ?>
		</script>
		</body>
</html>
