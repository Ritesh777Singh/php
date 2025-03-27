<?php //1. Restaurant Food Category Program: Use a switch case to display the category (Starter/Main Course/Dessert) and dish based on user selection?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Restaurant</title>
    <link rel="stylesheet" href="./Q1.css" />
  </head>
  <body>
    <!-- header -->

    <header>
      <div class="logo">
        <p>Restaurant</p>
      </div>
      <nav>
        <ul>
          <li class="dropdown">
            <a href="">Starter</a>
            <ul class="dropdown-menu">
              <li><a href="">Air Fryer</a></li>
              <li><a href="">Batata Vada</a></li>
              <li><a href="">Arancini</a></li>
              <li><a href="">Garlic prawns</a></li>
              <li><a href="">Garlic bread</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="">Main Course</a>
            <ul class="dropdown-menu1">
              <li><a href=""> plain rice</a></li>
              <li><a href="">veg briyani</a></li>
              <li><a href="">paneer do piyaza</a></li>
              <li><a href="">gatte ki kadhi</a></li>
              <li><a href="">plain kadhi</a></li>
              <li><a href="">Roti</a></li>
              <li><a href="">tandoori roti</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="">Dessert</a>
            <ul class="dropdown-menu3">
              <li><a href="">butter percan</a></li>
              <li><a href="">angel food</a></li>
              <li><a href="">coconut</a></li>
              <li><a href="">red velvet</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </header>

    <!-- section  -->
    <section id="section-1">
      <div class="container">
        <div class="section-main">
          <div class="section-data">
            <h1>enjoy our delicious meal</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque
              reprehenderit optio quo ab ea tenetur dolores laudantium explicabo
              officia error recusandae repellat, nisi inventore doloremque rem
              voluptatum. Quis, rerum placeat.
            </p>
            <div>
                <a href="#">book a table</a>
            </div>
          </div>
          <div class="section-img">
            <img src="./food-1.png" alt="food">
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
