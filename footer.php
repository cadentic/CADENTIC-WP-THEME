
<?php 
wp_footer();
?>


<footer class="secfooter" style="background:#E6F5FF;" >
		<div class="secpage">
		  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		  <a href="">TERMS & CONDITION</a>
		  <a href="">ABOUT US</a>
		  
		  </div>
		  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		  <a href="">CONTACT US</a>
		  <a href="">DIRECTORS</a>		  
		  </div>
		  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		  <a href="">DEVELOPERS</a>
		  <a href="">OUR CLIENTS</a>	
		  </div>
		  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		  <a href="">CORPORATE ACTION</a>
		  <a href="">NATURE & MODE OF WORK</a>		  
		  </div>
		 </div>
		 <div class="divide40"></div>
		   <div class="socialico">
		  
		  <a class="wow rollIn" data-wow-duration="2.5s" data-wow-delay=".2s" href="" style="background:#26a6d1;"><i class="fa fa-twitter"></i></a>
		  <a class="wow rollIn" data-wow-duration="2s" data-wow-delay=".2s" href="" style="background:#3b5998;"><i class="fa fa-facebook"></i></a>
		  <a class="wow rollIn" data-wow-duration="1.5s" data-wow-delay=".2s" href="" style="background:#007ab9;"><i class="fa fa-linkedin"></i></a>
		  <a class="wow rollIn" href="" style="background:#b81a7e;"><i class="fa fa-instagram"></i></a>
		  
		  </div>

		</footer>
		  <div class="copyright">
		  <p>2019 Copyright</p>
		  
		  </div>
		  
    <!--   <script type="text/javascript" src="<?php echo THEME_JS_PATH; ?>/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="<?php echo THEME_JS_PATH; ?>/jquery-multitabs.js"></script>
		<script type="text/javascript" src="<?php echo THEME_JS_PATH; ?>/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo THEME_JS_PATH; ?>/wow.min.js"></script>
		<script type="text/javascript" src="<?php echo THEME_JS_PATH; ?>/owl.carousel.min.js"></script>		  
		  
			!--> 
		
	<script>

$('.tab3').multitabs();
</script>		

		<script type="text/javascript">
		
	
		
		(function($){
			$(document).ready(function(){
			
			
			
		
			
	
		
		
		
		$('.banner_slide').owlCarousel({
								
								items:1,
								loop:true,
								dots:false,
								autoplay:true,
								autoplayHoverPause:true,
								autoplaySpeed:1000,
									
									
								});
								
									$('.nxttsss').click(function(){
							$('.banner_slide').trigger('next.owl.carousel');
						 });
						 
						 
						 $('.prvtsss').click(function(){
							$('.banner_slide').trigger('prev.owl.carousel');
						 }); 
							
		
	

						$('.input').click(function(){
							  
							  $('.input').css({'width':'100%'});
							
							});
							
							
						
						
							
							$('.right-side').append('<i class="fas fa-times clrightside"></i>');
							
								
							$('.clrightside').click(function(){
							
								$('.right-side').css({'z-index':'-1'});
							});
							

			
										$('.middle-side div').click(function(){
										
										$('.tab__content').css({'z-index':'500'});
										});
			
			
			

			$('.clo').click(function(){
			
			$('#topextsec').hide(100);
			
			
			});
	
			
			$('.sutter').click(function(){
			$('.hid').slideToggle(500);
			$('.sutter i').toggleClass('aniup');
			
			});
			
			
			$('.barss').click(function(){
			   $(this).toggleClass("animate_bars");
			    $('.left-side').slideToggle(500);
			     
			   
			});
			
			
			
			$('.barss').on('click',function(){
									
									
								if($(this).attr('data-click-state') == 1) {
								$(this).attr('data-click-state', 0)
							
									$('.middle-side').hide(300);
									$('.right-side').hide(300);
									
								} else {
								$(this).attr('data-click-state', 1)
								
									$('.middle-side').show(300);
									$('.right-side').show(300);
										
								}
									
									
						
						
			});
			
					$(window).scroll(function(){
					
						if($(window).scrollTop() > 600){
						
						$('.navbar').css({'position':'fixed','top':'0','left':'0','right':'0','z-index':'100'});
						}else{
						$('.navbar').css({'position':'static'});
						}
					
					});	
			
				
								
					
						 
						 
						 
						 	
						 
						 
						 
						 
			
			
				
								//Initiat WOW JS
									new WOW().init();	
							
									
						
								
								
											
			
						
					
						
						
						
						
						
					
				
						
					
						 
						 
						 
						 
					
						
					
								
								
								
				
								
								

								
								
								
								
								
								
								
								
								
							
							
							
					
					
					
					
							
							
							



							
							
			
			
			});
			})(jQuery)
		
		
		
		</script>






	</body>
</html>