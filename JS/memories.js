const game = document.getElementById("game");
const startButton = document.querySelector(".start");
const colorBoxes = document.getElementsByClassName("color-box");
const msg = document.querySelector(".message");
const colors = ["red", "green", "blue", "yellow"];
let sequence = [];
let playerSequence = [];
let level = 1;

// Fonction pour générer une séquence aléatoire
function generateSequence() {
    for (let i = 0; i < level; i++) {
        let randomColor = colors[Math.floor(Math.random() * colors.length)];
        sequence.push(randomColor);
    }
}

// Fonction pour afficher la séquence à l'utilisateur
function displaySequence() {
    let i = 0;
    let interval = setInterval(() => {
        colorBoxes[colors.indexOf(sequence[i])].classList.add("highlight");
        setTimeout(() => {
            colorBoxes[colors.indexOf(sequence[i])].classList.remove("highlight");
            i++;
            if (i === sequence.length) {
                clearInterval(interval);
            }
        }, 500);
    }, 1000);
}

// Fonction pour démarrer le jeu
function startGame() {
    startButton.disabled = true;
    generateSequence();
    displaySequence();
}

// Fonction pour vérifier la séquence du joueur
function checkSequence() {
    for (let i = 0; i < playerSequence.length; i++) {
        if (playerSequence[i] !== sequence[i]) {
            return false;
        }
    }
    return true;
}

// Fonction pour passer au niveau suivant
function nextLevel() {
    level++;
    sequence = [];
    playerSequence = [];
    startGame();
}

// Fonction pour réinitialiser le jeu
function resetGame() {
    sequence = [];
    playerSequence = [];
    level = 1;
    startButton.disabled = false;
}

for (let i = 0; i < colorBoxes.length; i++) {
    colorBoxes[i].addEventListener("click", () => {
        playerSequence.push(colors[i]);
        if (!checkSequence()) {
            msg.innerHTML = "<h3>Perdu !</h3>"
            setTimeout(function () {
                window.location.href = ' ../Gain-Exp/addxp.php?end_game=lose';
            }, 1000)
        } else if (playerSequence.length === sequence.length) {
            msg.innerHTML = "<h3>Bravo !</h3>"
            setTimeout(() => {
                msg.innerHTML = "";
            }, 2000);
            if (level >= 5) {
                setTimeout(function () {
                    window.location.href = ' ../Gain-Exp/addxp.php?end_game=win';
                }, 1000)
            } else {
                nextLevel();
            }
        }
    });
}

startButton.addEventListener("click", startGame);


