function upload_image(){
	var data = new FormData($('#form_inputan')[0]);
	$.ajax({
			 type: "POST",
			 url: '/melissa/admin/uploadimage',
			 data: data,
			 dataType: "json",
			 contentType: false,
    	 processData: false,
			 success: function (result) {
					location.reload();
			 },
			 error: function(XMLHttpRequest, textStatus, errorThrown) {
					 console.log(XMLHttpRequest);
				}
	 });
}
