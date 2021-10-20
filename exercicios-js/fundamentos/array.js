const valores = [7.7, 8.8, 9.9, 2.4];

console.log(valores[0], valores[3]);

valores[4] = 5;
console.log(valores);

valores.push({id: 3}, false, null, 'teste'); //incrementa o array
console.log(valores)



console.log(valores.pop()); // retira o útlima valor do array
delete valores[0] // deleta o valor selecionado pelo indice

console.log(typeof valores);
