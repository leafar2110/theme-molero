<style>
.ir-arriba {
	border-radius: 4px;
	display:none;
	padding: 12px 17px;
	background-color: rgba(0,0,0,0.5);
	font-size:20px;
	cursor:pointer;
	position: fixed;
	bottom:20px;
	right:20px;
}

.ir-arriba a{
	color: white;
}
</style>

<div class="ir-arriba">
	<a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
	$(document).ready(function(){
		
		$('.ir-arriba').click(function(){
			$('body, html').animate({
				scrollTop: '0px'
			}, 1000);
		});
		
		$(window).scroll(function(){
			if( $(this).scrollTop() > 0 ){
				$('.ir-arriba').slideDown(300);
			} else {
				$('.ir-arriba').slideUp(300);
			}
		});
		
	});
</script>
