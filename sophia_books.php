<?php 
$meta_tags = array('title' =>'Portfilio | Sophia Books' , 
'keywords'=>'web development, web design, branding, digital marketing, SEO, kochi, Kerala',
'description'=>'Sparcs is a Digital Agency which delivers high quality, reliable and affordable services to our customer globally.',
'no-index'=>true
);
include_once('header.php') ?>
<section id="portfolio-header" class="sophia-bg">
<ul>
<li><img src="images/sophia/sophia-logo.png" alt="Sophia Books"></li>
<li><h1>Sophia Books</h1>
<p>Sophia Books is a complete book shop for those who take reading as a passion. Sophia aim a wholesome growth for such people - both spiritual and intellectual. To achieve this goal they are bringing a wide range of books published by themselves and other reputed publishers as well.</p>

<p>Website design | Web Development | Shopping cart | Search Engine Optimization</p>
</li>
<div class="clear"></div>
</ul>
</section>
<section class="portfolio-slider">

<h1>Website Pages</h1>

         <div id="cbp-fwslider" class="cbp-fwslider">
				<ul>
					<li><img src="images/sophia/sophiabooks1.jpg" alt="Sophia Books"></li>
                    <li><img src="images/sophia/sophiabooks2.jpg" alt="Sophia Books"></li>
                    <li><img src="images/sophia/sophiabooks3.jpg" alt="Sophia Books"></li>
				</ul>
			</div>
            		
</section><!--portfolio-slider-->


<section id="portfolio-navigation">
<ul>
<li class="portfolio-prev"><a href="<?php echo $path ?>leadpile" title="Previus Case Study Leadpile"> &larr; Previous </a></li>
<li class="portfolio-next"><a href="<?php echo $path ?>brook_dale" title="Next Case Study Brook &amp; Dale"> Next &rarr;</a></li>
</ul>
<div class="clear"></div>
</section>
<?php include_once('footer.php') ?>