
$(function() {
	// Obtenha uma array contendo apenas as letras
	var arrayChr = [ "a", 10, "b", "hola", 122, 15];
	var ii=arrayChr.length;
	var max = [];

	$('#letras').append("Apenas Letras: ");
	for(i = 0 ; i <= ii-1 ; i++){
		check = typeof(arrayChr[i])
		if(check == 'string'){
			$('#letras').append(arrayChr[i]+" ");
			console.log("Apenas Letras: "+arrayChr[i]);
		}
	}

	// Obtenha uma array contendo apenas os numeros
	$('#numeros').append("Apenas Números: ");
	for(i = 0 ; i <= ii-1 ; i++){
		check = typeof(arrayChr[i]);
		if(check == 'number'){
			$('#numeros').append(arrayChr[i]+" ");
			console.log("Apenas Números: "+arrayChr[i]);
		}
    }

	// Obtenha o maior número da array acima 
	$('#maior').append("Maior Número: ");
	for(i = 0 ; i <= ii-1 ; i++){    
		check = typeof(arrayChr[i])
		if(check == 'number'){
			max.push(arrayChr[i]);
		}
	}
	$('#maior').append(Math.max.apply(Math,max));
	console.log("Maior Número: "+Math.max.apply(Math,max));
});
