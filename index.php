<?php
/**
 * error print out to browser, show warnings & notices
 */
define('DEBUG', true);

require_once __DIR__.'/appBase/index.php';
use biz\behnke\jquery\jQuery;

use biz\behnke\jquery\ui\helper as ui;
use biz\behnke\w3c\html\blocklevel\helper as html;
use biz\behnke\w3c\html\inline\helper as htmli;

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
			
		<div><label for="startdate">Startdatum:</label> <?php ui\DatePicker('startdate')->renderUI(); ?></div>

		<div><label for="enddate">Enddatum:</label> <?php ui\DatePicker('enddate')->renderUI(); ?></div>

		<div>Button: <?php ui\Button('button')->label('Buttontext')->type(htmli\Button())->renderUI(); ?></div>

		<div>Accordion:
			<?php
				ui\Accordion('accordion')
					->append(html\H(3)->append(htmli\A()->attr('href', '#')->append('Section 1')))
					->append(html\Div()->append(html\P()->append('Text 1')))
					->append(html\H(3)->append(htmli\A()->attr('href', '#')->append('Section 2')))
					->append(html\Div()->append(html\P()->append('Text 2')))
					->append(html\H(3)->append(htmli\A()->attr('href', '#')->append('Section 3')))
					->append(html\Div()->append(html\P()->append('Text 3')))
					->event('mouseover')
					->renderUI();
			?>
		</div>

		<div>Tabs:
			<?php
				ui\Tabs('tabs')
					->append(html\Ul()
						->append(htmli\Li()->append(htmli\A()->attr('href', '#tabs-1')->append('Tab 1')))
						->append(htmli\Li()->append(htmli\A()->attr('href', '#tabs-2')->append('Tab 2')))
						->append(htmli\Li()->append(htmli\A()->attr('href', '#tabs-3')->append('Tab 3')))
					)
					->append(html\Div()->append(html\P()->append('Proin elit arcu, rutrum commodo, vehicula tempus.'))->attr('id', 'tabs-1'))
					->append(html\Div()->append(html\P()->append('Morbi tincidunt, dui sit amet facilisis feugiat.'))->attr('id', 'tabs-2'))
					->append(html\Div()->append(html\P()->append('Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti.'))->attr('id', 'tabs-3'))
					->renderUI();
			?>
		</div>

		<div>Progressbar: <?php ui\Progressbar('progressbar')->value(25)->renderUI(); ?></div>

		<div>Slider: <?php ui\Slider('slider')->value(50)->animate(true)->renderUI(); ?></div>

		<div><label for="autocomplete">Choose country:</label> <?php ui\Autocomplete('autocomplete')->source($autocompleteExample)->renderUI(); ?></div>

		<div style="position: absolute; bottom: 0; right: 0;" class="theme-switch">
			<label>Choose theme:</label>
			<?php ui\Button('ui-lightness')
				->label('ui-lightness')
				->type(htmli\A())
				->attr('href', "assets/jquery-ui-1.8.16.custom/css/ui-lightness/jquery-ui-1.8.16.custom.css")
				->renderUI(); ?> |
			<?php ui\Button('ui-darkness')
				->label('ui-darkness')
				->type(htmli\A())
				->attr('href', "assets/jquery-ui-1.8.16.custom/css/ui-darkness/jquery-ui-1.8.16.custom.css")
				->renderUI(); ?>
		</div>

		<!-- the only javascript in this document -->
		<script type="text/javascript"><!--

			jQuery('.theme-switch a').click(function(){
				jQuery('#theme-switch').attr('href', jQuery(this).attr('href'));
				return false;
			});

			// finally all aggregate widgets are rendered to js
			<?php jQuery::renderJS(); ?>

		//--></script>
		</body>
</html>
