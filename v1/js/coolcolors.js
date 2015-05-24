var _imagenes = new Array();
var _imagenActual = 1;
var _cajaConChange = null;

var _categorias = new Array();
//_categorias.push("creativity");
_categorias.push("logo");
_categorias.push("web");
_categorias.push("rrssApp");
_categorias.push("email");

$(document).ready(function () {
 
	for (var i = 0; i < _categorias.length; i++) {
		
		//leemos los xml
		leerXmlPintar("./categorias/"+ _categorias[i] +"/artes.xml", _categorias[i]);
	
	} 
	
});

function leerXmlPintar(archivo, categoriaTxt) {
	
	var contenido = $('.contenido');
	var categoria = $('<article><p class="categoria"><img src="./categorias/'+ categoriaTxt +'/categoria.png" /></p></article>'); 
	$(contenido).append(categoria);
	
	$.ajax({
		  url: archivo,
		  async: false,
		  success: function(data){
			  pintar(data, categoriaTxt, contenido);
		  }
	});

}

function pintar(xml, categoriaTxt, contenido) {
	
	$(xml).find("arte").each(function (indice) {
    	
    	var nombre = $(this).find('nombre').text();
       	var texto = $(this).find('texto').text();
       	var imagenes = $(this).find('imagenes').text();
       	var extension = $(this).find('extension').text();
       	
       	var arteObj = {"nombre":nombre, "texto":texto, "imagenes":imagenes, "extension":extension};
       	
       	var arte = $('<article><p class="caja" data-categoria="'+ categoriaTxt +'" data-nombre="'+ arteObj.nombre +'" data-texto="'+ arteObj.texto +'" data-imagenes="'+ arteObj.imagenes +'" data-extension="'+ arteObj.extension +'"></p></article>');
		$(arte).find('p.caja').each(function () {
				$(this).css('background','url(./categorias/'+ categoriaTxt +'/'+ arteObj.nombre +'_mini.jpg)');
				
				$(this).hover(function () {
					
					$(this).append('<div class="over"><p class="overText">'+ $(this).attr('data-texto') +'</p></div>');
				
					var caja = $(this);
					
					$('.over').click(function() {
						
						_imagenActual = 1;
						if (parseInt($(caja).attr("data-imagenes")) > 1) {
							_cajaConChange = caja;
						} else {
							_cajaConChange = null;
						}
						
						$('.over').fadeOut(300);
						
						$('.overlay').append('<img src="./categorias/'+ $(caja).attr("data-categoria") +'/'+ $(caja).attr("data-nombre") +'_01.'+ $(caja).attr("data-extension") +'" />');
						
						var windowWidth = $(window).width() - 20;
						var windowHeight = $(window).height() - 20;
						
						var imgWidth = 1680;
						var imgHeight = 1050;
						
						var proporcionWidth = 1;
						var proporcionHeight = 1;
						var nuevaHeight = imgHeight;
						var nuevaWidth = imgWidth;
						
						if (imgWidth > windowWidth && windowWidth <= imgWidth) {
							proporcionWidth =  windowWidth / imgWidth;
							
							nuevaWidth = windowWidth;
							$('.overlay img').animate({width:windowWidth}, 0);
							nuevaHeight = imgHeight * proporcionWidth;
							$('.overlay img').animate({height:nuevaHeight}, 0);
							
							if (nuevaHeight > windowHeight) {
								proporcionHeight = windowHeight / nuevaHeight;
								
								nuevaHeight = windowHeight;
								$('.overlay img').animate({height:nuevaHeight}, 0);
								nuevaWidth = windowWidth * proporcionHeight;
								$('.overlay img').animate({width:nuevaWidth}, 0);
							} 
							
						} else {
							nuevaHeight = $('.overlay img').height();
							nuevaWidth =  $('.overlay img').width();
						}
						
						$('.overlay img').animate({left:((windowWidth - nuevaWidth)/2) + 10}, 0);
						$('.overlay img').animate({top:((windowHeight - nuevaHeight)/2) + 10}, 0);
						
						$('.overlay').fadeIn(300);
						
						changeImage();
						
						$('.overlay').click(function() {
							$(this).fadeOut(300);
							$(this).html('');
							_imagenActual = 1;
							_cajaConChange = null;
						});
						
					});
					
					$(window).resize(function() {
						
						var windowWidth = $(window).width() - 20;
						var windowHeight = $(window).height() - 20;
						
						var imgWidth = 1680;
						var imgHeight = 1050;
						
						var proporcionWidth = 1;
						var proporcionHeight = 1;
						var nuevaHeight = imgHeight;
						var nuevaWidth = imgWidth;
						
						if (imgWidth > windowWidth && windowWidth <= imgWidth) {
							proporcionWidth =  windowWidth / imgWidth;
							
							nuevaWidth = windowWidth;
							$('.overlay img').animate({width:windowWidth}, 0);
							nuevaHeight = imgHeight * proporcionWidth;
							$('.overlay img').animate({height:nuevaHeight}, 0);
							
							if (nuevaHeight > windowHeight) {
								proporcionHeight = windowHeight / nuevaHeight;
								
								nuevaHeight = windowHeight;
								$('.overlay img').animate({height:nuevaHeight}, 0);
								nuevaWidth = windowWidth * proporcionHeight;
								$('.overlay img').animate({width:nuevaWidth}, 0);
							} 
							
						} else {
							nuevaHeight = $('.overlay img').height();
							nuevaWidth =  $('.overlay img').width();
						}
						
						$('.overlay img').animate({left:((windowWidth - nuevaWidth)/2) + 10}, 0);
						$('.overlay img').animate({top:((windowHeight - nuevaHeight)/2) + 10}, 0);
						
					});
					
				}, function () {
					
					$(this).html('');
					
				});
    	});
		
		$(contenido).append(arte);
	   
	}); //each
	
	
}

var _nextImage = "";

function changeImage() {
	
	_imagenActual++;
	
	if (_imagenActual > parseInt($(_cajaConChange).attr('data-imagenes'))) {
		_imagenActual = 1;
	}	
	
	var imagenTxt = _imagenActual + "";
	if (_imagenActual < 10) {
		imagenTxt = "0"+ _imagenActual;
	}
	_nextImage =  "./categorias/"+ $(_cajaConChange).attr('data-categoria') +"/"+ $(_cajaConChange).attr('data-nombre') +"_"+ imagenTxt +"."+ $(_cajaConChange).attr('data-extension');
	
	setTimeout(function () {
		
		if (_cajaConChange != null) {
			$('.overlay img').attr("src", _nextImage);
			
			changeImage();
		}
		
	}, 3000);
	
}