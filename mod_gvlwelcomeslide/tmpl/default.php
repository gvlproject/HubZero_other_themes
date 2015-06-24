<?php
// No direct access
defined('_JEXEC') or die; ?>

<?php

JHTML::stylesheet('gvl_welcome_slide.css', 'modules/mod_gvlwelcomeslide/css/');

$javascript = <<<EOD
    $(function(){
      $("#slides").slidesjs({
		width: 550,
		height: 275,
		play: {
			active: false,
			effect: "slide",
			interval: 8000,
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
      $(document).ready(function() {
        if ($(window).width() < 1000) {
          $('#slides').hide();
        }
        else {
          $('#slides').show();
        }
      });
      $(window).resize(function() {
        if ($(window).width() < 1000) {
          $('#slides').hide();
        }
        else {
          $('#slides').show();
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
		<div id="slides">
			<img src="/site/media/images/slide_galaxy.png" alt="Run Galaxy in the cloud" />
			<img src="/site/media/images/slide_ipython.png" alt="Run iPython in the cloud" />
			<img src="/site/media/images/slide_r.png" alt="Run RStudio in the cloud" />
			<img src="/site/media/images/slide_launcher.png" alt="Launch private instances" />
			<img src="/site/media/images/slide_services.png" alt="Intallable services" />
			<img src="/site/media/images/slide_terminal.png" alt="Terminal access" />
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

