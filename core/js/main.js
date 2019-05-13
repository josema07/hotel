class IndexForSiblings{
  static get(el){
    let children = el.parentNode.children;

    for (var i = 0; i < children.length; i++) {
      let child = children[i];
      if(child == el) return i;
    }
  }
}

function mostrarEstado(estadoSelecionado){
  var resultado = document.getElementById('lista');
  var xmlhttp;

  if(window.XMLHttpRequest){
    xmlhttp = new XMLHttpRequest();
  }else{
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }

  if(estadoSelecionado === ''){
    resultado.innerHTML = "";
  }else{
    xmlhttp.onreadystatechange = function(){
      if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
        resultado.innerHTML = this.responseText;
      }
    }
    xmlhttp.open("GET","../action/getlista-action?estado="+estadoSelecionado,true);
    xmlhttp.send();
  }
}

class Slider{
  constructor(selector,movimiento=true){
    this.move = this.move.bind(this);
    this.moveByButton = this.moveByButton.bind(this);
    this.slider = document.querySelector(selector);
    this.itemsCount = this.slider.querySelectorAll(".container1 > *").length;
    this.interval = null;
    this.contador = 0;
    this.movimiento = movimiento;

    this.start();
    this.buildControls();
    this.bindEvents();
  }

  start(){
    if(!this.movimiento) return;
    this.interval = window.setInterval(this.move,4000);
  }

  restart(){
    if(this.interval) window.clearInterval(this.interval);
    this.start();
  }

  bindEvents(){
    this.slider.querySelectorAll(".controls1 li")
        .forEach(item =>{

          item.addEventListener("click",this.moveByButton)
        });
  }

  moveByButton(ev){
    let index = IndexForSiblings.get(ev.currentTarget);
    this.contador = index;
    this.moveTo(index);
    this.restart();
  }

  buildControls(){
    for (var i = 0; i < this.itemsCount; i++) {
      let control = document.createElement("li");

      if(i == 0) control.classList.add("active");

      this.slider.querySelector(".controls1 ul").appendChild(control);
    }
  }

  move(){
    this.contador++;
    if(this.contador > this.itemsCount - 1) this.contador = 0;
    this.moveTo(this.contador);
  }

  resetIndicator(){
    this.slider.querySelectorAll(".controls1 li.active")
        .forEach(item => item.classList.remove("active"));
  }

  moveTo(index){
    let left = index * 100;

    this.resetIndicator();
    this.slider.querySelector(".controls1 li:nth-child("+(index+1)+")").classList.add("active");

    this.slider.querySelector(".container1").style.left = "-"+left+"%";
  }
}

(function(){

  new Slider(".slider1",true);

})();
