<?php
// No direct access
defined('_JEXEC') or die; ?>

<?php

JHTML::stylesheet('gvl_welcome_slide.css', 'modules/mod_gvlwelcomeslide/css/');

$javascript = <<<EOD
    $(function(){
      $("#slides").slidesjs({
		width: 399,
		height: 300,
		play: {
			active: false,
			effect: "slide",
			interval: 5000,
			auto: true,
			swap: true,
			pauseOnHover: true,
			restartDelay: 2500
		},
		pagination: {
			active: false,
			effect: "slide"
		},
		navigation: {
			active: false,
			effect: "slide"
		}
      });
    });
EOD;

$document =& JFactory::getDocument();
$document->addScript('/modules/mod_gvlwelcomeslide/js/jquery.slides.min.js');
$document->addScriptDeclaration($javascript);
	
// Not using the computed welcome stuff yet.
// echo $welcome;

?>

<div id="gvl-welcome-slide" class="gvl-welcome">
	<div class="gvl-heading">
	  <h1>Genomics Virtual Lab</h1>
	  <h2>A virtual laboratory for genomics research and training. </h2>
	</div>
	<div class="gvl-img-wrapper">
		<div id="slides">
			<img src="<?php echo JURI::root();?>modules/mod_gvlwelcomeslide/tmpl/images/splash0.jpg" alt="GVL Splash Image" />
			<img src="<?php echo JURI::root();?>modules/mod_gvlwelcomeslide/tmpl/images/splash1.jpg" alt="GVL Splash Image" />
			<img src="<?php echo JURI::root();?>modules/mod_gvlwelcomeslide/tmpl/images/splash2.jpg" alt="GVL Splash Image" />
			<img src="<?php echo JURI::root();?>modules/mod_gvlwelcomeslide/tmpl/images/splash3.jpg" alt="GVL Splash Image" />
			<img src="<?php echo JURI::root();?>modules/mod_gvlwelcomeslide/tmpl/images/splash4.jpg" alt="GVL Splash Image" />
		</div>
	</div>
	<div class="gvl-row" style="min-height: 1px;">
	  <div class="gvl-col-md-6 gvl-col">
		<h4 class="gvl-introduction">
		<!-- Placeholder for additional content. -->
		</h4>
	  </div>
	</div class="gvl-row">
</div class="gvl_welcome">

