<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
	
	<head>
		<jdoc:include type="head" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
	</head>
		
	<body>
		<div class="header">
			<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/randburg-logo.png" alt="Custom image" class="customImage" />
			<jdoc:include type="modules" name="top" /> 
		</div>
		
		<jdoc:include type="modules" name="slider" /> 
		<jdoc:include type="component" />
		<jdoc:include type="modules" name="bottom" />
		
		<div class="twitter_static">
			<jdoc:include type="modules" name="twitter" /> 
			
			<div class="bottom_border" >
			</div>
		</div>
		
		<div class="footer_box">
			<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/footer/certificates.jpg" alt="Custom image" class="customImage" />
			<jdoc:include type="modules" name="footer" />
		</div>
	</body>
 
</html>