 {
     {
         {
             {
                 // Uma variável sempre vai ficar visível, independente do bloco que ela está inserida
                 // a menos que seja uma função
                 var sera = "Será?";
                 console.log(sera);
             }
         }
     }
 }

console.log(sera);


// Uma variavel com var, quando declarada dentro de uma function, só fica visível dentro do escopo da função
function teste(){
    var a = 123;
}
teste()
console.log(a);