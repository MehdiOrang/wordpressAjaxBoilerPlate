ajaxLearning()
function ajaxLearning(){
	var data = {
		'action': 'elegibilty_for_completion_letter',
		'var': 'var in front end is 0',
	};
	jQuery.post(wp_mehdi_ajax_obj.ajax_url, data, function(res) {
		if( res.success == true ) {
			console.log(res.data)
			if(res.data){	
			}
		}else{
			console.log("error");
		}
	});
}
