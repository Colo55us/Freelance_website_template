<!doctype html>
<html><!-- InstanceBegin template="/Templates/cart_temp.dwt.php" codeOutsideHTMLIsLocked="false" -->
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
<script type="text/javascript" src="javascript/jquery.livequery.js"></script><!--cart js-->
<link href="css/responsiveslides.css" type="text/css" rel="stylesheet" media="screen"><!--banner css-->
<link href="css/cart.css" rel="stylesheet" />
<script>  //for banner
  $(function() {
    $(".rslides").responsiveSlides(
	);
  });
</script>


<script type="text/javascript">

$(document).ready(function() {
	
	var Arrays=new Array();
	
	$('.add-to-cart-button').click(function(){
		
		var thisID 	  = $(this).parent().parent().attr('id').replace('detail-','');
		
		var itemname  = $(this).parent().find('.item_name').html();
		var itemprice = $(this).parent().find('.price').html();
		
		if(include(Arrays,thisID))
		{
			var price 	 = $('#each-'+thisID).children(".shopp-price").find('em').html();
			var quantity = $('#each-'+thisID).children(".shopp-quantity").html();
			quantity = parseInt(quantity)+parseInt(1);
			
			var total = parseInt(itemprice)*parseInt(quantity);
			
			$('#each-'+thisID).children(".shopp-price").find('em').html(total);
			$('#each-'+thisID).children(".shopp-quantity").html(quantity);
			
			var prev_charges = $('.cart-total span').html();
			prev_charges = parseInt(prev_charges)-parseInt(price);
			
			prev_charges = parseInt(prev_charges)+parseInt(total);
			$('.cart-total span').html(prev_charges);
			
			$('#total-hidden-charges').val(prev_charges);
		}
		else
		{
			Arrays.push(thisID);
			
			var prev_charges = $('.cart-total span').html();
			prev_charges = parseInt(prev_charges)+parseInt(itemprice);
			
			$('.cart-total span').html(prev_charges);
			$('#total-hidden-charges').val(prev_charges);
			
			var Height = $('#cart_wrapper').height();
			$('#cart_wrapper').css({height:Height+parseInt(45)});
			
			$('#cart_wrapper .cart-info').append('<div class="shopp" id="each-'+thisID+'"><div class="label">'+itemname+'</div><div class="shopp-price"> Rs-<em>'+itemprice+'</em></div><span class="shopp-quantity">1</span><img src="remove.png" class="remove" /><br class="all" /></div>');
			
		}
		
	});	
	
	$('.remove').livequery('click', function() {
		
		var deduct = $(this).parent().children(".shopp-price").find('em').html();
		var prev_charges = $('.cart-total span').html();
		
		var thisID = $(this).parent().attr('id').replace('each-','');
		
		var pos = getpos(Arrays,thisID);
		Arrays.splice(pos,1,"0")
		
		prev_charges = parseInt(prev_charges)-parseInt(deduct);
		$('.cart-total span').html(prev_charges);
		$('#total-hidden-charges').val(prev_charges);
		$(this).parent().remove();
		var element = document.getElementById("total-hidden-charges");
		 element.value = $('#total-hidden-charges').val();
        
		
	});	
	
	function total_cal() {
		
		var totalCharge = $('#total-hidden-charges').val();
		
		$('#cart_wrapper').html('Total Charges: Rs-'+totalCharge);
		 
		
		return false;
		
	}
	
	// this is for 2nd row's li offset from top. It means how much offset you want to give them with animation
	var single_li_offset 	= 200;
	var current_opened_box  = -1;
	
	$('#wrap li').click(function() {
	
		var thisID = $(this).attr('id');
		var $this  = $(this);
		
		var id = $('#wrap li').index($this);
		
		if(current_opened_box == id) // if user click a opened box li again you close the box and return back
		{
			$('#wrap .detail-view').slideUp('slow');
			return false;
		}
		$('#cart_wrapper').slideUp('slow');
		$('#wrap .detail-view').slideUp('slow');
		
		// save this id. so if user click a opened box li again you close the box.
		current_opened_box = id;
		
		var targetOffset = 0;
		
		// below conditions assumes that there are four li in one row and total rows are 4. How ever if you want to increase the rows you have to increase else-if conditions and if you want to increase li in one row, then you have to increment all value below. (if(id<=3)), if(id<=7) etc
		
		if(id<=3)
			targetOffset = 0;
		else if(id<=7)
			targetOffset = single_li_offset;
		else if(id<=11)
			targetOffset = single_li_offset*2;
		else if(id<=15)
			targetOffset = single_li_offset*3;
		
		$("html:not(:animated),body:not(:animated)").animate({scrollTop: targetOffset}, 800,function(){
			
			$('#wrap #detail-'+thisID).slideDown(500);
			return false;
		});
		
	});
	
	$('.close a').click(function() {
		
		$('#wrap .detail-view').slideUp('slow');
		
	});
	
	$('.closeCart').click(function() {
		
		$('#cart_wrapper').slideUp();
		
	});
	
	$('#show_cart').click(function() {
		
		$('#cart_wrapper').slideToggle('slow');
		
	});
	
});

function include(arr, obj) {
  for(var i=0; i<arr.length; i++) {
    if (arr[i] == obj) return true;
  }
}

function getpos(arr, obj) {
  for(var i=0; i<arr.length; i++) {
    if (arr[i] == obj) return i;
  }
}

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
                    <li><a href="embroidry-sarees.php">embroidery</a></li>
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
            	<li><? session_start(); $myuser = $_SESSION['login_user']; echo("hu");?> </li>
            </ul>
        </div>
      
      
	</div>
   
	<!-- InstanceBeginEditable name="content-cart" -->
      
      
	</div>
    
	
    
    
    
    <div>
   
    <div align="left" style="min-height:800px;">
	 <!--top cart starts-->
	<div id="cart_wrapper" align="center">
	
		<form action="amount.php" method="post" id="cart_form" name="cart_form">
		
			<div class="cart-info"></div>
			
			<div class="cart-total">
			
				<b>Total Charges:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> Rs<span>0</span>
				
				<input type="hidden" name="total-hidden-charges" id="total-hidden-charges" />
			</div>
			
			<button type="submit" >Proceed</button>
		
		</form>
	</div>
    <!--top carts end-->
    
	<div id="wrap" align="center">
		
		<a id="show_cart" href="javascript:void(0)">View Cart</a> <!--js:void(0) handles final cart-->
		
		<ul>
			<li id="1">
				<img src="images/lehngas/img1.jpg" class="items" height="150"alt="" />
				
				<br clear="all" />
				<div>White and red lehnga</div>
			</li>
			
			<li id="2">
				<img src="images/lehngas/img2.jpg" class="items" height="150" alt="" />
				
				<br clear="all" />
				<div>Pink lehnga</div>
			</li>
			
			<li id="3">
				<img src="images/lehngas/img3.jpg" class="items" height="150" alt="" />
				
				<br clear="all" />
				<div>sky blue lehnga</div>
			</li>
			<li id="4">
				<img src="images/lehngas/img4.jpg" class="items" height="150" alt="" />
				
				<br clear="all" />
				<div>Pink and golden lehnga</div>
			</li>
			
			<!-- Detail Boxes for above four li -->
			
			<div class="detail-view" id="detail-1">
			
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/lehngas/img1.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>white and red lehnga</label>
					<br clear="all" />
					
					<p>
						white and red lehnga perfect for summer collection
					
						<br clear="all" /><br clear="all" />
						Rs-<span class="price">650</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
				
			</div>
			<div class="detail-view" id="detail-2">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/lehngas/img2.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>pink lehnga</label>
					<br clear="all" />
					
					<p>
						Pink lehnga with beautiful work by hand
					
						<br clear="all" /><br clear="all" />
						Rs-<span class="price">900</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-3">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/lehngas/img3.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Sky blue lehnga</label>
					<br clear="all" />
					

					<p>
						Sky blue lehnga perfect for every ocassion.
					
						<br clear="all" /><br clear="all" />
						Rs-<span class="price">650</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-4">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/lehngas/img4.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Pink and golden lehnga</label>
					<br clear="all" />
					
					<p>
						Pink and golden lehnga with polka dots pattern.
					
						<br clear="all" /><br clear="all" />
						Rs-<span class="price">700</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			
			<!---->
			
			<li id="5">
				<img src="images/lehngas/img5.jpg" class="items" height="150" alt="" />
				
				<br clear="all" />
				<div>Green lehnga</div>
			</li>
			
			<li id="6">
				<img src="images/lehngas/img6.jpg" class="items" height="150" alt="" />
				
				<br clear="all" />
				<div>Black lehnga</div>
			</li>
			
			<li id="7">
				<img src="images/lehngas/img7.jpg" class="items" height="150" alt="" />
				
				<br clear="all" />
				<div>Blue and golden lehnga</div>
			</li>
			<li id="8">
				<img src="images/lehngas/img8.jpg" class="items" height="150" alt="" />
				
				<br clear="all" />
				<div>Blue lehnga</div>
			</li>
			
			<!-- Detail Boxes for above four li -->
			
			<div class="detail-view" id="detail-5">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/lehngas/img5.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Green lehnga</label>
					<br clear="all" />
					
					<p>
						Green lehnga with beautiful zari work
					
						<br clear="all" /><br clear="all" />
						Rs-<span class="price">900</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-6">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/lehngas/img6.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Black lehnga</label>
					<br clear="all" />
					
					<p>
						Black lehnga with beautiful pattern
					
						<br clear="all" /><br clear="all" />
						Rs-<span class="price">1000</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-7">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/lehngas/img7.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Blue and golden lehnga</label>
					<br clear="all" />
					
					<p>
						Blue and golden lehnga with full embroidered top jacket 
					
						<br clear="all" /><br clear="all" />
						Rs-<span class="price">1100</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-8">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/lehngas/img8.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Blue lehnga</label>
					<br clear="all" />
					
					<p>
							Blue lehnga with elegant design			
						<br clear="all" /><br clear="all" />
						Rs-<span class="price">1000</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			
			<!---->
			
			
			
			<br clear="all" />
		</ul>
		<br clear="all" />
	</div>
	
		

		
</div>
    
    </div>
    
    <!-- InstanceEndEditable -->
    
    
    
    
  
        <div id="footer-left">
        	
            <h1><u>QUESTIONS</u></h1>
            <ul>
            	<li><a href="faq.php">Help and support</a></li>
                <li><a href="deliveryreturn.php">Delivery and return</a></li>
                <li><a href="orderfabric.php">Order fabric samples</a></li>
                <li><a href="trackorder.php">Track order</a></li>
                <li><a href="termscondition.html">Terms and conditions</a></li>
            </ul>    
                
        </div>
        <div id="footer-right">
        	
            <ul><li><h2>Join us</h2></li>
            	<li><a href="https://www.facebook.com" target="_blank">
                <img src="images/icons/icon%20set%201/1486424773_facebook.jpg"></a></li>
            	
                <li><a href="https://www.instagram.com" target="_blank">
                <img src="images/icons/icon%20set%201/1486424781_instagram.jpg"></a></li>
                
                <li><a href="https://www.twitter.com" target="_blank">
                <img src="images/icons/icon%20set%201/1486424789_twitter.jpg"></a></li>
                
                <li><a href="https://plus.google.com/" target="_blank">
                <img src="images/icons/icon%20set%201/1486424808_google-plus.jpg"></a></li>
                
                <li><a href="https://www.linkdin.com" target="_blank">
                <img src="images/icons/icon%20set%201/1486424798_linkedin.jpg"></a></li>
            </ul>    
        </div>
          
</div>

</div>

</body>
<!-- InstanceEnd --></html>
