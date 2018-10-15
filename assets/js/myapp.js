//Open Modal Share
/*    $(document).ready(function() {
		click($('#loginModal'))(
		{
            $('#exampleModalLong').modal('show');
        }

    });*/


$(document).ready(function() {
  $('#loginModal').click(function() {
	  var titre = $('#hiddenMariageTitle').val();
	  $('#dlModalTitle').text(titre);
  });
  
  $('#downloadLink').click(function() {
	  var titre = $('#hiddenMariageTitle').val();
	  $('#dlTitreMariage').val(titre);
  });
});
