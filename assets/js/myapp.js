//Open Modal Share
/*    $(document).ready(function() {
		click($('#loginModal'))(
		{
            $('#exampleModalLong').modal('show');
        }

    });*/


$(document).ready(function() {

  $('#loginModal').click(function() {
	  var titre = $('.hiddenMariageTitle').val();
	  $('#dlModalTitle').text(titre);
  });
});

// active les popover pour tout le site

/*$(function () {
  $('[data-toggle="popover"]').popover()
})

$('.popover-dismiss').popover({
  trigger: 'onhover'
})
$(document).ready(function() {
 $('.privee').hover(function(){
	alert('privee');
	//$this.popover('show');
});});*/


