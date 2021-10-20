// novo recurso do ES2015

const pessoa = {
    nome: 'ana',
    idade: 5,
    endereco: {
        logradouro: 'Rua ABC',
        numero: 100
    }
}

// Essa operação permite acessar chaves de um objeto uma forma mais simples


// Retire nome, idade de pessoa
const { nome, idade } = pessoa;
console.log(nome, idade)

// Criando variaveis para os valores retirados
const { nome: n, idade: i } = pessoa;
console.log(n, i)

const {sobrenome, bemHumorada = true} = pessoa
console.log(sobrenome, bemHumorada)

//acessando o objeto dentro do objeto
const {endereco: {logradouro, numero, cep} } = pessoa
console.log(logradouro, numero, cep)
