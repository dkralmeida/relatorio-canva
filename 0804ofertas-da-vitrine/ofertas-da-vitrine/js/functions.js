$(function(){

$.ajax({
	'url':'conteudo.html',

}).done(function(data){
	//console.log(data);
	$('#container').append(data);
});

});