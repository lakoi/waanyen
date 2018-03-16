<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<div class="buttons">
  <p class="intro">Click the <code>border-box</code> button to fix the layout with the power of Box Sizing!</p>
  <button id="content">content-box</button>
  <button id="border">border-box</button>
</div>
<div class="parent">
  <p>Parent div with 50% width.</p>
  <div class="child">
    <p>Child div with 90% width, 4px black border, and 20% padding </p>
  </div>
  <div class="twins">
    <p>Child div with 50% width, 4px black border, and 1em padding</p>
  </div>
  <div class="twins">
    <p>Child div with 50% width, 4px black border, and 1em padding</p>
  </div>
</div>
<style>
  .parent {
  width: 100%;
  border: 5px solid red;
  float: left;
}

.child {
  width: 100%;
  padding: 100%;
  border: 4px solid black;
  margin: .5em auto;
}

.twins {
  width: 100%;
  padding: 1em;
  border: 4px solid black;
  float: left;
}


/* styling for Pen, not related to box-sizing or layout */

body {
  font-family: sans-serif;
  font-size: 1.1em;
}

.buttons {
  margin-bottom: .5em;
}

p:not(.intro) {
  text-align: center;
}</style>
<script>$("#content").on("click", function() {
  $("*").css("box-sizing", $(this).text());
});

$("#border").on("click", function() {
  $("*").css("box-sizing", $(this).text());
});</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
