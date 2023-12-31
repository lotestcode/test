<?php
        $title="Contact us - Nulls Brawl Download";
        $keywords="Contact, Contact us, nulls brawl Contact";
		$description="Contact us - Nulls Brawl Download";
		$currentURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        include('../header-2.php');
?>
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Contact</h2>
						<div class="page_link">
							<a href="../">Home</a>
							<a href="<?php echo $currentURL ?>">Contact</a>
						</div>
						
					</div>
				</div>
            </div>
        </section>
<!--================End Home Banner Area =================-->


<div class="container">
	<div class="feature_item">
		<h1>CONTACT US</h1>
	<div>
            <form class="row contact_form" action="../contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                    </div>
                </div>
                <div class="col-md-12 text-right">
                    <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                </div>
            </form>
			<div class="info_item">
                <i class="lnr lnr-envelope"></i>
                <h6><a href="mailto:info@nulls-brawl-download.com">info@nulls-brawl-download.com</a></h6>
                <p>Send us your query anytime!</p>
            </div>
        </div>
	</div>
</div>




<?php
include('../footer-2.php');
?>