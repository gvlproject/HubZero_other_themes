<?php
// No direct access
defined('_JEXEC') or die; ?>

<?php

	JHTML::stylesheet('alveo_footer.css', 'modules/mod_alveofooter/css/');
	
	// Not using the computed footer stuff yet.
	//echo $footer;

?>

<!--
-->

<div id="alveo-footer" class="alveo-footer">
    <div class="alveo-sponsor">
		<div class="alveo-row">
		  <div class="alveo-col-md-3 alveo-col">
			 <img src="<?php echo JURI::root();?>modules/mod_alveofooter/tmpl/images/logos/nectar.png" alt="Nectar" />
		  </div>
		  <div class="alveo-col-md-9 alveo-col">
		    <div class="alveo-acknowledgement">
				The University of Western Sydney is proud to be in partnership with, and acknowledges funding from, 
				the National eResearch Collaboration Tools and Resources (NeCTAR) project 
				(<a href="http://www.nectar.org.au">http://www.nectar.org.au</a>) to develop Alveo. 
				NeCTAR is an Australian Government project conducted as part of the Super Science initiative 
				and financed by the Education Investment Fund.
			</div>
		  </div>
		</div>
    </div class="alveo-sponsor">
    <div id="alveo-collaborators" class="alveo-collaborators">
		<div class="alveo-row">
		  <div class="alveo-col-md-2 alveo-col">
		  	<div class="alveo-logo-wrapper">
			  <img src="<?php echo JURI::root();?>modules/mod_alveofooter/tmpl/images/logos/universities/UWS_Logo.png" alt="UWS"  style="width:85%;"/>
		    </div>
		  </div>
		  <div class="alveo-col-md-2 alveo-col">
		  	<div class="alveo-logo-wrapper">
			  <img src="<?php echo JURI::root();?>modules/mod_alveofooter/tmpl/images/logos/universities/MQ_Logo.png" alt="MQ" />
		    </div>
		  </div>
		  <div class="alveo-col-md-2 alveo-col">
		  	<div class="alveo-logo-wrapper">
			  <img src="<?php echo JURI::root();?>modules/mod_alveofooter/tmpl/images/logos/universities/RMIT_Logo.png" alt= "RMIT" />
		    </div>
		  </div>
		  <div class="alveo-col-md-2 alveo-col">
		  	<div class="alveo-logo-wrapper">
			  <img src="<?php echo JURI::root();?>modules/mod_alveofooter/tmpl/images/logos/universities/UoM_Logo.png" alt="UoM" />
		    </div>
		  </div>
		  <div class="alveo-col-md-2 alveo-col">
		  	<div class="alveo-logo-wrapper">
			  <img src="<?php echo JURI::root();?>modules/mod_alveofooter/tmpl/images/logos/universities/ANU_Logo.png" alt="ANU" />
		    </div>
		  </div>
		  <div class="alveo-col-md-2 alveo-col">
		  	<div class="alveo-logo-wrapper">
			<img src="<?php echo JURI::root();?>modules/mod_alveofooter/tmpl/images/logos/universities/UWA_Logo.png" alt="UWA" />
		    </div>
		  </div>
	      <br/>
		</div>
		<div class="alveo-row">
		  <div class="alveo-col-md-2 alveo-col">
		  	<div class="alveo-logo-wrapper">
			  <img src="<?php echo JURI::root();?>modules/mod_alveofooter/tmpl/images/logos/universities/USY_Logo.png" alt="UOS" />
		    </div>
		  </div>
		  <div class="alveo-col-md-2 alveo-col">
		  	<div class="alveo-logo-wrapper">
			  <img src="<?php echo JURI::root();?>modules/mod_alveofooter/tmpl/images/logos/universities/UNE_Logo.png" alt="UNE" style="width:55%;" />
		    </div>
		  </div>
		  <div class="alveo-col-md-2 alveo-col">
		  	<div class="alveo-logo-wrapper">
			  <img src="<?php echo JURI::root();?>modules/mod_alveofooter/tmpl/images/logos/universities/UoC_Logo.png" alt="UoC" style="width:85%;"/>
		    </div>
		  </div>
		  <div class="alveo-col-md-2 alveo-col">
		  	<div class="alveo-logo-wrapper">
			  <img src="<?php echo JURI::root();?>modules/mod_alveofooter/tmpl/images/logos/universities/FU_Logo.png" alt="FU" />
		    </div>
		  </div>
		  <div class="alveo-col-md-2 alveo-col">
		  	<div class="alveo-logo-wrapper">
			  <img src="<?php echo JURI::root();?>modules/mod_alveofooter/tmpl/images/logos/universities/UNSW_Logo.png" alt="UNSW" />
		    </div>
		  </div>
		  <div class="alveo-col-md-2 alveo-col">
		  	<div class="alveo-logo-wrapper">
			  <img src="<?php echo JURI::root();?>modules/mod_alveofooter/tmpl/images/logos/universities/UoLT_Logo.png" alt="UoLT" />
		    </div>
		  </div>
	      <br/>
		</div>
		<div class="alveo-row">
		  <div class="alveo-col-md-2 alveo-col">
		  	<div class="alveo-logo-wrapper">
			  <img src="<?php echo JURI::root();?>modules/mod_alveofooter/tmpl/images/logos/universities/UTAS_Logo.png" alt="UTAS"  style="width:45%;"/>
		    </div>
		  </div>
		  <div class="alveo-col-md-2 alveo-col">
		  	<div class="alveo-logo-wrapper">
			  <img src="<?php echo JURI::root();?>modules/mod_alveofooter/tmpl/images/logos/universities/ASSTA_Logo.png" alt="ASSTA" />
		    </div>
		  </div>
		  <div class="alveo-col-md-2 alveo-col">
		  	<div class="alveo-logo-wrapper">
			  <img src="<?php echo JURI::root();?>modules/mod_alveofooter/tmpl/images/logos/universities/AUSNC_Logo.png" alt="AUSNC" style="width:85%;"/>
		    </div>
		  </div>
		  <div class="alveo-col-md-2 alveo-col">
		  	<div class="alveo-logo-wrapper">
			  <img src="<?php echo JURI::root();?>modules/mod_alveofooter/tmpl/images/logos/universities/NICTA_Logo.png" alt="NICTA" style="width:45%;"/>
		    </div>
		  </div>
		  <div class="alveo-col-md-2 alveo-col">
		  	<div class="alveo-logo-wrapper">
			  <img src="<?php echo JURI::root();?>modules/mod_alveofooter/tmpl/images/logos/universities/Intersect_Logo.png" alt="Intersect" style="width:65%;"/>
		    </div>
	        <br/>
		  </div>
		  <div class="alveo-col-md-2 alveo-col">
		  	<div class="alveo-logo-wrapper">
		    </div>
	        <br/>
		  </div>
		</div>
    </div class="alveo-collaborators">
	<br/>
</div class="alveo_footer">

