// Icon search navbar 

$('#iconified').on('keyup', function() {
  var input = $(this);
  if(input.val().length === 0) {
    input.addClass('empty');
  } else {
    input.removeClass('empty');
  }
});

// Second Carousel
$('#slider-carousel').owlCarousel({
  loop: true,
  margin: 15,
  dots: true,
  nav: false,
  responsiveClass: true,
  responsive: {
    0: {
      items: 2,
      margin: 10,
      stagePadding: 20,
    },
    600: {
      items: 3,
      margin: 20,
      stagePadding: 50,
    },
    1000: {
      items: 5
    }
  }
});

// thierd 
$(document).ready(function(){
  $("#owl-carousel2").owlCarousel({
    items: 4,
    margin: 30,
    responsive: {
      0: {
        items: 1.5,
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
});

// Star raiting
$(
  function () {
    $('.li-config').on('click', function() {
      var selectedCssClass = 'selected';
      var $this = $(this);
      $this.siblings('.' + selectedCssClass).removeClass(selectedCssClass);
      $this
      .addClass(selectedCssClass)
      .parent().addClass('vote-cast');
    });
  }
  );


//Google maps 



//dropdown list -list benefits-

$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("fast");
    });
});