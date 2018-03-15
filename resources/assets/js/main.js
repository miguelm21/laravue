// Icon search navbar 

$('#iconified').on('keyup', function() {
  var input = $(this);
  if(input.val().length === 0) {
    input.addClass('empty');
  } else {
    input.removeClass('empty');
  }
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