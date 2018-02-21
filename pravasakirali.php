<?php 
$meta_tags = array('title' =>'Portfilio | Pravasakirali' , 
'keywords'=>'web development, web design, branding, digital marketing, SEO, kochi, Kerala',
'description'=>'Sparcs is a Digital Agency which delivers high quality, reliable and affordable services to our customer globally.',
'no-index'=>true
);
include_once('header.php') ?>
<section id="portfolio-header" class="pravasakirali-bg">
<ul>
<li><img src="images/pravasakirali/pravasakirali-logo.png" alt="Pravasakirali"></li>
<li><h1>Pravasa kairali</h1>
<p>Malayalam News Portal for Latest and Sensational Ireland News.</p>

<p>Website design | Development | Search Engine Optimisation | Social Media Marketing</p>
</li>
</ul>
<div class="clear"></div>
</section>
   



<section class="portfolio-slider">

<h1>Website Pages</h1> 

         <div id="cbp-fwslider" class="cbp-fwslider">
				<ul>
					<li><img src="images/pravasakirali/pravasakirali1.jpg" alt="Pravasakirali"></li>
                    <li><img src="images/pravasakirali/pravasakirali2.jpg" alt="Pravasakirali"></li>
                    <li><img src="images/pravasakirali/pravasakirali3.jpg" alt="Pravasakirali"></li>
				</ul>
			</div>
            		
</section><!--portfolio-slider-->



<section id="portfolio-navigation">
<ul>
<li class="portfolio-prev"><a href="<?php echo $path ?>loansonclick" title="Previus Case Study LoansOnClick"> &larr; Previous </a></li>
<li class="portfolio-next"><a href="<?php echo $path ?>a4add" title="Next Case Study A4add"> Next &rarr;</a></li>
</ul>
<div class="clear"></div>
</section>

<?php include_once('footer.php') ?>