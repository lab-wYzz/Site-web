//Fenetre modal
const modalBtn = document.getElementById("modal-btn");
const modal = document.getElementById("modal");
const overlay = document.querySelector(".overlay");



modalBtn.addEventListener("click", (e) => {
    e.preventDefault();
   
});

let varCopie = [];
let varEssai = [];
let nbEssai = 0;
let codeplace = 0;
let BP = 0;
let MP = 0;
// const rouge = document.getElementById('rouge')
// const bleu = document.getElementById('bleu')

// const coul = [rouge, bleu]

let essai = document.getElementById('essai');

let place = document.getElementById('place');

let rougebut = document.getElementById('rouge');
rougebut.onclick = function () { Main('rouge', this.innerHTML = `<input class="button" type="button" value="R" id="rouge">`) };

let bleubut = document.getElementById('bleu');
bleubut.onclick = function () { Main('bleu', this.innerHTML = `<input class="button" type="button" value="B" id="bleu">`) };

let vertbut = document.getElementById('vert');
vertbut.onclick = function () { Main('vert', this.innerHTML = `<input class="button" type="button" value="V" id="vert">`) };

let jaunebut = document.getElementById('jaune');
jaunebut.onclick = function () { Main('jaune', this.innerHTML = `<input class="button" type="button" value="J" id="jaune">`) };

let rosebut = document.getElementById('cyan');
rosebut.onclick = function () { Main('cyan', this.innerHTML = `<input class="button" type="button" value="C" id="cyan">`) };

let orangebut = document.getElementById('orange');
orangebut.onclick = function () { Main('orange', this.innerHTML = `<input class="button" type="button" value="O" id="orange">`) };

let blancbut = document.getElementById('marron');
blancbut.onclick = function () { Main('marron', this.innerHTML = `<input class="button" type="button" value="M" id="marron">`) };

let varCoul = ['rouge', 'bleu', 'vert', 'jaune', 'cyan', 'orange', 'marron'];

let varOriginal = [];
for (let step = 0; step < 4; step++) {
    varOriginal = varOriginal.concat(Random_item(varCoul));
}


essai.innerHTML += "Essais \xa0 : <br>"
essai.innerHTML += "Essai " + (nbEssai + 1) + " \xa0 : \xa0 ";
place.innerHTML += "Bien placé : \xa0\xa0\xa0 Mal placé :"

function AddColor(color, place, element) {
    varEssai[place] = color;
    varCopie[place] = varOriginal[place];
    essai.innerHTML += element;
}

function Main(color, element) {
    if (nbEssai < 20 && BP < 4) {
        console.log(color)
        AddColor(color, codeplace, element);
        codeplace++;
        if (codeplace > 3) {
            BP = CalculBP(varCopie, varEssai);
            MP = CalculMP(varCopie, varEssai);
            place.innerHTML += "<br>" + BP + "\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0" + MP;
            if (BP < 4 && nbEssai < 20) {
                nbEssai++;
                if (nbEssai < 20) {
                    essai.innerHTML += "<br>Essai " + (nbEssai + 1) + " \xa0 : \xa0 ";
                } else {
                    essai.innerHTML += "<br>Vous avez perdu ! ";
                }
            } else {
                if (BP >= 4) {
                    essai.innerHTML += "<br>Vous avez gagné ! ";
                    $.ajax({
                        type: "POST",
                        success: function (response) {
                            console.log("OK => " + response);
                            location.reload();
                        },
                        error: function (response) {
                            console.log("ERREUR => " + response);
                        }
                    });
                }
            }
            codeplace = 0;
        }
    }
}

function Random_item(items) {
    return items[Math.floor(Math.random() * items.length)];
}

function CalculBP(vec1, vec2) {
    let bp = 0;
    for (let i = 0; i < 4; i++) {
        if (vec1[i] == vec2[i]) {
            bp++;
            vec1[i] = 'X';
            vec2[i] = 'Y';
        }
    }
    return bp;
}

function CalculMP(vec1, vec2) {
    let mp = 0;
    for (let i = 0; i < 4; i++) {
        for (let j = 0; j < 4; j++) {
            if (vec1[i] == vec2[j]) {
                mp++;
                vec1[i] = 'X';
                vec2[j] = 'Y';
            }
        }
    }
    return mp;
}





