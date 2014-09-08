<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<script src="//code.jquery.com/jquery-1.11.1.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.js"></script>
<script src="<?php echo $rootPath;?>scripts/script.js" ></script>

<head>
<title>神侃斋</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="<?php echo $rootPath;?>styles/default.css" rel="stylesheet" type="text/css"/>
</head>

<body>
  <div class="main">
    <div class="main_resize">
      <!--header-->
      <div class="header">
        <div class="logo">	
	  <h1>神 侃 斋</h1>
		<p><?php require($rootPath.'navbar.php'); ?></p>
	
        </div>
      </div>
	

      <!--content-->
      <div class="content">
	<div class="loginbar">
	  <?php require($rootPath.'loginbar.php'); ?>
	</div>
        <div class="content_bg">
          <div class="searchbar">        	
	    <?php require($rootPath.'searchbar.php'); ?>
	  </div>
          <div class="content">
	  <?php require($pageContents); ?>  	  </div>
	
      	  <!--secondcontent-->
      	  <div class="extra">
        
            <div class="extra_resize">
              <div class="col c1">
		<?php require($rootPath.'extra/pauthor.php'); ?>
              </div>
              <div class="col c2">
		<?php require($rootPath.'extra/pkeyword.php'); ?>
              </div>
              <div class="col c3">
		<?php require($rootPath.'extra/psubject.php'); ?>
              </div>
              <div class="clr">
	      </div>
            </div>
      	  </div>
        </div>
        <!--footer-->
        <div class="footer">
          <div class="footer_resize">
	    <p>Developed by Xian Qiu<br/>
	    </p>
            <div class="clr"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
