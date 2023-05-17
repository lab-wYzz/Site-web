//Fenetre modal
const modalBtn = document.getElementById("modal-btn");
const modal = document.getElementById("modal");
const overlay = document.querySelector(".overlay");
const restartQuest = document.getElementById("restart-quest");

if (localStorage.getItem("popupClosed")) {
    modal.style.display = "none";
    overlay.style.display = "none";
    overlay.style.transform = "translateX(1200px)";
}

const closePopup = () => {
    modal.style.opacity = "0";
    modal.style.transform = "translateX(1200px)";
    overlay.style.opacity = "0";
    overlay.style.transform = "translateX(1200px)";
    localStorage.setItem("popupClosed", true);
};

modalBtn.addEventListener("click", (e) => {
    e.preventDefault();
    closePopup();
})




