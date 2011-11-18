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
use biz\behnke\jquery\ui\widgets\Autocomplete;
use biz\behnke\jquery\ui\widgets\Accordion;

use biz\behnke\w3c\html\blocklevel\H;
use biz\behnke\w3c\html\blocklevel\Div;
use biz\behnke\w3c\html\blocklevel\P;

use biz\behnke\w3c\html\inline\A;

foreach(\biz\behnke\util\Country::xmlList()->country as $country)
{
	$autocompleteExample[] = (String)$country->countryName;
}

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

		<div><label for="enddate">Enddatum:</label> <?php DatePicker::getInstance('enddate')->renderUI(); ?></div>

		<div>Button: <?php Button::getInstance('button')->label('Buttontext')->renderUI(); ?></div>

		<div>Accordion:
			<?php
				Accordion::getInstance('accordion')
					->append(H::getInstance(3)->append(A::getInstance()->attr('href', '#')->append('Section 1')))
					->append(Div::getInstance()->append(P::getInstance()->append('Text 1')))
					->append(H::getInstance(3)->append(A::getInstance()->attr('href', '#')->append('Section 2')))
					->append(Div::getInstance()->append(P::getInstance()->append('Text 2')))
					->append(H::getInstance(3)->append(A::getInstance()->attr('href', '#')->append('Section 3')))
					->append(Div::getInstance()->append(P::getInstance()->append('Text 3')))
					->event('mouseover')
					->renderUI();
			?>
		</div>

		<div>Slider: <?php Slider::getInstance('slider')->value(50)->animate(true)->renderUI(); ?></div>

		<div><label for="autocomplete">Choose country:</label> <?php Autocomplete::getInstance('autocomplete')->source($autocompleteExample)->renderUI(); ?></div>

		<div style="position: absolute; bottom: 0; right: 0;" class="theme-switch">
			<label>Choose theme:</label>
			<?php Button::getInstance('ui-lightness')
				->label('ui-lightness')
				->type(Button::TYPE_LINK)
				->attr('href', "assets/jquery-ui-1.8.16.custom/css/ui-lightness/jquery-ui-1.8.16.custom.css")
				->renderUI(); ?> |
			<?php Button::getInstance('ui-darkness')
				->label('ui-darkness')
				->type(Button::TYPE_LINK)
				->attr('href', "assets/jquery-ui-1.8.16.custom/css/ui-darkness/jquery-ui-1.8.16.custom.css")
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
