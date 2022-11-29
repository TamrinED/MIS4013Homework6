<!DOCTYPE html>
<html>
<title>Homework6</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<h2 class="w3-center">Manual Slideshow</h2>

<div class="w3-content w3-display-container">
  <img class="mySlides1" src="img_snowtops.jpg" style="width:100%">
  <img class="mySlides1" src="img_lights.jpg" style="width:100%">
  <img class="mySlides1" src="img_mountains.jpg" style="width:100%">
  <img class="mySlides1" src="img_forest.jpg" style="width:100%">
  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1, 0)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1, 0)">&#10095;</button>
</div>

<div class="w3-content w3-display-container">
  <img class="mySlides2" src="img_la.jpg" style="width:100%">
  <img class="mySlides2" src="img_ny.jpg" style="width:100%">
  <img class="mySlides2" src="img_chicago.jpg" style="width:100%">
  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1, 1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1, 1)">&#10095;</button>
</div>

<script>
var slideIndex = [1,1];
var slideId = ["mySlides1", "mySlides2"]
showDivs(1, 0);
showDivs(1, 1);

function plusDivs(n, no) {
  showDivs(slideIndex[no] += n, no);
}

function showDivs(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>

</body>
</html>
