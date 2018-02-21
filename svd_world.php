<?php 
$meta_tags = array('title' =>'Portfilio | SvdWorld' , 
'keywords'=>'web development, web design, branding, digital marketing, SEO, kochi, Kerala',
'description'=>'Sparcs is a Digital Agency which delivers high quality, reliable and affordable services to our customer globally.',
'no-index'=>true
);
include_once('header.php') ?>
<section id="portfolio-header" class="svd-bg">
<ul>
<li><img src="images/svd/svd-logo.png" alt="SvdWorld"></li>
<li><h1>Svd World</h1>
<p>Divine Word Missionaries is a Catholic missionary society that works among the poor, the neglected and the disadvantaged in more than 70 countries around the world.</p>

<p>Website design | Wordpress | Mobile Application| Search Engine Optimisation</p>
</li>
<div class="clear"></div>
</ul>
</section>
   



<section class="portfolio-slider">

<h1>Website</h1>

         <div id="cbp-fwslider" class="cbp-fwslider">
				<ul>
					<li><img src="images/svd/svd1.jpg" alt="Svd World"></li>
                    <li><img src="images/svd/svd2.jpg" alt="Svd World"></li>
                    <li><img src="images/svd/svd3.jpg" alt="Svd World"></li>
				</ul>
			</div>
            		
</section><!--portfolio-slider-->




<section id="portfolio-navigation">
<ul>
<li class="portfolio-prev"><a href="<?php echo $path ?>brook_dale" title="Previus Case Study Brook &amp; Dale"> &larr; Previous </a></li>
<li class="portfolio-next"><a href="<?php echo $path ?>usasecureloans" title="Next Case Study USASecureLoans"> Next &rarr;</a></li>
</ul>
<div class="clear"></div>
</section>
<?php include_once('footer.php') ?>