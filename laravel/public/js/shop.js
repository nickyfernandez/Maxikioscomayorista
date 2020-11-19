function filtros(){
  // document.getElementById('filtrospor').setAttribute('aria-expanded','true');
  var f1 = document.getElementById('filtros1');
  var f2 = document.getElementById('filtros2');
  if (f1.classList.contains('show')) {
    f1.classList.remove('show');
  }else{
    f1.classList.add('show');
  }
  if (f2.classList.contains('show')) {
    f2.classList.remove('show');
  }else{
    f2.classList.add('show');
  }
}





// var x = document.getElementById('fil1');
// x.onclick = function() {fil1()};
//
// function fil1(){
//     x.classList.toggle('active');
// }
//
// var c = document.getElementById('fil2');
// c.onclick = function() {fil2()};
//
// function fil2(){
//     c.classList.toggle('active');
// }
//
// var v = document.getElementById('fil3');
// v.onclick = function() {fil3()};
//
// function fil3(){
//     v.classList.toggle('active');
// }



var numero = [0];
for (var i = 0; i < 10000; i++) {

  numero.push(1);

}
function cantidad(id,num,stock, price){

  if (numero[id] <= 1 && num < 0) {
    alert('Debe poner al menos 1');
  }else{
    if (numero[id] >= stock && num > 0) {
      alert('Limite de stock');
    }else{
    numero[id] = numero[id] + num;
    document.getElementById('pro' + id).setAttribute('value',numero[id]);
    document.getElementById('cua' + id).setAttribute('value',numero[id]);
    document.getElementById('pro' + id).innerHTML = numero[id];
    document.getElementById('cua2' + id).innerHTML = numero[id] * price;
    }
  }
}
