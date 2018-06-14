$(document).ready(function()
	{
		$('#content').load('addFood.php');
		$('table#nav tr td').click(function()
		{
			var page = $(this).children().attr('href');
			$('#content').load(page +'.php');
		});
	});

