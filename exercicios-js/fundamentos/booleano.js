let isAtivo = false;

console.log(isAtivo);

isAtivo = true;
console.log(isAtivo);

isAtivo = 1;
console.log(!!isAtivo); //negar a negaçao

console.log('os verdadeiros...');

console.log(!!3);
console.log(!!-1);
console.log(!!' ');
console.log(!![]);
console.log(!!{});
console.log(!!Infinity);
console.log(!!(isAtivo = 33)); // Todos os valores exceto 0 vão dar True


console.log('os falsos...');

console.log(!!0);
console.log(!!'');
console.log(!!null);
console.log(!!Nan);
console.log(!!undefined);
console.log(!!(isAtivo= false));

console.log(''|| null || 0 || ' ');


let nome = '';
console.log(nome || 'Desconhecido');