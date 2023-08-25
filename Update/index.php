<?php
$title="Update - Nulls Brawl Download";
$keywords= "";
$description="";
$currentURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
include("../header-2.php");
?>
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Update logs</h2>
						<div class="page_link">
							<a href="../">Home</a>
							<a href="<?php echo $currentURL ?>">Updates</a>
						</div>
						
					</div>
				</div>
            </div>
        </section>
<!--================End Home Banner Area =================-->

<h2 class="text-center mt-5 mb-5">Coming soon.</h2>







<?php
include("../footer-2.php");
?>