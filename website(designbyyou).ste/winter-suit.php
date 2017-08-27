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
	
		<form action="amount.php" id="cart_form" name="cart_form" method="post">
		
			<div class="cart-info"></div>
			
			<div class="cart-total">
			
				<b>Total Charges:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> Rs-<span>0</span>
				
				<input type="hidden" name="total-hidden-charges" id="total-hidden-charges" value="0" />
			</div>
			
			<button type="submit">Proceed</button>
		
		</form>
	</div>
    <!--top carts end-->
    
	<div id="wrap" align="center">
		
		<a id="show_cart" href="javascript:void(0)">View Cart</a> <!--js:void(0) handles final cart-->
		
		<ul>
			<li id="1">
				<img src="images/winter suit/img1.jpg" class="items" height="150"alt="" />
				
				<br clear="all" />
				<div>Designer pink suit</div>
			</li>
			
			<li id="2">
				<img src="images/winter suit/img2.jpg" class="items" height="150" alt="" />
				
				<br clear="all" />
				<div>Designer anarkali suit</div>
			</li>
			
			<li id="3">
				<img src="images/winter suit/img3.jpg" class="items" height="150" alt="" />
				
				<br clear="all" />
				<div>Beautiful magenta suit</div>
			</li>
			<li id="4">
				<img src="images/winter suit/img4.jpg" class="items" height="150" alt="" />
				
				<br clear="all" />
				<div>Dark grey suit</div>
			</li>
			
			<!-- Detail Boxes for above four li -->
			
			<div class="detail-view" id="detail-1">
			
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/winter suit/img1.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Designer pink suit</label>
					<br clear="all" />
					
					<p>
						Designer pink suit perfect for summer collection
					
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
				
				<img src="images/winter suit/img2.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Designer anarkali suit</label>
					<br clear="all" />
					
					<p>
						Designer anarkali suit with beautiful work by hand
					
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
				
				<img src="images/winter suit/img3.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Beautiful magenta suit</label>
					<br clear="all" />
					

					<p>
						Beautiful magenta suit perfect for every ocassion.
					
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
				
				<img src="images/winter suit/img4.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Dark grey suit</label>
					<br clear="all" />
					
					<p>
						Dark grey suit with beautiful dots pattern.
					
						<br clear="all" /><br clear="all" />
						Rs-<span class="price">700</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			
			<!---->
			
			<li id="5">
				<img src="images/winter suit/img5.jpg" class="items" height="150" alt="" />
				
				<br clear="all" />
				<div>Purple and creme suit</div>
			</li>
			
			<li id="6">
				<img src="images/winter suit/img6.jpg" class="items" height="150" alt="" />
				
				<br clear="all" />
				<div>bridal golden suit</div>
			</li>
			
			<li id="7">
				<img src="images/winter suit/img7.jpg" class="items" height="150" alt="" />
				
				<br clear="all" />
				<div>orange suit with jacket</div>
			</li>
			<li id="8">
				<img src="images/winter suit/img8.jpg" class="items" height="150" alt="" />
				
				<br clear="all" />
				<div>Long olive color suit</div>
			</li>
			
			<!-- Detail Boxes for above four li -->
			
			<div class="detail-view" id="detail-5">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/winter suit/img5.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Purple and creme suit</label>
					<br clear="all" />
					
					<p>
						Purple and creme suit with beautiful zari work
					
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
				
				<img src="images/winter suit/img6.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Bridal golden suit</label>
					<br clear="all" />
					
					<p>
						Bridal golden suit with beautiful pattern
					
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
				
				<img src="images/winter suit/img7.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>orange suit with jacket</label>
					<br clear="all" />
					
					<p>
						orange suit with full embroidered top jacket 
					
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
				
				<img src="images/winter suit/img8.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Long olive Suit</label>
					<br clear="all" />
					
					<p>
							Long olive Suit with elegant design			
						<br clear="all" /><br clear="all" />
						Rs-<span class="price">1000</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			
			<!---->
			
			<li id="9">
				<img src="images/winter suit/img9.jpg" class="items" height="150" alt="" />
				
				<br clear="all" />
				<div><span class="name">pink suit</span><span class="price"></span></div>
			</li>
			
			<li id="10">
				<img src="images/winter suit/img10.jpg" class="items" height="150" alt="" />
				
				<br clear="all" />
				<div><span class="name">Embroidered green suit </span> </div>
			</li>
			
			<li id="11">
				<img src="images/winter suit/img11.jpg" class="items" height="150" alt="" />
				
				<br clear="all" />
				<div>mustard color suit</div>
			</li>
			
			<li id="12">
				<img src="images/winter suit/img12.jpg" class="items" height="150" alt="" />
				
				<br clear="all" />
				<div><span class="name">multicolor magenta suit</span> Shirt </div>
			</li>
			
			<!-- Detail Boxes for above four li -->
			

			<div class="detail-view" id="detail-9">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/winter suit/img9.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>pink Suit</label>
					<br clear="all" />
					
					<p>
						pink suit with elegant and sober design
					
						<br clear="all" /><br clear="all" />
						Rs<span class="price">800</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-10">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/winter suit/img10.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Embroidered green suit</label>
					<br clear="all" />
					
					<p>
						Embroidered green suit perfect for every occasion
					
						<br clear="all" /><br clear="all" />
						Rs-<span class="price">1100</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-11">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/winter suit/img11.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>mustard color suit</label>
					<br clear="all" />
					
					<p>
						mustard color suit with beautiful pattern
					
						<br clear="all" /><br clear="all" />
						Rs<span class="price">750</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-12">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/winter suit/img12.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>multicolor magenta suit</label>
					<br clear="all" />
					
					<p>
						multicolor magenta suit with all beautiful hand work
					
						<br clear="all" /><br clear="all" />
						Rs-<span class="price">900</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			
			<!---->
			
			<li id="13">
				<img src="images/winter suit/img13.jpg" class="items" height="150" alt="" />
				
				<br clear="all" />
				<div><span class="name">multicolor white suit</span></div>
			</li>
			
			<li id="14">
				<img src="images/winter suit/img14.jpg" class="items" height="150" alt="" />
				
				<br clear="all" />
				<div><span class="name">flower pattern suit </span></div>
			</li>
			
			<li id="15">
				<img src="images/winter suit/img15.jpg" class="items" height="150" alt="" />
				
				<br clear="all" />
				<div><span class="name">multicolor suit</span></div>
			</li>
			
			<li id="16">
				<img src="images/winter suit/img16.jpg" class="items" height="150" alt="" />
				
				<br clear="all" />
				<div><span class="name">Ivory White suit</span></div>
			</li>
			
			<!-- Detail Boxes for above four li -->
			
			<div class="detail-view" id="detail-13">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/winter suit/img13.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>white multicolor suit</label>
					<br clear="all" />
					
					<p>
						white multicolor suit with net and zari work. 
					
						<br clear="all" /><br clear="all" />
						Rs-<span class="price">950</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-14">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/winter suit/img14.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>flower pattern suit</label>
					<br clear="all" />
					
					<p>
						flower pattern suit with traditional touch
					
						<br clear="all" /><br clear="all" />
						Rs-<span class="price">1000</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-15">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/winter suit/img15.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>multicolor suit</label>
					<br clear="all" />
					
					<p>
						multicolor suit with zari work at top
					
						<br clear="all" /><br clear="all" />
						Rs-<span class="price">1100</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-16">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/winter suit/img16.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Ivory white suit</label>
					<br clear="all" />
					
					<p>
						Ivory white suit perfect for every occassion
					
						<br clear="all" /><br clear="all" />
						Rs-<span class="price">1200</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			
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
