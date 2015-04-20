<?php
// No direct access
defined('_JEXEC') or die; ?>

<?php

	JHTML::stylesheet('alveo_welcome.css', 'modules/mod_alveowelcome/css/');
	
	// Not using the computed welcome stuff yet.
	//echo $welcome;

?>

<!--
-->

<div id="alveo-welcome" class="alveo-welcome">
        <div class="alveo-heading">
		  <h1>Above and Beyond Speech, Language and Music</h1>
		  <h2>A Virtual Lab for Human Communication Science</h2>
        </div>
        <div class="alveo-img-wrapper">
		  <img src="<?php echo JURI::root();?>modules/mod_alveowelcome/tmpl/images/splash.png" alt="Alveo Splash Image" />
		</div>
	    <div class="alveo-row">
		  <div class="alveo-col-md-6 alveo-col">
		    <h4 class="alveo-introduction">
				Alveo provides on-line infrastructure for accessing human communication data sets 
				(speech, texts, music, video, etc.) 
				and for using specialised tools for searching, analysing and annotating that data.
			</h4>
		  </div>
	    </div class="alveo-row">
</div class="alveo_welcome">

