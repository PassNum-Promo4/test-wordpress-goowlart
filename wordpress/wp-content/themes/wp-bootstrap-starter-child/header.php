
<?php wp_head();
?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-animate-left w3-text-grey w3-collapse w3-top w3-center" style="z-index:3;width:300px;font-weight:bold" id="mySidebar"><br>
    <h3 class="w3-padding-64 w3-center"><b>ALEX<br>GOULART</b></h3>
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hide-large">CLOSE</a>
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button">PORTFOLIO</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">PROFIL</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACTER</a>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-white w3-xlarge w3-padding-16">
    <span class="w3-left w3-padding">ALEX GOULART</span>
    <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
</header>

<script>
// Script to open and close sidebar
function w3_open() {
		document.getElementById("mySidebar").style.display = "block";
		document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
		document.getElementById("mySidebar").style.display = "none";
		document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
	document.getElementById("img01").src = element.src;
	document.getElementById("modal01").style.display = "block";
	var captionText = document.getElementById("caption");
	captionText.innerHTML = element.alt;
}

</script>


