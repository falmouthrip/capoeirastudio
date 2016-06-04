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
	                        <h2 class="wow bounceIn" data-wow-delay=".1s">MENU</h2>
	                        <p><a href="<?php echo get_site_url(); ?>/#about" class="page-scroll">About</a></p>
	                        <p><a href="<?php echo get_site_url(); ?>/#slideshow" class="page-scroll">Slideshow</a></p>
	                        <p><a href="<?php echo get_site_url(); ?>/#raffle-info" class="page-scroll">Raffle Info</a></p>
	                        <p><a href="<?php echo get_site_url(); ?>/#donate" class="page-scroll">Donate</a></p>
	                        <p><a href="<?php echo get_site_url(); ?>/#contact" class="page-scroll">Contact</a></p>
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
	                        <p><a href="http://eepurl.com/b3Y1Hz">Subscribe</a></p>
	                        <p><a href="http://capoeirastudio.us13.list-manage.com/unsubscribe?u=3db435ce999565383d510d2cd&id=64f83024b3">Unsubscribe</a></p>
	                </div>
	                <div class="col-md-3">
	                        <h2 class="wow bounceIn" data-wow-delay=".1s">FALMOUTH RIP</h2>
				<p>The purpose of this website is to connect with others that have a vision of making the Falmouth Cemetery Jamaica's most beautiful resting place. This website is a work-in-progress.</p>
				<p>This website was designed and is maintained by <a href="http://www.quilombola.com/"><span style="font-weight: 900">Quilombola Engineering</span></a>. Need a website built? Email <a href="mailto:info@quilombola.com">us</a>.</p>
	                </div>
                </div>
		<div class="row">
                        <div class="col-md-4 col-md-offset-4 text-center">
                                <img src="https://s3.amazonaws.com/www-falmouth-rip/rip-icon-inverted-1600x1600px.png" class="wow bounceIn text-primary" data-wow-delay=".1s" style="visibility: visible; animation-name: bounceIn; -webkit-animation-name: bounceIn;">
				<p class="didot-font" style="font-weight: 900">falmouth, jamaica</p>
                        </div>
                </div>
        </div>
</footer>
