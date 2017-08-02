$(document).ready(function(){
	$("#myForm").submit(function(e) {
		e.preventDefault(); 
		var url = "php/login.php"; // the script where you handle the form input.
		$.ajax({
			type: "POST",
			url: url,
			data: $("#myForm").serialize(), // serializes the form's elements.
			success:function(data){
				var results=JSON.parse(data);
				var info=$('#info');
				info.removeClass();
				if(results.success){
					info
					.addClass('alert alert-success')
					.css({
						'display':'block'
					});
					$('.alert-success p').text(results.success);
				}
				else if(results.error){
					info
					.addClass('alert alert-danger')
					.css({
						'display':'block'
					});
					$('.alert-danger p').text(results.error);
				}
			}
		});
	});
	$('a.close').click(function(){
		$(this).closest('.alert').hide();
	});
});