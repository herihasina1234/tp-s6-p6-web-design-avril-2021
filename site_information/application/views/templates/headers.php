<?php 
        $log = $this->session->has_userdata ('user')?'Logout':'Login';
?>
<!DOCTYPE <html	PUBLIC "-­‐//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR xhtml1/DTD/xhtml1-­‐transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>	  	
<title><?php echo $title;?></title>		
	<meta	http-­‐equiv="Content-­‐Type" content="text/html; charset=UTF-­‐8"/>	
	<meta name="description" content="<?php echo $description;?>"/>	
	<meta name="keywords" content="<?php echo $keywords; ?>"/>	 	
	<link href="/css/styles.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="<?php echo site_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
        <link href="<?php echo site_url('assets/vendor/datatables/dataTables.bootstrap4.min.css')?>" rel="stylesheet">
        <link href="<?php echo site_url('assets/css/bootstrap.css')?>" rel="stylesheet">
        <link href="<?php echo site_url('assets/fontawesome/css/fontawesome.css')?>" rel="stylesheet">
         <link rel="stylesheet" href="<?php echo site_url('assets/fontawesome/css/fontawesome.css')?>">
        <link rel="stylesheet" href="<?php echo site_url('assets/fontawesome/css/fontawesome.min.css')?>">
        <link rel="stylesheet" href="<?php echo site_url('assets/fontawesome/css/brands.css')?>">
        <link rel="stylesheet" href="<?php echo site_url('assets/fontawesome/css/brands.min.css')?>">
        <link rel="stylesheet" href="<?php echo site_url('assets/fontawesome/css/regular.css')?>">
        <link rel="stylesheet" href="<?php echo site_url('assets/fontawesome/css/regular.min.css')?>">
        <link rel="stylesheet" href="<?php echo site_url('assets/fontawesome/css/solid.css')?>">
        <link rel="stylesheet" href="<?php echo site_url('assets/fontawesome/css/solid.min.css')?>">
        <link rel="stylesheet" href="<?php echo site_url('assets/fontawesome/css/svg-with-js.css')?>">
        <link rel="stylesheet" href="<?php echo site_url('assets/Style/fontawesome/css/svg-with-js.min.css')?>">
        <link rel="stylesheet" href="<?php echo site_url('assets/fontawesome/css/v4-shims.css')?>">
        <link rel="stylesheet" href="<?php echo site_url('assets/fontawesome/css/v4-shims.min.css')?>">
        
        <link rel="stylesheet" href="<?php echo site_url('assets/css/container-form.css')?>">   
</head>
<body>
	<div class="wrap">	
		<div id="header">	
		<a href="/"><img src="/css/img/logo.png" alt="logo" /></a>	
		<ul id="navigation">				
			<li><a href="<?php echo site_url('actualite') ?>">actualite</a></li>
                        <li><a href="<?php echo site_url($log) ?>" > <button type="button" class="btn btn-primary"><?php echo $log ?></button> </a></li>
		</ul>
	</div><!-­‐-­‐ end header -­‐-­‐>
