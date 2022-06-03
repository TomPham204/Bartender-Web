<?php 

@include 'config.php';
session_start();

if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beverage Site</title>
    <link rel="stylesheet" href="css/index.css" />
    <script src="js/tveffect.js"></script>
  </head>
  <body>
    <div class="grid-container">
      <nav class="flex navbar">
        <span class="logo">Webapp pj</span>
        <h2 id="btn" onclick="zoomOut()">START!</h2>
        <div class="nav">
          <p>
            Welcome <span><?php echo $_SESSION['user_name'] ?></span>
          </p>
          <a href="logout.php" class="" btn>Logout</a>
        </div>
      </nav>
      <div id="i-panel" class="ingredient-container hidden">
        <input type="button" value="Start the magic" onclick="verify()" />
        <h3 id="main-ingredient">Main Ingredient (Choose one)</h3>
        <img
          id="coffee"
          class="ingredient-img"
          src="img/coffee.png"
          alt="Coffee"
          onclick="clicked(this)"
        />
        <img
          src="img/juice.png"
          alt="Juice"
          id="juice"
          class="ingredient-img"
          onclick="clicked(this)"
        />
        <img
          src="img/tea.png"
          alt="Tea"
          id="tea"
          class="ingredient-img"
          onclick="clicked(this)"
        />
        <h3 id="mix">Mix (Choose two)</h3>
        <img
          src="img/caramel.png"
          alt="Caramel"
          id="caramel"
          class="ingredient-img"
          onclick="clicked(this)"
        />
        <img
          src="img/fizzy.png"
          alt="Fizzy"
          id="fizzy"
          class="ingredient-img"
          onclick="clicked(this)"
        />
        <img
          src="img/mint.png"
          alt="Mint"
          id="mint"
          class="ingredient-img"
          onclick="clicked(this)"
        />
        <img
          src="img/milk.png"
          alt="Milk"
          id="milk"
          class="ingredient-img"
          onclick="clicked(this)"
        />
      </div>
    </div>
    <div>
      <img id="bg" class="bg-large" src="img/bg-tv.png" alt="Bar Background" />
    </div>
    <div id="bottle-bg">
      <h3></h3>
      <img
        id="bottle"
        class="bottle"
        src="img/juice-bottle.png"
        alt="Bottle of liquid"
      />
    </div>
  </body>
</html>
