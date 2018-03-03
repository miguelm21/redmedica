//Dashboard

$(document).ready(function(){
    $("#show").click(function(){
        $("#dashboard").fadeToggle(200);
    });
  $("#filter").click(function(){
      $("#panel").slideToggle(200);
  });

});


$(document).on('click', '.browse', function(){
  var file = $(this).parent().parent().parent().find('.file');
  file.trigger('click');
});


$(document).on('change', '.file', function(){
  $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
});

//tooltip

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
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

// Flip card 

$(document).ready(function () {
  $('.flipButton').bind("click", function() {
    $(this).next().toggleClass('hover');
  })
});
