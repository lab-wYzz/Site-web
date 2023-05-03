const btnInfo = document.querySelector('.btnInfo')
const info = document.querySelector('.info')
const btnInfoClose = document.querySelector('.btnClose')

window.addEventListener('DOMContentLoaded', (event) => {
    document.querySelectorAll('.input-login').forEach(function (input) {
        if (input.value !== "") {
            input.parentNode.classList.add('animation');
        }
    });

    document.querySelectorAll('.login-input').forEach(function (input) {
        input.addEventListener('focus', function () {
            input.parentNode.classList.add('animation', 'animation-color');
        });

        input.addEventListener('focusout', function () {
            if (input.value === "") {
                input.parentNode.classList.remove('animation');
            }
            input.parentNode.classList.remove('animation-color');
        });
    });
});


btnInfo.addEventListener('click', () => {
    info.classList.add('presentation')
})

btnInfoClose.addEventListener('click', () => {
    info.classList.remove('presentation')
})
