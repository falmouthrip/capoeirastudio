<!-- Footer -->
<footer>
	<div class="container">
		<div class="row text-center">
			<p><a href="http://www.facebook.com/capoeirastudio"><img class="wow bounceIn" data-wow-delay=".1s" src="https://s3-ap-northeast-1.amazonaws.com/www-capoeirastudio-com/capoeirastudio-alphalogo-90x150px.png"></img></a></p>
			<p>킬롬볼라 레크리에이션</p>
			<p>서울특별시중구북창동93-3삼옥빌딩303호</p>
			<p>휴대폰 번호 : 010-9090-9183</p>
			<p>사업자 등록 번호 : 101-11-14837</p>
			<p>대표자: Munair Simpson</p>
		</div>
		<div class="row">
<?php 
	if(is_active_sidebar( 'sidebar-footer' ) || is_active_sidebar( 'sidebar-footer-2' ) || is_active_sidebar( 'sidebar-footer-3' )):
		echo '<div class="footer-widget-wrap"><div class="container">';
		if(is_active_sidebar( 'sidebar-footer' )):
			echo '<div class="footer-widget col-xs-12 col-sm-4">';
			dynamic_sidebar( 'sidebar-footer' );
			echo '</div>';
		endif;
		if(is_active_sidebar( 'sidebar-footer-2' )):
			echo '<div class="footer-widget col-xs-12 col-sm-4">';
			dynamic_sidebar( 'sidebar-footer-2' );
			echo '</div>';
		endif;
		if(is_active_sidebar( 'sidebar-footer-3' )):
			echo '<div class="footer-widget col-xs-12 col-sm-4">';
			dynamic_sidebar( 'sidebar-footer-3' );
			echo '</div>';
		endif;
		echo '</div></div>';
	endif;
?>
		</div>
	</div>
</footer>
