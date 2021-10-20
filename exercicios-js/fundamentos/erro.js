function tratarErroLancar(erro){
    // throw new Error('Mensagem do erro');
    
    
    throw  {
        nome: erro.nome,
        msg: erro.message,
        date: new Date
    }
}

function imprimirNomeGritado(obj) {
    try {
        console.log(obj.name.toUpperCase() + '!!')
    } catch (e) {
        tratarErroLancar(e)
    } finally {
        console.log('final')
    }
}


const pessoa = {name: 'João'};
imprimirNomeGritado(pessoa);