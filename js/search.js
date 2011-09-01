$j(document).ready(function() {
	swapValues = [];
	$j(".swap_value").each(function(i){
		swapValues[i] = $j(this).val();
		$j(this).focus(function(){
			if ($j(this).val() == swapValues[i]) {
				$j(this).val("");
			}
		}).blur(function(){
			if ($j.trim($j(this).val()) == "") {
				$j(this).val(swapValues[i]);
			}
		});
	});
});