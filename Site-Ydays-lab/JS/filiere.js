

//Fenetre modal
const modalBtn = document.getElementById("modal-btn");
const modal = document.getElementById("modal");
const overlay = document.querySelector(".overlay");


const closePopup = () => {
    modal.style.opacity = "0";
    modal.style.transform = "translateX(1200px)";
    overlay.style.opacity = "0";
    overlay.style.transform = "translateX(1200px)";
    // localStorage.setItem("popupClosedJustePrix", true);
};

modalBtn.addEventListener("click", (e) => {
    e.preventDefault();
    closePopup();
});