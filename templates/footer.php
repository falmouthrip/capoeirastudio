<!-- Footer -->
<footer class="footer">
        <!-- slider animation -->
        <ul class="keyframe-slider">
                <li></li>
                <li></li>
                <li></li>
        </ul>
        <div class="v-center">
                <div class="col-md-3">
                        <h2 class="wow bounceIn" data-wow-delay=".1s">LINKS</h2>
                        <p><a href="#about">About</a></p>
                        <p><a href="#classes">Classes</a></p>
                        <p><a href="#teachers">Teachers</a></p>
                        <p><a href="#pricing">Pricing</a></p>
                        <p><a href="#contact">Contact</a></p>
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
                        <h2 class="wow bounceIn" data-wow-delay=".1s">SONGS</h2>
                        <p><a href="">Cantingas</a></p>
                        <p><a href="">Ladainhas</a></p>
                        <p><a href="">Corridos</a></p>
                        <p><a href="">Quadras</a></p>
                        <p><a href="">Maculele</a></p>
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
</footer>
