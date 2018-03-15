<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/7886bdfbdc.js"></script>
<script src="{{ asset('owlcarousel/owl.carousel.js') }}"></script>
<script src="{{ asset('owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/js/fontawesome-all.min.js') }}"></script>

<script type="text/javascript">
    // Second Carousel
    $('#slider-carousel').owlCarousel({
    	loop: true,
    	margin: 50,
    	dots: true,
    	nav: false,
    	responsiveClass: true,
    	responsive: {
    		0: {
    			items: 1.5,
    			margin: 10,
    			stagePadding: 20,
    		},
    		600: {
    			items: 3,
    			margin: 40,
    			stagePadding: 50,
    		},
    		1000: {
    			items: 5
    		}
    	}
    });

    $("#owl-carousel2").owlCarousel({
    	items: 4,
    	margin: 30,
    	responsive: {
    		0: {
    			items: 1,
    			margin: 10,
    			stagePadding: 20,
    		},
    		600: {
    			items: 2,
    			margin: 20,
    			stagePadding: 50,
    		},
    		1000: {
    			items: 4
    		}
    	}
    });
</script>