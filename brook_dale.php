<?php 
$meta_tags = array('title' =>'Portfilio | Brook &amp;amp; Dale' , 
'keywords'=>'web development, web design, branding, digital marketing, SEO, kochi, Kerala',
'description'=>'Sparcs is a Digital Agency which delivers high quality, reliable and affordable services to our customer globally.',
'no-index'=>true
);
include_once('header.php') ?>
<section id="portfolio-header" class="brook-bg">
<ul>
<li><img src="images/brook/brook-logo.png" alt="Brook &amp; Dale"></li>
<li><h1>Brook &amp; Dale</h1>
<p>Brook & Dale Holidays Pvt. Ltd. is the most preferred tour operator in India since 2005. Formed with a vision to change the way their customers experience Holiday packages and tours, This group with its combined wealth of experience in the Hospitality industry has explored every possibility to give customers an experience.</p>

<p>Website design | Development | Search Engine Optimisation</p>
</li><div class="clear"></div>
</ul>
</section>
<section class="portfolio-slider">

<h1>Website Pages</h1> 

         <div id="cbp-fwslider" class="cbp-fwslider">
				<ul>
					<li><img src="images/brook/brook1.jpg" alt="Brook &amp; Dale"></li>
                    <li><img src="images/brook/brook2.jpg" alt="Brook &amp; Dale"></li>
                    <li><img src="images/brook/brook3.jpg" alt="Brook &amp; Dale"></li>
                    <li><img src="images/brook/brook4.jpg" alt="Brook &amp; Dale"></li>
				</ul>
			</div>
            		
</section><!--portfolio-slider-->


<section id="portfolio-navigation">
<ul>
<li class="portfolio-prev"><a href="<?php echo $path ?>sophia_books" title="Previus Case Study Sophia Books"> &larr; Previous </a></li>
<li class="portfolio-next"><a href="<?php echo $path ?>svd_world" title="Next Case Study Svd World"> Next &rarr;</a></li>
</ul>
<div class="clear"></div>
</section>
<?php include_once('footer.php') ?>