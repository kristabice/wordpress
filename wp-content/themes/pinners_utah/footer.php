<footer>
<div class="footer">
	<div class="row">
		<div class="col">
			<p>&copy;2018 Pinners Conference</p>
		</div>
		
		<div class="col">
			<p>Mountain America Expo Center<br /> Fri 10am - 8pm | Sat 9am - 7pm</p>
		</div>
		
		<div class="col">
			<p><a href="tel:+1234567891">Call: 123-456-7891</a></p>
		</div>

</div>
</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/node_modules/bootstrap/dist/js/bootstrap.js" type="text/javascript" ></script>
    <script src="<?php echo get_template_directory_uri();?>/index.js"></script>
<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
	</script>
</body>
</html>