# Alveo2015

Joomla extensions (template and module) to customise HubZero, so it can be used as part of the Alveo Virtual laboratory.

These extensions apply to HubZero version 1.3, which in turn is based on Joomla version 2.5.

## Template

This template is used for the entrance and other pages of the HubZero instance used by Alveo.
The style (colour palette and fonts) follow the existing Alveo web site appearance at http://alveo.edu.au/.
The original scheme used the Jumbotron layout from Twitter Bootstrap.
This template was to be based on Twitter Bootstrap, but this was not pursued.
Instead the default HubZero template was copied and modified by adding an over-ride style sheet (alveo.css).

To use this template, git export the contents into a directory called Alveo2015, or whatever, 
and then zip the directory and its contents into the file Alveo2015.zip.

Use the Joomla administrator interface for extension management to upload and install the zip file.
Any previous versions need to be deleted first.
Then use the template manager to ensure the template is used as the default for the site.

See the instructions located in the docs folder to  modify this template for additional HubZero sites.

## Module - Welcome

The Alveo welcome module is used to show the site introduction and splash image.

To use this module, git export the contents into a directory called mod_alveowelcome 
and then zip the directory and its contents into the file mod_alveowelcome.

Use the Joomla administrator interface for extension management to upload and install the zip file.
Any previous versions need to be deleted first.
Then use the module manager to publish the alveowelcome module in the welcome block of the page at position 2.

This module is currently located in the git branch named "splash_image".

## Module - Footer

The Alveo footer module is used to show the project sponsor (NeCTAR) 
and collaborators (a number of Australian Universities).

To use this module, git export the contents into a directory called mod_alveofooter 
and then zip the directory and its contents into the file mod_alveofooter.

Use the Joomla administrator interface for extension management to upload and install the zip file.
Any previous versions need to be deleted first.
Then use the module manager to publish the alveofooter in the footer block of the page at position 3.

## Distribution

Packaged versions of the template and module
can be downloaded from the distribution directory.

## Known Problems

### 1.

The Alveo Footer module does not display well on the error web page as the the base template for the error page does not load modules properly. Specifically it does not load module style sheets or respect the modules settings such as title display. 

The workaround is to NOT show the Alveo Footer module on the error page, and this can be accomplished by using the Module Assignment with the option "Only on the pages selected" and then selecting all relevant pages.