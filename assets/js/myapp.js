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
	  var title=titre.replace(/ /g, "");
	  $('#dlTitreMariage').val(title);
	  alert(title);
  });
});
