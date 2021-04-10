

//GET - trazer informações de um servidor externo
/*var xhr = new XMLHttpRequest();
var documento;


xhr.responseType ="json";
xhr.onreadystatechange = function(){
	if(xhr.readyState == 4 && xhr.status == 200){
		documento = xhr.response;
		console.log(documento);		
	}else{

	}
}
xhr.open("GET","https://jsonplaceholder.typicode.com/posts/1" );

xhr.send();*/

//POST - envia informações para o outro servidor

/*var xhr = new XMLHttpRequest();
var documento = {
	"userId": 200,
	"id":12,
	"title":"titulo da Notícia",
	"body":"texto da notícia",
}

xhr.onreadystatechange = function(){
	if(xhr.readyState == 4){
		console.log(xhr);
	}
}

xhr.open("POST", "https://jsonplaceholder.typicode.com/posts");
xhr.send(documento);
*/




var xhr = new XMLHttpRequest();
var documento;


xhr.responseType ="json";
xhr.onreadystatechange = function(){
	if(xhr.readyState == 4 && xhr.status == 200){
		documento = xhr.response;
		console.log(documento);		
	}else{

	}
}


//xhr.open("GET","https://api.feegow.com/v1/api/specialties/list" );
//xhr.setRequestHeader('Authorization', 'Bearer ' + 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJmZWVnb3ciLCJhdWQiOiJwdWJsaWNhcGkiLCJpYXQiOiIxNy0wOC0yMDE4IiwibGljZW5zZUlEIjoiMTA1In0.UnUQPWYchqzASfDpVUVyQY0BBW50tSQQfVilVuvFG38');


//xhr.open("GET", "https://api.feegow.com/v1/api/specialties/list?api_key=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJmZWVnb3ciLCJhdWQiOiJwdWJsaWNhcGkiLCJpYXQiOiIxNy0wOC0yMDE4IiwibGljZW5zZUlEIjoiMTA1In0.UnUQPWYchqzASfDpVUVyQY0BBW50tSQQfVilVuvFG38");

xhr.open("GET", "https://api.themoviedb.org/3/movie/popular?api_key=506fadb0256c13349acc05dabebf9604&language=en-US&page=1");
xhr.send();

