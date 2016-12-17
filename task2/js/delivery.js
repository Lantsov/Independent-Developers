$(function(){
	$('#dc').click(function(){
		$.ajax({
			type: "POST",
			url: 'courier.php',
			success: function(data) {
				$('#result').html(data);
			}
		});
	});
});
$(function(){
	$('#dp').click(function(){
		$.ajax({
			type: "POST",
			url: 'pickup.php',
			success: function(data) {
				$('#result').html(data);
			}
		});
	});
});
function delivery($type) {
	if ($type == 'courier') {
		$('#form-pickup').remove()
	} else {
		$('#form-courier').remove()
	}
};