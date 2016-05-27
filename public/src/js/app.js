$('.post').find('.interaction').find('edit').eq(2).on('click' , function(event){   
	event.preventDefault();

	var postBody = event.target.parentNode.parentNode.childNodes[1].textContent;
	$('#post-body').val(postBody);
 	$('.bs-example-modal-sm').modal();
});

$('#modal-save').on('click' , function() {
	$.ajax({
		method: 'POST' , 
		url: url,
		data : {body : $('#post-body').val(),  postId : '' , _token: }

	})

	.done(function(msg){
		console.log(msg['message']);
	});
});