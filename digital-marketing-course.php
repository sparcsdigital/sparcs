<?php 
$meta_tags = array(
	 'title' => 'Digital Marketing Course | Web Design | Creative Agency',
	 'keywords' => 'digital branding agency, seo, mobile app development, live streaming, content development kochi, Kerala',
	 'description' => 'Sparcs Digital Agency is specialized in Creative Campaigns, Web Design & Development, Mobile App Development, Branding and Digital Marketing.',
	 'no-index'=>true		
);
include_once('header.php')
?>
  

<section class="section1">
			<div class="container">
			<div class="row">
			<div class="col-md-8">
				<div class="heading">
				<h4>For an exciting career in</h4>
				<h1><strong>Digital Marketing</strong></h1>
				<h4>Admission Opens Now <br> Limited seats only. </h4>
				</div>
			</div>
			<div class="col-md-4">
					<div class="row justify-content-center register">
					<h2><strong>Register Now</strong></h2>
					<div id="result"></div>
					<div class="col-md-12" id="contact_form" style="border:none;">
					<input type="hidden" name="subject" value="Digital Marketing Enquiry">
					<input type="text" placeholder="Full Name" class="nom" name="name">
					<input type="text" placeholder="Email Address" class="mail" name="email">
					<input type="text" placeholder="Phone" class="phone" name="phone">
					<textarea placeholder="Comments" cols="40" rows="20" class="msg" name="message"></textarea>
					</div>
					<div class="col-md-4"><button class="btn btn-success btn-lg submit_btn"  id="submit_btn" >Submit</button></div><div style="display:none; float:right; margin:5px;" id="dvloader"><img src="images/ajax-loader.gif" /></div>
					<div class="clear"></div>
					</div>
			</div>
		</div>
	
		</div>
	</section>

	<section class="section2">
		<div class="container">
			<div class="sec2-content">
				<h1><strong>Digital Marketing Training in Cochin</strong></h1>
				<p> 
					For an exciting career in Digital Marketing do apply for a 2 month course with a Digital Agency and with an option for a 1 month internship program with hands-on training with live projects. Apply now for knowing course start date, fee and other details.<br>
					<strong>Last Date for applying : 02 Mar 2018</strong>
				</p>
			</div>
				<div class="row section2-row">
					<div class="col-md-4">
						<div class="row cols">
							<div class="col-md-3">
								<img src="images/s.png">
							</div>
							<div class="col-md-9">
								<h3>Starts On</h3><h6>March, 2018</h6>						
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="row cols">
							<div class="col-md-3">
								<img src="images/duration.png">
							</div>
							<div class="col-md-9">

								<h3>Duration</h3><h6>2 months</h6>					
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="row cols">
							<div class="col-md-3">
								<img src="images/timing.png">
							</div>
							<div class="col-md-9">								
								<h3>Timings</h3><h6>10 am - 1.30 Pm	</h6>					
							</div>
						</div>
					</div>					
				</div>



				
				<div class="sec2-content2">
					<h1><strong>Why Learn Digital Marketing?</strong></h1>
						<p>
							Digital marketing is one of the world’s fastest growing disciplines, and this course will raise your value in the marketplace and prepare you for a career in digital marketing.This course will help you  to master in essential disciplines in digital marketing such as search engine optimization(SEO),social media, pay-per-click (PPC), conversion optimization, web analytics, content marketing, email marketing etc.
						</p>
				</div>
				<div class="row secRow">
					
					<div class="col-md-4 leftbordr">
						<!-- <div class="row"> -->
						<h2>25<span>%</span></h2>
						<div class="yLearnDigi">
							Of the world economy will be digital by 2020.
						</div>
						<p>source: digital economy value index</p>
					<!-- </div> -->
					</div>

					<div class="col-md-4 leftbordr">
						<h2>40<span>%</span></h2>
						<div class="yLearnDigi">
							Year-on-year growth for digital marketing industry compared to 5-6% growth in other industries.
						</div >
						<p>source: yourstory & kstart</p>
					</div>

					<div class="col-md-4">
						<h2>5<span>Mn</span></h2>
						<div class="yLearnDigi">
							Net loss of jobs by 2020 due to emerging technologies.
						</div>
						<p>source: world economy forum</p>
					</div>


					<div class="col-md-12 ">
						<div class="row justify-content-center apply_now">					
					<button class="btn btn-lg btn-success" id="apply_now">Apply Now</button>
					</div>
				</div>

					
				</div>
				
</div>
	</section>

<section class="section3">
	<div class="container">
		<h1>Learning Journey</h1>
		<div class="row justify-content-center">
		<div class="col-md-5 col-sm-12">
			<p><span class="modules">Module 1:</span> Digital Marketing Fundamentals</p>		
			<p><span class="modules">Module 2:</span> Search Engine Optimization (SEO)</p>
			<p><span class="modules">Module 3:</span> Website Building and Structuring</p>
			<p><span class="modules">Module 4:</span> Google AdWords & PPC Advertising</p>
			<p><span class="modules">Module 5:</span> Google Analytics & Webmaster Tools</p>
			<p><span class="modules">Module 6:</span> Facebook Marketing</p>
		</div>
		<div class="col-md-5 col-sm-12">
			<p><span class="modules">Module 7:</span> Video & Universal App Campaign</p>
			<p><span class="modules">Module 8:</span> Inbound Marketing</p>
			<p><span class="modules">Module 9:</span> Content Marketing</p>
			<p><span class="modules">Module 10:</span>  Email Marketing</p>
			<p><span class="modules">Module 11:</span>  LinkedIn & Twitter Marketing</p>
			<p><span class="modules">Module 12:</span>  Case Studies & Practical Assignments</p>
		</div>
	</div>
</div>
</section>


    <script type="text/javascript">
    $(document).ready(function(){   
        $("#apply_now").click(function(){
            //alert("click");
             $('html,body').animate({
        scrollTop: $(".section1").offset().top},
        'slow');
        });
    });
</script>

<?php include_once('footer.php') ?>