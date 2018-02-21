<?php include_once('config.php')?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http_equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name=viewport content="width=device-width, initial-scale=1">
<title><?php echo $meta_tags['title']; ?></title>
<meta name="keywords" content="<?php echo $meta_tags['keywords']; ?>">
<meta name="description" content="<?php echo $meta_tags['description']; ?>">
<meta property="og:title" content="Sparcs, an interactive digital agency."/>
<meta property="og:type" content="company"/>
<meta property="og:url" content="http://www.Sparcs.com"/>
<meta property="og:image" content="http://www.Sparcs.com/images/logo.png"/>
<meta property="og:site_name" content="Sparcs"/>
<meta property="fb:admins" content="1301551246"/>
<?php if ($meta_tags['no-index'] ): ?> 
	<meta name="robots" content="noindex">
	<meta name="robots" content="nofollow">
	<meta name="robots" content="noarchive">
<?php endif; ?>
<link rel="icon" type="image/ico" href="images/favicon.ico"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,800' rel='stylesheet' type='text/css'>
<link href="script/format.css" rel="stylesheet" type="text/css">
<!-- <link href="script/format-old.css" rel="stylesheet" type="text/css"> -->
<link href="script/responsive.css" rel="stylesheet" type="text/css">    
<link rel="stylesheet" href="script/fontello.css">    
<!--[if IE 7]><link rel="stylesheet" href="script/fontello-ie7.css"><![endif]-->    
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<?php if ($digital_marketing): ?> 

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php endif; ?>

<?php if (!$digital_marketing): ?> 
<script src="script/jquery.tools.min.js"></script>
<script src="script/jquery.nicescroll.min.js"></script>
<script src="script/modernizr.custom.js"></script>
<script src="script/jquery.cbpFWSlider.min.js"></script> 
<?php endif; ?>





<script>
//main page scroll bar
	jQuery(document).ready(
  function() {  
    jQuery("html").niceScroll({cursorcolor:"#222"});
  }
);

//resizing top bar
$(document).on("scroll",function(){
		if($(document).scrollTop()>40){ 
		$("#top").removeClass("large").addClass("small");
			}
	else{
		$("#top").removeClass("small").addClass("large");
		   }
  });

//to Top scroll
$(document).ready(function(){
	// hide #back-top first
	$("#back-top").hide();	
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});
		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});
});
//portfolio slider  
$( function() {
	$( '#cbp-fwslider' ).cbpFWSlider();
} );

//portfolio slider  
$( function() {
	$( '#cbp-fwslider-1' ).cbpFWSlider();
} );

</script>
<?php if ($contact || $digital_marketing): ?> 
	<script type="text/javascript">
$(document).ready(function() {
    $("#submit_btn").click(function() { 
        //get input field values
        var subject         = $('input[name=subject]').val(); 
        var user_name       = $('input[name=name]').val(); 
        var user_email      = $('input[name=email]').val();
        var user_phone      = $('input[name=phone]').val();
        var user_message    = $('textarea[name=message]').val();
		
		
        
        //simple validation at client's end
        //we simply change border color to red if empty field using .css()
        var proceed = true;
        if(user_name==""){ 
            $('input[name=name]').css('border-color','red'); 
            proceed = false;
        }
        if(user_email==""){ 
            $('input[name=email]').css('border-color','red'); 
            proceed = false;
        }
        if(user_phone=="") {    
            $('input[name=phone]').css('border-color','red'); 
            proceed = false;
        }
        /*if(user_message=="") {  
            $('textarea[name=message]').css('border-color','red'); 
            proceed = false;
        }*/

        //everything looks good! proceed...
        if(proceed) 
        {
            //data to be sent to server
            post_data = {'subject':subject,'userName':user_name, 'userEmail':user_email, 'userPhone':user_phone, 'userMessage':user_message};
            
			//Ajax loading gif
			$("#dvloader").show();
			
            //Ajax post data to server
            $.post('contact_me', post_data, function(response){ 
			
			$("#dvloader").hide(); 

                //load json data from server and output message     
				if(response.type == 'error')
				{
					output = '<div class="error">'+response.text+'</div>';
				}else{
				    output = '<div class="success">'+response.text+'</div>';
					
					//reset values in all input fields
					$('#contact_form input').val(''); 
					$('#contact_form textarea').val(''); 
				}
				
				$("#result").hide().html(output).slideDown();
            }, 'json');
			
        }
    });
    
    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form input, #contact_form textarea").keyup(function() { 
        $("#contact_form input, #contact_form textarea").css('border-color',''); 
        $("#result").slideUp();
    });
    return false;
});
</script> 
<?php endif; ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P2FTJFB');</script>
<!-- End Google Tag Manager -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-24740586-7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-24740586-7');
</script>

</head> 
<body>
<!-- <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-24740586-4', 'Sparcs.com');
  ga('send', 'pageview');
</script> -->
      <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P2FTJFB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
        
    <section id="top" class="large">
    <div>
    <h1><a <?php echo (preg_match("/index.php/", $_SERVER['SCRIPT_FILENAME']) ? 'class="active"' : '') ?> href="<?php echo $path; ?>"title="Sparcs, an interactive digital agency.">Sparcs</a></h1>

     <?php if ($digital_marketing): ?> 
        <h2>Call : +91 88 48 78 47 32</h2>
    <?php endif; ?>

    <?php if (!$digital_marketing): ?> 
    <nav class="main-nav">
    <ul>
    <li class="current"><a href="" title="MENU">MENU</a></li>
    <li>
        <a <?php echo (preg_match("/portfolio.php/",$_SERVER['SCRIPT_FILENAME']) ? 'class="active"': '');?> href="<?php echo $path; ?>portfolio" title="Portfolio">Portfolio</a>
    </li>
    <li>
        <a  <?php echo (preg_match("/about.php/", $_SERVER['SCRIPT_FILENAME']) ? 'class="active"' : ''); ?> href="<?php echo $path; ?>about" title="About">About</a>
    </li>
    <li><a <?php echo(preg_match("/services.php/", $_SERVER['SCRIPT_FILENAME']) ? 'class="active"' : ''); ?> href="<?php echo $path; ?>services" title="Services">Services</a></li>
    <li><a <?php echo(preg_match("/contact.php/", $_SERVER['SCRIPT_FILENAME']) ? 'class="active"' : ''); ?> href="<?php echo $path; ?>contact" title="Contact">Contact</a></li>
    </ul>
    </nav>
    <?php endif; ?>

    </div>
    </section><!--top-->
              
    

    