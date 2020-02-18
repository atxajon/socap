<?php die(); ?><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: wpdb::prepare se llamó &lt;strong&gt;incorrectamente&lt;/strong&gt;. La consulta no contiene el número correcto de marcadores (2) para el número de argumentos pasados ​​(3). Por favor, visita &lt;a href="https://codex.wordpress.org/es:Depurar_en_WordPress"&gt;Depuración en WordPress&lt;/a&gt; para más información. (Este mensaje se añadió en la versión 4.8.3.) in /Applications/MAMP/htdocs/socap/wp-includes/functions.php on line <i>4196</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0002</td><td bgcolor='#eeeeec' align='right'>409824</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='/Applications/MAMP/htdocs/socap/index.php' bgcolor='#eeeeec'>.../index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0003</td><td bgcolor='#eeeeec' align='right'>411760</td><td bgcolor='#eeeeec'>require( <font color='#00bb00'>'/Applications/MAMP/htdocs/socap/wp-blog-header.php'</font> )</td><td title='/Applications/MAMP/htdocs/socap/index.php' bgcolor='#eeeeec'>.../index.php<b>:</b>17</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0005</td><td bgcolor='#eeeeec' align='right'>424904</td><td bgcolor='#eeeeec'>require_once( <font color='#00bb00'>'/Applications/MAMP/htdocs/socap/wp-load.php'</font> )</td><td title='/Applications/MAMP/htdocs/socap/wp-blog-header.php' bgcolor='#eeeeec'>.../wp-blog-header.php<b>:</b>13</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0007</td><td bgcolor='#eeeeec' align='right'>436832</td><td bgcolor='#eeeeec'>require_once( <font color='#00bb00'>'/Applications/MAMP/htdocs/socap/wp-config.php'</font> )</td><td title='/Applications/MAMP/htdocs/socap/wp-load.php' bgcolor='#eeeeec'>.../wp-load.php<b>:</b>37</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0015</td><td bgcolor='#eeeeec' align='right'>516392</td><td bgcolor='#eeeeec'>require_once( <font color='#00bb00'>'/Applications/MAMP/htdocs/socap/wp-settings.php'</font> )</td><td title='/Applications/MAMP/htdocs/socap/wp-config.php' bgcolor='#eeeeec'>.../wp-config.php<b>:</b>88</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>1.1106</td><td bgcolor='#eeeeec' align='right'>54778440</td><td bgcolor='#eeeeec'>do_action(  )</td><td title='/Applications/MAMP/htdocs/socap/wp-settings.php' bgcolor='#eeeeec'>.../wp-settings.php<b>:</b>450</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>1.1106</td><td bgcolor='#eeeeec' align='right'>54778816</td><td bgcolor='#eeeeec'>WP_Hook->do_action(  )</td><td title='/Applications/MAMP/htdocs/socap/wp-includes/plugin.php' bgcolor='#eeeeec'>.../plugin.php<b>:</b>453</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>1.1106</td><td bgcolor='#eeeeec' align='right'>54778816</td><td bgcolor='#eeeeec'>WP_Hook->apply_filters(  )</td><td title='/Applications/MAMP/htdocs/socap/wp-includes/class-wp-hook.php' bgcolor='#eeeeec'>.../class-wp-hook.php<b>:</b>310</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>1.4493</td><td bgcolor='#eeeeec' align='right'>66063808</td><td bgcolor='#eeeeec'>wp_widgets_init(  )</td><td title='/Applications/MAMP/htdocs/socap/wp-includes/class-wp-hook.php' bgcolor='#eeeeec'>.../class-wp-hook.php<b>:</b>286</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>1.4552</td><td bgcolor='#eeeeec' align='right'>66091624</td><td bgcolor='#eeeeec'>do_action(  )</td><td title='/Applications/MAMP/htdocs/socap/wp-includes/widgets.php' bgcolor='#eeeeec'>.../widgets.php<b>:</b>1649</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>1.4552</td><td bgcolor='#eeeeec' align='right'>66092000</td><td bgcolor='#eeeeec'>WP_Hook->do_action(  )</td><td title='/Applications/MAMP/htdocs/socap/wp-includes/plugin.php' bgcolor='#eeeeec'>.../plugin.php<b>:</b>453</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>1.4552</td><td bgcolor='#eeeeec' align='right'>66092000</td><td bgcolor='#eeeeec'>WP_Hook->apply_filters(  )</td><td title='/Applications/MAMP/htdocs/socap/wp-includes/class-wp-hook.php' bgcolor='#eeeeec'>.../class-wp-hook.php<b>:</b>310</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>1.4741</td><td bgcolor='#eeeeec' align='right'>66476832</td><td bgcolor='#eeeeec'>WP_Customize_Widgets->register_settings(  )</td><td title='/Applications/MAMP/htdocs/socap/wp-includes/class-wp-hook.php' bgcolor='#eeeeec'>.../class-wp-hook.php<b>:</b>286</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>1.4741</td><td bgcolor='#eeeeec' align='right'>66476832</td><td bgcolor='#eeeeec'>WP_Customize_Manager->unsanitized_post_values(  )</td><td title='/Applications/MAMP/htdocs/socap/wp-includes/class-wp-customize-widgets.php' bgcolor='#eeeeec'>.../class-wp-customize-widgets.php<b>:</b>202</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>1.4742</td><td bgcolor='#eeeeec' align='right'>66477208</td><td bgcolor='#eeeeec'>WP_Customize_Manager->changeset_data(  )</td><td title='/Applications/MAMP/htdocs/socap/wp-includes/class-wp-customize-manager.php' bgcolor='#eeeeec'>.../class-wp-customize-manager.php<b>:</b>1703</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>1.4742</td><td bgcolor='#eeeeec' align='right'>66477208</td><td bgcolor='#eeeeec'>WP_Customize_Manager->changeset_post_id(  )</td><td title='/Applications/MAMP/htdocs/socap/wp-includes/class-wp-customize-manager.php' bgcolor='#eeeeec'>.../class-wp-customize-manager.php<b>:</b>1134</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>17</td><td bgcolor='#eeeeec' align='center'>1.4742</td><td bgcolor='#eeeeec' align='right'>66477208</td><td bgcolor='#eeeeec'>WP_Customize_Manager->find_changeset_post_id(  )</td><td title='/Applications/MAMP/htdocs/socap/wp-includes/class-wp-customize-manager.php' bgcolor='#eeeeec'>.../class-wp-customize-manager.php<b>:</b>1077</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>18</td><td bgcolor='#eeeeec' align='center'>1.4743</td><td bgcolor='#eeeeec' align='right'>66479624</td><td bgcolor='#eeeeec'>WP_Query->__construct(  )</td><td title='/Applications/MAMP/htdocs/socap/wp-includes/class-wp-customize-manager.php' bgcolor='#eeeeec'>.../class-wp-customize-manager.php<b>:</b>977</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>19</td><td bgcolor='#eeeeec' align='center'>1.4743</td><td bgcolor='#eeeeec' align='right'>66479624</td><td bgcolor='#eeeeec'>WP_Query->query(  )</td><td title='/Applications/MAMP/htdocs/socap/wp-includes/class-wp-query.php' bgcolor='#eeeeec'>.../class-wp-query.php<b>:</b>3336</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>20</td><td bgcolor='#eeeeec' align='center'>1.4743</td><td bgcolor='#eeeeec' align='right'>66479624</td><td bgcolor='#eeeeec'>WP_Query->get_posts(  )</td><td title='/Applications/MAMP/htdocs/socap/wp-includes/class-wp-query.php' bgcolor='#eeeeec'>.../class-wp-query.php<b>:</b>3230</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>21</td><td bgcolor='#eeeeec' align='center'>1.4743</td><td bgcolor='#eeeeec' align='right'>66479624</td><td bgcolor='#eeeeec'>WP_Query->parse_query(  )</td><td title='/Applications/MAMP/htdocs/socap/wp-includes/class-wp-query.php' bgcolor='#eeeeec'>.../class-wp-query.php<b>:</b>1621</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>22</td><td bgcolor='#eeeeec' align='center'>1.4747</td><td bgcolor='#eeeeec' align='right'>66483424</td><td bgcolor='#eeeeec'>do_action_ref_array(  )</td><td title='/Applications/MAMP/htdocs/socap/wp-includes/class-wp-query.php' bgcolor='#eeeeec'>.../class-wp-query.php<b>:</b>1006</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>23</td><td bgcolor='#eeeeec' align='center'>1.4747</td><td bgcolor='#eeeeec' align='right'>66483424</td><td bgcolor='#eeeeec'>WP_Hook->do_action(  )</td><td title='/Applications/MAMP/htdocs/socap/wp-includes/plugin.php' bgcolor='#eeeeec'>.../plugin.php<b>:</b>515</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>24</td><td bgcolor='#eeeeec' align='center'>1.4748</td><td bgcolor='#eeeeec' align='right'>66483424</td><td bgcolor='#eeeeec'>WP_Hook->apply_filters(  )</td><td title='/Applications/MAMP/htdocs/socap/wp-includes/class-wp-hook.php' bgcolor='#eeeeec'>.../class-wp-hook.php<b>:</b>310</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>25</td><td bgcolor='#eeeeec' align='center'>1.4748</td><td bgcolor='#eeeeec' align='right'>66484552</td><td bgcolor='#eeeeec'>SitePress->parse_query(  )</td><td title='/Applications/MAMP/htdocs/socap/wp-includes/class-wp-hook.php' bgcolor='#eeeeec'>.../class-wp-hook.php<b>:</b>286</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>26</td><td bgcolor='#eeeeec' align='center'>1.4748</td><td bgcolor='#eeeeec' align='right'>66484704</td><td bgcolor='#eeeeec'>WPML_Query_Parser->parse_query(  )</td><td title='/Applications/MAMP/htdocs/socap/wp-content/plugins/sitepress-multilingual-cms/sitepress.class.php' bgcolor='#eeeeec'>.../sitepress.class.php<b>:</b>3770</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>27</td><td bgcolor='#eeeeec' align='center'>1.4748</td><td bgcolor='#eeeeec' align='right'>66484680</td><td bgcolor='#eeeeec'>WPML_Query_Parser->maybe_adjust_name_var(  )</td><td title='/Applications/MAMP/htdocs/socap/wp-content/plugins/sitepress-multilingual-cms/inc/query-filtering/wpml-query-parser.class.php' bgcolor='#eeeeec'>.../wpml-query-parser.class.php<b>:</b>36</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>28</td><td bgcolor='#eeeeec' align='center'>1.4748</td><td bgcolor='#eeeeec' align='right'>66484776</td><td bgcolor='#eeeeec'>WPML_404_Guess->guess_cpt_by_name(  )</td><td title='/Applications/MAMP/htdocs/socap/wp-content/plugins/sitepress-multilingual-cms/inc/query-filtering/wpml-query-parser.class.php' bgcolor='#eeeeec'>.../wpml-query-parser.class.php<b>:</b>325</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>29</td><td bgcolor='#eeeeec' align='center'>1.4754</td><td bgcolor='#eeeeec' align='right'>66486168</td><td bgcolor='#eeeeec'>WPML_404_Guess->order_by_language_snippet(  )</td><td title='/Applications/MAMP/htdocs/socap/wp-content/plugins/sitepress-multilingual-cms/inc/query-filtering/wpml-404-guess.class.php' bgcolor='#eeeeec'>.../wpml-404-guess.class.php<b>:</b>56</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>30</td><td bgcolor='#eeeeec' align='center'>1.4755</td><td bgcolor='#eeeeec' align='right'>66486568</td><td bgcolor='#eeeeec'>wpdb->prepare(  )</td><td title='/Applications/MAMP/htdocs/socap/wp-content/plugins/sitepress-multilingual-cms/inc/query-filtering/wpml-404-guess.class.php' bgcolor='#eeeeec'>.../wpml-404-guess.class.php<b>:</b>99</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>31</td><td bgcolor='#eeeeec' align='center'>1.4756</td><td bgcolor='#eeeeec' align='right'>66489520</td><td bgcolor='#eeeeec'>_doing_it_wrong(  )</td><td title='/Applications/MAMP/htdocs/socap/wp-includes/wp-db.php' bgcolor='#eeeeec'>.../wp-db.php<b>:</b>1297</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>32</td><td bgcolor='#eeeeec' align='center'>1.4758</td><td bgcolor='#eeeeec' align='right'>66490256</td><td bgcolor='#eeeeec'><a href='http://www.php.net/function.trigger-error' target='_new'>trigger_error</a>
(  )</td><td title='/Applications/MAMP/htdocs/socap/wp-includes/functions.php' bgcolor='#eeeeec'>.../functions.php<b>:</b>4196</td></tr>
</table></font>
<!DOCTYPE html>
<html lang="es-ES" prefix="og: http://ogp.me/ns#">
<head>
	<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="pingback" href="http://socap.local/xmlrpc.php" />

	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>

	<script>var et_site_url='http://socap.local';var et_post_id='13637';function et_core_page_resource_fallback(a,b){"undefined"===typeof b&&(b=a.sheet.cssRules&&0===a.sheet.cssRules.length);b&&(a.onerror=null,a.onload=null,a.href?a.href=et_site_url+"/?et_core_page_resource="+a.id+et_post_id:a.src&&(a.src=et_site_url+"/?et_core_page_resource="+a.id+et_post_id))}
</script><title>INICIO - SOCAP</title>

<link rel="stylesheet" href="http://socap.local/wp-content/plugins/sitepress-multilingual-cms/res/css/language-selector.css?v=3.2.6" type="text/css" media="all" />
<!--[if lt IE 9]><script>document.createElement('audio');</script><![endif]-->
<!--[if lt IE 9]><script>document.createElement('video');</script><![endif]-->

<!-- This site is optimized with the Yoast SEO plugin v7.2 - https://yoast.com/wordpress/plugins/seo/ -->
<!-- Aviso solo para el Administrador: esta página no muestra una meta description porque no la tiene. Haz una de estas dos cosas: escribe una específicamente para esta página o ve al menú SEO -&gt; Apariencia en la búsqueda y configura una plantilla. -->
<link rel="canonical" href="http://socap.local/" />
<meta property="og:locale" content="es_ES" />
<meta property="og:type" content="website" />
<meta property="og:title" content="INICIO - SOCAP" />
<meta property="og:url" content="http://socap.local/" />
<meta property="og:site_name" content="SOCAP" />
<script type='application/ld+json'>{"@context":"https:\/\/schema.org","@type":"WebSite","@id":"#website","url":"http:\/\/socap.local\/","name":"SOCAP","potentialAction":{"@type":"SearchAction","target":"http:\/\/socap.local\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
<!-- / Yoast SEO plugin. -->

<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="SOCAP &raquo; Feed" href="http://socap.local/feed/" />
<link rel="alternate" type="application/rss+xml" title="SOCAP &raquo; RSS de los comentarios" href="http://socap.local/comments/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/socap.local\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.11"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<meta content="Divi v.4.3.2" name="generator"/>		<style>
		.widget-customizer-highlighted-widget {
			outline: none;
			-webkit-box-shadow: 0 0 2px rgba(30,140,190,0.8);
			box-shadow: 0 0 2px rgba(30,140,190,0.8);
			position: relative;
			z-index: 1;
		}
		</style>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='dashicons-css'  href='http://socap.local/wp-includes/css/dashicons.min.css?ver=4.9.11' type='text/css' media='all' />
<link rel='stylesheet' id='customize-preview-css'  href='http://socap.local/wp-includes/css/customize-preview.min.css?ver=4.9.11' type='text/css' media='all' />
<link rel='stylesheet' id='layerslider-front-css'  href='http://socap.local/wp-content/plugins/LayerSlider/static/public/front.css?ver=6.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='layerslider-css'  href='http://socap.local/wp-content/plugins/LayerSlider/static/layerslider/css/layerslider.css?ver=6.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='ls-google-fonts-css'  href='http://fonts.googleapis.com/css?family=Lato:100,300,regular,700,900%7COpen+Sans:300%7CIndie+Flower:regular%7COswald:300,regular,700&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='http://socap.local/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='http://socap.local/wp-content/plugins/revslider/public/assets/css/settings.css?ver=5.4.7.2' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
.tp-caption a{color:#ff7302;text-shadow:none;-webkit-transition:all 0.2s ease-out;-moz-transition:all 0.2s ease-out;-o-transition:all 0.2s ease-out;-ms-transition:all 0.2s ease-out}.tp-caption a:hover{color:#ffa902}
</style>
<link rel='stylesheet' id='divi-fonts-css'  href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&#038;subset=latin,latin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='divi-style-css'  href='http://socap.local/wp-content/themes/Divi/style.css?ver=4.3.2' type='text/css' media='all' />
<link rel='stylesheet' id='et-builder-googlefonts-cached-css'  href='http://fonts.googleapis.com/css?family=Rubik%3A300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic%7CArimo%3Aregular%2Citalic%2C700%2C700italic&#038;ver=4.9.11#038;subset=latin,latin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='mediaelement-css'  href='http://socap.local/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css?ver=4.2.6-78496d1' type='text/css' media='all' />
<link rel='stylesheet' id='wp-mediaelement-css'  href='http://socap.local/wp-includes/js/mediaelement/wp-mediaelement.min.css?ver=4.9.11' type='text/css' media='all' />
<script type='text/javascript' src='http://socap.local/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='http://socap.local/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<!--[if lt IE 8]>
<script type='text/javascript' src='http://socap.local/wp-includes/js/json2.min.js?ver=2015-05-03'></script>
<![endif]-->
<script type='text/javascript'>
/* <![CDATA[ */
var LS_Meta = {"v":"6.7.1"};
/* ]]> */
</script>
<script type='text/javascript' src='http://socap.local/wp-content/plugins/LayerSlider/static/layerslider/js/greensock.js?ver=1.19.0'></script>
<script type='text/javascript' src='http://socap.local/wp-content/plugins/LayerSlider/static/layerslider/js/layerslider.kreaturamedia.jquery.js?ver=6.7.1'></script>
<script type='text/javascript' src='http://socap.local/wp-content/plugins/LayerSlider/static/layerslider/js/layerslider.transitions.js?ver=6.7.1'></script>
<script type='text/javascript' src='http://socap.local/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js?ver=5.4.7.2'></script>
<script type='text/javascript' src='http://socap.local/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js?ver=5.4.7.2'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var et_core_api_spam_recaptcha = {"site_key":"","page_action":{"action":"socap.local"}};
/* ]]> */
</script>
<script type='text/javascript' src='http://socap.local/wp-content/themes/Divi/core/admin/js/recaptcha.js?ver=4.9.11'></script>
<script type='text/javascript'>
var mejsL10n = {"language":"es","strings":{"mejs.install-flash":"Est\u00e1s usando un navegador que no tiene Flash activo o instalado. Por favor, activa el componente del reproductor Flash o descarga la \u00faltima versi\u00f3n desde https:\/\/get.adobe.com\/flashplayer\/","mejs.fullscreen-off":"Salir de pantalla completa","mejs.fullscreen-on":"Ver en pantalla completa","mejs.download-video":"Descargar v\u00eddeo","mejs.fullscreen":"Pantalla completa","mejs.time-jump-forward":["Saltar %1 segundo hacia adelante","Salta hacia adelante %1 segundos"],"mejs.loop":"Alternar bucle","mejs.play":"Reproducir","mejs.pause":"Pausa","mejs.close":"Cerrar","mejs.time-slider":"Control de tiempo","mejs.time-help-text":"Usa las teclas de direcci\u00f3n izquierda\/derecha para avanzar un segundo, y las flechas arriba\/abajo para avanzar diez segundos.","mejs.time-skip-back":["Saltar atr\u00e1s 1 segundo","Retroceder %1 segundos"],"mejs.captions-subtitles":"Pies de foto \/ Subt\u00edtulos","mejs.captions-chapters":"Cap\u00edtulos","mejs.none":"Ninguna","mejs.mute-toggle":"Desactivar sonido","mejs.volume-help-text":"Utiliza las teclas de flecha arriba\/abajo para aumentar o disminuir el volumen.","mejs.unmute":"Activar sonido","mejs.mute":"Silenciar","mejs.volume-slider":"Control de volumen","mejs.video-player":"Reproductor de v\u00eddeo","mejs.audio-player":"Reproductor de audio","mejs.ad-skip":"Saltar anuncio","mejs.ad-skip-info":["Saltar en 1 segundo","Saltar en %1 segundos"],"mejs.source-chooser":"Selector de origen","mejs.stop":"Parar","mejs.speed-rate":"Tasa de velocidad","mejs.live-broadcast":"Transmisi\u00f3n en vivo","mejs.afrikaans":"Africano","mejs.albanian":"Albano","mejs.arabic":"\u00c1rabe","mejs.belarusian":"Bielorruso","mejs.bulgarian":"B\u00falgaro","mejs.catalan":"Catal\u00e1n","mejs.chinese":"Chino","mejs.chinese-simplified":"Chino (Simplificado)","mejs.chinese-traditional":"Chino (Tradicional)","mejs.croatian":"Croata","mejs.czech":"Checo","mejs.danish":"Dan\u00e9s","mejs.dutch":"Holand\u00e9s","mejs.english":"Ingl\u00e9s","mejs.estonian":"Estonio","mejs.filipino":"Filipino","mejs.finnish":"Fin\u00e9s","mejs.french":"Franc\u00e9s","mejs.galician":"Gallego","mejs.german":"Alem\u00e1n","mejs.greek":"Griego","mejs.haitian-creole":"Creole haitiano","mejs.hebrew":"Hebreo","mejs.hindi":"Indio","mejs.hungarian":"H\u00fangaro","mejs.icelandic":"Island\u00e9s","mejs.indonesian":"Indonesio","mejs.irish":"Irland\u00e9s","mejs.italian":"Italiano","mejs.japanese":"Japon\u00e9s","mejs.korean":"Coreano","mejs.latvian":"Let\u00f3n","mejs.lithuanian":"Lituano","mejs.macedonian":"Macedonio","mejs.malay":"Malayo","mejs.maltese":"Malt\u00e9s","mejs.norwegian":"Noruego","mejs.persian":"Persa","mejs.polish":"Polaco","mejs.portuguese":"Portugu\u00e9s","mejs.romanian":"Rumano","mejs.russian":"Ruso","mejs.serbian":"Serbio","mejs.slovak":"Eslovaco","mejs.slovenian":"Esloveno","mejs.spanish":"Espa\u00f1ol","mejs.swahili":"Swahili","mejs.swedish":"Sueco","mejs.tagalog":"Tagalo","mejs.thai":"Thai","mejs.turkish":"Turco","mejs.ukrainian":"Ukraniano","mejs.vietnamese":"Vietnamita","mejs.welsh":"Gal\u00e9s","mejs.yiddish":"Yiddish"}};
</script>
<script type='text/javascript' src='http://socap.local/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=4.2.6-78496d1'></script>
<script type='text/javascript' src='http://socap.local/wp-includes/js/mediaelement/mediaelement-migrate.min.js?ver=4.9.11'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/mediaelement\/","classPrefix":"mejs-","stretching":"responsive"};
/* ]]> */
</script>
<script type='text/javascript' src='http://socap.local/wp-content/plugins/sitepress-multilingual-cms/res/js/jquery.cookie.js?ver=3.2.6'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpml_browser_redirect_params = {"pageLanguage":"es","languageUrls":{"fr_FR":"http:\/\/socap.local\/fr\/","fr":"http:\/\/socap.local\/fr\/","FR":"http:\/\/socap.local\/fr\/","en_US":"http:\/\/socap.local\/en\/","en":"http:\/\/socap.local\/en\/","US":"http:\/\/socap.local\/en\/","es_ES":"http:\/\/socap.local\/","es":"http:\/\/socap.local\/","ES":"http:\/\/socap.local\/"},"cookie":{"name":"_icl_visitor_lang_js","domain":"socap.local","path":"\/","expiration":24}};
/* ]]> */
</script>
<script type='text/javascript' src='http://socap.local/wp-content/plugins/sitepress-multilingual-cms/res/js/browser-redirect.js?ver=3.2.6'></script>
<meta name="generator" content="Powered by LayerSlider 6.7.1 - Multi-Purpose, Responsive, Parallax, Mobile-Friendly Slider Plugin for WordPress." />
<!-- LayerSlider updates and docs at: https://layerslider.kreaturamedia.com -->
<link rel='https://api.w.org/' href='http://socap.local/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://socap.local/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://socap.local/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.9.11" />
<link rel='shortlink' href='http://socap.local/' />
<link rel="alternate" type="application/json+oembed" href="http://socap.local/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fsocap.local%2F" />
<link rel="alternate" type="text/xml+oembed" href="http://socap.local/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fsocap.local%2F&#038;format=xml" />
<meta name="generator" content="WPML ver:3.2.6 stt:1,4,2;" />
<link rel="alternate" hreflang="fr-FR" href="http://socap.local/fr/" />
<link rel="alternate" hreflang="en-US" href="http://socap.local/en/" />
<link rel="alternate" hreflang="es-ES" href="http://socap.local/" />

<style type="text/css">#lang_sel_list a.lang_sel_sel, #lang_sel_list a.lang_sel_sel:visited{color:#444444;}#lang_sel_list a:hover, #lang_sel_list a.lang_sel_sel:hover{color:#000000;}#lang_sel_list a.lang_sel_sel, #lang_sel_list a.lang_sel_sel:visited{background-color:#ffffff;}#lang_sel_list a.lang_sel_sel:hover{background-color:#eeeeee;}#lang_sel_list ul a.lang_sel_other, #lang_sel_list ul a.lang_sel_other:visited{color:#444444;}#lang_sel_list ul a.lang_sel_other:hover{color:#000000;}#lang_sel_list ul a.lang_sel_other, #lang_sel li ul a:link, #lang_sel_list ul a.lang_sel_other:visited{background-color:#ffffff;}#lang_sel_list ul a.lang_sel_other:hover{background-color:#eeeeee;}#lang_sel_list a, #lang_sel_list a:visited{border-color:#cdcdcd;} #lang_sel_list  ul{border-top:1px solid #cdcdcd;}</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" /><link rel="shortcut icon" href="" /><style type="text/css" id="custom-background-css"></style><meta name='robots' content='noindex,follow' />
<style>
			body.wp-customizer-unloading {
				opacity: 0.25;
				cursor: progress !important;
				-webkit-transition: opacity 0.5s;
				transition: opacity 0.5s;
			}
			body.wp-customizer-unloading * {
				pointer-events: none !important;
			}
			form.customize-unpreviewable,
			form.customize-unpreviewable input,
			form.customize-unpreviewable select,
			form.customize-unpreviewable button,
			a.customize-unpreviewable,
			area.customize-unpreviewable {
				cursor: not-allowed !important;
			}
		</style>		<script>
		( function() {
			var urlParser, oldQueryParams, newQueryParams, i;
			if ( parent !== window ) {
				return;
			}
			urlParser = document.createElement( 'a' );
			urlParser.href = location.href;
			oldQueryParams = urlParser.search.substr( 1 ).split( /&/ );
			newQueryParams = [];
			for ( i = 0; i < oldQueryParams.length; i += 1 ) {
				if ( ! /^customize_messenger_channel=/.test( oldQueryParams[ i ] ) ) {
					newQueryParams.push( oldQueryParams[ i ] );
				}
			}
			urlParser.search = newQueryParams.join( '&' );
			if ( urlParser.search !== location.search ) {
				location.replace( urlParser.href );
			}
		} )();
		</script>
		<meta name="generator" content="Powered by Slider Revolution 5.4.7.2 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<link rel="icon" href="/favicon.ico" sizes="32x32" />

<!-- BEGIN GADWP v5.3.2 Universal Analytics - https://deconf.com/google-analytics-dashboard-wordpress/ -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-117493882-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- END GADWP Universal Analytics -->
<script type="text/javascript">function setREVStartSize(e){									
						try{ e.c=jQuery(e.c);var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
							if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})					
						}catch(d){console.log("Failure at Presize of Slider:"+d)}						
					};</script>
		<style type="text/css" id="wp-custom-css">
					</style>
	<link rel="stylesheet" id="et-core-unified-13637-cached-inline-styles" href="http://socap.local/wp-content/et-cache/13637/et-core-unified-13637-15820612684197.min.css" onerror="et_core_page_resource_fallback(this, true)" onload="et_core_page_resource_fallback(this)" /><style id="et-divi-customizer-preview-global-cached-inline-styles">#main-header .nav li ul a{color:rgba(0,0,0,0.7)}#footer-widgets .footer-widget a,#footer-widgets .footer-widget li a,#footer-widgets .footer-widget li a:hover{color:#ffffff}.footer-widget{color:#ffffff}.footer-widget .et_pb_widget div,.footer-widget .et_pb_widget ul,.footer-widget .et_pb_widget ol,.footer-widget .et_pb_widget label{line-height:1.7em}#et-footer-nav .bottom-nav li.current-menu-item a{color:#2ea3f2}body .et_pb_button:hover,.woocommerce a.button.alt:hover,.woocommerce-page a.button.alt:hover,.woocommerce button.button.alt:hover,.woocommerce button.button.alt.disabled:hover,.woocommerce-page button.button.alt:hover,.woocommerce-page button.button.alt.disabled:hover,.woocommerce input.button.alt:hover,.woocommerce-page input.button.alt:hover,.woocommerce #respond input#submit.alt:hover,.woocommerce-page #respond input#submit.alt:hover,.woocommerce #content input.button.alt:hover,.woocommerce-page #content input.button.alt:hover,.woocommerce a.button:hover,.woocommerce-page a.button:hover,.woocommerce button.button:hover,.woocommerce-page button.button:hover,.woocommerce input.button:hover,.woocommerce-page input.button:hover,.woocommerce #respond input#submit:hover,.woocommerce-page #respond input#submit:hover,.woocommerce #content input.button:hover,.woocommerce-page #content input.button:hover{border-radius:0px}@media only screen and (min-width:981px){.et_header_style_left #et-top-navigation,.et_header_style_split #et-top-navigation{padding:40px 0 0 0}.et_header_style_left #et-top-navigation nav>ul>li>a,.et_header_style_split #et-top-navigation nav>ul>li>a{padding-bottom:40px}.et_header_style_split .centered-inline-logo-wrap{width:79px;margin:-79px 0}.et_header_style_split .centered-inline-logo-wrap #logo{max-height:79px}.et_pb_svg_logo.et_header_style_split .centered-inline-logo-wrap #logo{height:79px}.et_header_style_centered #top-menu>li>a{padding-bottom:14px}.et_header_style_slide #et-top-navigation,.et_header_style_fullscreen #et-top-navigation{padding:31px 0 31px 0!important}.et_header_style_centered #main-header .logo_container{height:79px}#logo{max-height:78%}.et_pb_svg_logo #logo{height:78%}.et_header_style_centered.et_hide_primary_logo #main-header:not(.et-fixed-header) .logo_container,.et_header_style_centered.et_hide_fixed_logo #main-header.et-fixed-header .logo_container{height:14.22px}}@media only screen and (min-width:1350px){.et_pb_row{padding:27px 0}.et_pb_section{padding:54px 0}.single.et_pb_pagebuilder_layout.et_full_width_page .et_post_meta_wrapper{padding-top:81px}.et_pb_fullwidth_section{padding:0}}</style></head>
<body class="home page-template-default page page-id-13637 logged-in et_pb_button_helper_class et_fixed_nav et_show_nav et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_header_style_left et_pb_footer_columns4 et_cover_background et_pb_gutter osx et_pb_gutters3 et_pb_pagebuilder_layout et_no_sidebar et_is_customize_preview et_divi_theme et-db et_minified_js et_minified_css">
	<div id="page-container">

					<div id="top-header"style="display: none;">
			<div class="container clearfix">

			
				<div id="et-secondary-menu">
								</div> <!-- #et-secondary-menu -->

			</div> <!-- .container -->
		</div> <!-- #top-header -->
		
					<div class="et_slide_in_menu_container">
							<span class="mobile_menu_bar et_toggle_fullscreen_menu"></span>
			
								<div class="et_slide_menu_top">

																				<div class="clear"></div>
								<form role="search" method="get" class="et-search-form" action="http://socap.local/">
					<input type="search" class="et-search-field" placeholder="Búsqueda &hellip;" value="" name="s" title="Buscar:" />					<button type="submit" id="searchsubmit_header"></button>
				</form>
			
										
				</div> <!-- .et_slide_menu_top -->
			
			<div class="et_pb_fullscreen_nav_container">
				
				<ul id="mobile_menu_slide" class="et_mobile_menu">

				<li id="menu-item-23054" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-13637 current_page_item menu-item-23054"><a href="http://socap.local/">INICIO</a></li>
<li id="menu-item-23063" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-23063"><a href="http://socap.local/petrolifera/">División PETROLIFERA</a>
<ul class="sub-menu">
	<li id="menu-item-23065" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23065"><a href="http://socap.local/petrolifera/">PETROLIFERA – Tanques para combustible</a></li>
	<li id="menu-item-23055" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23055"><a href="http://socap.local/petrolifera-equipos-varios/">PETROLIFERA – Equipos de almacenamiento y tratamiento de aguas</a></li>
	<li id="menu-item-23062" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23062"><a href="http://socap.local/petrolera-equipos-de-almacenamiento-y-tratamiento-de-aguas/">PETROLIFERA – Equipos Varios</a></li>
</ul>
</li>
<li id="menu-item-23066" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-23066"><a href="http://socap.local/industrial-tanques-de-almacenamiento-de-fluidos/">División INDUSTRIAL</a>
<ul class="sub-menu">
	<li id="menu-item-23061" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23061"><a href="http://socap.local/industrial-tanques-de-almacenamiento-de-fluidos/">INDUSTRIAL – Tanques de almacenamiento de fluidos</a></li>
	<li id="menu-item-23060" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23060"><a href="http://socap.local/industrial-instalaciones-completas/">INDUSTRIAL – Instalaciones Completas</a></li>
	<li id="menu-item-23056" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23056"><a href="http://socap.local/industrial-servicio-postventa-y-mantenimiento/">INDUSTRIAL – Servicio postventa y mantenimiento</a></li>
</ul>
</li>
<li id="menu-item-23067" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-23067"><a href="http://socap.local/industrial-servicio-de-postventa-y-mantenimiento/">División MEDIOAMBIENTE</a>
<ul class="sub-menu">
	<li id="menu-item-23059" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23059"><a href="http://socap.local/industrial-servicio-de-postventa-y-mantenimiento/">MEDIOAMBIENTE – Recogida y tratamiento de residuos</a></li>
	<li id="menu-item-23058" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23058"><a href="http://socap.local/medioambiente-almacenamiento-de-productos-peligrosos/">MEDIOAMBIENTE – Almacenamiento de productos peligrosos</a></li>
	<li id="menu-item-23057" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23057"><a href="http://socap.local/medioambiente-tratamiento-de-aguas-residuales-industriales-y-urbanas/">MEDIOAMBIENTE – Tratamiento de aguas residuales, industriales y urbanas</a></li>
</ul>
</li>
<li id="menu-item-23126" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23126"><a href="http://socap.local/contacto-es/">CONTACTO</a></li>

				</ul>
			</div>
		</div>
		
			<header id="main-header" data-height-onload="79">
			<div class="container clearfix et_menu_container">
							<div class="logo_container">
					<span class="logo_helper"></span>
					<a href="http://socap.local/">
						<img src="http://socap.local/wp-content/uploads/logo-SOCAP-tr-tx-con-texto1.png" alt="SOCAP" id="logo" data-height-percentage="78" />
					</a>
				</div>
							<div id="et-top-navigation" data-height="79" data-fixed-height="40">
											<nav id="top-menu-nav">
						<ul id="top-menu" class="nav"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-13637 current_page_item menu-item-23054"><a href="http://socap.local/">INICIO</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-23063"><a href="http://socap.local/petrolifera/">División PETROLIFERA</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23065"><a href="http://socap.local/petrolifera/">PETROLIFERA – Tanques para combustible</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23055"><a href="http://socap.local/petrolifera-equipos-varios/">PETROLIFERA – Equipos de almacenamiento y tratamiento de aguas</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23062"><a href="http://socap.local/petrolera-equipos-de-almacenamiento-y-tratamiento-de-aguas/">PETROLIFERA – Equipos Varios</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-23066"><a href="http://socap.local/industrial-tanques-de-almacenamiento-de-fluidos/">División INDUSTRIAL</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23061"><a href="http://socap.local/industrial-tanques-de-almacenamiento-de-fluidos/">INDUSTRIAL – Tanques de almacenamiento de fluidos</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23060"><a href="http://socap.local/industrial-instalaciones-completas/">INDUSTRIAL – Instalaciones Completas</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23056"><a href="http://socap.local/industrial-servicio-postventa-y-mantenimiento/">INDUSTRIAL – Servicio postventa y mantenimiento</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-23067"><a href="http://socap.local/industrial-servicio-de-postventa-y-mantenimiento/">División MEDIOAMBIENTE</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23059"><a href="http://socap.local/industrial-servicio-de-postventa-y-mantenimiento/">MEDIOAMBIENTE – Recogida y tratamiento de residuos</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23058"><a href="http://socap.local/medioambiente-almacenamiento-de-productos-peligrosos/">MEDIOAMBIENTE – Almacenamiento de productos peligrosos</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23057"><a href="http://socap.local/medioambiente-tratamiento-de-aguas-residuales-industriales-y-urbanas/">MEDIOAMBIENTE – Tratamiento de aguas residuales, industriales y urbanas</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23126"><a href="http://socap.local/contacto-es/">CONTACTO</a></li>
</ul>						</nav>
					
					
											<span class="mobile_menu_bar et_pb_header_toggle et_toggle_left_menu"></span>
					
										<div id="et_top_search">
						<span id="et_search_icon"></span>
					</div>
					
					<div id="et_mobile_nav_menu">
				<div class="mobile_nav closed">
					<span class="select_page">Seleccionar página</span>
					<span class="mobile_menu_bar mobile_menu_bar_toggle"></span>
				</div>
			</div>				</div> <!-- #et-top-navigation -->
			</div> <!-- .container -->
			<div class="et_search_outer">
				<div class="container et_search_form_container">
					<form role="search" method="get" class="et-search-form" action="http://socap.local/">
					<input type="search" class="et-search-field" placeholder="Búsqueda &hellip;" value="" name="s" title="Buscar:" />					</form>
					<span class="et_close_search_field"></span>
				</div>
			</div>
		</header> <!-- #main-header -->
			<div id="et-main-area">
	
<div id="main-content">


			
				<article id="post-13637" class="post-13637 page type-page status-publish hentry">

				
					<div class="entry-content">
					<div id="et-boc" class="et-boc">
			
		<div class="et-l et-l--post">
			<div class="et_builder_inner_content et_pb_gutters3">
		<div class="et_pb_section et_pb_section_0 et_pb_with_background et_section_regular" >
				
				
				
				
					<div class="et_pb_row et_pb_row_0 et_pb_equal_columns et_pb_gutters3">
				<div class="et_pb_column et_pb_column_2_3 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_with_border et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_dark">
				
				
				<div class="et_pb_text_inner"><h1>Divi Construction</h1></div>
			</div> <!-- .et_pb_text --><div class="et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_left et_pb_bg_layout_dark">
				
				
				<div class="et_pb_text_inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam lectus erat consectetur eu sapien eget, rhoncus consectetur sem.</div>
			</div> <!-- .et_pb_text --><div class="et_pb_button_module_wrapper et_pb_button_0_wrapper  et_pb_module ">
				<a class="et_pb_button et_pb_custom_button_icon et_pb_button_0 et_pb_bg_layout_dark" href="" data-icon="&#x24;">View Our Work</a>
			</div>
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_3 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_2  et_pb_text_align_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><h2>Our Services</h2></div>
			</div> <!-- .et_pb_text --><div class="et_pb_module et_pb_blurb et_pb_blurb_0 et_animated  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
				
				
				<div class="et_pb_blurb_content">
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><img src="http://socap.local/wp-content/uploads/construction-icon-2-white.png" alt="" class="et-waypoint et_pb_animation_off" /></span></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header"><span>Building Construction</span></h4>
						<div class="et_pb_blurb_description">Lorem ipsum dolor sit amet</div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb --><div class="et_pb_module et_pb_blurb et_pb_blurb_1 et_animated  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
				
				
				<div class="et_pb_blurb_content">
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><img src="http://socap.local/wp-content/uploads/construction-icon-1-white.png" alt="" class="et-waypoint et_pb_animation_off" /></span></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header"><span>Foundation Work</span></h4>
						<div class="et_pb_blurb_description">Lorem ipsum dolor sit amet,</div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb --><div class="et_pb_module et_pb_blurb et_pb_blurb_2 et_animated  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
				
				
				<div class="et_pb_blurb_content">
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><img src="http://socap.local/wp-content/uploads/construction-icon-3-white.png" alt="" class="et-waypoint et_pb_animation_off" /></span></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header"><span>Tear-downs & Haul-offs</span></h4>
						<div class="et_pb_blurb_description">Lorem ipsum dolor sit amet,</div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb --><div class="et_pb_module et_pb_blurb et_pb_blurb_3 et_animated  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
				
				
				<div class="et_pb_blurb_content">
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><img src="http://socap.local/wp-content/uploads/construction-icon-4-white.png" alt="" class="et-waypoint et_pb_animation_off" /></span></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header"><span>Site Management</span></h4>
						<div class="et_pb_blurb_description">Lorem ipsum dolor sit amet,</div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_1 et_animated et_section_regular" >
				
				
				
				
					<div class="et_pb_row et_pb_row_1">
				<div class="et_pb_column et_pb_column_3_4 et_pb_column_2  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_3  et_pb_text_align_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><h2>Get a Quote For Your Project</h2></div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_4 et_pb_column_3  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_button_module_wrapper et_pb_button_1_wrapper  et_pb_module ">
				<a class="et_pb_button et_pb_custom_button_icon et_pb_button_1 et_hover_enabled et_pb_bg_layout_light" href="" data-icon="&#x24;">Free Quote</a>
			</div>
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_2 et_pb_specialty_fullwidth et_pb_with_background et_section_specialty" >
				
				
				
				<div class="et_pb_row et_pb_gutters1">
					<div class="et_pb_column et_pb_column_1_3 et_pb_column_4    et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_divider_0 et_pb_space et_pb_divider_hidden"><div class="et_pb_divider_internal"></div></div>
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_2_3 et_pb_column_5   et_pb_specialty_column  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_row_inner et_pb_row_inner_0">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_inner et_pb_column_inner_0 et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_4  et_pb_text_align_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><h2>No Project Too Big Or Too Small</h2></div>
			</div> <!-- .et_pb_text --><div class="et_pb_module et_pb_divider et_pb_divider_1 et_pb_divider_position_center et_pb_space"><div class="et_pb_divider_internal"></div></div>
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row_inner --><div class="et_pb_row_inner et_pb_row_inner_1 et_pb_gutters3">
				<div class="et_pb_column et_pb_column_1_3 et_pb_column_inner et_pb_column_inner_1">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_5  et_pb_text_align_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner">Lectus erat, consectetur eu sapien eget rhoncus consectetur sem. Proin cursus, dolor a mollis consectetur, risus dolor fermentum massa, a commodo elit dui sit amet risus. Maecenas ornare nisl a tortor ultrices bibendum. Nulla fermentum, metus quis sodales tristique, augue mauris molestie augue, non feugiat ligula neque nec felis.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed nibh dignissim, cursus tellus sit amet, ultrices mauris. Aliquam blandit est in eros</div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_3 et_pb_column_inner et_pb_column_inner_2 et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_6  et_pb_text_align_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner">Lorem ipsum dolor sit consectetur adipiscing elit. Nullam lectus erat, consectetur eu sapien eget rhoncus consectetur sem.</p>
<p>Proin cursus, dolor a mollis consectetur, risus dolor fermentum massa, a commodo elit dui sit amet risus. Maecenas ornare nisl a tortor ultrices bibendum. Nulla fermentum, metus quis sodales tristique, augue</div>
			</div> <!-- .et_pb_text --><div class="et_pb_button_module_wrapper et_pb_button_2_wrapper  et_pb_module ">
				<a class="et_pb_button et_pb_custom_button_icon et_pb_button_2 et_hover_enabled et_pb_bg_layout_light" href="" data-icon="&#x24;">Learn More</a>
			</div>
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row_inner --><div class="et_pb_row_inner et_pb_row_inner_2 et_animated">
				<div class="et_pb_column et_pb_column_1_3 et_pb_column_inner et_pb_column_inner_3">
				
				
				<div class="et_pb_module et_pb_number_counter et_pb_number_counter_0  et_pb_text_align_center et_pb_bg_layout_light et_pb_with_title" data-number-value="12" data-number-separator="">
				
				
				<div class="percent"  data-et-multi-view="{&quot;schema&quot;:{&quot;classes&quot;:{&quot;desktop&quot;:{&quot;add&quot;:[&quot;et_pb_with_title&quot;]},&quot;tablet&quot;:{&quot;remove&quot;:[&quot;et_pb_with_title&quot;]},&quot;hover&quot;:{&quot;remove&quot;:[&quot;et_pb_with_title&quot;]}}},&quot;slug&quot;:&quot;et_pb_number_counter&quot;}"><p><span class="percent-value"></span><span class="percent-sign"></span></p></div>
				<h3 class="title">Years Established</h3>
			</div><!-- .et_pb_number_counter -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_3 et_pb_column_inner et_pb_column_inner_4 et-last-child">
				
				
				<div class="et_pb_module et_pb_number_counter et_pb_number_counter_1  et_pb_text_align_center et_pb_bg_layout_dark et_pb_with_title" data-number-value="250" data-number-separator="">
				
				
				<div class="percent"  data-et-multi-view="{&quot;schema&quot;:{&quot;classes&quot;:{&quot;desktop&quot;:{&quot;add&quot;:[&quot;et_pb_with_title&quot;]},&quot;tablet&quot;:{&quot;remove&quot;:[&quot;et_pb_with_title&quot;]},&quot;hover&quot;:{&quot;remove&quot;:[&quot;et_pb_with_title&quot;]}}},&quot;slug&quot;:&quot;et_pb_number_counter&quot;}"><p><span class="percent-value"></span><span class="percent-sign"></span></p></div>
				<h3 class="title">Completed Projects</h3>
			</div><!-- .et_pb_number_counter -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row_inner -->
			</div> <!-- .et_pb_column -->
				</div> <!-- .et_pb_row -->
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_3 et_section_regular" >
				
				
				
				
					<div class="et_pb_row et_pb_row_2">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_6  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_7  et_pb_text_align_center et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><h2>Latest Projects</h2></div>
			</div> <!-- .et_pb_text --><div class="et_pb_module et_pb_divider et_pb_divider_2 et_pb_divider_position_center et_pb_space"><div class="et_pb_divider_internal"></div></div>
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_3 et_pb_gutters3">
				<div class="et_pb_column et_pb_column_1_3 et_pb_column_7  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_image et_pb_image_0">
				
				
				<span class="et_pb_image_wrap has-box-shadow-overlay"><div class="box-shadow-overlay"></div><img src="http://socap.local/wp-content/uploads/construction-19.jpg" alt="" title="" srcset="http://socap.local/wp-content/uploads/construction-19.jpg 800w, http://socap.local/wp-content/uploads/construction-19-300x188.jpg 300w, http://socap.local/wp-content/uploads/construction-19-768x480.jpg 768w, http://socap.local/wp-content/uploads/construction-19-400x250.jpg 400w, http://socap.local/wp-content/uploads/construction-19-480x300.jpg 480w" sizes="(max-width: 800px) 100vw, 800px" /></span>
			</div><div class="et_pb_with_border et_pb_module et_pb_cta_0 et_hover_enabled et_pb_promo  et_pb_text_align_left et_pb_bg_layout_light et_pb_no_bg">
				
				
				<div class="et_pb_promo_description"><h2 class="et_pb_module_header">Project Title</h2><div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasell sed nibh dignissim, cursus tellus sit amet, ultrices mauris. Aliquam blandit est in eros elementum, quis vehicula est suscipit. Pellentesque posuere erat erat.</div></div>
				<div class="et_pb_button_wrapper"><a class="et_pb_button et_pb_custom_button_icon et_pb_promo_button" href="#" data-icon="&#x24;">View Project</a></div>
			</div>
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_3 et_pb_column_8  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_image et_pb_image_1">
				
				
				<span class="et_pb_image_wrap has-box-shadow-overlay"><div class="box-shadow-overlay"></div><img src="http://socap.local/wp-content/uploads/construction-18.jpg" alt="" title="" srcset="http://socap.local/wp-content/uploads/construction-18.jpg 800w, http://socap.local/wp-content/uploads/construction-18-300x188.jpg 300w, http://socap.local/wp-content/uploads/construction-18-768x480.jpg 768w, http://socap.local/wp-content/uploads/construction-18-400x250.jpg 400w, http://socap.local/wp-content/uploads/construction-18-480x300.jpg 480w" sizes="(max-width: 800px) 100vw, 800px" /></span>
			</div><div class="et_pb_with_border et_pb_module et_pb_cta_1 et_hover_enabled et_pb_promo  et_pb_text_align_left et_pb_bg_layout_light et_pb_no_bg">
				
				
				<div class="et_pb_promo_description"><h2 class="et_pb_module_header">Project Title</h2><div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasell sed nibh dignissim, cursus tellus sit amet, ultrices mauris. Aliquam blandit est in eros elementum, quis vehicula est suscipit. Pellentesque posuere erat erat.</div></div>
				<div class="et_pb_button_wrapper"><a class="et_pb_button et_pb_custom_button_icon et_pb_promo_button" href="#" data-icon="&#x24;">View Project</a></div>
			</div>
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_3 et_pb_column_9  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_image et_pb_image_2">
				
				
				<span class="et_pb_image_wrap has-box-shadow-overlay"><div class="box-shadow-overlay"></div><img src="http://socap.local/wp-content/uploads/construction-15.jpg" alt="" title="" srcset="http://socap.local/wp-content/uploads/construction-15.jpg 800w, http://socap.local/wp-content/uploads/construction-15-300x188.jpg 300w, http://socap.local/wp-content/uploads/construction-15-768x480.jpg 768w, http://socap.local/wp-content/uploads/construction-15-400x250.jpg 400w, http://socap.local/wp-content/uploads/construction-15-480x300.jpg 480w" sizes="(max-width: 800px) 100vw, 800px" /></span>
			</div><div class="et_pb_with_border et_pb_module et_pb_cta_2 et_hover_enabled et_pb_promo  et_pb_text_align_left et_pb_bg_layout_light et_pb_no_bg">
				
				
				<div class="et_pb_promo_description"><h2 class="et_pb_module_header">Project Title</h2><div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasell sed nibh dignissim, cursus tellus sit amet, ultrices mauris. Aliquam blandit est in eros elementum, quis vehicula est suscipit. Pellentesque posuere erat erat.</div></div>
				<div class="et_pb_button_wrapper"><a class="et_pb_button et_pb_custom_button_icon et_pb_promo_button" href="#" data-icon="&#x24;">View Project</a></div>
			</div>
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_4">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_10  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_button_module_wrapper et_pb_button_3_wrapper et_pb_button_alignment_center et_pb_module ">
				<a class="et_pb_button et_pb_custom_button_icon et_pb_button_3 et_hover_enabled et_pb_bg_layout_light" href="" data-icon="&#x24;">View All</a>
			</div>
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_4 et_pb_specialty_fullwidth et_pb_with_background et_section_specialty" >
				
				
				
				<div class="et_pb_row et_pb_gutters1">
					<div class="et_pb_column et_pb_column_1_3 et_pb_column_11    et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_8  et_pb_text_align_left et_pb_bg_layout_dark">
				
				
				<div class="et_pb_text_inner"><h2>We’ve Been Building For Over 10 Years</h2></div>
			</div> <!-- .et_pb_text --><div class="et_pb_module et_pb_divider et_pb_divider_3 et_pb_divider_position_center et_pb_space"><div class="et_pb_divider_internal"></div></div><div class="et_pb_module et_pb_text et_pb_text_9  et_pb_text_align_left et_pb_bg_layout_dark">
				
				
				<div class="et_pb_text_inner">Lectus erat, consectetur eu sapien eget rhoncus consectetur sem. Proin cursus, dolor a mollis consectetur, risus dolor fermentum massa, a commodo elit dui sit amet risus. Maecenas ornare nisl a tortor ultrices bibendum. Nulla fermentum, metus quis sodales tristique, augue mauris molestie augue, non feugiat ligula neque nec felis.</div>
			</div> <!-- .et_pb_text --><div class="et_pb_button_module_wrapper et_pb_button_4_wrapper  et_pb_module ">
				<a class="et_pb_button et_pb_custom_button_icon et_pb_button_4 et_hover_enabled et_pb_bg_layout_light" href="" data-icon="&#x24;">About Us</a>
			</div>
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_2_3 et_pb_column_12   et_pb_specialty_column  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_row_inner et_pb_row_inner_3">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_inner et_pb_column_inner_5 et-last-child">
				
				
				<div class="et_pb_module et_pb_video et_pb_video_0">
				
				
				<div class="et_pb_video_box"><iframe width="1080" height="608" src="https://www.youtube.com/embed/FkQuawiGWUw?feature=oembed" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
				<div style="background-image:url(http://socap.local/wp-content/uploads/construction-12.jpg)" class="et_pb_video_overlay"><div class="et_pb_video_overlay_hover"><a href="#" class="et_pb_video_play"></a></div></div>
			</div>
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row_inner --><div class="et_pb_row_inner et_pb_row_inner_4 et_animated">
				<div class="et_pb_column et_pb_column_1_3 et_pb_column_inner et_pb_column_inner_6">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_10  et_pb_text_align_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><h3>Call For a Quote:</h3>
<h4>(346) 234-6973</h4></div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_3 et_pb_column_inner et_pb_column_inner_7 et-last-child">
				
				
				<div class="et_pb_button_module_wrapper et_pb_button_5_wrapper et_pb_button_alignment_center et_pb_module ">
				<a class="et_pb_button et_pb_custom_button_icon et_pb_button_5 et_hover_enabled et_pb_bg_layout_light" href="" data-icon="&#x24;">Online Estimate Form</a>
			</div>
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row_inner -->
			</div> <!-- .et_pb_column -->
				</div> <!-- .et_pb_row -->
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_5 et_pb_with_background et_section_regular" >
				
				
				
				
					<div class="et_pb_row et_pb_row_5">
				<div class="et_pb_column et_pb_column_1_3 et_pb_column_13  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_11  et_pb_text_align_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><h2>Let&#8217;s Build Something Together</h2></div>
			</div> <!-- .et_pb_text --><div class="et_pb_module et_pb_divider et_pb_divider_4 et_pb_divider_position_center et_pb_space"><div class="et_pb_divider_internal"></div></div><div class="et_pb_module et_pb_text et_pb_text_12  et_pb_text_align_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner">Proin cursus, dolor a mollis consectetur, risus dolor fermentum massa, a sit commodo elit dui sit amet risus.Maecenas ornare nisl a tortor ultrices bibendum.</div>
			</div> <!-- .et_pb_text --><div class="et_pb_button_module_wrapper et_pb_button_6_wrapper  et_pb_module ">
				<a class="et_pb_button et_pb_custom_button_icon et_pb_button_6 et_hover_enabled et_pb_bg_layout_light" href="" data-icon="&#x24;">Get In Touch</a>
			</div>
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_2_3 et_pb_column_14  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_accordion et_pb_accordion_0">
				
				
				<div class="et_pb_toggle et_pb_module et_pb_accordion_item et_pb_accordion_item_0  et_pb_toggle_open">
				
				
				<h5 class="et_pb_toggle_title">Donec rutrum congue leo eget malesuada?</h5>
				<div class="et_pb_toggle_content clearfix">Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincid</div> <!-- .et_pb_toggle_content -->
			</div> <!-- .et_pb_toggle --><div class="et_pb_toggle et_pb_module et_pb_accordion_item et_pb_accordion_item_1  et_pb_toggle_close">
				
				
				<h5 class="et_pb_toggle_title">Vivamus suscipit tortor eget felis porttitor volutpat?</h5>
				<div class="et_pb_toggle_content clearfix">Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt.</div> <!-- .et_pb_toggle_content -->
			</div> <!-- .et_pb_toggle --><div class="et_pb_toggle et_pb_module et_pb_accordion_item et_pb_accordion_item_2  et_pb_toggle_close">
				
				
				<h5 class="et_pb_toggle_title">Curabitur non nulla sit amet nisl tempus?</h5>
				<div class="et_pb_toggle_content clearfix">Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt.</div> <!-- .et_pb_toggle_content -->
			</div> <!-- .et_pb_toggle --><div class="et_pb_toggle et_pb_module et_pb_accordion_item et_pb_accordion_item_3  et_pb_toggle_close">
				
				
				<h5 class="et_pb_toggle_title">Pellentesque in ipsum id orci porta dapibus?</h5>
				<div class="et_pb_toggle_content clearfix">Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt.</div> <!-- .et_pb_toggle_content -->
			</div> <!-- .et_pb_toggle --><div class="et_pb_toggle et_pb_module et_pb_accordion_item et_pb_accordion_item_4  et_pb_toggle_close">
				
				
				<h5 class="et_pb_toggle_title">Curabitur non nulla sit amet nisl?</h5>
				<div class="et_pb_toggle_content clearfix">Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt.</div> <!-- .et_pb_toggle_content -->
			</div> <!-- .et_pb_toggle -->
			</div> <!-- .et_pb_accordion -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_6 et_pb_with_background et_section_regular" >
				
				
				
				
					<div class="et_pb_row et_pb_row_6">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_15  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_13  et_pb_text_align_center et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><h2>Client Testimonials</h2></div>
			</div> <!-- .et_pb_text --><div class="et_pb_module et_pb_divider et_pb_divider_5 et_pb_divider_position_center et_pb_space"><div class="et_pb_divider_internal"></div></div>
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_7">
				<div class="et_pb_column et_pb_column_1_3 et_pb_column_16  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_testimonial et_pb_testimonial_0 clearfix  et_pb_text_align_left et_pb_bg_layout_light et_pb_icon_off et_pb_testimonial_no_image">
				
				
				<div style="background-image:url(http://socap.local/wp-content/uploads/stars-5.png)" class="et_pb_testimonial_portrait"></div>
				<div class="et_pb_testimonial_description">
					<div class="et_pb_testimonial_description_inner"><div class="et_pb_testimonial_content">“Lorem ipsum dolor sit adipiscing elit. Nullam lectus consectetur eu sapien. Proin cursus, dolor a mollis risus dolor fermentum massa, a commodo elit dui sit amet tortor.”</div></div> <!-- .et_pb_testimonial_description_inner -->
					<span class="et_pb_testimonial_author">JOHN SMITH</span>
					<p class="et_pb_testimonial_meta"></p>
				</div> <!-- .et_pb_testimonial_description -->
			</div> <!-- .et_pb_testimonial -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_3 et_pb_column_17  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_testimonial et_pb_testimonial_1 clearfix  et_pb_text_align_left et_pb_bg_layout_light et_pb_icon_off et_pb_testimonial_no_image">
				
				
				<div style="background-image:url(http://socap.local/wp-content/uploads/stars-5.png)" class="et_pb_testimonial_portrait"></div>
				<div class="et_pb_testimonial_description">
					<div class="et_pb_testimonial_description_inner"><div class="et_pb_testimonial_content">“Lorem ipsum dolor sit adipiscing elit. Nullam lectus consectetur eu sapien. Proin cursus, dolor a mollis risus dolor fermentum massa, a commodo elit dui sit amet tortor.”</div></div> <!-- .et_pb_testimonial_description_inner -->
					<span class="et_pb_testimonial_author">JOHN SMITH</span>
					<p class="et_pb_testimonial_meta"></p>
				</div> <!-- .et_pb_testimonial_description -->
			</div> <!-- .et_pb_testimonial -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_3 et_pb_column_18  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_testimonial et_pb_testimonial_2 clearfix  et_pb_text_align_left et_pb_bg_layout_light et_pb_icon_off et_pb_testimonial_no_image">
				
				
				<div style="background-image:url(http://socap.local/wp-content/uploads/stars-5.png)" class="et_pb_testimonial_portrait"></div>
				<div class="et_pb_testimonial_description">
					<div class="et_pb_testimonial_description_inner"><div class="et_pb_testimonial_content">“Lorem ipsum dolor sit adipiscing elit. Nullam lectus consectetur eu sapien. Proin cursus, dolor a mollis risus dolor fermentum massa, a commodo elit dui sit amet tortor.”</div></div> <!-- .et_pb_testimonial_description_inner -->
					<span class="et_pb_testimonial_author">JOHN SMITH</span>
					<p class="et_pb_testimonial_meta"></p>
				</div> <!-- .et_pb_testimonial_description -->
			</div> <!-- .et_pb_testimonial -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_8">
				<div class="et_pb_column et_pb_column_1_4 et_pb_column_19  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_image et_pb_image_3">
				
				
				<span class="et_pb_image_wrap "><img src="http://socap.local/wp-content/uploads/logo_04.png" alt="" title="" /></span>
			</div>
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_4 et_pb_column_20  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_image et_pb_image_4">
				
				
				<span class="et_pb_image_wrap "><img src="http://socap.local/wp-content/uploads/logo_05.png" alt="" title="" /></span>
			</div>
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_4 et_pb_column_21  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_image et_pb_image_5">
				
				
				<span class="et_pb_image_wrap "><img src="http://socap.local/wp-content/uploads/logo_06.png" alt="" title="" /></span>
			</div>
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_4 et_pb_column_22  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_image et_pb_image_6">
				
				
				<span class="et_pb_image_wrap "><img src="http://socap.local/wp-content/uploads/logo_07.png" alt="" title="" /></span>
			</div>
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_9">
				<div class="et_pb_column et_pb_column_1_4 et_pb_column_23  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_image et_pb_image_7">
				
				
				<span class="et_pb_image_wrap "><img src="http://socap.local/wp-content/uploads/logo_08.png" alt="" title="" /></span>
			</div>
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_4 et_pb_column_24  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_image et_pb_image_8">
				
				
				<span class="et_pb_image_wrap "><img src="http://socap.local/wp-content/uploads/logo_02.png" alt="" title="" /></span>
			</div>
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_4 et_pb_column_25  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_image et_pb_image_9">
				
				
				<span class="et_pb_image_wrap "><img src="http://socap.local/wp-content/uploads/logo_03.png" alt="" title="" /></span>
			</div>
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_4 et_pb_column_26  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_image et_pb_image_10">
				
				
				<span class="et_pb_image_wrap "><img src="http://socap.local/wp-content/uploads/logo_01.png" alt="" title="" /></span>
			</div>
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_7 et_pb_specialty_fullwidth et_section_specialty" >
				
				
				
				<div class="et_pb_row et_pb_gutters1">
					<div class="et_pb_column et_pb_column_1_2 et_pb_column_27    et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_14  et_pb_text_align_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><h2>Contact Us</h2></div>
			</div> <!-- .et_pb_text --><div class="et_pb_module et_pb_divider et_pb_divider_6 et_pb_divider_position_center et_pb_space"><div class="et_pb_divider_internal"></div></div>
			<div id="et_pb_contact_form_0" class="et_pb_module et_pb_contact_form_0 et_pb_contact_form_container clearfix" data-form_unique_num="0">
				
				
				
				<div class="et-pb-contact-message"></div>
				
				<div class="et_pb_contact">
					<form class="et_pb_contact_form clearfix" method="post" action="http://socap.local/">
						<p class="et_pb_contact_field et_pb_contact_field_0 et_pb_contact_field_half" data-id="name" data-type="input">
				
				
				<label for="et_pb_contact_name_0" class="et_pb_contact_form_label">Name</label>
				<input type="text" id="et_pb_contact_name_0" class="input" value="" name="et_pb_contact_name_0" data-required_mark="required" data-field_type="input" data-original_id="name" placeholder="Name">
			</p><p class="et_pb_contact_field et_pb_contact_field_1 et_pb_contact_field_half et_pb_contact_field_last" data-id="email" data-type="email">
				
				
				<label for="et_pb_contact_email_0" class="et_pb_contact_form_label">Email Address</label>
				<input type="text" id="et_pb_contact_email_0" class="input" value="" name="et_pb_contact_email_0" data-required_mark="required" data-field_type="email" data-original_id="email" placeholder="Email Address">
			</p><p class="et_pb_contact_field et_pb_contact_field_2 et_pb_contact_field_last" data-id="message" data-type="text">
				
				
				<label for="et_pb_contact_message_0" class="et_pb_contact_form_label">Message</label>
				<textarea name="et_pb_contact_message_0" id="et_pb_contact_message_0" class="et_pb_contact_message input" data-required_mark="required" data-field_type="text" data-original_id="message" placeholder="Message"></textarea>
			</p>
						<input type="hidden" value="et_contact_proccess" name="et_pb_contactform_submit_0"/>
						<div class="et_contact_bottom_container">
							
							<button type="submit" name="et_builder_submit_button" class="et_pb_contact_submit et_pb_button et_pb_custom_button_icon" data-icon="&#x24;">Send Message</button>
						</div>
						<input type="hidden" id="_wpnonce-et-pb-contact-form-submitted-0" name="_wpnonce-et-pb-contact-form-submitted-0" value="92173a80b4" /><input type="hidden" name="_wp_http_referer" value="/?customize_changeset_uuid=58a06cc5-67ea-4c4f-9c79-ccd5a327b866&amp;customize_theme=Divi&amp;customize_messenger_channel=preview-0" />
					</form>
				</div> <!-- .et_pb_contact -->
			</div> <!-- .et_pb_contact_form_container -->
			
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_2 et_pb_column_28   et_pb_specialty_column  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_row_inner et_pb_row_inner_5 et_animated">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_inner et_pb_column_inner_8 et-last-child">
				
				
				<ul class="et_pb_module et_pb_social_media_follow et_pb_social_media_follow_0 clearfix  et_pb_text_align_center et_pb_bg_layout_light">
				
				
				<li
            class='et_pb_social_media_follow_network_0 et_pb_social_icon et_pb_social_network_link  et-social-facebook et_pb_social_media_follow_network_0'><a
              href='#'
              class='icon et_pb_with_border'
              title='Seguir en Facebook'
               target="_blank"><span
                class='et_pb_social_media_follow_network_name'
                aria-hidden='true'
                >Seguir</span></a></li><li
            class='et_pb_social_media_follow_network_1 et_pb_social_icon et_pb_social_network_link  et-social-twitter et_pb_social_media_follow_network_1'><a
              href='#'
              class='icon et_pb_with_border'
              title='Seguir en Twitter'
               target="_blank"><span
                class='et_pb_social_media_follow_network_name'
                aria-hidden='true'
                >Seguir</span></a></li><li
            class='et_pb_social_media_follow_network_2 et_pb_social_icon et_pb_social_network_link  et-social-linkedin et_pb_social_media_follow_network_2'><a
              href='#'
              class='icon et_pb_with_border'
              title='Seguir en LinkedIn'
               target="_blank"><span
                class='et_pb_social_media_follow_network_name'
                aria-hidden='true'
                >Seguir</span></a></li>
			</ul> <!-- .et_pb_counters -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row_inner --><div class="et_pb_row_inner et_pb_row_inner_6">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_inner et_pb_column_inner_9 et-last-child">
				
				
				<div class="et_pb_module et_pb_blurb et_pb_blurb_4  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_blurb_content">
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_off et-pb-icon">&#xe081;</span></span></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header"><span>Lorem ipsum dolor sit amet consectetur elit.</span></h4>
						
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb --><div class="et_pb_module et_pb_blurb et_pb_blurb_5  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_blurb_content">
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_off et-pb-icon">&#xe090;</span></span></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header"><span>+00 123 456 7893</span></h4>
						
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb --><div class="et_pb_module et_pb_blurb et_pb_blurb_6  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_blurb_content">
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_off et-pb-icon">&#xe076;</span></span></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header"><span>divi-construction@gmail.com</span></h4>
						
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row_inner -->
			</div> <!-- .et_pb_column -->
				</div> <!-- .et_pb_row -->
				
			</div> <!-- .et_pb_section -->		</div><!-- .et_builder_inner_content -->
	</div><!-- .et-l -->
	
			
		</div><!-- #et-boc -->
							</div> <!-- .entry-content -->

				
				</article> <!-- .et_pb_post -->

			

</div> <!-- #main-content -->


			<footer id="main-footer">
				
<div class="container">
    <div id="footer-widgets" class="clearfix">
		<div class="footer-widget">
<!--dynamic_sidebar_before:sidebar-2:1-->

<!--dynamic_sidebar_after:sidebar-2:1-->
</div> <!-- end .footer-widget --><div class="footer-widget">
<!--dynamic_sidebar_before:sidebar-3:1-->

<!--dynamic_sidebar_after:sidebar-3:1-->
</div> <!-- end .footer-widget --><div class="footer-widget">
<!--dynamic_sidebar_before:sidebar-4:1-->

<!--dynamic_sidebar_after:sidebar-4:1-->
</div> <!-- end .footer-widget --><div class="footer-widget">
<!--dynamic_sidebar_before:sidebar-5:1-->

<!--dynamic_sidebar_after:sidebar-5:1-->
</div> <!-- end .footer-widget --><div class="footer-widget">
<!--dynamic_sidebar_before:sidebar-6:1-->

<!--dynamic_sidebar_after:sidebar-6:1-->
</div> <!-- end .footer-widget --><div class="footer-widget">
<!--dynamic_sidebar_before:sidebar-7:1-->

<!--dynamic_sidebar_after:sidebar-7:1-->
</div> <!-- end .footer-widget -->    </div> <!-- #footer-widgets -->
</div>    <!-- .container -->

		
				<div id="footer-bottom">
					<div class="container clearfix">
				<ul class="et-social-icons">

	<li class="et-social-icon et-social-facebook">
		<a href="#" class="icon">
			<span>Facebook</span>
		</a>
	</li>
	<li class="et-social-icon et-social-twitter">
		<a href="#" class="icon">
			<span>Twitter</span>
		</a>
	</li>
	<li class="et-social-icon et-social-google-plus">
		<a href="#" class="icon">
			<span>Google</span>
		</a>
	</li>
	<li class="et-social-icon et-social-instagram">
		<a href="#" class="icon">
			<span>Instagram</span>
		</a>
	</li>
	<li class="et-social-icon et-social-rss">
		<a href="http://socap.local/feed/" class="icon">
			<span>RSS</span>
		</a>
	</li>

</ul><p id="footer-info">Diseñado por <a href="http://www.elegantthemes.com" title="Premium WordPress Themes">Elegant Themes</a> | Desarrollado por <a href="http://www.wordpress.org">WordPress</a></p>					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->


	</div> <!-- #page-container -->

	<script type="text/html" id="tmpl-wp-playlist-current-item">
	<# if ( data.image ) { #>
	<img src="{{ data.thumb.src }}" alt="" />
	<# } #>
	<div class="wp-playlist-caption">
		<span class="wp-playlist-item-meta wp-playlist-item-title">&#171;{{ data.title }}&#187;</span>
		<# if ( data.meta.album ) { #><span class="wp-playlist-item-meta wp-playlist-item-album">{{ data.meta.album }}</span><# } #>
		<# if ( data.meta.artist ) { #><span class="wp-playlist-item-meta wp-playlist-item-artist">{{ data.meta.artist }}</span><# } #>
	</div>
</script>
<script type="text/html" id="tmpl-wp-playlist-item">
	<div class="wp-playlist-item">
		<a class="wp-playlist-caption" href="{{ data.src }}">
			{{ data.index ? ( data.index + '. ' ) : '' }}
			<# if ( data.caption ) { #>
				{{ data.caption }}
			<# } else { #>
				<span class="wp-playlist-item-title">&#171;{{{ data.title }}}&#187;</span>
				<# if ( data.artists && data.meta.artist ) { #>
				<span class="wp-playlist-item-artist"> &mdash; {{ data.meta.artist }}</span>
				<# } #>
			<# } #>
		</a>
		<# if ( data.meta.length_formatted ) { #>
		<div class="wp-playlist-item-length">{{ data.meta.length_formatted }}</div>
		<# } #>
	</div>
</script>
<script>var _wpCustomizePreviewNavMenusExports = {"navMenuInstanceArgs":{"8e7fef52e61b748313cac8b65fe3df28":{"after":"","before":"","can_partial_refresh":false,"container":"","container_class":"","container_id":"","depth":0,"echo":false,"fallback_cb":"","item_spacing":"preserve","items_wrap":"<ul id=\"%1$s\" class=\"%2$s\">%3$s<\/ul>","link_after":"","link_before":"","menu":false,"menu_class":"menu","menu_id":"et-secondary-nav","theme_location":"secondary-menu","walker":"","args_hmac":"8e7fef52e61b748313cac8b65fe3df28"},"b32471ba57e78acb3fd9f6bdcdb29784":{"after":"","before":"","can_partial_refresh":false,"container":"","container_class":"","container_id":"","depth":0,"echo":false,"fallback_cb":"","item_spacing":"preserve","items_wrap":"%3$s","link_after":"","link_before":"","menu":5,"menu_class":"menu","menu_id":"","theme_location":"primary-menu","walker":"","args_hmac":"b32471ba57e78acb3fd9f6bdcdb29784"},"dc2442bd70529e55e2d8473485456e67":{"after":"","before":"","can_partial_refresh":false,"container":"","container_class":"","container_id":"","depth":0,"echo":false,"fallback_cb":"","item_spacing":"preserve","items_wrap":"%3$s","link_after":"","link_before":"","menu":false,"menu_class":"menu","menu_id":"","theme_location":"secondary-menu","walker":"","args_hmac":"dc2442bd70529e55e2d8473485456e67"},"a67625301319e9f39c352cb1c8bed4fc":{"after":"","before":"","can_partial_refresh":false,"container":"","container_class":"","container_id":"","depth":0,"echo":false,"fallback_cb":"","item_spacing":"preserve","items_wrap":"<ul id=\"%1$s\" class=\"%2$s\">%3$s<\/ul>","link_after":"","link_before":"","menu":5,"menu_class":"nav","menu_id":"top-menu","theme_location":"primary-menu","walker":"","args_hmac":"a67625301319e9f39c352cb1c8bed4fc"}}};</script>    <script>
        jQuery(document).ready(function($){

            jQuery('#wpcs_tab_23412').click(function($){

                if( ! (jQuery('#wpcs_content_main_23412').hasClass('is_open')) ){

                    // Open slider
                    wpcs_open_slider_23412();

                } else {

                    // close slider
                    wpcs_close_slider_23412();

                }

            });

            jQuery("#wpcs_overlay_23412, #wpcs_close_slider_23412").click(function(){
                wpcs_close_slider_23412();
            });

            
        });

        function wpcs_open_slider_23412(do_repeat){

            do_repeat = typeof do_repeat !== 'undefined' ? do_repeat : 0 ;

            if( do_repeat !== 0 ){
                jQuery('#wpcs_content_main_23412').addClass('do_repeat');
                jQuery( "#wpcs_content_main_23412" ).data( "interval", do_repeat );
            }

            if( ! (jQuery('#wpcs_content_main_23412').hasClass('is_open')) && !(jQuery('#wpcs_content_main_23412').hasClass('is_opening')) ){

                // hide tap
                jQuery('#wpcs_tab_23412,.wpcs_tab').fadeTo("slow", 0);

                jQuery('#wpcs_content_main_23412').addClass('is_opening');

                jQuery("#wpcs_overlay_23412").addClass('wpcs_overlay_display_cross');

                jQuery( "#wpcs_overlay_23412").fadeIn('fast');

                // PRO FEATURE - PUSH BODY
                
                jQuery('#wpcs_content_main_23412').addClass('is_open');

                jQuery( "#wpcs_content_main_23412" ).animate({
                    opacity: 1,
                right: "+=500"
            }, 250 , function() {

                    // hide tap
                    jQuery('#wpcs_tab_23412,.wpcs_tab').fadeTo("slow", 0);

                    // Trigger some thing here once completely open
                    jQuery( "#wpcs_content_inner_23412").fadeTo("slow" , 1);

                    // Remove is_opening class
                    jQuery('#wpcs_content_main_23412').removeClass('is_opening');

                });

            }

        }

        function wpcs_close_slider_23412(){

            if( (jQuery('#wpcs_content_main_23412').hasClass('is_open')) && !(jQuery('#wpcs_content_main_23412').hasClass('is_closing')) ) {

                jQuery("#wpcs_overlay_23412").removeClass('wpcs_overlay_display_cross');

                jQuery('#wpcs_content_main_23412').addClass('is_closing');

                jQuery("#wpcs_content_main_23412").animate({
                right:
                "-=500"
            }
            , 250 ,
                function () {

                    // Trigger some thing here once completely close
                    jQuery("#wpcs_content_main_23412").fadeTo("fast", 0);
                    jQuery("#wpcs_content_inner_23412").slideUp('fast');
                    jQuery("#wpcs_overlay_23412").fadeOut('slow');
                    jQuery('body').removeClass('fixed-body');

                    //  Removing is_open class in the end to avoid any confliction
                    jQuery('#wpcs_content_main_23412').removeClass('is_open');
                    jQuery('#wpcs_content_main_23412').removeClass('is_closing');


                    // display tap
                    jQuery('#wpcs_tab_23412,.wpcs_tab').fadeTo("slow", 1);

                });

                if( (jQuery('#wpcs_content_main_23412').hasClass('do_repeat')) ) {
                    setTimeout(function () {
                        wpcs_open_slider_23412(0);
                    }, 0 );
                }

            }

        }
            </script>
    <style>
        .fixed-body{
            position: relative;
        right: 0px;
        }
        div#wpcs_tab_23412 {
            border: 1px solid #7f7f7f;
            border-bottom:none;
            cursor: pointer;
            width: 170px;
            height: 34px;
            overflow: hidden;
            background: #dd3333;
            color: #ffffff;
            padding: 2px 0px 2px 0px;
            position: fixed;
            top: 200px;
        right: -68px;
            text-align: center;
            -webkit-transform: rotate(-90deg);
            -moz-transform: rotate(-90deg);
            -ms-transform: rotate(-90deg);
            -o-transform: rotate(-90deg);
            transform: rotate(-90deg);
            z-index: 9999999;
            font-size: 18px;
        }
        div#wpcs_content_main_23412 {
            opacity:0;
            position: fixed;
            overflow-y: scroll;
            width: 500px;
            max-width: 100%;
            height: 100%;
            background: #ffffff;
            color: black;
            top: 0px;
        right: -500px;
            padding: 0px;
            margin: 0px;
            z-index: 9999999;
                }
        #wpcs_close_slider_23412 img {
            max-width: 100%;
        }
        div#wpcs_content_inner_23412 {
            display: none;
            max-width: 100%;
            min-height: 100%;
            background: #fcfcfc;
            padding: 20px 20px 20px 20px;
            margin: 60px 40px 60px 40px;
            color: #0c0000;
            border: 1px solid #0c0000;
        }
        div#wpcs_content_inner_23412 label{
            color: #0c0000;
        }
        div#wpcs_overlay_23412{
            /*cursor: url(http://socap.local/wp-content/plugins/wp-contact-slider/img/cursor_close.png), auto;*/
            display: none;
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0px;
            left: 0px;
            z-index: 999999;
            background: rgba(49, 49, 49, 0.65);
        }
        .wpcs_overlay_display_cross{
            cursor: url(http://socap.local/wp-content/plugins/wp-contact-slider/img/cursor_close.png), auto;
        }
        #wpcs_content_main_23412::-webkit-scrollbar {
            display: none;
        }
        div#wpcs_close_slider_23412 {
            top: 0px;
        left: 0px;
            position: absolute;
            bottom: 0px;
            width: 32px;
            height: 32px;
            cursor: pointer;
            background: #0000007a;
            padding: 0px;
            overflow: hidden;
        }
        .wpcs-cf7, .wpcs-gf, .wpcs-wp-form, .wpcs-caldera-form, .wpcs-constant-forms, .wpcs-constant-forms,
        .wpcs-pirate-forms, .wpcs-si-contact-form, .wpcs-formidable, .wpcs-form-maker, .wpcs-form-craft,
        .visual-form-builde {
            overflow: hidden;
        }
        /***** WPCS Media Query ****/
                    </style>
        <!-- WP Contact Slider -- start -->
    <div id="wpcs_tab_23412" class="wpcs_tab " aria-label="PIDA PRECIO" >PIDA PRECIO</div>
    <div id="wpcs_content_main_23412" >
        <div id="wpcs_close_slider_23412" aria-label="close slider" ><img alt="close slider" src="http://socap.local/wp-content/plugins/wp-contact-slider/img/delete-sign.png"></div>
        <div id="wpcs_content_inner_23412">
                                                <div class="wpcs-cf7">
                            <div role="form" class="wpcf7" id="wpcf7-f23414-o1" lang="es-ES" dir="ltr">
<div class="screen-reader-response"></div>
<form action="/?customize_changeset_uuid=58a06cc5-67ea-4c4f-9c79-ccd5a327b866&#038;customize_theme=Divi&#038;customize_messenger_channel=preview-0#wpcf7-f23414-o1" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="23414" />
<input type="hidden" name="_wpcf7_version" value="5.0.1" />
<input type="hidden" name="_wpcf7_locale" value="es_ES" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f23414-o1" />
<input type="hidden" name="_wpcf7_container_post" value="0" />
</div>
<p><label> Nombre (requerido)<br />
    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label></p>
<p><label> Tu correo electrónico (requerido)<br />
    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span> </label></p>
<p><label> Asunto<br />
    <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" /></span> </label></p>
<p><label> Mensaje<br />
    <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </label></p>
<p><input type="submit" value="Enviar" class="wpcf7-form-control wpcf7-submit" /></p>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>                            <script>  /* added script to fix cf7 validation display bug */
                               /*  jQuery(document).ready(function(){
                                    var $wpcf7ResponseDiv = jQuery('.wpcf7-response-output');
                                    jQuery('.wpcf7-submit').before($wpcf7ResponseDiv[0]);
                                });
								*/
                            </script>
                        </div>
                                            </div>
    </div>
    <!-- WP Contact Slider -- end -->
        <div id="wpcs_overlay_23412"></div>
    <div class="et_customizer_social_icons" style="display:none;"><ul class="et-social-icons">

	<li class="et-social-icon et-social-facebook">
		<a href="#" class="icon">
			<span>Facebook</span>
		</a>
	</li>
	<li class="et-social-icon et-social-twitter">
		<a href="#" class="icon">
			<span>Twitter</span>
		</a>
	</li>
	<li class="et-social-icon et-social-google-plus">
		<a href="#" class="icon">
			<span>Google</span>
		</a>
	</li>
	<li class="et-social-icon et-social-instagram">
		<a href="#" class="icon">
			<span>Instagram</span>
		</a>
	</li>
	<li class="et-social-icon et-social-rss">
		<a href="http://socap.local/feed/" class="icon">
			<span>RSS</span>
		</a>
	</li>

</ul></div>	<script type="text/javascript">
      ( function( $ ) {
        var isCustomPostType = false;

        $(document).ready(function() {
          $(document).trigger('et-customizer-preview-load', {
            isCustomPostType: isCustomPostType,
            selectorWrapper: ".et-db #et-boc .et-l"    	  });
        });
      }( jQuery ) );
	</script>
		<script type="text/javascript">
				var et_animation_data = [{"class":"et_pb_blurb_0","style":"slideRight","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"10%","starting_opacity":"0%","speed_curve":"ease-in-out"},{"class":"et_pb_blurb_1","style":"slideRight","repeat":"once","duration":"1000ms","delay":"100ms","intensity":"10%","starting_opacity":"0%","speed_curve":"ease-in-out"},{"class":"et_pb_blurb_2","style":"slideRight","repeat":"once","duration":"1000ms","delay":"200ms","intensity":"10%","starting_opacity":"0%","speed_curve":"ease-in-out"},{"class":"et_pb_blurb_3","style":"slideRight","repeat":"once","duration":"1000ms","delay":"300ms","intensity":"10%","starting_opacity":"0%","speed_curve":"ease-in-out"},{"class":"et_pb_section_1","style":"slideTop","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"10%","starting_opacity":"0%","speed_curve":"ease-in-out"},{"class":"et_pb_row_inner_2","style":"slideTop","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"10%","starting_opacity":"0%","speed_curve":"ease-in-out"},{"class":"et_pb_row_inner_4","style":"slideTop","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"10%","starting_opacity":"0%","speed_curve":"ease-in-out"},{"class":"et_pb_row_inner_5","style":"slideTop","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"10%","starting_opacity":"0%","speed_curve":"ease-in-out"}];
			</script>
	
							<div id="lang_sel_footer">
									<ul>
									    <li><a href="http://socap.local/fr/"><img src="http://socap.local/wp-content/plugins/sitepress-multilingual-cms/res/flags/fr.png" alt="Francés" class="iclflag" title="Francés"  />&nbsp;<span class="icl_lang_sel_native">Français</span> <span class="icl_lang_sel_translated"><span class="icl_lang_sel_bracket">(</span>Francés<span class="icl_lang_sel_bracket">)</span></span></a></li>
									    <li><a href="http://socap.local/en/"><img src="http://socap.local/wp-content/plugins/sitepress-multilingual-cms/res/flags/en.png" alt="Inglés" class="iclflag" title="Inglés"  />&nbsp;<span class="icl_lang_sel_native">English</span> <span class="icl_lang_sel_translated"><span class="icl_lang_sel_bracket">(</span>Inglés<span class="icl_lang_sel_bracket">)</span></span></a></li>
									    <li><a href="http://socap.local/" class="lang_sel_sel"><img src="http://socap.local/wp-content/plugins/sitepress-multilingual-cms/res/flags/es.png" alt="Español" class="iclflag" title="Español"  />&nbsp;<span class="icl_lang_sel_current icl_lang_sel_native">Español</span></a></li>
									</ul>
							</div><script type='text/javascript' src='http://socap.local/wp-includes/js/wp-a11y.min.js?ver=4.9.11'></script>
<script type='text/javascript' src='http://socap.local/wp-includes/js/underscore.min.js?ver=1.8.3'></script>
<script type='text/javascript' src='http://socap.local/wp-includes/js/customize-base.min.js?ver=4.9.11'></script>
<script type='text/javascript' src='http://socap.local/wp-includes/js/customize-preview.min.js?ver=4.9.11'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var et_main_customizer_data = {"original_footer_credits":"Dise\u00f1ado por <a href=\"http:\/\/www.elegantthemes.com\" title=\"Premium WordPress Themes\">Elegant Themes<\/a> | Desarrollado por <a href=\"http:\/\/www.wordpress.org\">WordPress<\/a>"};
var et_theme_builder_customizer_data = {"hasHeaderLayout":"","hasFooterLayout":""};
/* ]]> */
</script>
<script type='text/javascript' src='http://socap.local/wp-content/themes/Divi/js/theme-customizer.js?ver=4.3.2'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/socap.local\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Por favor, prueba que no eres un robot."}},"cached":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='http://socap.local/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.0.1'></script>
<script type='text/javascript' src='http://socap.local/wp-includes/js/jquery/ui/effect.min.js?ver=1.11.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var DIVI = {"item_count":"%d Item","items_count":"%d Items"};
var et_shortcodes_strings = {"previous":"Anterior","next":"Siguiente"};
var et_pb_custom = {"ajaxurl":"http:\/\/socap.local\/wp-admin\/admin-ajax.php","images_uri":"http:\/\/socap.local\/wp-content\/themes\/Divi\/images","builder_images_uri":"http:\/\/socap.local\/wp-content\/themes\/Divi\/includes\/builder\/images","et_frontend_nonce":"fd964fb7b3","subscription_failed":"Por favor, revise los campos a continuaci\u00f3n para asegurarse de que la informaci\u00f3n introducida es correcta.","et_ab_log_nonce":"c7327d538e","fill_message":"Por favor, rellene los siguientes campos:","contact_error_message":"Por favor, arregle los siguientes errores:","invalid":"De correo electr\u00f3nico no v\u00e1lida","captcha":"Captcha","prev":"Anterior","previous":"Anterior","next":"Siguiente","wrong_captcha":"Ha introducido un n\u00famero equivocado de captcha.","ignore_waypoints":"no","is_divi_theme_used":"1","widget_search_selector":".widget_search","ab_tests":[],"is_ab_testing_active":"","page_id":"13637","unique_test_id":"","ab_bounce_rate":"5","is_cache_plugin_active":"yes","is_shortcode_tracking":"","tinymce_uri":""}; var et_frontend_scripts = {"builderCssContainerPrefix":"#et-boc","builderCssLayoutPrefix":"#et-boc .et-l"};
var et_pb_box_shadow_elements = [];
var et_pb_motion_elements = {"desktop":[],"tablet":[],"phone":[]};
/* ]]> */
</script>
<script type='text/javascript' src='http://socap.local/wp-content/themes/Divi/js/custom.unified.js?ver=4.3.2'></script>
<script type='text/javascript' src='http://socap.local/wp-includes/js/mediaelement/wp-mediaelement.min.js?ver=4.9.11'></script>
<script type='text/javascript' src='http://socap.local/wp-includes/js/mediaelement/renderers/vimeo.min.js?ver=4.2.6-78496d1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script type='text/javascript' src='http://socap.local/wp-includes/js/wp-util.min.js?ver=4.9.11'></script>
<script type='text/javascript' src='http://socap.local/wp-includes/js/backbone.min.js?ver=1.2.3'></script>
<script type='text/javascript' src='http://socap.local/wp-includes/js/mediaelement/wp-playlist.min.js?ver=4.9.11'></script>
<script type='text/javascript' src='http://socap.local/wp-includes/js/customize-selective-refresh.min.js?ver=4.9.11'></script>
<script type='text/javascript' src='http://socap.local/wp-includes/js/customize-preview-widgets.min.js?ver=4.9.11'></script>
<script type='text/javascript' src='http://socap.local/wp-includes/js/customize-preview-nav-menus.min.js?ver=4.9.11'></script>
<script type='text/javascript' src='http://socap.local/wp-content/themes/Divi/core/admin/js/common.js?ver=4.3.2'></script>
<script type='text/javascript' src='http://socap.local/wp-includes/js/wp-embed.min.js?ver=4.9.11'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var icl_vars = {"current_language":"es","icl_home":"http:\/\/socap.local\/","ajax_url":"http:\/\/socap.local\/wp-admin\/admin-ajax.php","url_type":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='http://socap.local/wp-content/plugins/sitepress-multilingual-cms/res/js/sitepress.js?ver=4.9.11'></script>
		<script type="text/javascript">
			var _wpCustomizeSettings = {"changeset":{"uuid":"58a06cc5-67ea-4c4f-9c79-ccd5a327b866","autosaved":false},"timeouts":{"selectiveRefresh":250,"keepAliveSend":1000},"theme":{"stylesheet":"Divi","active":true},"url":{"self":"\/","allowed":["http:\/\/socap.local\/"],"allowedHosts":["socap.local"],"isCrossDomain":false},"channel":"preview-0","activePanels":{"themes":true,"et_divi_general_settings":true,"et_divi_header_panel":true,"et_divi_footer_panel":true,"et_divi_buttons_settings":true,"et_divi_blog_settings":true,"et_divi_mobile":true,"nav_menus":true,"widgets":true},"activeSections":{"installed_themes":true,"wporg_themes":true,"title_tagline":true,"et_divi_general_layout":true,"et_divi_general_typography":true,"et_divi_general_background":true,"et_divi_header_layout":true,"et_divi_header_primary":true,"et_divi_header_secondary":true,"et_divi_header_slide":true,"et_divi_header_fixed":true,"et_divi_header_information":true,"et_divi_footer_layout":true,"et_divi_footer_widgets":true,"et_divi_footer_elements":true,"et_divi_footer_menu":true,"et_divi_bottom_bar":true,"et_divi_buttons":true,"et_divi_buttons_hover":true,"et_divi_blog_post":true,"et_divi_mobile_tablet":true,"et_divi_mobile_phone":true,"et_divi_mobile_menu":true,"nav_menu[5]":true,"nav_menu[19]":true,"add_menu":true,"menu_locations":true,"et_color_schemes":true,"static_front_page":true,"custom_css":true,"wpseo_breadcrumbs_customizer_section":false,"sidebar-widgets-sidebar-1":false,"sidebar-widgets-sidebar-2":true,"sidebar-widgets-sidebar-3":true,"sidebar-widgets-sidebar-4":true,"sidebar-widgets-sidebar-5":true,"sidebar-widgets-sidebar-6":true,"sidebar-widgets-sidebar-7":true},"activeControls":{"blogname":true,"blogdescription":true,"show_on_front":true,"page_on_front":true,"page_for_posts":true,"custom_css":true,"wpseo-breadcrumbs-display-blog-page":true,"wpseo-breadcrumbs-separator":true,"wpseo-breadcrumbs-home":true,"wpseo-breadcrumbs-prefix":true,"wpseo-breadcrumbs-archiveprefix":true,"wpseo-breadcrumbs-searchprefix":true,"wpseo-breadcrumbs-404crumb":true,"et_divi[post_meta_font_size]":true,"et_divi[post_meta_height]":true,"et_divi[post_meta_spacing]":true,"et_divi[post_meta_style]":true,"et_divi[post_header_font_size]":true,"et_divi[post_header_height]":true,"et_divi[post_header_spacing]":true,"et_divi[post_header_style]":true,"et_divi[boxed_layout]":true,"et_divi[content_width]":true,"et_divi[gutter_width]":true,"et_divi[use_sidebar_width]":true,"et_divi[sidebar_width]":true,"et_divi[section_padding]":true,"et_divi[phone_section_height]":true,"et_divi[tablet_section_height]":true,"et_divi[row_padding]":true,"et_divi[phone_row_height]":true,"et_divi[tablet_row_height]":true,"et_divi[cover_background]":true,"background_color":true,"background_image":true,"background_repeat":true,"background_position_x":true,"background_attachment":true,"et_divi[body_font_size]":true,"et_divi[body_font_height]":true,"et_divi[phone_body_font_size]":true,"et_divi[tablet_body_font_size]":true,"et_divi[body_header_size]":true,"et_divi[body_header_spacing]":true,"et_divi[body_header_height]":true,"et_divi[body_header_style]":true,"et_divi[phone_header_font_size]":true,"et_divi[tablet_header_font_size]":true,"et_divi[heading_font]":true,"et_divi[body_font]":true,"et_divi[link_color]":true,"et_divi[font_color]":true,"et_divi[header_color]":true,"et_divi[accent_color]":true,"et_divi[color_schemes]":true,"et_divi[header_style]":true,"et_divi[vertical_nav]":true,"et_divi[vertical_nav_orientation]":true,"et_divi[hide_nav]":true,"et_divi[show_header_social_icons]":true,"et_divi[show_search_icon]":true,"et_divi[slide_nav_show_top_bar]":true,"et_divi[slide_nav_width]":true,"et_divi[slide_nav_font_size]":true,"et_divi[slide_nav_top_font_size]":true,"et_divi[fullscreen_nav_font_size]":true,"et_divi[fullscreen_nav_top_font_size]":true,"et_divi[slide_nav_font_spacing]":true,"et_divi[slide_nav_font]":true,"et_divi[slide_nav_font_style]":true,"et_divi[slide_nav_bg]":true,"et_divi[slide_nav_links_color]":true,"et_divi[slide_nav_links_color_active]":true,"et_divi[slide_nav_top_color]":true,"et_divi[slide_nav_search]":true,"et_divi[slide_nav_search_bg]":true,"et_divi[nav_fullwidth]":true,"et_divi[hide_primary_logo]":true,"et_divi[menu_height]":true,"et_divi[logo_height]":true,"et_divi[menu_margin_top]":true,"et_divi[primary_nav_font_size]":true,"et_divi[primary_nav_font_spacing]":true,"et_divi[primary_nav_font]":true,"et_divi[primary_nav_font_style]":true,"et_divi[secondary_nav_fullwidth]":true,"et_divi[secondary_nav_font_size]":true,"et_divi[secondary_nav_font_spacing]":true,"et_divi[secondary_nav_font]":true,"et_divi[secondary_nav_font_style]":true,"et_divi[menu_link]":true,"et_divi[hide_mobile_logo]":true,"et_divi[mobile_menu_link]":true,"et_divi[menu_link_active]":true,"et_divi[primary_nav_bg]":true,"et_divi[primary_nav_dropdown_bg]":true,"et_divi[primary_nav_dropdown_line_color]":true,"et_divi[primary_nav_dropdown_link_color]":true,"et_divi[primary_nav_dropdown_animation]":true,"et_divi[mobile_primary_nav_bg]":true,"et_divi[secondary_nav_bg]":true,"et_divi[secondary_nav_text_color_new]":true,"et_divi[secondary_nav_dropdown_bg]":true,"et_divi[secondary_nav_dropdown_link_color]":true,"et_divi[secondary_nav_dropdown_animation]":true,"et_divi[hide_fixed_logo]":true,"et_divi[minimized_menu_height]":true,"et_divi[fixed_primary_nav_font_size]":true,"et_divi[fixed_primary_nav_bg]":true,"et_divi[fixed_secondary_nav_bg]":true,"et_divi[fixed_menu_link]":true,"et_divi[fixed_secondary_menu_link]":true,"et_divi[fixed_menu_link_active]":true,"et_divi[phone_number]":true,"et_divi[header_email]":true,"et_divi[show_footer_social_icons]":true,"et_divi[footer_columns]":true,"et_divi[footer_bg]":true,"et_divi[widget_header_font_size]":true,"et_divi[widget_header_font_style]":true,"et_divi[widget_body_font_size]":true,"et_divi[widget_body_line_height]":true,"et_divi[widget_body_font_style]":true,"et_divi[footer_widget_text_color]":true,"et_divi[footer_widget_link_color]":true,"et_divi[footer_widget_header_color]":true,"et_divi[footer_widget_bullet_color]":true,"et_divi[footer_menu_background_color]":true,"et_divi[footer_menu_text_color]":true,"et_divi[footer_menu_active_link_color]":true,"et_divi[footer_menu_letter_spacing]":true,"et_divi[footer_menu_font_style]":true,"et_divi[footer_menu_font_size]":true,"et_divi[bottom_bar_background_color]":true,"et_divi[bottom_bar_text_color]":true,"et_divi[bottom_bar_font_style]":true,"et_divi[bottom_bar_font_size]":true,"et_divi[bottom_bar_social_icon_size]":true,"et_divi[bottom_bar_social_icon_color]":true,"et_divi[disable_custom_footer_credits]":true,"et_divi[custom_footer_credits]":true,"et_divi[all_buttons_font_size]":true,"et_divi[all_buttons_text_color]":true,"et_divi[all_buttons_bg_color]":true,"et_divi[all_buttons_border_width]":true,"et_divi[all_buttons_border_color]":true,"et_divi[all_buttons_border_radius]":true,"et_divi[all_buttons_spacing]":true,"et_divi[all_buttons_font_style]":true,"et_divi[all_buttons_font]":true,"et_divi[all_buttons_icon]":true,"et_divi[all_buttons_selected_icon]":true,"et_divi[all_buttons_icon_color]":true,"et_divi[all_buttons_icon_placement]":true,"et_divi[all_buttons_icon_hover]":true,"et_divi[all_buttons_text_color_hover]":true,"et_divi[all_buttons_bg_color_hover]":true,"et_divi[all_buttons_border_color_hover]":true,"et_divi[all_buttons_border_radius_hover]":true,"et_divi[all_buttons_spacing_hover]":true,"nav_menu_locations[primary-menu]":true,"nav_menu_locations[secondary-menu]":true,"nav_menu_locations[footer-menu]":true,"nav_menu_item[23054]":true,"nav_menu_item[23140]":true,"nav_menu_item[23063]":true,"nav_menu_item[23284]":true,"nav_menu_item[23065]":true,"nav_menu_item[23283]":true,"nav_menu_item[23055]":true,"nav_menu_item[23299]":true,"nav_menu_item[23062]":true,"nav_menu_item[23300]":true,"nav_menu_item[23066]":true,"nav_menu_item[23303]":true,"nav_menu_item[23061]":true,"nav_menu_item[23304]":true,"nav_menu_item[23060]":true,"nav_menu_item[23310]":true,"nav_menu_item[23056]":true,"nav_menu_item[23311]":true,"nav_menu_item[23067]":true,"nav_menu_item[23318]":true,"nav_menu_item[23059]":true,"nav_menu_item[23321]":true,"nav_menu_item[23058]":true,"nav_menu_item[23319]":true,"nav_menu_item[23057]":true,"nav_menu_item[23320]":true,"nav_menu_item[23126]":true,"nav_menu_item[23139]":true,"site_icon":true,"sidebars_widgets[sidebar-1]":true,"sidebars_widgets[sidebar-2]":true,"sidebars_widgets[sidebar-3]":true,"sidebars_widgets[sidebar-4]":true,"sidebars_widgets[sidebar-5]":true,"sidebars_widgets[sidebar-6]":true,"sidebars_widgets[sidebar-7]":true},"settingValidities":[],"nonce":{"save":"eeb6147077","preview":"049c4a170a","switch_themes":"979125e71a","dismiss_autosave_or_lock":"1551b8f204","override_lock":"d6b5a80f14","trash":"bcaf83d782","update-widget":"d2aa62308a","customize-menus":"5e90f13a5e"},"l10n":{"shiftClickToEdit":"May\u00fasculas-Clic para editar este elemento.","linkUnpreviewable":"Este enlace no se puede previsualizar en directo.","formUnpreviewable":"Este formulario no se puede previsualizar en directo."},"_dirty":[]};
			_wpCustomizeSettings.values = {};
			(function( v ) {
				v["active_theme"] = "";
v["blogname"] = "SOCAP";
v["blogdescription"] = "Dep\u00f3sitos en polyester";
v["site_icon"] = "0";
v["background_color"] = "";
v["background_image"] = "";
v["background_image_thumb"] = "";
v["background_preset"] = "default";
v["background_position_x"] = "left";
v["background_position_y"] = "top";
v["background_size"] = "auto";
v["show_on_front"] = "page";
v["page_on_front"] = "13637";
v["page_for_posts"] = "";
v["custom_css[Divi]"] = "";
v["wpseo_titles[breadcrumbs-display-blog-page]"] = true;
v["wpseo_titles[breadcrumbs-sep]"] = "\u00bb";
v["wpseo_titles[breadcrumbs-home]"] = "Portada";
v["wpseo_titles[breadcrumbs-prefix]"] = "";
v["wpseo_titles[breadcrumbs-archiveprefix]"] = "Archivos por";
v["wpseo_titles[breadcrumbs-searchprefix]"] = "Has buscado por";
v["wpseo_titles[breadcrumbs-404crumb]"] = "Error 404: P\u00e1gina no encontrada";
v["et_divi[post_meta_font_size]"] = "14";
v["et_divi[post_meta_height]"] = "1";
v["et_divi[post_meta_spacing]"] = "0";
v["et_divi[post_meta_style]"] = "";
v["et_divi[post_header_font_size]"] = "30";
v["et_divi[post_header_height]"] = "1";
v["et_divi[post_header_spacing]"] = "0";
v["et_divi[post_header_style]"] = "";
v["et_divi[boxed_layout]"] = "";
v["et_divi[content_width]"] = "1080";
v["et_divi[gutter_width]"] = "3";
v["et_divi[use_sidebar_width]"] = "";
v["et_divi[sidebar_width]"] = "21";
v["et_divi[section_padding]"] = "4";
v["et_divi[phone_section_height]"] = "50";
v["et_divi[tablet_section_height]"] = "50";
v["et_divi[row_padding]"] = "2";
v["et_divi[phone_row_height]"] = "30";
v["et_divi[tablet_row_height]"] = "30";
v["et_divi[cover_background]"] = "on";
v["background_repeat"] = "repeat";
v["background_attachment"] = "scroll";
v["et_divi[body_font_size]"] = "14";
v["et_divi[body_font_height]"] = "1.7";
v["et_divi[phone_body_font_size]"] = "14";
v["et_divi[tablet_body_font_size]"] = "14";
v["et_divi[body_header_size]"] = "30";
v["et_divi[body_header_spacing]"] = "0";
v["et_divi[body_header_height]"] = "1";
v["et_divi[body_header_style]"] = "";
v["et_divi[phone_header_font_size]"] = "30";
v["et_divi[tablet_header_font_size]"] = "30";
v["et_divi[heading_font]"] = "none";
v["et_divi[body_font]"] = "none";
v["et_divi[link_color]"] = "#2ea3f2";
v["et_divi[font_color]"] = "#666666";
v["et_divi[header_color]"] = "#666666";
v["et_divi[accent_color]"] = "#2ea3f2";
v["et_divi[color_schemes]"] = "none";
v["et_divi[header_style]"] = "left";
v["et_divi[vertical_nav]"] = "";
v["et_divi[vertical_nav_orientation]"] = "left";
v["et_divi[hide_nav]"] = "";
v["et_divi[show_header_social_icons]"] = "";
v["et_divi[show_search_icon]"] = "on";
v["et_divi[slide_nav_show_top_bar]"] = "on";
v["et_divi[slide_nav_width]"] = "320";
v["et_divi[slide_nav_font_size]"] = "14";
v["et_divi[slide_nav_top_font_size]"] = "14";
v["et_divi[fullscreen_nav_font_size]"] = "30";
v["et_divi[fullscreen_nav_top_font_size]"] = "18";
v["et_divi[slide_nav_font_spacing]"] = "0";
v["et_divi[slide_nav_font]"] = "none";
v["et_divi[slide_nav_font_style]"] = "";
v["et_divi[slide_nav_bg]"] = "#2ea3f2";
v["et_divi[slide_nav_links_color]"] = "#ffffff";
v["et_divi[slide_nav_links_color_active]"] = "#ffffff";
v["et_divi[slide_nav_top_color]"] = "rgba(255,255,255,0.6)";
v["et_divi[slide_nav_search]"] = "rgba(255,255,255,0.6)";
v["et_divi[slide_nav_search_bg]"] = "rgba(0,0,0,0.2)";
v["et_divi[nav_fullwidth]"] = "";
v["et_divi[hide_primary_logo]"] = "";
v["et_divi[menu_height]"] = 79;
v["et_divi[logo_height]"] = 78;
v["et_divi[menu_margin_top]"] = "0";
v["et_divi[primary_nav_font_size]"] = "14";
v["et_divi[primary_nav_font_spacing]"] = 0;
v["et_divi[primary_nav_font]"] = "none";
v["et_divi[primary_nav_font_style]"] = "";
v["et_divi[secondary_nav_font_size]"] = "12";
v["et_divi[secondary_nav_fullwidth]"] = "";
v["et_divi[secondary_nav_font_spacing]"] = "0";
v["et_divi[secondary_nav_font]"] = "none";
v["et_divi[secondary_nav_font_style]"] = "";
v["et_divi[menu_link]"] = "rgba(0,0,0,0.6)";
v["et_divi[hide_mobile_logo]"] = "";
v["et_divi[mobile_menu_link]"] = "rgba(0,0,0,0.6)";
v["et_divi[menu_link_active]"] = "#2ea3f2";
v["et_divi[primary_nav_bg]"] = "#ffffff";
v["et_divi[primary_nav_dropdown_bg]"] = "#ffffff";
v["et_divi[primary_nav_dropdown_line_color]"] = "#2ea3f2";
v["et_divi[primary_nav_dropdown_link_color]"] = "rgba(0,0,0,0.7)";
v["et_divi[primary_nav_dropdown_animation]"] = "fade";
v["et_divi[mobile_primary_nav_bg]"] = "#ffffff";
v["et_divi[secondary_nav_bg]"] = "#2ea3f2";
v["et_divi[secondary_nav_text_color_new]"] = "#ffffff";
v["et_divi[secondary_nav_dropdown_bg]"] = "#2ea3f2";
v["et_divi[secondary_nav_dropdown_link_color]"] = "#ffffff";
v["et_divi[secondary_nav_dropdown_animation]"] = "fade";
v["et_divi[primary_nav_text_color]"] = "dark";
v["et_divi[secondary_nav_text_color]"] = "light";
v["et_divi[hide_fixed_logo]"] = "";
v["et_divi[minimized_menu_height]"] = "40";
v["et_divi[fixed_primary_nav_font_size]"] = "14";
v["et_divi[fixed_primary_nav_bg]"] = "#ffffff";
v["et_divi[fixed_secondary_nav_bg]"] = "#2ea3f2";
v["et_divi[fixed_menu_link]"] = "rgba(0,0,0,0.6)";
v["et_divi[fixed_secondary_menu_link]"] = "#ffffff";
v["et_divi[fixed_menu_link_active]"] = "#2ea3f2";
v["et_divi[phone_number]"] = "";
v["et_divi[header_email]"] = "";
v["et_divi[show_footer_social_icons]"] = "on";
v["et_divi[footer_columns]"] = "4";
v["et_divi[footer_bg]"] = "#222222";
v["et_divi[widget_header_font_size]"] = 18;
v["et_divi[widget_header_font_style]"] = false;
v["et_divi[widget_body_font_size]"] = "14";
v["et_divi[widget_body_line_height]"] = "1.7";
v["et_divi[widget_body_font_style]"] = false;
v["et_divi[footer_widget_text_color]"] = "#ffffff";
v["et_divi[footer_widget_link_color]"] = "#ffffff";
v["et_divi[footer_widget_header_color]"] = "#2ea3f2";
v["et_divi[footer_widget_bullet_color]"] = "#2ea3f2";
v["et_divi[footer_menu_background_color]"] = "rgba(255,255,255,0.05)";
v["et_divi[footer_menu_text_color]"] = "#bbbbbb";
v["et_divi[footer_menu_active_link_color]"] = "#2ea3f2";
v["et_divi[footer_menu_letter_spacing]"] = "0";
v["et_divi[footer_menu_font_style]"] = false;
v["et_divi[footer_menu_font_size]"] = "14";
v["et_divi[bottom_bar_background_color]"] = "rgba(0,0,0,0.32)";
v["et_divi[bottom_bar_text_color]"] = "#666666";
v["et_divi[bottom_bar_font_style]"] = false;
v["et_divi[bottom_bar_font_size]"] = "14";
v["et_divi[bottom_bar_social_icon_size]"] = "24";
v["et_divi[bottom_bar_social_icon_color]"] = "#666666";
v["et_divi[disable_custom_footer_credits]"] = "";
v["et_divi[custom_footer_credits]"] = "";
v["et_divi[all_buttons_font_size]"] = "20";
v["et_divi[all_buttons_text_color]"] = "";
v["et_divi[all_buttons_bg_color]"] = "rgba(0,0,0,0)";
v["et_divi[all_buttons_border_width]"] = "2";
v["et_divi[all_buttons_border_color]"] = "#ffffff";
v["et_divi[all_buttons_border_radius]"] = "3";
v["et_divi[all_buttons_spacing]"] = "0";
v["et_divi[all_buttons_font_style]"] = "";
v["et_divi[all_buttons_font]"] = "none";
v["et_divi[all_buttons_icon]"] = "yes";
v["et_divi[all_buttons_selected_icon]"] = "5";
v["et_divi[all_buttons_icon_color]"] = "#ffffff";
v["et_divi[all_buttons_icon_placement]"] = "right";
v["et_divi[all_buttons_icon_hover]"] = "yes";
v["et_divi[all_buttons_text_color_hover]"] = "";
v["et_divi[all_buttons_bg_color_hover]"] = "rgba(255,255,255,0.2)";
v["et_divi[all_buttons_border_color_hover]"] = "rgba(0,0,0,0)";
v["et_divi[all_buttons_border_radius_hover]"] = false;
v["et_divi[all_buttons_spacing_hover]"] = false;
v["nav_menu_locations[primary-menu]"] = "5";
v["nav_menu_locations[secondary-menu]"] = 0;
v["nav_menu_locations[footer-menu]"] = 0;
v["nav_menu[5]"] = {"name":"mp","description":"","parent":0,"auto_add":false};
v["nav_menu_item[23054]"] = {"menu_item_parent":0,"object_id":13637,"object":"page","type":"post_type","type_label":"P\u00e1gina","url":"http:\/\/socap.local\/","title":"","target":"","attr_title":"","description":"","classes":"","xfn":"","nav_menu_term_id":5,"position":1,"status":"publish","original_title":"INICIO","_invalid":false};
v["nav_menu_item[23063]"] = {"menu_item_parent":0,"object_id":22575,"object":"page","type":"post_type","type_label":"P\u00e1gina","url":"http:\/\/socap.local\/petrolifera\/","title":"Divisi\u00f3n PETROLIFERA","target":"","attr_title":"","description":"","classes":"","xfn":"","nav_menu_term_id":5,"position":2,"status":"publish","original_title":"PETROLIFERA \u2013 Tanques para combustible","_invalid":false};
v["nav_menu_item[23065]"] = {"menu_item_parent":23063,"object_id":22575,"object":"page","type":"post_type","type_label":"P\u00e1gina","url":"http:\/\/socap.local\/petrolifera\/","title":"PETROLIFERA \u2013 Tanques para combustible","target":"","attr_title":"","description":"","classes":"","xfn":"","nav_menu_term_id":5,"position":3,"status":"publish","original_title":"PETROLIFERA \u2013 Tanques para combustible","_invalid":false};
v["nav_menu_item[23055]"] = {"menu_item_parent":23063,"object_id":22605,"object":"page","type":"post_type","type_label":"P\u00e1gina","url":"http:\/\/socap.local\/petrolifera-equipos-varios\/","title":"PETROLIFERA \u2013 Equipos de almacenamiento y tratamiento de aguas","target":"","attr_title":"","description":"","classes":"","xfn":"","nav_menu_term_id":5,"position":4,"status":"publish","original_title":"PETROLIFERA \u2013 Equipos de almacenamiento y tratamiento de aguas","_invalid":false};
v["nav_menu_item[23062]"] = {"menu_item_parent":23063,"object_id":22601,"object":"page","type":"post_type","type_label":"P\u00e1gina","url":"http:\/\/socap.local\/petrolera-equipos-de-almacenamiento-y-tratamiento-de-aguas\/","title":"PETROLIFERA \u2013 Equipos Varios","target":"","attr_title":"","description":"","classes":"","xfn":"","nav_menu_term_id":5,"position":5,"status":"publish","original_title":"PETROLIFERA \u2013 Equipos Varios","_invalid":false};
v["nav_menu_item[23066]"] = {"menu_item_parent":0,"object_id":22607,"object":"page","type":"post_type","type_label":"P\u00e1gina","url":"http:\/\/socap.local\/industrial-tanques-de-almacenamiento-de-fluidos\/","title":"Divisi\u00f3n INDUSTRIAL","target":"","attr_title":"","description":"","classes":"","xfn":"","nav_menu_term_id":5,"position":6,"status":"publish","original_title":"INDUSTRIAL \u2013 Tanques de almacenamiento de fluidos","_invalid":false};
v["nav_menu_item[23061]"] = {"menu_item_parent":23066,"object_id":22607,"object":"page","type":"post_type","type_label":"P\u00e1gina","url":"http:\/\/socap.local\/industrial-tanques-de-almacenamiento-de-fluidos\/","title":"INDUSTRIAL \u2013 Tanques de almacenamiento de fluidos","target":"","attr_title":"","description":"","classes":"","xfn":"","nav_menu_term_id":5,"position":7,"status":"publish","original_title":"INDUSTRIAL \u2013 Tanques de almacenamiento de fluidos","_invalid":false};
v["nav_menu_item[23060]"] = {"menu_item_parent":23066,"object_id":22609,"object":"page","type":"post_type","type_label":"P\u00e1gina","url":"http:\/\/socap.local\/industrial-instalaciones-completas\/","title":"INDUSTRIAL \u2013 Instalaciones Completas","target":"","attr_title":"","description":"","classes":"","xfn":"","nav_menu_term_id":5,"position":8,"status":"publish","original_title":"INDUSTRIAL \u2013 Instalaciones Completas","_invalid":false};
v["nav_menu_item[23056]"] = {"menu_item_parent":23066,"object_id":22618,"object":"page","type":"post_type","type_label":"P\u00e1gina","url":"http:\/\/socap.local\/industrial-servicio-postventa-y-mantenimiento\/","title":"INDUSTRIAL \u2013 Servicio postventa y mantenimiento","target":"","attr_title":"","description":"","classes":"","xfn":"","nav_menu_term_id":5,"position":9,"status":"publish","original_title":"INDUSTRIAL \u2013 Servicio postventa y mantenimiento","_invalid":false};
v["nav_menu_item[23067]"] = {"menu_item_parent":0,"object_id":22611,"object":"page","type":"post_type","type_label":"P\u00e1gina","url":"http:\/\/socap.local\/industrial-servicio-de-postventa-y-mantenimiento\/","title":"Divisi\u00f3n MEDIOAMBIENTE","target":"","attr_title":"","description":"","classes":"","xfn":"","nav_menu_term_id":5,"position":10,"status":"publish","original_title":"MEDIOAMBIENTE \u2013 Recogida y tratamiento de residuos","_invalid":false};
v["nav_menu_item[23059]"] = {"menu_item_parent":23067,"object_id":22611,"object":"page","type":"post_type","type_label":"P\u00e1gina","url":"http:\/\/socap.local\/industrial-servicio-de-postventa-y-mantenimiento\/","title":"MEDIOAMBIENTE \u2013 Recogida y tratamiento de residuos","target":"","attr_title":"","description":"","classes":"","xfn":"","nav_menu_term_id":5,"position":11,"status":"publish","original_title":"MEDIOAMBIENTE \u2013 Recogida y tratamiento de residuos","_invalid":false};
v["nav_menu_item[23058]"] = {"menu_item_parent":23067,"object_id":22614,"object":"page","type":"post_type","type_label":"P\u00e1gina","url":"http:\/\/socap.local\/medioambiente-almacenamiento-de-productos-peligrosos\/","title":"MEDIOAMBIENTE \u2013 Almacenamiento de productos peligrosos","target":"","attr_title":"","description":"","classes":"","xfn":"","nav_menu_term_id":5,"position":12,"status":"publish","original_title":"MEDIOAMBIENTE \u2013 Almacenamiento de productos peligrosos","_invalid":false};
v["nav_menu_item[23057]"] = {"menu_item_parent":23067,"object_id":22616,"object":"page","type":"post_type","type_label":"P\u00e1gina","url":"http:\/\/socap.local\/medioambiente-tratamiento-de-aguas-residuales-industriales-y-urbanas\/","title":"MEDIOAMBIENTE \u2013 Tratamiento de aguas residuales, industriales y urbanas","target":"","attr_title":"","description":"","classes":"","xfn":"","nav_menu_term_id":5,"position":13,"status":"publish","original_title":"MEDIOAMBIENTE \u2013 Tratamiento de aguas residuales, industriales y urbanas","_invalid":false};
v["nav_menu_item[23126]"] = {"menu_item_parent":0,"object_id":1491,"object":"page","type":"post_type","type_label":"P\u00e1gina","url":"http:\/\/socap.local\/contacto-es\/","title":"","target":"","attr_title":"","description":"","classes":"","xfn":"","nav_menu_term_id":5,"position":14,"status":"publish","original_title":"CONTACTO","_invalid":false};
v["nav_menu[19]"] = {"name":"mp - Ingl\u00e9s","description":"","parent":0,"auto_add":false};
v["nav_menu_item[23140]"] = {"menu_item_parent":0,"object_id":23106,"object":"page","type":"post_type","type_label":"P\u00e1gina","url":"http:\/\/socap.local\/en\/home\/","title":"","target":"","attr_title":"","description":"","classes":"","xfn":"","nav_menu_term_id":19,"position":1,"status":"publish","original_title":"HOME","_invalid":false};
v["nav_menu_item[23284]"] = {"menu_item_parent":0,"object_id":23279,"object":"page","type":"post_type","type_label":"P\u00e1gina","url":"http:\/\/socap.local\/en\/oil-industry-fuel-storage-tanks\/","title":"OIL INDUSTRY","target":"","attr_title":"","description":"","classes":"","xfn":"","nav_menu_term_id":19,"position":2,"status":"publish","original_title":"OIL INDUSTRY \u2013 Fuel storage tanks","_invalid":false};
v["nav_menu_item[23283]"] = {"menu_item_parent":23284,"object_id":23279,"object":"page","type":"post_type","type_label":"P\u00e1gina","url":"http:\/\/socap.local\/en\/oil-industry-fuel-storage-tanks\/","title":"OIL INDUSTRY \u2013 Fuel storage tanks","target":"","attr_title":"","description":"","classes":"","xfn":"","nav_menu_term_id":19,"position":3,"status":"publish","original_title":"OIL INDUSTRY \u2013 Fuel storage tanks","_invalid":false};
v["nav_menu_item[23299]"] = {"menu_item_parent":23284,"object_id":23297,"object":"page","type":"post_type","type_label":"P\u00e1gina","url":"http:\/\/socap.local\/en\/oil-industry-equipment-for-water-storage-and-treatment\/","title":"OIL INDUSTRY \u2013 Equipment for Water Storage and Treatment","target":"","attr_title":"","description":"","classes":"","xfn":"","nav_menu_term_id":19,"position":4,"status":"publish","original_title":"OIL INDUSTRY \u2013 Equipment for Water Storage and Treatment","_invalid":false};
v["nav_menu_item[23300]"] = {"menu_item_parent":23284,"object_id":23295,"object":"page","type":"post_type","type_label":"P\u00e1gina","url":"http:\/\/socap.local\/en\/oil-industry-division-other-equipment\/","title":"OIL INDUSTRY DIVISION \u2013 Other Equipment","target":"","attr_title":"","description":"","classes":"","xfn":"","nav_menu_term_id":19,"position":5,"status":"publish","original_title":"OIL INDUSTRY DIVISION \u2013 Other Equipment","_invalid":false};
v["nav_menu_item[23303]"] = {"menu_item_parent":0,"object_id":23301,"object":"page","type":"post_type","type_label":"P\u00e1gina","url":"http:\/\/socap.local\/en\/industrial-division-fluid-storage-tanks\/","title":"INDUSTRIAL DIVISION","target":"","attr_title":"","description":"","classes":"","xfn":"","nav_menu_term_id":19,"position":6,"status":"publish","original_title":"INDUSTRIAL DIVISION \u2013  Fluid storage tanks","_invalid":false};
v["nav_menu_item[23304]"] = {"menu_item_parent":23303,"object_id":23301,"object":"page","type":"post_type","type_label":"P\u00e1gina","url":"http:\/\/socap.local\/en\/industrial-division-fluid-storage-tanks\/","title":"INDUSTRIAL DIVISION \u2013  Fluid storage tanks","target":"","attr_title":"","description":"","classes":"","xfn":"","nav_menu_term_id":19,"position":7,"status":"publish","original_title":"INDUSTRIAL DIVISION \u2013  Fluid storage tanks","_invalid":false};
v["nav_menu_item[23310]"] = {"menu_item_parent":23303,"object_id":23308,"object":"page","type":"post_type","type_label":"P\u00e1gina","url":"http:\/\/socap.local\/en\/industrial-division-complete-installations\/","title":"INDUSTRIAL DIVISION \u2013 Complete Installations","target":"","attr_title":"","description":"","classes":"","xfn":"","nav_menu_term_id":19,"position":8,"status":"publish","original_title":"INDUSTRIAL DIVISION \u2013 Complete Installations","_invalid":false};
v["nav_menu_item[23311]"] = {"menu_item_parent":23303,"object_id":23306,"object":"page","type":"post_type","type_label":"P\u00e1gina","url":"http:\/\/socap.local\/en\/industrial-division-after-sales-maintenance-service\/","title":"","target":"","attr_title":"","description":"","classes":"","xfn":"","nav_menu_term_id":19,"position":9,"status":"publish","original_title":"INDUSTRIAL DIVISION \u2013 After Sales & Maintenance Service","_invalid":false};
v["nav_menu_item[23318]"] = {"menu_item_parent":0,"object_id":23312,"object":"page","type":"post_type","type_label":"P\u00e1gina","url":"http:\/\/socap.local\/en\/environmental-collection-and-treatment-of-solid-waste\/","title":"ENVIRONMENTAL","target":"","attr_title":"","description":"","classes":"","xfn":"","nav_menu_term_id":19,"position":10,"status":"publish","original_title":"ENVIRONMENTAL \u2013 Collection and Treatment of Solid Waste","_invalid":false};
v["nav_menu_item[23321]"] = {"menu_item_parent":23318,"object_id":23312,"object":"page","type":"post_type","type_label":"P\u00e1gina","url":"http:\/\/socap.local\/en\/environmental-collection-and-treatment-of-solid-waste\/","title":"ENVIRONMENTAL \u2013 Collection and Treatment of Solid Waste","target":"","attr_title":"","description":"","classes":"","xfn":"","nav_menu_term_id":19,"position":11,"status":"publish","original_title":"ENVIRONMENTAL \u2013 Collection and Treatment of Solid Waste","_invalid":false};
v["nav_menu_item[23319]"] = {"menu_item_parent":23318,"object_id":23316,"object":"page","type":"post_type","type_label":"P\u00e1gina","url":"http:\/\/socap.local\/en\/environmental-storage-of-hazardous-products\/","title":"ENVIRONMENTAL \u2013  Storage of Hazardous Products","target":"","attr_title":"","description":"","classes":"","xfn":"","nav_menu_term_id":19,"position":12,"status":"publish","original_title":"ENVIRONMENTAL \u2013  Storage of Hazardous Products","_invalid":false};
v["nav_menu_item[23320]"] = {"menu_item_parent":23318,"object_id":23314,"object":"page","type":"post_type","type_label":"P\u00e1gina","url":"http:\/\/socap.local\/en\/environmental-treatment-of-waste-industrial-and-urban-waters\/","title":"ENVIRONMENTAL \u2013  Treatment of Waste, Industrial and Urban Waters","target":"","attr_title":"","description":"","classes":"","xfn":"","nav_menu_term_id":19,"position":13,"status":"publish","original_title":"ENVIRONMENTAL \u2013  Treatment of Waste, Industrial and Urban Waters","_invalid":false};
v["nav_menu_item[23139]"] = {"menu_item_parent":0,"object_id":23110,"object":"page","type":"post_type","type_label":"P\u00e1gina","url":"http:\/\/socap.local\/en\/contact\/","title":"","target":"","attr_title":"","description":"","classes":"","xfn":"","nav_menu_term_id":19,"position":14,"status":"publish","original_title":"CONTACT","_invalid":false};
v["nav_menus_created_posts"] = [];
v["widget_pages[1]"] = {"encoded_serialized_instance":"YTowOnt9","title":"","is_widget_customizer_js_value":true,"instance_hash_key":"abb7b2fd5f058248bc1d60b44f433569"};
v["widget_calendar[1]"] = {"encoded_serialized_instance":"YTowOnt9","title":"","is_widget_customizer_js_value":true,"instance_hash_key":"abb7b2fd5f058248bc1d60b44f433569"};
v["widget_archives[2]"] = {"encoded_serialized_instance":"YTozOntzOjU6InRpdGxlIjtzOjA6IiI7czo1OiJjb3VudCI7aTowO3M6ODoiZHJvcGRvd24iO2k6MDt9","title":"","is_widget_customizer_js_value":true,"instance_hash_key":"3cc07bc40a1b6e95cf6e5c563722f431"};
v["widget_media_audio[1]"] = {"encoded_serialized_instance":"YTowOnt9","title":"","is_widget_customizer_js_value":true,"instance_hash_key":"abb7b2fd5f058248bc1d60b44f433569"};
v["widget_media_image[1]"] = {"encoded_serialized_instance":"YTowOnt9","title":"","is_widget_customizer_js_value":true,"instance_hash_key":"abb7b2fd5f058248bc1d60b44f433569"};
v["widget_media_gallery[1]"] = {"encoded_serialized_instance":"YTowOnt9","title":"","is_widget_customizer_js_value":true,"instance_hash_key":"abb7b2fd5f058248bc1d60b44f433569"};
v["widget_media_video[1]"] = {"encoded_serialized_instance":"YTowOnt9","title":"","is_widget_customizer_js_value":true,"instance_hash_key":"abb7b2fd5f058248bc1d60b44f433569"};
v["widget_meta[2]"] = {"encoded_serialized_instance":"YToxOntzOjU6InRpdGxlIjtzOjA6IiI7fQ==","title":"","is_widget_customizer_js_value":true,"instance_hash_key":"cfb3f600341ffc056844d32cd9894695"};
v["widget_search[2]"] = {"encoded_serialized_instance":"YToxOntzOjU6InRpdGxlIjtzOjA6IiI7fQ==","title":"","is_widget_customizer_js_value":true,"instance_hash_key":"cfb3f600341ffc056844d32cd9894695"};
v["widget_text[1]"] = {"encoded_serialized_instance":"YTowOnt9","title":"","is_widget_customizer_js_value":true,"instance_hash_key":"abb7b2fd5f058248bc1d60b44f433569"};
v["widget_categories[2]"] = {"encoded_serialized_instance":"YTo0OntzOjU6InRpdGxlIjtzOjA6IiI7czo1OiJjb3VudCI7aTowO3M6MTI6ImhpZXJhcmNoaWNhbCI7aTowO3M6ODoiZHJvcGRvd24iO2k6MDt9","title":"","is_widget_customizer_js_value":true,"instance_hash_key":"0b8f724c853223f061e258755e87e413"};
v["widget_recent-posts[2]"] = {"encoded_serialized_instance":"YToyOntzOjU6InRpdGxlIjtzOjA6IiI7czo2OiJudW1iZXIiO2k6NTt9","title":"","is_widget_customizer_js_value":true,"instance_hash_key":"45a9d0706c224204f1441017f2187505"};
v["widget_recent-comments[2]"] = {"encoded_serialized_instance":"YToyOntzOjU6InRpdGxlIjtzOjA6IiI7czo2OiJudW1iZXIiO2k6NTt9","title":"","is_widget_customizer_js_value":true,"instance_hash_key":"45a9d0706c224204f1441017f2187505"};
v["widget_rss[1]"] = {"encoded_serialized_instance":"YTowOnt9","title":"","is_widget_customizer_js_value":true,"instance_hash_key":"abb7b2fd5f058248bc1d60b44f433569"};
v["widget_tag_cloud[1]"] = {"encoded_serialized_instance":"YTowOnt9","title":"","is_widget_customizer_js_value":true,"instance_hash_key":"abb7b2fd5f058248bc1d60b44f433569"};
v["widget_nav_menu[1]"] = {"encoded_serialized_instance":"YTowOnt9","title":"","is_widget_customizer_js_value":true,"instance_hash_key":"abb7b2fd5f058248bc1d60b44f433569"};
v["widget_custom_html[1]"] = {"encoded_serialized_instance":"YTowOnt9","title":"","is_widget_customizer_js_value":true,"instance_hash_key":"abb7b2fd5f058248bc1d60b44f433569"};
v["widget_layerslider_widget[1]"] = {"encoded_serialized_instance":"YTowOnt9","title":"","is_widget_customizer_js_value":true,"instance_hash_key":"abb7b2fd5f058248bc1d60b44f433569"};
v["widget_akismet_widget[1]"] = {"encoded_serialized_instance":"YTowOnt9","title":"","is_widget_customizer_js_value":true,"instance_hash_key":"abb7b2fd5f058248bc1d60b44f433569"};
v["widget_gadwp-frontwidget-report[1]"] = {"encoded_serialized_instance":"YTowOnt9","title":"","is_widget_customizer_js_value":true,"instance_hash_key":"abb7b2fd5f058248bc1d60b44f433569"};
v["widget_rev-slider-widget[1]"] = {"encoded_serialized_instance":"YTowOnt9","title":"","is_widget_customizer_js_value":true,"instance_hash_key":"abb7b2fd5f058248bc1d60b44f433569"};
v["widget_icl_lang_sel_widget[1]"] = {"encoded_serialized_instance":"YTowOnt9","title":"","is_widget_customizer_js_value":true,"instance_hash_key":"abb7b2fd5f058248bc1d60b44f433569"};
v["widget_aboutmewidget[1]"] = {"encoded_serialized_instance":"YTowOnt9","title":"","is_widget_customizer_js_value":true,"instance_hash_key":"abb7b2fd5f058248bc1d60b44f433569"};
v["widget_adsensewidget[1]"] = {"encoded_serialized_instance":"YTowOnt9","title":"","is_widget_customizer_js_value":true,"instance_hash_key":"abb7b2fd5f058248bc1d60b44f433569"};
v["widget_advwidget[1]"] = {"encoded_serialized_instance":"YTowOnt9","title":"","is_widget_customizer_js_value":true,"instance_hash_key":"abb7b2fd5f058248bc1d60b44f433569"};
v["sidebars_widgets[wp_inactive_widgets]"] = ["icl_lang_sel_widget-1","search-2","recent-posts-2","recent-comments-2","archives-2","categories-2","meta-2"];
v["sidebars_widgets[sidebar-1]"] = [];
v["sidebars_widgets[sidebar-2]"] = [];
v["sidebars_widgets[sidebar-3]"] = [];
v["sidebars_widgets[sidebar-4]"] = [];
v["sidebars_widgets[sidebar-5]"] = [];
v["sidebars_widgets[sidebar-6]"] = [];
v["sidebars_widgets[sidebar-7]"] = [];
			})( _wpCustomizeSettings.values );
		</script>
				<script type="text/javascript">
			var _wpWidgetCustomizerPreviewSettings = {"renderedSidebars":{"sidebar-2":true,"sidebar-3":true,"sidebar-4":true,"sidebar-5":true,"sidebar-6":true,"sidebar-7":true},"renderedWidgets":[],"registeredSidebars":[{"name":"Barra lateral","id":"sidebar-1","description":"","class":"","before_widget":"<div id=\"%1$s\" class=\"et_pb_widget %2$s\">","after_widget":"<\/div> <!-- end .et_pb_widget -->","before_title":"<h4 class=\"widgettitle\">","after_title":"<\/h4>"},{"name":"\u00c1rea de pie de p\u00e1gina #1","id":"sidebar-2","description":"","class":"","before_widget":"<div id=\"%1$s\" class=\"fwidget et_pb_widget %2$s\">","after_widget":"<\/div> <!-- end .fwidget -->","before_title":"<h4 class=\"title\">","after_title":"<\/h4>"},{"name":"\u00c1rea de pie de p\u00e1gina #2","id":"sidebar-3","description":"","class":"","before_widget":"<div id=\"%1$s\" class=\"fwidget et_pb_widget %2$s\">","after_widget":"<\/div> <!-- end .fwidget -->","before_title":"<h4 class=\"title\">","after_title":"<\/h4>"},{"name":"\u00c1rea de pie de p\u00e1gina #3","id":"sidebar-4","description":"","class":"","before_widget":"<div id=\"%1$s\" class=\"fwidget et_pb_widget %2$s\">","after_widget":"<\/div> <!-- end .fwidget -->","before_title":"<h4 class=\"title\">","after_title":"<\/h4>"},{"name":"\u00c1rea de pie de p\u00e1gina #4","id":"sidebar-5","description":"","class":"","before_widget":"<div id=\"%1$s\" class=\"fwidget et_pb_widget %2$s\">","after_widget":"<\/div> <!-- end .fwidget -->","before_title":"<h4 class=\"title\">","after_title":"<\/h4>"},{"name":"\u00c1rea de pie de p\u00e1gina #5","id":"sidebar-6","description":"","class":"","before_widget":"<div id=\"%1$s\" class=\"fwidget et_pb_widget %2$s\">","after_widget":"<\/div> <!-- end .fwidget -->","before_title":"<h4 class=\"title\">","after_title":"<\/h4>"},{"name":"\u00c1rea de pie de p\u00e1gina #6","id":"sidebar-7","description":"","class":"","before_widget":"<div id=\"%1$s\" class=\"fwidget et_pb_widget %2$s\">","after_widget":"<\/div> <!-- end .fwidget -->","before_title":"<h4 class=\"title\">","after_title":"<\/h4>"}],"registeredWidgets":{"pages-1":{"name":"P\u00e1ginas","id":"pages-1","params":[{"number":-1}],"classname":"widget_pages","customize_selective_refresh":true,"description":"Una lista de las p\u00e1ginas de tu sitio."},"calendar-1":{"name":"Calendario","id":"calendar-1","params":[{"number":-1}],"classname":"widget_calendar","customize_selective_refresh":true,"description":"Un calendario de las entradas de tu sitio."},"archives-2":{"name":"Archivos","id":"archives-2","params":[{"number":2}],"classname":"widget_archive","customize_selective_refresh":true,"description":"Un listado mensual de las entradas de tu sitio."},"media_audio-1":{"name":"Audio","id":"media_audio-1","params":[{"number":-1}],"classname":"widget_media_audio","customize_selective_refresh":true,"description":"Muestra un reproductor de audio.","mime_type":"audio"},"media_image-1":{"name":"Imagen","id":"media_image-1","params":[{"number":-1}],"classname":"widget_media_image","customize_selective_refresh":true,"description":"Muestra una imagen.","mime_type":"image"},"media_gallery-1":{"name":"Galer\u00eda","id":"media_gallery-1","params":[{"number":-1}],"classname":"widget_media_gallery","customize_selective_refresh":true,"description":"Muestra una galer\u00eda de im\u00e1genes.","mime_type":"image"},"media_video-1":{"name":"V\u00eddeo","id":"media_video-1","params":[{"number":-1}],"classname":"widget_media_video","customize_selective_refresh":true,"description":"Muestra un v\u00eddeo de la biblioteca de medios o de YouTube, Vimeo u otro proveedor.","mime_type":"video"},"meta-2":{"name":"Meta","id":"meta-2","params":[{"number":2}],"classname":"widget_meta","customize_selective_refresh":true,"description":"Acceder, RSS y enlaces de WordPress.com."},"search-2":{"name":"Buscar","id":"search-2","params":[{"number":2}],"classname":"widget_search","customize_selective_refresh":true,"description":"Un formulario de b\u00fasqueda de tu sitio."},"text-1":{"name":"Texto","id":"text-1","params":[{"number":1}],"classname":"widget_text","customize_selective_refresh":true,"description":"Texto arbitrario."},"categories-2":{"name":"Categor\u00edas","id":"categories-2","params":[{"number":2}],"classname":"widget_categories","customize_selective_refresh":true,"description":"Lista o desplegable de categor\u00edas."},"recent-posts-2":{"name":"Entradas recientes","id":"recent-posts-2","params":[{"number":2}],"classname":"widget_recent_entries","customize_selective_refresh":true,"description":"Las entradas m\u00e1s recientes de tu sitio."},"recent-comments-2":{"name":"Comentarios recientes","id":"recent-comments-2","params":[{"number":2}],"classname":"widget_recent_comments","customize_selective_refresh":true,"description":"Los comentarios m\u00e1s recientes de tu sitio."},"rss-1":{"name":"RSS","id":"rss-1","params":[{"number":1}],"classname":"widget_rss","customize_selective_refresh":true,"description":"Publicaciones de cualquier RSS o Feed de Atom."},"tag_cloud-1":{"name":"Nube de etiquetas","id":"tag_cloud-1","params":[{"number":-1}],"classname":"widget_tag_cloud","customize_selective_refresh":true,"description":"Nube de tus etiquetas m\u00e1s utilizadas."},"nav_menu-1":{"name":"Men\u00fa de Navegaci\u00f3n","id":"nav_menu-1","params":[{"number":-1}],"classname":"widget_nav_menu","customize_selective_refresh":true,"description":"A\u00f1ade un men\u00fa de navegaci\u00f3n a tu barra lateral."},"custom_html-1":{"name":"HTML personalizado","id":"custom_html-1","params":[{"number":-1}],"classname":"widget_custom_html","customize_selective_refresh":true,"description":"C\u00f3digo HTML arbitrario."},"layerslider_widget-1":{"name":"LayerSlider","id":"layerslider_widget-1","params":[{"number":-1}],"classname":"layerslider_widget","customize_selective_refresh":false,"description":"Insert sliders with the LayerSlider Widget"},"akismet_widget-1":{"name":"Widget de Akismet","id":"akismet_widget-1","params":[{"number":-1}],"classname":"widget_akismet_widget","customize_selective_refresh":false,"description":"Muestra el n\u00famero de comentarios de spam que Akismet ha capturado"},"gadwp-frontwidget-report-1":{"name":"Escritorio de Google Analytics","id":"gadwp-frontwidget-report-1","params":[{"number":-1}],"classname":"widget_gadwp-frontwidget-report","customize_selective_refresh":false,"description":"Mostrar\u00e1 tus estad\u00edsticas de Google Analytics en un widget"},"rev-slider-widget-1":{"name":"Revolution Slider","id":"rev-slider-widget-1","params":[{"number":-1}],"classname":"widget_revslider","customize_selective_refresh":false,"description":"Displays a revolution slider on the page"},"icl_lang_sel_widget-1":{"name":"Language Selector","id":"icl_lang_sel_widget-1","params":[{"number":-1}],"classname":"widget_icl_lang_sel_widget","customize_selective_refresh":false,"description":"Language Selector"},"aboutmewidget-1":{"name":"Widget acerca de m\u00ed","id":"aboutmewidget-1","params":[{"number":-1}],"classname":"widget_aboutmewidget","customize_selective_refresh":false,"description":"Muestra la informaci\u00f3n acerca de m\u00ed"},"adsensewidget-1":{"name":"Widget de Adsense","id":"adsensewidget-1","params":[{"number":-1}],"classname":"widget_adsensewidget","customize_selective_refresh":false,"description":"Muestra publicidad de Adsense"},"advwidget-1":{"name":"Publicidad","id":"advwidget-1","params":[{"number":-1}],"classname":"widget_advwidget","customize_selective_refresh":false,"description":"Muestra publicidad"}},"l10n":{"widgetTooltip":"May\u00fasculas + clic para editar este widget."},"selectiveRefreshableWidgets":{"pages":true,"calendar":true,"archives":true,"media_audio":true,"media_image":true,"media_gallery":true,"media_video":true,"meta":true,"search":true,"text":true,"categories":true,"recent-posts":true,"recent-comments":true,"rss":true,"tag_cloud":true,"nav_menu":true,"custom_html":true,"layerslider_widget":false,"akismet_widget":false,"gadwp-frontwidget-report":false,"rev-slider-widget":false,"icl_lang_sel_widget":false,"aboutmewidget":false,"adsensewidget":false,"advwidget":false}};
		</script>
		<script>var _customizePartialRefreshExports = {"partials":[],"renderQueryVar":"wp_customize_render_partials","l10n":{"shiftClickToEdit":"May\u00fasculas-Clic para editar este elemento.","clickEditMenu":"Haz clic para editar este men\u00fa.","clickEditWidget":"Haz clic para editar este widget.","clickEditTitle":"Haz clic para editar el t\u00edtulo del sitio.","clickEditMisc":"Haz clic para editar este elemento.","badDocumentWrite":"document.write() no est\u00e1 permitido"}};</script></body>
</html>

<!-- Dynamic page generated in 9.839 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2020-02-18 21:33:58 -->
