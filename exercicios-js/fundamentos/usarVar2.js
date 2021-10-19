var numero = 1;
{   
    // VAR só fica restrito dentro do escopo de uma função
    var numero = 2;
    console.log('dentro = ', numero);
}
console.log('fora = ', numero);