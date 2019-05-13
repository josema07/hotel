class Burger{
  constructor(btn, modal){
    this.btn = document.querySelector(btn);
    this.modal = document.querySelector(modal);
    this.bindEvents();

  }

  bindEvents(){

    if(this.modal.style.display != 'none'){
        this.modal.style.display = 'none';
      }

    this.btn.addEventListener('click', ()=>{
      if(this.modal.style.display != 'grid'){
        this.modal.style.display = 'grid';
      }else{
        this.modal.style.display = 'none';
      }
    })
  

  }
}

function modal() {
  new Burger(".cellphone i", ".modal-cell");
}


  modal();