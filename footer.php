	<section id="footer">


    <div id="footer-wrapper">
    <ul id="right" class="footer-colmn">
    <li><i class="icon-location"></i><br><strong>Kochi</strong></li>
    <li><address>
    1st floor, Thachil Tower<br>Pottakuzhi Jn, Kaloor, Kochi 682017.</address></li>
    </ul>

    <ul id="right" class="footer-colmn">
    <li><i class="icon-location"></i><br><strong>Bangalore</strong></li>
    <li><address>#725, 21st Main Road,<br> 2nd Phase JP Nagar, Banglore 560078.</address>
    </ul>

    <ul id="right" class="footer-colmn">
    <li><i class="icon-location"></i><br><strong>New South Wales</strong></li>
    <li><address>D204/88 Bay street, Botany<br> New South Wales 2019, Australia.</address>
    </ul>

    
    <div style="clear:both;"></div>
    </div>
    </section><!--footer-->
    
    <p id="back-top"><a class="page-top-link" href="#Top" title="To Top"><i class="icon-up-open-big"></i></a></p>
    
    <footer class="footer">
    <p>
    <a href="<?php echo $path ?>index" title="Home">Home</a>
    <a <?php echo(preg_match("/portfolio.php/", $_SERVER['SCRIPT_FILENAME']) ? 'class="active"':''); ?> href="<?php echo $path ?>portfolio" title="Portfolio">Portfolio</a>
    <a <?php echo(preg_match("/about.php/", $_SERVER['SCRIPT_FILENAME']) ? 'class="active"':''); ?> href="<?php echo $path ?>about" title="About">About</a>
    <a <?php echo(preg_match("/services.php/",$_SERVER['SCRIPT_FILENAME']) ? 'class="active"':''); ?> href="<?php echo $path ?>services" title="Services">Services</a>
    <a <?php echo(preg_match("/contact.php/",$_SERVER['SCRIPT_FILENAME']) ? 'class="active"':''); ?> href="<?php echo $path ?>contact" title="Contact">Contact</a>
    <a <?php echo(preg_match("/digital-marketing-course.php/",$_SERVER['SCRIPT_FILENAME']) ? 'class="active"':''); ?> href="<?php echo $path ?>digital-marketing-course" title="Contact">Digital Marketing Course</a>
    </p>    
    Copyright &copy; 2014 Sparcs. All rights reserved.    
    <p class="social">
   <a href="https://www.facebook.com/sparcsdigital" target="_blank" title="Add us on facebook"><i class="icon-facebook"></i></a>
<a href="https://twitter.com/sparcsdigital" title="Follow us on Twitter" target="_blank"><i class="icon-twitter"></i></a>
<a href="https://www.linkedin.com/company/sparcs-digital-agency" target="_blank" title="View our LinkedIn Profile"><i class="icon-linkedin"></i></a>
    </p>   
    <p class="partner">Our Partner <br><a href="https://wiredrive.com" target="_blank" title="One collaboration tool to manage all your media assets | Wiredrive"><img src="https://wiredrive.com/assets/img/wd_logo-w-@2x.png" width="100px;" style="opacity: 0.5;" alt="Wiredrive"></a></p> </footer><!--footer-->

</body>
</html>