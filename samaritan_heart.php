<?php 
$meta_tags = array('title' =>'Portfilio | Samaritan Heart Institute' , 
'keywords'=>'web development, web design, branding, digital marketing, SEO, kochi, Kerala',
'description'=>'Sparcs is a Digital Agency which delivers high quality, reliable and affordable services to our customer globally.',
'no-index'=>true
);
include_once('header.php');
 ?>
<section id="portfolio-header" class="samaritan-heart-bg">
<ul>
<li><img src="images/samaritan-heart/samaritan-heart-logo.png" alt="Samaritan Heart Institute"></li>
<li><h1><a href="http://samaritanheart.in/" title="Samaritan Heart Institute" target="_blank">Samaritan Heart Institute</a></h1>
<p>Samaritan heart Institute has been conceived as a distinctive and integrated healthcare destination. A dream cherished by a group of well experienced, energetic and highly patient friendly doctors.</p>

<p>Website design | Wordpress | Forms | Responsive | SEO</p>
</li><div class="clear"></div>
</ul>

</section>
   



<section class="portfolio-slider">

<h1>Website Pages</h1> 

         <div id="cbp-fwslider" class="cbp-fwslider">
				<ul>
					<li><img src="images/samaritan-heart/samaritan-heart1.jpg" alt="The Angels Group"></li>
                     <li><img src="images/samaritan-heart/samaritan-heart2.jpg" alt="The Angels Group"></li>
                      <li><img src="images/samaritan-heart/samaritan-heart3.jpg" alt="The Angels Group"></li>
                        <li><img src="images/samaritan-heart/samaritan-heart4.jpg" alt="The Angels Group"></li>
                         <li><img src="images/samaritan-heart/samaritan-heart5.jpg" alt="The Angels Group"></li>
                                                  
				</ul>
			</div>
            		
</section><!--portfolio-slider-->







<section id="portfolio-navigation">
<ul>
<li class="portfolio-prev"><a href="<?php echo $path ?>buyercentric" title="Previus Case Study BuyerCentric"> &larr; Previus </a></li>
<li class="portfolio-middle"><a href="<?php echo $path ?>portfolio" title="Portfolio Main Page"> Portfolio </a></li>
<li class="portfolio-next"><a href="<?php echo $path ?>a4add" title="Next Case Study A4Add"> Next &rarr;</a></li>
</ul>
<div class="clear"></div>
</section>

<?php include_once('footer.php') ?>