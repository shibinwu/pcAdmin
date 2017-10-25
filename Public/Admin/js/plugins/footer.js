(function($) {
	url = window.location.href;
	arr1 = url.split('/');
	$('.vernav2 a').each(function(){
		arr = $(this).attr('href').split('/');
		if(arr1[5] == arr[3]){
			$(this).parents('ul').parent().addClass('current');
		}
		if(arr1[6] == arr[4]){
			$(this).parent().addClass('current');
		}
	});
})(jQuery);