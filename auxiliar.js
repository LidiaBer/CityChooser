
function abrirVentana(ciudad, pais){
	var miventana=window.open("https://www.google.es/maps/search/"+ciudad+" +"+pais, "Mapa", "height=800px,width=500px");
}
function abrirVentanaRuta(ciudad,ciudad2,ciudad3,pais){
	var miventana=window.open("https://www.google.es/maps/dir/"+ciudad3+" +"+pais+"/"+ciudad2+" +"+pais+"/"+ciudad+" +"+pais, "Ruta", "height=300px,width=600px");
}
function abrirVentanaVideo(ciudad, pais){
	var miventana=window.open("www.youtube.com/results?search_query=%"+ciudad+"%,+%"+pais+"%turismo", "Mapa", "height=500px,width=500px");
}