var colors = generateRandomColors(6);

var squares = document.querySelectorAll(".squares");
var pickedColor = pickColor();
var colorDisplay = document.getElementById("colorDisplay");
var messageDisplay = document.querySelector("#message");

colorDisplay.textContent = pickedColor;


for(i=0; i<squares.length; i++){
    //add initial colors to squares//
    squares[i].style.backgroundColor = colors[i];
    //add click listeners to squares
    squares[i].addEventListener("click",function(){
        //grab color of clicked square
        var clickedColor = this.style.backgroundColor;
        //compare color to picked color
        if(clickedColor == pickedColor){
            messageDisplay.textContent = "correct";
            changeColors(clickedColor);
        } else{
            this.style.backgroundColor = "black";
            messageDisplay.textContent = "try again";
        }
    });
}

function changeColors(color){
    for(i=0; i<squares.length; i++){
        squares[i].style.backgroundColor = color;
    }

}

function pickColor(){
    //pick a random number
    var random = Math.floor(Math.random * colors.length);
    return colors[random];
    //use the number to 
}

function generateRandomColors(num){
    //make an array
    var arr = []
    //repeat num times
    for(var i=0; i<num; i++){
        //get random color and push into arr


    }
}

function randomColor(){
   var r = Math.floor( Math.random() * 256);
   var g = Math.floor( Math.random() * 256)
   var b = Math.floor( Math.random() * 256)

   return "rgb(" + r + "," + g + "," + b + ")";
}