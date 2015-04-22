<?php
// No direct access
defined('_JEXEC') or die; ?>

<?php

	JHTML::stylesheet('gvl_welcome.css', 'modules/mod_gvlwelcome/css/');
	
	// Not using the computed welcome stuff yet.
	//echo $welcome;

?>

<!--
-->

<div id="gvl-welcome" class="gvl-welcome">
        <div class="gvl-heading">
		  <h1>Above and Beyond Speech, Language and Music</h1>
		  <h2>A Virtual Lab for Human Communication Science</h2>
        </div>
        <div class="gvl-img-wrapper">
		  <img src="<?php echo JURI::root();?>modules/mod_gvlwelcome/tmpl/images/splash.png" alt="Alveo Splash Image" />
		</div>
	    <div class="gvl-row">
		  <div class="gvl-col-md-6 gvl-col">
		    <h4 class="gvl-introduction">
				Alveo provides on-line infrastructure for accessing human communication data sets 
				(speech, texts, music, video, etc.) 
				and for using specialised tools for searching, analysing and annotating that data.
			</h4>
		  </div>
	    </div class="gvl-row">
</div class="gvl_welcome">

