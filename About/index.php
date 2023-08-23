<?php
        include('../header-2.php');
        $currentURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>About</h2>
						<div class="page_link">
							<a href="../">Home</a>
							<a href="<?php echo $currentURL ?>">About</a>
						</div>
						
					</div>
				</div>
            </div>
        </section>
<!--================End Home Banner Area =================-->


<div class="container mt-5 mb-5">
	<div class="feature_item">
	<h2>About US</h2>
	<p class="">Nulls-brawl-download.com one of The Best platforms of Mod Android APK Collection, We share the most popular and latest Modded Android Apps and Games for Free Download.
There are many Android Users who wanted to use Android apps with some extra modifications, So we are helping them to find out best Modded Android apps. We never host any files or Apps to this site, All downloadable files are hosted to third-party sites, we just provide useful links.
Note: This Blog is only for entertainment purpose to Android user. if you find any of content that hearing you then please let us know by contacting us.</p>
	</div>
	
	</div>





<?php
include('../footer-2.php');
?>