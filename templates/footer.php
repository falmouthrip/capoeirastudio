<!-- Footer -->
<footer class="footer">
        <!-- slider animation -->
        <ul class="keyframe-footer-fader">
                <li></li>
                <li></li>
                <li></li>
        </ul>
        <div class="v-center">
		<div class="row">
	                <div class="col-md-3">
	                        <h2 class="wow bounceIn" data-wow-delay=".1s">LINKS</h2>
	                        <p><a href="<?php echo get_site_url(); ?>#about">About</a></p>
	                        <p><a href="<?php echo get_site_url(); ?>#classes">Classes</a></p>
	                        <p><a href="<?php echo get_site_url(); ?>#teachers">Teachers</a></p>
	                        <p><a href="<?php echo get_site_url(); ?>#pricing">Pricing</a></p>
	                        <p><a href="<?php echo get_site_url(); ?>#contact">Contact</a></p>
	                </div>
	                <div class="col-md-3">
	                        <h2 class="wow bounceIn" data-wow-delay=".1s">RECENT POSTS</h2>
				<?php
					$args = array( 'numberposts' => '5' );
					$recent_posts = wp_get_recent_posts( $args );
					foreach( $recent_posts as $recent ){
						echo '<p><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </p> ';
					}
				?>
	                </div>
	                <div class="col-md-3">
	                        <h2 class="wow bounceIn" data-wow-delay=".1s">META</h2>
	                        <p><a href="/wp-admin">Site Admin</a></p>
	                        <p><a href="/logout">Log Out</a></p>
	                        <h2 class="wow bounceIn" data-wow-delay=".1s">NEWSLETTER</h2>
	                        <p><!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="//capoeirastudio.us13.list-manage.com/subscribe/post?u=3db435ce999565383d510d2cd&amp;id=64f83024b3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address </label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3db435ce999565383d510d2cd_64f83024b3" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup--></p>
	                </div>
	                <div class="col-md-3">
	                        <h2 class="wow bounceIn" data-wow-delay=".1s">REGISTRATION</h2>
				<p>킬롬볼라 레크리에이션</p>
				<p>서울특별시중구북창동93-3삼옥빌딩303호</p>
				<p>휴대폰 번호 : 010-9090-9183</p>
				<p>사업자 등록 번호 : 101-11-14837</p>
				<p>대표자: Munair Simpson</p>
	                </div>
                </div>
		<div class="row">
                        <div class="col-xs-12 text-center">
                                <img src="https://s3-ap-northeast-1.amazonaws.com/www-capoeirastudio-com/capoeirastudio-white-icon-644x644px.png" class="wow bounceIn text-primary" data-wow-delay=".1s" style="visibility: visible; animation-name: bounceIn; -webkit-animation-name: bounceIn;">
                                <h5 class="section-heading">As featured on...</h5>
                                <hr class="primary">
                                <a href="http://home.ebs.co.kr/ebsnews/menu3/newsGlobalView/10344369/H" target="_new">
                                <img src="https://s3-ap-northeast-1.amazonaws.com/www-capoeirastudio-com/simple-ebs-logo-45x33px-embossed.png" class="wow bounceIn text-primary" data-wow-delay=".1s" style="visibility: visible; animation-name: bounceIn; -webkit-animation-name: bounceIn;">
                                </a>
                        </div>
                </div>
        </div>
</footer>
