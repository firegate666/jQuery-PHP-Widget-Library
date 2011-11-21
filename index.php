<?php
/**
 * error print out to browser, show warnings & notices
 */
define('DEBUG', true);

require_once __DIR__ . '/appBase/index.php';

use biz\behnke\jquery\jQuery;
use biz\behnke\jquery\ui\helper as ui;
use biz\behnke\w3c\html\blocklevel\helper as html;
use biz\behnke\w3c\html\inline\helper as htmli;

foreach (\biz\behnke\util\Country::xmlList()->country as $country)
{
	$autocompleteExample[] = (String) $country->countryName;
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

		<script type="text/javascript" src="assets/jsor-jcarousel-0.2.8/lib/jquery.jcarousel.min.js"></script>
		<link rel="stylesheet" type="text/css" href="assets/jsor-jcarousel-0.2.8/skins/tango/skin.css" />

		<script type="text/javascript">
			jQuery.easing.elasout = function(x, t, b, c, d) {
				var s=1.70158;var p=0;var a=c;
				if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
				if (a < Math.abs(c)) { a=c; var s=p/4; }
				else var s = p/(2*Math.PI) * Math.asin (c/a);
				return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
			};
		</script>

    </head>

    <body>

		<h1>Some Widget Examples</h1>

		<div>
			<?php html\H2()->append('Tabs')->renderUI(); ?>

			<?php
				ui\Tabs('tabs')
					/* Tab Headlines */
					->append(html\Ul()
						->append(htmli\Li()->append(htmli\A()->attr('href', '#tabs-1')->append('Progressbar')))
						->append(htmli\Li()->append(htmli\A()->attr('href', '#tabs-2')->append('Datepicker')))
						->append(htmli\Li()->append(htmli\A()->attr('href', '#tabs-3')->append('Button')))
						->append(htmli\Li()->append(htmli\A()->attr('href', '#tabs-4')->append('Autocomplete')))
						->append(htmli\Li()->append(htmli\A()->attr('href', '#tabs-5')->append('jCarousel')))
					)
					/* Tab Divs */
					// progressbar
					->append(html\Div()->append(ui\Progressbar('tab-progressbar')->value(25))->attr('id', 'tabs-1'))
					// datepicker
					->append(html\Div()
						->append(htmli\Label()->append('Startdatum')->for('tab-startdate'))
						->append(ui\DatePicker('tab-startdate'))
						->append(htmli\Label()->append('Enddatum')->for('tab-enddate'))
						->append(ui\DatePicker('tab-enddate'))
						->attr('id', 'tabs-2')
					)
					// progressbar
					->append(html\Div()
						->append(ui\Button('tab-button-button')->label('Button')->type(htmli\Button()))
						->append(ui\Button('tab-button-link')->label('Button (Link)')->type(htmli\A()->link('http://www.google.de', '_blank')))
						->append(ui\Button('tab-button-input')->label('Button (input)')->type(htmli\Input()->attr('type', 'text')))
						->attr('id', 'tabs-3')
					)
					// autocomplete
					->append(html\Div()
						->append(htmli\Label()->append('Choose country')->for('tab-autocomplete'))
						->append(ui\Autocomplete('tab-autocomplete')->source($autocompleteExample))
						->attr('id', 'tabs-4')
					)
					// jCarousel
					->append(html\Div()
						->append(
							ui\JCarousel('carousel')
								->append(htmli\Li()->append('<img src="http://static.flickr.com/66/199481236_dc98b5abb3_s.jpg" width="75" height="75" alt="" />'))
								->append(htmli\Li()->append('<img src="http://static.flickr.com/75/199481072_b4a0d09597_s.jpg" width="75" height="75" alt="" />'))
								->append(htmli\Li()->append('<img src="http://static.flickr.com/57/199481087_33ae73a8de_s.jpg" width="75" height="75" alt="" />'))
								->append(htmli\Li()->append('<img src="http://static.flickr.com/77/199481108_4359e6b971_s.jpg" width="75" height="75" alt="" />'))
								->append(htmli\Li()->append('<img src="http://static.flickr.com/58/199481143_3c148d9dd3_s.jpg" width="75" height="75" alt="" />'))
								->append(htmli\Li()->append('<img src="http://static.flickr.com/72/199481203_ad4cdcf109_s.jpg" width="75" height="75" alt="" />'))
								->append(htmli\Li()->append('<img src="http://static.flickr.com/58/199481218_264ce20da0_s.jpg" width="75" height="75" alt="" />'))
								->append(htmli\Li()->append('<img src="http://static.flickr.com/69/199481255_fdfe885f87_s.jpg" width="75" height="75" alt="" />'))
								->append(htmli\Li()->append('<img src="http://static.flickr.com/60/199480111_87d4cb3e38_s.jpg" width="75" height="75" alt="" />'))
								->append(htmli\Li()->append('<img src="http://static.flickr.com/70/229228324_08223b70fa_s.jpg" width="75" height="75" alt="" />'))
								->easing('elasout')
								->attr('class', 'jcarousel-skin-tango')
						)
						->attr('id', 'tabs-5')
					)
					// render it
					->renderUI();
			?>
		</div>

		<div>
			<?php html\H2()->append('Accordion')->renderUI(); ?>

			<?php
				ui\Accordion('accordion')
					->append(html\H3()->append(htmli\A()->attr('href', '#')->append('Section 1')))
					->append(html\Div()->append(html\P()->append('Text 1')))
					->append(html\H3()->append(htmli\A()->attr('href', '#')->append('Section 2')))
					->append(html\Div()->append(html\P()->append('Text 2')))
					->append(html\H3()->append(htmli\A()->attr('href', '#')->append('Section 3')))
					->append(html\Div()->append(html\P()->append('Text 3')))
					->event('mouseover')
					->renderUI();
			?>
		</div>

		<div>
			<?php html\H2()->append('Slider')->renderUI(); ?>

			<?php ui\Slider('slider')->value(50)->animate(true)->renderUI(); ?>
		</div>

		<div style="position: absolute; bottom: 0; right: 0;" class="theme-switch">
			<?php
				htmli\Label()->append('Choose theme:')->for('test')->renderUI();

				ui\Button('ui-lightness')
					->label('ui-lightness')
					->type(htmli\A())
					->attr('href', "assets/jquery-ui-1.8.16.custom/css/ui-lightness/jquery-ui-1.8.16.custom.css")
					->renderUI();
			?>
			|
			<?php
				ui\Button('ui-darkness')
					->label('ui-darkness')
					->type(htmli\A())
					->attr('href', "assets/jquery-ui-1.8.16.custom/css/ui-darkness/jquery-ui-1.8.16.custom.css")
					->renderUI();
			?>
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
