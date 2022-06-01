var ingredientCount = 0; //use var for bigger scope. Let is for within a local function only
var idCount = 0; //use var for bigger scope
var isCompleted = false;
var idChosen = [];
var base = ["coffee", "juice", "tea"];

function zoomOut() {
  background = document.getElementById("bg");
  background.className = "bg-small";
  ingredient_panel = document.getElementById("i-panel");
  ingredient_panel.className = "ingredient-container visible";
  button = document.getElementById("btn");
  btn.style.visibility = "hidden";
}

function clicked(element) {
  element.style.visibility = "inherit";
  element.style.border = "5px solid rgba(255, 255, 255, 0)";
  ingredientCount += 1;
  idChosen.push(element.id);
}

function resetState() {
  console.log("resetted");
  elements = document.getElementsByClassName("ingredient-img");
  for (var i = 0; i < elements.length; i++) {
    elements[i].style.border = "none";
  }
  hideBottle();
  ingredientCount = 0;
  isCompleted = false;
  idChosen = [];
  idCount = 0;
}

function showBottle() {
  item = document.getElementById("bottle");
  item.style.display = "block";
  item = document.getElementById("bottle-bg");
  item.style.display = "block";
}

function hideBottle() {
  item = document.getElementById("bottle");
  item.style.display = "none";
}

function verify() {
  // check if already show bottle
  if (ingredientCount === 3) {
    if (isCompleted == true) {
      resetState();
      return;
    }
    // check if chosen 1 main ingredient (base) and 2 additional mixes
    for (var i = 0; i < idChosen.length; i++) {
      for (var j = 0; j < base.length; j++) {
        if (idChosen[i] === base[j]) {
          idCount += 1;
        }
      }
    }
    i = 0;
    j = 0;
    if (idCount == 1) {
      showBottle();
      isCompleted = true;
    } else {
      console.log("You should choose only 1 main and 2 other mixes");
      resetState();
    }
  } else {
    // check if choose more or less than 3 ingredients
    console.log(ingredientCount + " is not the right number of ingredients");
    resetState();
    return;
  }
}
