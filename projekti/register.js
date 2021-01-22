
const email = document.getElementById('email')
const password = document.getElementById('register-password')
const password2 = document.getElementById('register-confirm')
const form = document.getElementById('form')
const errorElement = document.getElementById('register-error')

form.addEventListener('submit', (e)=>{
     e.preventDefault()
     checkInputs();
})



function checkInputs(){
     window.localStorage.setItem("emailValue",email.value)
     window.localStorage.setItem("passwordValue",password.value)
     window.localStorage.setItem("password2Value",password2.value)

     if ( password.value !== password2.value){
          errorElement.innerHTML = "Passwords Dont match"
     }else{
          errorElement.innerHTML = null
          window.location.replace("index.html")
     }
}