var button = document.querySelector(".it");
button.addEventListener("click", function(){
    console.log("the button has been clicked");
}); /*this works that the button with the class it console.log"the button has been clicked" when clicked and not the other buttons on the page*/

var button = document.querySelector(".it");
var isYellow = false;
if(isYellow){
    button.addEventListener("click", function(){
        document.body.style.backgroundColor = "white"; 
        isYellow = false;
}else{
    button.addEventListener("click", function(){
        document.body.style.backgroundColor = "yellow";
}
// button.addEventListener("click", function(){
//     document.body.style.backgroundColor = "yellow";
// });


