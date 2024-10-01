let loginForm = document.querySelector(".overlay");
let loginBtn = document.querySelector(".login-icon");
const overlayContainer = document.querySelector(".overlay-container");
const exitBtn = document.querySelector("#exit");

overlayContainer.style.display = "none";
// let loginBtn = document.querySelectorAll('.overlay');
// let loginForm = document.querySelector('.loginform');
loginForm.style.display = "none";

loginBtn.addEventListener("click", function(){
    loginForm.style.display = "block";

    overlayContainer.setAttribute("style", "display: flex;");


});

exitBtn.addEventListener("click", function(){
    overlayContainer.style.display = "none";

    console.log(exitBtn);
})