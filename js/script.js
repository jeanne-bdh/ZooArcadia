const tokenCookieName = "accesstoken";
const roleCookieName = "role";
const logoutButton = document.getElementById("btn-logout");

logoutButton.addEventListener("click", logout);

function getRole() {
    return getCookie(roleCookieName);
}

function logout() {
    eraseCookie(tokenCookieName);
    eraseCookie(roleCookieName);
    window.location.reload();
}

function setToken(token) {
    setCookie(tokenCookieName, token, 7);
}

function getToken() {
    return getCookie(tokenCookieName);
}

function setCookie(name, value, days) {
    let expires = "";
    if (days) {
        let date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
    const nameEQ = name + "=";
    const ca = document.cookie.split(';');
    for (const c of ca) {
        const tr = c.trim();
        if (tr.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function eraseCookie(name) {
    document.cookie = name + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

function isConnected() {
    return getToken() != null && getToken != undefined;
}

if (isConnected()) {
    alert("Vous êtes connecté");
}
else {
    alert("Vous n'êtes pas connecté");
}

function showButtonsLoginLogout() {
    const userConnected = isConnected();

    let allElementsToShow = document.querySelectorAll('[data-show]');

    allElementsToShow.forEach(element => {
        switch (element.dataset.show) {
            case 'disconnected':
                if (userConnected) {
                    element.classList.add("d-none");
                }
                break;
            case 'connected':
                if (!userConnected) {
                    element.classList.add("d-none");
                }
                break;
        }
    })
}