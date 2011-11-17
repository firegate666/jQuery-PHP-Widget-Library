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
		<title>jQuery-PHP-Widget-Library - Example Page</title>
		<link id="theme-switch" type="text/css" href="assets/jquery-ui-1.8.16.custom/css/ui-lightness/jquery-ui-1.8.16.custom.css" rel="stylesheet" />
		<script type="text/javascript" src="assets/jquery-ui-1.8.16.custom/js/jquery-1.6.2.min.js"></script>
		<script type="text/javascript" src="assets/jquery-ui-1.8.16.custom/js/jquery-ui-1.8.16.custom.min.js"></script>
    </head>
    <body>

		<h1>Some Widget Examples</h1>
			
		<div><label for="startdate">Startdatum:</label> <?php DatePicker::getInstance('startdate')->renderUI(); ?></div>

		<div><label for="startdate">Enddatum:</label> <?php DatePicker::getInstance('enddate')->renderUI(); ?></div>

		<div><?php Button::getInstance('button')->label('Buttontext')->renderUI(); ?></div>

		<div><?php Slider::getInstance('slider')->value(50)->animate(true)->renderUI(); ?></div>

		<div style="position: absolute; bottom: 0; right: 0;" class="theme-switch">
			<label>Choose theme:</label>
			<?php Button::getInstance('ui-lightness')
				->label('ui-lightness')
				->type(Button::TYPE_LINK)
				->href("assets/jquery-ui-1.8.16.custom/css/ui-lightness/jquery-ui-1.8.16.custom.css")
				->renderUI(); ?> |
			<?php Button::getInstance('ui-darkness')
				->label('ui-darkness')
				->type(Button::TYPE_LINK)
				->href("assets/jquery-ui-1.8.16.custom/css/ui-darkness/jquery-ui-1.8.16.custom.css")
				->renderUI(); ?>
		</div>

		<script type="text/javascript">
			jQuery('#startdate').datepicker();
			jQuery('.theme-switch a').click(function(){
				jQuery('#theme-switch').attr('href', jQuery(this).attr('href'));
				return false;
			});
			<?php jQuery::renderJS(); ?>
		</script>
		</body>
</html>
