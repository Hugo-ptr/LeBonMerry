const verifnom = /^[a-zéèïîê]+$/i;
const veriftxt = /^[a-zéèïîê 0-9]+$/i;
function increm(element){
    let elementP = element.parentNode;
    if (elementP.querySelector('#val').value < parseInt(elementP.querySelector('#stockv').innerText,10)) {
        elementP.querySelector('#val').value = parseInt(elementP.querySelector('#val').value,10) +1;
    }
}
function decrem(element){
    let elementP = element.parentNode;
    if (elementP.querySelector('#val').value > 1) {
        elementP.querySelector('#val').value = elementP.querySelector('#val').value-1;
    }
}
function Afficher(){
    if (document.querySelectorAll('.stock')[0].style.display == "block") {
        for (let i = 0; i < document.querySelectorAll('.stock').length; i++) {
            document.querySelectorAll('.stock')[i].style.display = "none"
        }
        
    } else {
        for (let i = 0; i < document.querySelectorAll('.stock').length; i++) {
            document.querySelectorAll('.stock')[i].style.display = "block"
        }
    }
}
function Verif(){
    let email = document.querySelector('#mail');
    let nom = document.querySelector('#name');
    let text = document.querySelector('#msg');

  if(email.validity.typeMismatch == true) {
    email.setCustomValidity("Il me faut un e-mail !");
    email.style.borderColor = "red";
  } else {
    email.setCustomValidity("");
    email.style.borderColor = "black";
  }
  if (!verifnom.test(nom.value)) {  
    nom.style.borderColor = "red";
    nom.setCustomValidity("les caractères ne sont pas bon");
  }else{
    nom.setCustomValidity("");
    nom.style.borderColor = "black";
  }
  if (!veriftxt.test(text.value)) {  
    text.style.borderColor = "red";
    text.setCustomValidity("les caractères ne sont pas bon");
  }else{
    text.setCustomValidity("");
    text.style.borderColor = "black";
  }
}
function zoomIn(event) {
    var element = document.getElementById("overlay");
    element.style.display = "inline-block";
    var img = document.getElementById("imgZoom");
    var posX = event.offsetX ? (event.offsetX) : event.pageX - img.offsetLeft;
    var posY = event.offsetY ? (event.offsetY) : event.pageY - img.offsetTop;
    element.style.backgroundPosition = (-posX * 4) + "px " + (-posY * 4) + "px";
  }
  function zoomOut() {
    var element = document.getElementById("overlay");
    element.style.display = "none";
  }

