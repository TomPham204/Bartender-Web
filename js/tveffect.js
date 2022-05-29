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
}

function resetState(element) {
  element.style.border = "none";
}
