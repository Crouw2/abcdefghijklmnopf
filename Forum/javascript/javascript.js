var loginEl = document.querySelector('.loginRegister_js')

openLogin = function () {
    loginEl.style.display = 'flex'
}

loginEl.onclick = function (ev) {
    if (ev.path[0].classList.value == 'loginRegister_js') {
        loginEl.style.display = 'none'
    }
}