
let askName = document.querySelector(".askName");
let openCardBtn = document.querySelector(".openCard-btn");



function askForName() {
    let yourName="";
    while(yourName=="" || yourName === null){
        yourName = prompt("Wie heisst du?");
    }   

    askName.textContent = yourName;

}


askForName();


//open card
let cardClick = document.querySelector(".openCard-btn");
let leftSide = document.querySelector("#left-side");
let rightSide = document.querySelector("#right-side");
let cardText = document.querySelector(".card-text");
let card = document.querySelector(".card-toggle");
let cardInside = document.querySelector(".card-inside-container");
let windowHeight = window.innerHeight;

cardClick.addEventListener("click", function(){

   
        leftSide.classList.toggle("leftSideOpen");
        leftSide.classList.toggle("left-side-closed");
        rightSide.classList.toggle("rightSideOpen");
        rightSide.classList.toggle("right-side-closed");
        askName.style.display = 'none';
        card.classList.toggle("card");
        card.classList.toggle("no-card");
        cardText.textContent =  "Sunnys Geburtstagsparty";
        cardInside.classList.toggle("card-glow");

        if(cardClick.textContent === "hier oeffnen"){
            cardClick.textContent = "Close";
         /*   if(windowHeight < 500){
            cardClick.style.right = "-18%";
           }else if(windowHeight >= 500){
            cardClick.style.right = "5%";
           
           } */
           
        }else if(cardClick.textContent === "Close"){
            cardClick.textContent = "hier oeffnen";
           // cardClick.style.right = "30%";
        }
        
   
   

});
