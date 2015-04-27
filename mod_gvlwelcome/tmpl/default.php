<?php
// No direct access
defined('_JEXEC') or die; ?>

<?php

	JHTML::stylesheet('gvl_welcome.css', 'modules/mod_gvlwelcome/css/');
	
	// Not using the computed welcome stuff yet.
	//echo $welcome;

?>

<div id="gvl-welcome" class="gvl-welcome">
        <div class="gvl-heading">
		  <h1>Genomics Virtual Lab</h1>
		  <h2>A virtual laboratory for genomics research and training. </h2>
        </div>
        <div class="gvl-img-wrapper">
		  <img src="<?php echo JURI::root();?>modules/mod_gvlwelcome/tmpl/images/splash.jpg" alt="GVL Splash Image" />
		</div>
	    <div class="gvl-row" style="min-height: 1px;">
		  <div class="gvl-col-md-6 gvl-col">
		    <h4 class="gvl-introduction">
		    <!-- Placeholder for additional content. -->
			</h4>
		  </div>
	    </div class="gvl-row">
</div class="gvl_welcome">

