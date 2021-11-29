
	<!-- Footer -->
        <footer class="bg3 p-t-75 p-b-32" style="background-color: #065F09;">
		<div class="container">
                    <div class="row" >
				<div class=""style="width: 100%">
					<span style="font-size: 13pt;">
                                            <a style="color: #33ffff" href="" rel="alternate">Vereda El Peñón:</a><a style="color: white">&nbsp;Escuela Rural El Peñón</a><br>
                                            <a style="color: #33ffff" href="" rel="alternate">Vereda San Fortunato:</a><a style="color: white">&nbsp;Escuela Rural San Fortunato</a><br>
                                        <a style="color: #33ffff" href="" rel="alternate">Vereda El Perico: </a><a style="color: white">Escuela Rural El Perico</a><br>
                                        <a style="color: #33ffff" href="" rel="alternate">Vereda Alto Charco: </a><a style="color: white">Escuela Rural Alto Charco</a><br>
                                        <a style="color: #33ffff" href="" rel="alternate">Vereda San Miguel: </a><a style="color: white">Institución Educativa San Miguel Primaria</a><br>
                                        <a style="color: #33ffff" href="" rel="alternate">Vereda San Rafael: </a><a style="color: white">Escuela Rural San Rafael</a>
                                        </span>
				</div>
                            
                                

				
			
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	
<script>
 const base_url="<?php base_url();?>";
 </script>  
<!--===============================================================================================-->	
	<script src="Assets/tienda/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Assets/tienda/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="Assets/tienda/vendor/bootstrap/js/popper.js"></script>
	<script src="Assets/tienda/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Assets/tienda/vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="Assets/tienda/vendor/daterangepicker/moment.min.js"></script>
	<script src="Assets/tienda/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="Assets/tienda/vendor/slick/slick.min.js"></script>
	<script src="Assets/tienda/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="Assets/tienda/vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="Assets/tienda/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="Assets/tienda/vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="Assets/tienda/vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="Assets/tienda/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="Assets/tienda/js/main.js"></script>
        
</body>
</html>