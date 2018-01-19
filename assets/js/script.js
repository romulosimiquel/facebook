function addFriend(id, obj) {

	if(id != '') {

		$(obj).closest('.sugestaoitem').fadeOut();

		$.ajax({
			type:'POST',
			url:'ajax/add_friend',
			data:{id:id}
		});

	}

}

function aceitarFriend(id, obj) {

	if(id != '') {

		$(obj).closest('.requisicaoitem').fadeOut();

		$.ajax({
			type:'POST',
			url:'ajax/aceitar_friend',
			data:{id:id}
		});

	}

}

function curtir(obj) {

	var id 	  = $(obj).attr('data-id');
	var likes = parseInt($(obj).attr('data-likes'));
	var liked = parseInt($(obj).attr('data-liked'));
	if(liked == 0){
		likes++;
		liked = 1;
		var texto = 'Descurtir';
	} else{
		likes--;
		like = 0;
		var texto = 'Curtir';
	}

	$(obj).html('data-likes', likes);
	$(obj).html('data-liked', liked);

	$(obj).html('('+likes+')'+texto);

	$.ajax({
		type:'POST',
		url:'ajax/curtir',
		data:{id:id}
	});

}

function displayComentario(obj) {
	$(obj).closest('.postitem_botoes').find('.postitem_comentario').show();
}
function comentar(obj) {
	var id = $(obj).attr('data-id');
	var txt = $(obj).closest('.postitem_comentario').find('.postitem_txt').val();

	$.ajax({
		type:'POST',
		url:'ajax/comentar',
		data:{id:id, txt:txt}
	});
}

// // Inicialização Dropdown
// $('.dropdown-button').dropdown({
//   inDuration: 300,
//   outDuration: 225,
//       constrainWidth: false, // Does not change width of dropdown to that of the activator
//       hover: true, // Activate on hover
//       gutter: 0, // Spacing from edge
//       belowOrigin: true, // Displays dropdown below the button
//       alignment: 'left', // Displays dropdown with edge aligned to the left of button
//       stopPropagation: false // Stops event propagation
//     }
// );

// // Inicialização Modal
//    $(document).ready(function(){
//     // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
//     $('.modal').modal();
// });

// // Configuração Modal
//   $('.modal').modal({
//       dismissible: false, // Modal can be dismissed by clicking outside of the modal
//       opacity: .5, // Opacity of modal background
//       inDuration: 300, // Transition in duration
//       outDuration: 200, // Transition out duration
//       startingTop: '4%', // Starting top style attribute
//       endingTop: '10%', // Ending top style attribute
//       ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
//         alert("Ready");
//         console.log(modal, trigger);
//       },
//       complete: function() { alert('Closed'); } // Callback for Modal close
//     }
// );















