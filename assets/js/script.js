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
		var texto = ' Descurtir';
	} else{
		likes--;
		liked = 0;
		var texto = ' Curtir';
	}

	$(obj).attr('data-likes', likes);
	$(obj).attr('data-liked', liked);

	$(obj).html('('+likes+')'+texto);

	$.ajax({
		type:'POST',
		url:'ajax/curtir',
		data:{id:id}
	});

}

function displayComentario(obj) {
	// var verifica = "";
	// var mostrar = "";	

	// if (mostrar == "sim"); 
	// {
	 	$(obj).parent('.card-action').children('.postitem_comentario_box').show('.postitem_comentario');
	// 	mostrar = "nao";

	// } else 
	// {
	// 	$(obj).parent('.card-action').children('.postitem_comentario_box').hide('.postitem_comentario');
	// 	mostrar = "sim";
	// } 

	// $(obj).parent('.card-action').children('.postitem_comentario_box').addClass('.romulotop');

	// if ($(obj).parent('.card-action').children('.postitem_comentario_box').css('display') == 'none')
	// {
	// 	verifica = "escondido";
	// }else
	// {
	// 	verifica = "aparecendo";
	// }

	// $('.postitem_comentario_box').hide();
	// $(obj).closest('.postitem_botoes').find('.postitem_comentario').slideDown(); parent('.card-action').children()
	// $(obj).parent('.card-action').children('.postitem_comentario_box').show();

	// if (verifica == "escondido"){
	// 	$('.romulotop').show();
	// }else{
	// 	$('.romulotop').hide();
	// }

	// $(obj).parent('.card-action').children('.postitem_comentario_box').removeClass('.romulotop');

	//$(obj).parent('.card-action').children('.postitem_comentario_box').toggle();
}
function comentar(obj) {
	var id = $(obj).attr('data-id');
	var txt = $(obj).parent('.postitem_comentario_box').children('.postitem_comentario').val(".postitem_txt");

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















