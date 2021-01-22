
const loginEmail = document.getElementById('login-email');
const loginPassword = document.getElementById('login-password');
const loginForm = document.getElementById('login-form');
const loginError = document.getElementById('login-error');

loginForm.addEventListener('submit', (e)=>{
    e.preventDefault()
    checkLoginInput();
})

function checkLoginInput(){
    window.localStorage.setItem("loginEmailValue",loginEmail.value )
    window.localStorage.setItem("loginPasswordValue",loginPassword.value )

    const loginFormValue = loginForm.value;

    if (localStorage.getItem("loginEmailValue")!== localStorage.getItem("emailValue")){
        loginError.innerHTML = 'Wrong email'
    }else{
        window.location.replace("index.html")
        loginError.innerText = ""
    }
}