var count = 0; //use var for bigger scope. Let is for within a local function only
var isCompleted = false;

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
  count += 1;
  console.log(element.id);
  console.log(count);
}

function resetState() {
  elements = document.getElementsByClassName("ingredient-img");
  for (var i = 0; i < elements.length; i++) {
    elements[i].style.border = "none";
  }
}

function showBottle() {
  item = document.getElementById("bottle");
  item.style.display = "block";
}

function hideBottle() {
  item = document.getElementById("bottle");
  item.style.display = "none";
}

function verify() {
  if (count === 3) {
    if (isCompleted == true) {
      hideBottle();
      resetState();
      return;
    }
    showBottle();
    isCompleted = true;
  } else {
    console.log(count + " not enough ingredients");
    resetState();
    count = 0;
  }
}
