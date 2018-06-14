$(document).ready(function()
	{
		$(document).ready(function() {
   		$('input[type="radio"]').click(function() {
       	if($(this).attr('id') == 'card') {
            $('#debit').show();           
       	}
       else {
            $('#debit').hide();   
       }
   });
});
});

