const funcs = [];

for(var i = 0; i < 10; i++){
    funcs.push(function(){
        console.log(i);
    });
}

// Não permite a saida do indice, por causa da função, sempre vai imprimir o valor da saida do loop
funcs[2]();
