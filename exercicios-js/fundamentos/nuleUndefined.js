let valor; // não incializada -> undefined 
console.log(valor);

valor = null; // ausência de valor
console.log(valor);
// console.log(valor.toString()) -> Não é possível acessar de nulo


const produto = {};
produto.preco = undefined; // evite atribuir undefined
console.log(!!produto.preco);
console.log(produto);


produto.preco = 3.50;
console.log(produto)


// Como boa prática é preferível que deixe a o javascript definir o que é undefined