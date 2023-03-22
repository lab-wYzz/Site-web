//Fenetre modal
const modalBtn = document.getElementById("modal-btn");
const modal = document.getElementById("modal");
const overlay = document.querySelector(".overlay");

if (localStorage.getItem("popupClosedJustePrix")) {
    modal.style.display = "none";
    overlay.style.display = "none";
}

const closePopup = () => {
    modal.style.opacity = "0";
    modal.style.transform = "translateX(1200px)";
    overlay.style.opacity = "0";
    // localStorage.setItem("popupClosedJustePrix", true);
};

modalBtn.addEventListener("click", (e) => {
    e.preventDefault();
    closePopup();
});