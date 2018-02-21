<?php
	$meta_tags=array(
			'title'			=> 'Sparcs Digital Agency | Digital Agency in Kochi, Kerala',
		'description'	=> 'Sparcs is a Digital Agency which delivers high quality, reliable and affordable services to our customer globally.',
		'keywords'=>'web development, web design, branding, digital marketing, SEO, kochi, Kerala',
		"no-index" => true,
		'no-follow' =>true,
		'no-archieve' =>true,

	);

	include_once("header.php");		
?>
<header id="header" class="index-header">
    <div>We are a fun mix of designers and strategists with a great passion for all things creative.
    <article>Have a project in mind? <a title="Get in touch" href="<?php echo $path ?>contact" data-text="Get in touch" class="button-hover">Get in touch</a></article>
</div>
    </header><!--header-->                           
                        
    <section id="infographics">
    <ul>
    <li>
    
    <img src="images/home-icon-1.png" width="100px">
    <h2>Brainstorm</h2> The first step would be to sit down and get to know you. We'll discuss goals and project objectives and any other relevant information.</li>
    
    <li>
   
     <img src="images/home-icon-2.png" width="100px">
    <h2>Plan</h2> With the information gathered from our brainstorm session, wireframes would be developed defining layout, interactions and content structure.</li>
    
    <li>
    
    <img src="images/home-icon-3.png" width="100px">
    <h2>Design</h2> Once the wireframes are finalized, detailed mock-ups of key pages will be designed to show the look and feel of your product.
    </li>
    
    <li class="last">
   
    <img src="images/home-icon-4.png" width="100px">
    <h2>Develop</h2> With the final creative concepts completed, the designs are then coded and transformed into a fully functional product.
    </li>
    </ul>
    <div class="clear"></div>
    </section> <!--infographics-->  

    <section id="client-logo">
     <div><span>past Clients</span>
        <h3>Sparcs has been honored to partner up with these clients.</h3>
    <a href="portfolio.html" title="See Our Portfolio">
    <img src="images/client-logo.png" alt="Leadpile, A4Add, Brook and Dale, SafeGuard, Shalom media, Shalom Media Club, Sophia Books, SVD World, Wordnet Productions, Sunny Diamonds, Tara, Genx Automation, One More Game, Handyman Kochi, " border="0">
    </a>
    </div>
    </section><!--client-logo-->    
    <?php include_once("footer.php"); ?>