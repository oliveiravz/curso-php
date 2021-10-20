function compras(trabalho1, trabalho2){

    // Dois pipes(||) operador lógico ou(or) quando um (|) bitwise comparar bit a bit
    const comprarSorvete = trabalho1 || trabalho2;
    // && Operador lógico e(and)
    const comprarTv50 = trabalho1 && trabalho2;
    // const comprarTv32 = !!(trabalho1 ^ trabalho2) // bitwise xor
    const comprarTv32 = trabalho1 != trabalho2;
    const manterSaudavel = !comprarSorvete //operador unario

    
    // Ao criar um objeto, é possível retornar somente a variável ou a constante,
    // A chave será o nome da variável, e o valor será o resultado da variavel
    // Não é necessario passar chave e valor no objeto nesse caso
    return { comprarSorvete, comprarTv50, comprarTv32, manterSaudavel }
}

console.log(compras(true, true));
console.log(compras(true, false));
console.log(compras(false, true));
console.log(compras(false, false));