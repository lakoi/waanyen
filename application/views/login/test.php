<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>"Waanyen"</title>
    <style>
  p {
    color: red;
  }
  span {
    color: blue;
  }
  </style>

  <script>
$(document).ready(function(){

 $("#btn1").click(function(){
  $("p").append(" <b>Appended text</b>.");
 });

 $("#btn2").click(function(){
  $("ol").append("<li>Appended item</li>");
 });

 $("#btn3").click(function(){
  $("ol").prepend("<b>Prepended text</b>. ");
 });

 $("#btn4").click(function(){
  $("img").before("<b>Before</b>");
 });

 $("#btn5").click(function(){
  $("img").after("<i>After</i>");
 });

});
</script>
</head>

<body>
<p>This is a paragraph.</p>
<p>This is another paragraph.</p>
<ol>
 <li>List item 1</li>
 <li>List item 2</li>
 <li>List item 3</li>
</ol>

<button id="btn1">Append text</button>
<button id="btn2">Append list items</button>
<button id="btn3">Prepend text</button>
<button id="btn4">Insert before</button>
<button id="btn5">Insert after</button>

</body>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
