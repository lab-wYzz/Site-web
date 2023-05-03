
var box = document.getElementById('inscrip');
var menu = document.getElementById("menu-button");
var header = document.querySelector("header");
var content = document.getElementById("to_blur");
var nodes = document.getElementById("login").getElementsByTagName('*');
var first = 0;


// active/désactive les autres parties de la page qui ne font pas parti de la zone inscription
function stop(boo) {
  for (var i = 0; i < nodes.length; i++) {
    if (boo == true) {
      nodes[i].disabled = !nodes[i].disabled;
    } else {
      nodes[i].disabled = false;
    }
  }
}


// active la zone inscription en cliquant sur le bouton
menu.onclick = function () {
  menu.classList.toggle('active');
  box.classList.toggle('active');
  header.classList.toggle("active");
  content.classList.toggle("active");
  stop(true);
}


// lors d'un clic externe à la zone d'incription ferme la partie inscription
document.onclick = function (event) {
  if (event.target.id !== 'inscrip' && !event.target.classList.contains('items') && event.target.id !== 'menu-button') {
    menu.classList.remove('active');
    box.classList.remove('active');
    header.classList.remove("active");
    content.classList.remove("active");
    stop(false);
  }
}


// affiche ou cache le mdp en cliquant sur le bouton
var pswrd = document.getElementById("pswrd");
var toggleBtn = document.getElementById("toggleBtn");

toggleBtn.onclick = function () {
  if (pswrd.type === 'password') {
    pswrd.setAttribute('type', 'text');
    toggleBtn.classList.add('hide');
  } else {
    pswrd.setAttribute('type', 'password');
    toggleBtn.classList.remove('hide');
  }
}


// empêche de s'inscrire si le mdp est différent de celui de vérification
var inscription = document.getElementById('inscription');
var email = document.getElementById('email');
var pass = document.getElementById('pass');
var pass_conf = document.getElementById('pass_conf');
var submit = document.getElementById('submit');

inscription.addEventListener("submit", function (event) {
  if (pass.value !== pass_conf.value) {
    event.preventDefault();
  } else {

  }
})


// cache le message d'erreur au bout de 5s
setTimeout(() => {
  var message = document.getElementById('test_message');
  message.style.display = 'none';
}, 5000);





