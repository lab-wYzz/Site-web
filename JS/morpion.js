const cases = [...document.getElementsByClassName("case")];
const message = document.getElementById("message");
let joueur = document.getElementById("joueur");
let score1 = document.getElementById("score1");
let score2 = document.getElementById("score2");
let scoreNul = document.getElementById("scoreNul");

// mémoire des stats du jeu
let state = {
  joueurEnCours: 1,
  scoreJ1: 0,
  scoreJ2: 0,
  matchNul: 0,
  c1: 0,
  c2: 0,
  c3: 0,
  c4: 0,
  c5: 0,
  c6: 0,
  c7: 0,
  c8: 0,
  c9: 0,
};
const resetState = () => {
  joueurEnCours = 1;
  state.c1 = 0;
  state.c2 = 0;
  state.c3 = 0;
  state.c4 = 0;
  state.c5 = 0;
  state.c6 = 0;
  state.c7 = 0;
  state.c8 = 0;
  state.c9 = 0;
};
const verifierVictoire = () => {
  if (
    (state.c1 == state.c2 && state.c2 == state.c3 && state.c1 > 0) ||
    (state.c1 == state.c4 && state.c4 == state.c7 && state.c1 > 0) ||
    (state.c1 == state.c5 && state.c5 == state.c9 && state.c1 > 0) ||
    (state.c3 == state.c5 && state.c5 == state.c7 && state.c7 > 0) ||
    (state.c2 == state.c5 && state.c5 == state.c8 && state.c2 > 0) ||
    (state.c3 == state.c6 && state.c6 == state.c9 && state.c3 > 0) ||
    (state.c4 == state.c5 && state.c5 == state.c6 && state.c4 > 0) ||
    (state.c7 == state.c8 && state.c8 == state.c9 && state.c7 > 0)
  ) {
    return true;
  } else if (
    state.c1 !== 0 &&
    state.c2 !== 0 &&
    state.c3 !== 0 &&
    state.c4 !== 0 &&
    state.c5 !== 0 &&
    state.c6 !== 0 &&
    state.c7 !== 0 &&
    state.c8 !== 0 &&
    state.c9 !== 0
  ) {
    return null;
  } else {
    return false;
  }
};


const jouerCase = (e) => {
  let idCase = e.target.id;
  // si case déjà jouée on ne fait rien
  if (state[idCase] !== 0) return;
  state[idCase] = state.joueurEnCours;
  let isVctoire = verifierVictoire();
  if (isVctoire === true) {
    e.target.textContent = "X";
    setTimeout(function () {
      window.location.href = ' ../Gain-Exp/addxp.php?end_game=win';
    }, 1000)
    // si victoire
    // if (state.joueurEnCours == 1) {
    //   state.scoreJ1++;
    //   score1.textContent = state.scoreJ1;
    // } else {
    //   state.scoreJ2++;
    //   score2.textContent = state.scoreJ2;
    // }
    // resetState();
    // cases.forEach((c) => (c.textContent = ""));

  } else if (isVctoire === null) {
    e.target.textContent = "X";
    setTimeout(function () {
      window.location.href = ' ../Gain-Exp/addxp.php?end_game=lose';
    }, 1000)
    // si nul
    // alert("match nul");
    // state.matchNul++;
    // scoreNul.textContent = state.matchNul;
    // joueur.textContent = "1";
    // resetState();
    // cases.forEach((c) => (c.textContent = ""));
  } else if (isVctoire === false) {
    // sinon on continue le jeu
    if (state.joueurEnCours == 1) {
      state.joueurEnCours = 2;
      e.target.textContent = "X";
      joueur.textContent = "2";

      jouerTourOrdinateur();
    } else {
      state.joueurEnCours = 1;
      e.target.textContent = "O";
      joueur.textContent = "1";
    }
  }
};

const jouerTourOrdinateur = () => {
  // choisir une case aléatoire qui n'a pas encore été jouée
  let casesDisponibles = [];
  for (let i = 1; i <= 9; i++) {
    if (state["c" + i] === 0) {
      casesDisponibles.push("c" + i);
    }
  }
  let indexCase = Math.floor(Math.random() * casesDisponibles.length);
  let caseAleatoire = casesDisponibles[indexCase];
  state[caseAleatoire] = state.joueurEnCours;
  let caseDOM = document.getElementById(caseAleatoire);
  caseDOM.textContent = "O";
  let isVctoire = verifierVictoire();
  if (isVctoire === true) {
    setTimeout(function () {
      window.location.href = ' ../Gain-Exp/addxp.php?end_game=lose';
    }, 1000)
    // si victoire de l'ordinateur
    // state.scoreJ2++;
    // score2.textContent = state.scoreJ2;
    // resetState();
    // caseDOM.textContent = "O";
    // cases.forEach((c) => (c.textContent = ""));
  } else if (isVctoire === null) {
    setTimeout(function () {
      window.location.href = ' ../Gain-Exp/addxp.php?end_game=lose';
    }, 1000)
    // si nul
    // state.matchNul++;
    // scoreNul.textContent = state.matchNul;
    // joueur.textContent = "1";
    // reset
    // resetState();
    // cases.forEach((c) => (c.textContent = ""));
  } else if (isVctoire === false) {
    // sinon on continue le jeu
    state.joueurEnCours = 1;
    joueur.textContent = "1";
  }
};

cases.forEach((c) => c.addEventListener("click", jouerCase));

// header("Location: Addxp.php?xp=10")

