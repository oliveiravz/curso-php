//Notacao ponto é uma forma de acessar elementos de um objeto 

const obj1 = {};
obj1.nome = 'bola';
console.log(obj1.nome);

function Obj(nome){
    // a variavel nome ficará público para quem instanciar 
    this.nome = nome;
    this.exec = function(){
        console.log('exec...');
    }
}


const obj2 = new Obj('cadeira');
const obj3 = new Obj('mesa');
//Ao instanciar um novo objeto, é possível acessar funções que esteja dentro dele com a notação ponto
console.log(obj2.nome);
console.log(obj3.nome);
obj3.exec();