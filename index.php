<?php
  //Chama a barra de navegação superior
  //require "header.php";
?>
  <title> Crônicas de Omeria </title>
  <link rel="stylesheet" href="css/style.css">



  <nav id='nav'>
    <div class="logo">
      <h4><a href="#">OMERIA</a></h4>
    </div>
    <ul>
      <li><a href = "#section1"> home </a></li>
      <li><a href = "#section2"> news </a></li>
      <li><a href = "#section3"> blog </a></li>
      <li><a href = "#section4"> about </a></li>
      <li><a href = "#section5"> contact </a></li>
    </ul>
  </nav>
  <!--div class="verticalspace"></div-->

  <script type="text/javascript">
    var nav = document.getElementById('nav');

      window.onscroll = function(){
        if (window.pageYOffset >100){
          nav.style.background = "#fff";
        }
        else{
          nav.style.background = "transparent";
        }
      }
  </script>


  <main>


    <div id ="section1">
      <h1 class="title"> CRÔNICAS DE OMERIA </h1>
    </div>
    <div id ="section2">
      <h1> NEWS SECTION </h1>
    </div>
    <div id ="section3">
      <h1> BLOG SECTION </h1>
    </div>
    <div id ="section4">
      <h1> ABOUT SECTION </h1>
    </div>
    <div id ="section5">
      <h1> CONTACT SECTION </h1>
    </div>



    </div>


  </main>
