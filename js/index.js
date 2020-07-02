let $heroBody = document.querySelectorAll('.banner')

let slideIndex = 0

showSlides()

function showSlides() {
    for(var i = 0; i < $heroBody.length; i++) {
        $heroBody[i].style.display = 'none'
    }
    slideIndex++
    if(slideIndex > $heroBody.length) { slideIndex = 1 }
    $heroBody[slideIndex - 1].style.display = 'block'
    setTimeout(showSlides, 5000)
}

var div = document.querySelectorAll('.title-banner');
var seguir = document.querySelector('.seguir')
var linha = '|'
var textos = ['Wanquery', 'Opportunity'];

function escrever(str, done) {
    var char = str.split('').reverse();
    var typer = setInterval(function() {
        if (!char.length) {
            clearInterval(typer);
            return setTimeout(done, 1000); // só para esperar um bocadinho
        }
        var next = char.pop();
        div[0].innerHTML += next;
        div[1].innerHTML += next;
    }, 100);
}

function limpar(done) {
    var char = div[0].innerHTML;
    var charAll = div[1].innerHTML;
    var nr = char.length;
    var typer = setInterval(function() {
        if (nr-- == 0) {
            clearInterval(typer);
            return done();
        }
        div[0].innerHTML = char.slice(0, nr);
        div[1].innerHTML = charAll.slice(0, nr);
    }, 100);
}

function rodape(conteudos, el) {
    var atual = -1;
	function prox(cb){
		if (atual < conteudos.length - 1) atual++;
		else atual = 0;
		var str = conteudos[atual];
		escrever(str, function(){
			limpar(prox);
		});
	}
	prox(prox);
}
rodape(textos);