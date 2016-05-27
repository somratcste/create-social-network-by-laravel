$('.post').find('.interaction').find('edit').eq(2).on('click' , function(event){   
	event.preventDefault();

	var postBody = event.target.parentNode.parentNode.childNodes[1].textContent;
	$('#post-body').val(postBody);
 	$('.bs-example-modal-sm').modal();
});