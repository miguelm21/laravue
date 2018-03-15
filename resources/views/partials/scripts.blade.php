<script src="{{ asset('js/app.js') }}"></script>

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