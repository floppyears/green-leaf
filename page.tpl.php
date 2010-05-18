<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php print $head_title; ?></title>
<?php print $styles; ?>
<?php print $scripts; ?>
</head>

<body>
<div id="wrap">
    <div id="content">
      <div class="header"> 
        <h1><?php print $site_name;?></h1>
        <?php print $header; ?>
        <!--<img src="<?php print $logo; ?>" alt="green leaf logo" />-->
      </div>
      <div class="breadcrumbs"><?php print $breadcrumb; ?></div>
      <div id="right">
        <?php print $right;?>
      </div>
      <div class="middle">
        <h2><?php print $title; ?></h2>
        <?php print $content; ?>
      </div>
      
        <div id="clear">Content for  id "clear" Goes Here</div>
      
  </div>
  <div id="bottom"></div>
</div>
<div id="footer"><?php print $footer; ?></div>
</body>
</html>
