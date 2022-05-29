
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
		  
       <script type="text/javascript" src="<?php echo THEME_JS_PATH; ?>/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="<?php echo THEME_JS_PATH; ?>/jquery-multitabs.js"></script>
		<script type="text/javascript" src="<?php echo THEME_JS_PATH; ?>/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo THEME_JS_PATH; ?>/wow.min.js"></script>
		<script type="text/javascript" src="<?php echo THEME_JS_PATH; ?>/owl.carousel.min.js"></script>		  
	<script>

$('.tab3').multitabs();
</script>		

		<script type="text/javascript">
		
	
		
		(function($){
			$(document).ready(function(){
			
			
			$('#myCarousel5').carousel({
				  interval: 2000,
				})
				
				$('#myCarousel6').carousel({
				  interval: 2000,
				})
				
				$('#myCarousel7').carousel({
				  interval: 2000,
				})
				
				$('#myCarousel8').carousel({
				  interval: 2000,
				})
				
				$('#myCarousel9').carousel({
				  interval: 2000,
				})
				
				$('#myCarousel10').carousel({
				  interval: 2000,
				})
				
				$('#myCarousel11').carousel({
				  interval: 2000,
				})
				
				$('#myCarousel12').carousel({
				  interval: 2000,
				})
			
			
					$('.topslcr .sada').mouseover(function(){
					$('.topslcr .sada img').attr("src", "images/Implementation.png");
					});
					$('.topslcr .sada').mouseout(function () {
					$('.topslcr .sada img').attr("src", "images/Implementationfff.png");
					});
					
					
					
		
			
			
			
		$(window).load(function(){
		 $('#topextsec').delay(3000).fadeIn(500);
		
		
		});
		
		
		
		$('.banner_slide').owlCarousel({
							 animateOut: 'fadeOutDown',
							 animateIn:'zoomIn',
							 autoplay:true,
							
							
									
									items:1,
									smartSpeed:450,
									loop:true,
									dots:true,
									
									
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
			
						
			
				
								
					
						 
						 
						 
						 	$('.topblogcr').owlCarousel({
							loop:true,
							nav:false,
							responsiveClass:true,
							responsive:{
								0:{
									items:2,
									nav:true
								},
								600:{
									items:2,
									nav:false
								},
								1000:{
									items:3,
									nav:false,
									loop:true,
								}
							}
						})
									
							 $('.nxtbl').click(function(){
						 
							$('.topblogcr').trigger('next.owl.carousel');
							
						 
						 });
						 
						 
						  $('.prvbl').click(function(){
						 
							$('.topblogcr').trigger('prev.owl.carousel');
							
						 
						 });
						 
						 
						 
						 
						$('.secclintscr').owlCarousel({
							loop:true,
							nav:false,
							responsiveClass:true,
							responsive:{
								0:{
									items:2,
									nav:true
								},
								600:{
									items:3,
									nav:false
								},
								1000:{
									items:6,
									nav:false,
									loop:true,
								}
							}
						})
									
							 $('.nxtcl').click(function(){
						 
							$('.secclintscr').trigger('next.owl.carousel');
							
						 
						 });
						 
						 
						  $('.prvcl').click(function(){
						 
							$('.secclintscr').trigger('prev.owl.carousel');
							
						 
						 }); 
						 
	
						 
						 
						 
						 $('.divislide').owlCarousel({
							loop:true,
							nav:true,
							responsiveClass:true,
							responsive:{
								0:{
									items:2,
									nav:true
								},
								600:{
									items:2,
									nav:false
								},
								1000:{
									items:3,
									nav:false,
									loop:true,
								}
							}
						})
									
							 $('.nxtdv').click(function(){
						 
							$('.divislide').trigger('next.owl.carousel');
							
						 
						 });
						 
						 
						  $('.prvdv').click(function(){
						 
							$('.divislide').trigger('prev.owl.carousel');
							
						 
						 }); 						 
						 
						 
						 
						 $('.topsolucr').owlCarousel({
							loop:true,
							nav:true,
							responsiveClass:true,
							responsive:{
								0:{
									items:3,
									nav:true
								},
								600:{
									items:5,
									nav:false
								},
								1000:{
									items:7,
									nav:false,
									loop:true,
								}
							}
						})
									
							 $('.nxtts').click(function(){
						 
							$('.topsolucr').trigger('next.owl.carousel');
							
						 
						 });
						 
						 
						  $('.prvts').click(function(){
						 
							$('.topsolucr').trigger('prev.owl.carousel');
							
						 
						 }); 						 
						 						 
						 			
				
						
						
	
			
						$('.num1').click(function(){
						$('.num1 a').addClass('bgli');
						$('#myCarousel').slideDown();
						
						});	
						
						$('.num2').click(function(){
						$('.num2 a').addClass('bgli');
						$('#myCarousel').slideDown();
		
						});	
						
						$('.num3').click(function(){
						$('.num3 a').addClass('bgli');
						$('#myCarousel').slideDown();
		
						});	
						
						$('.num4').click(function(){
						$('.num4 a').addClass('bgli');
						$('#myCarousel').slideDown();
		
						});	
						
						$('.num5').click(function(){
						$('.num5 a').addClass('bgli');
						$('#myCarousel').slideDown();
		
						});	
						
						$('.num6').click(function(){
						$('.num6 a').addClass('bgli');
						$('#myCarousel').slideDown();
		
						});	
									
					$(document).on('click', function (e) {
						if ($(e.target).closest(".num1 , #myCarousel").length === 0) {
							
							$('.num1 a').removeClass('bgli');
						}
					});	
					
					
					
					$(document).on('click', function (e) {
						if ($(e.target).closest("#myCarousel, .horizon-nav li").length === 0) {
							
							$('#myCarousel').slideUp();
							$('.slider_sec').fadeIn(100);
						}
					});	
					
					
					
					$('.horizon-nav li').click(function(){
						
					$('.slider_sec').fadeOut(500);
					
					});
					
					

					$(document).on('click', function (e) {
						if ($(e.target).closest(".num2, #myCarousel").length === 0) {
							
							$('.num2 a').removeClass('bgli');
						}
					});	
					
					$(document).on('click', function (e) {
						if ($(e.target).closest(".num3, #myCarousel").length === 0) {
							
							$('.num3 a').removeClass('bgli');
						}
					});
					
					
					$(document).on('click', function (e) {
						if ($(e.target).closest(".num4, #myCarousel").length === 0) {
							
							$('.num4 a').removeClass('bgli');
						}
					});
					
					$(document).on('click', function (e) {
						if ($(e.target).closest(".num5, #myCarousel").length === 0) {
							
							$('.num5 a').removeClass('bgli');
						}
					});
					
					$(document).on('click', function (e) {
						if ($(e.target).closest(".num6, #myCarousel").length === 0) {
							
							$('.num6 a').removeClass('bgli');
						}
					});
			
			
				
			
						
			
			
			
			
			
			
			
			
				
								//Initiat WOW JS
									new WOW().init();	
							
									
						
								
								
											
								
					$('.primery_slide .img-container').click(function(){
						
							$('.slide_section').hide();
							
							$('.slide_section2').css({'opacity':'1'});
							$('.full-slider').css({'height':'680px'});
							
						
						});
						
						
						
						$('.fa-times').click(function(){
						
							$('.slide_section').show(0.1);
							
							$('.slide_section2').css({'opacity':'0','transition':'0.1s'});
							$('.full-slider').css({'height':'680px'});
							
						
						});
						
					
						
						
					

						$(window).scroll(function () {
						  var Bottom = $(window).height() + $(window).scrollTop() >= $(document).height();
						if(Bottom )
						{
						$('.slide_section').show(0.1);
							
							$('.slide_section2').css({'opacity':'0','transition':'5s'});
							$('.full-slider').css({'height':'680px'});
						}
						});
						
						
						
						$(window).scroll(function(){
					
						if($(window).scrollTop() > 1900){
						
						
						}else{
							$('.slide_section').show(0.1);
							$('.slide_section2').css({'opacity':'0','transition':'5s'});
							$('.full-slider').css({'height':'680px'});
						}
					
					});	
						
				
						
					
				
						
						$('.primery_slide').owlCarousel({
							loop:true,
							
							items:4,
							URLhashListener:true,
						
						});
						
						
						
						$('.nxttttss').click(function(){
							$('.primery_slide').trigger('next.owl.carousel');
						 });
						 
						 
						 $('.prvtttss').click(function(){
							$('.primery_slide').trigger('prev.owl.carousel');
						 }); 
						 
						 
						 
						 
						 
						 $('.secondary_slide').owlCarousel({
							loop:true,
							smartSpeed:200,
							items:1,
							URLhashListener:true,
						
						});
						
						
						$('.nxttss').click(function(){
							$('.primery_slide').trigger('next.owl.carousel');
						 });
						 
						 
						 $('.prvtss').click(function(){
							$('.primery_slide').trigger('prev.owl.carousel');
						 }); 
						 
				


							
							
			
			
			});
			})(jQuery)
		
		
		
		</script>

		
		
		
		
	</body>
</html>	  
	 
		
</body>
</html>