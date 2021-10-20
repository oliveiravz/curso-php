// par nome/valor
const saudacao = 'Opa' // contxto léxico 1 
// Contexto léxico é o local onde sua variável foi definida no código

function exec(){
    const saudacao = 'Falaaa' //contexto léxico 2
    return saudacao
}


// Objetos são grupos aninhados de pares nome/valor

const cliente = {
    nome: 'João', 
    idade: 27,
    peso: 95,
    enderco: {
        logradouro: 'Rua exemplo',
        numero: 123
    }
}

console.log(saudacao);
console.log(exec);
console.log(cliente);