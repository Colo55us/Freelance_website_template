<!doctype html>
<html><!-- InstanceBegin template="/Templates/main1.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>DesignByYou-Now everyone will be a fashion designer</title>
<!-- InstanceEndEditable -->
<meta name="viewport" content="width=device-width , initial-scale=1.0">
<link href="css/index.css" type="text/css" rel="stylesheet" media="screen"><!-- stylesheet for basic template-->
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"><!--fonts-->
<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet"><!--fonts-->
<link href="javascript/jquery.js" type="text/javascript" ><!--jquery plugin-->
<link href="css/menu.css" type="text/css" rel="stylesheet" media="screen"><!--navigation menu css-->
<script src="javascript/topnav.js"></script><!--template navigation js-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="javascript/responsiveslides.min.js"></script><!--banner js-->
<link href="css/responsiveslides.css" type="text/css" rel="stylesheet" media="screen"><!--banner css-->
<script>  //for banner
  $(function() {
    $(".rslides").responsiveSlides(
	);
  });
</script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div id="wrapper">
<div id="top-logo">

		<p><a href="index1.php"><img src="images/logo.fw.png" width="409" height="69" class="logo-img"></a></p>
  <div id="top-right" class="linkprop">
        	<ul>
				<li><a href="howitworks.php"> how it works</a></li>
				<li><a href="whyus.php">why us?</a></li>
				<li><a href="faq.php">FAQ</a></li>
			</ul>
		</div>
</div>

 	
	<div id="top-nav">
    	<div id="top-nav-left">
			<ul id="main-menu">
			  <li class="parent"><a href="#">ladies suits</a>
              	<ul class="sub-menu">
                	<li><a href="summer-suit.php">summer wear</a></li>
                    <li><a href="winter-suit.php">winter wear</a></li>
                    <li><a href="sleeveless.php">sleeveless suits</a></li>
                    <li><a href="winter-suit.php">full-sleeve suits</a></li>
                </ul>
              </li> 
			  <li class="parent"><a href="#">sarees</a>
              	<ul class="sub-menu">
                	<li><a href="printed-sarees.php">printed</a></li>
                    <li><a href="embroidery-sarees.php">embroidery</a></li>
                    <li><a href="zari-sarees.php">Zari work</a></li>
                </ul>
              </li>
              <li class="parent"><a href="#">others</a>
              	<ul class="sub-menu">
                	<li><a href="gowns.php">wedding gowns</a></li>
                    <li><a href="lehngas.php">lehngas</a></li>
                    <li><a href="#">skirts</a></li>
                </ul>
              </li>
              
			  <li><a href="contact.php">contact</a></li>
			  <li><a href="about.php">about</a></li>
			</ul>
   	  </div>
      <div id="top-nav-right">
        	<ul id="main-menu">
            	<li><?php session_start(); echo ($_SESSION['login_user']); ?></li>
             <li><?php if(isset($_SESSION['login_user'])){ ?> <a href="logout.php"><?php echo("logout");} ?></a></li>
            </ul>
        </div>
  
    	
	</div>
    
	 <!-- InstanceBeginEditable name="content" -->6
    
	</div>
    
	
   
        <!-- InstanceEndEditable -->
        <div id="footer-left">
        	
            <h1><u>QUESTIONS</u></h1>
            <ul>
            	<li><a href="faq.php">Help and contact</a></li>
                <li><a href="deliveryreturn.php">Delivery and return</a></li>
                <li><a href="orderfabric.php">Order fabric samples</a></li>
                <li><a href="trackorder.php">Track order</a></li>
                <li><a href="termscondition.php">Terms and conditions</a></li>
            </ul>    
                
        </div>
        <div id="footer-right">
        	
            <ul><li><h2>Join us</h2></li>
            <li><a href="https://www.facebook.com" target="_blank">
                <img src="images/icons/icon set 1/1486424773_facebook.jpg"></a></li>
            	
                <li><a href="https://www.instagram.com" target="_blank">
                <img src="images/icons/icon set 1/1486424781_instagram.jpg"></a></li>
                
                <li><a href="https://www.twitter.com" target="_blank">
                <img src="images/icons/icon set 1/1486424789_twitter.jpg"></a></li>
                
                <li><a href="https://plus.google.com/" target="_blank">
                <img src="images/icons/icon set 1/1486424808_google-plus.jpg"></a></li>
                
                <li><a href="https://www.linkdin.com" target="_blank">
                <img src="images/icons/icon set 1/1486424798_linkedin.jpg"></a></li>
            </ul>    
        </div>
          
</div>

</div>

</body>
<!-- InstanceEnd --></html>
