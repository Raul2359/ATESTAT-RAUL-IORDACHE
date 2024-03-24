<?php
include("include/header.php");
include("include/menu.php");
?>


<!DOCTYPE html>
<html lang="en">

 
  
  </header>
  </body>
  
  <div>
    <form method="post" action="login.php">
      <label for="username">Utilizator:</label>
      <input type="text" id="username" name="username" required>
      <br>
      <label for="password">Parolă:</label>
      <input type="password" id="password" name="password" required>
      <br>
      <button type="submit">Conectare</button>
     
      <a href="inregistrare.php"type="button" class="btn btn-secondary">Creeaza cont</a>
    </form>
  </div>
</nav>
  
</head>
<div class="search-container">
  <form method="post" action="login.php">
    <label for="brand">Marca:</label>
    <select id="brand" name="brand" required>
      <option value="audi">Audi</option>
      <option value="bmw">BMW</option>
      <option value="mercedes">Mercedes</option>

    </select>
    <label for="model">Model:</label>
    <select id="model" name="model" required>
      <option value="a3">A3</option>
      <option value="seria 3">Seria 3</option>
      <option value="x3">X3</option>
      <option value="e-class">E-CLASS</option>
    </select>
    <label for="year">An Fabricatie:</label>
    <input type="number" id="year" name="year" min="1900" max="2024" required>

    <label for="fuel">Combustibil:</label>
    <select id="fuel" name="fuel" required>
      <option value="benzina">Benzina</option>
      <option value="motorina">Motorina</option>
    </select>
    <button type="submit">Cautare</button>
  </form>
</div>
</nav>
  <div id="rezultateCautare"></div>
  <style>
    
  </style>
</head>
<body>
  <h2>MASINI PE STOC</h2>
<div class="masina-container">
<div class="masina">
    <a href="masina1.php?id_masina=4">
        <img src="https://img-eu-2.trovit.com/img2ro/1t1j2nL1g61_/1t1j2nL1g61_.1_12.jpg" alt="BMW SERIA 3">
        <h2>BMW SERIA 3</h2>
        
 

    <a href="masina1.php?id_masina=1">
        <img src="https://frankfurt.apollo.olxcdn.com/v1/files/snazp1nz4rdy-RO/image;s=1000x700" alt="Audi A4">
        <h2>Audi A4</h2>
   
    <a href="masina1.php?id_masina=3">
        <img src="https://ireland.apollo.olxcdn.com/v1/files/eyJmbiI6IjJvaWg3ZWU0Y2ttNi1BVVRPVklUUk8iLCJ3IjpbeyJmbiI6InE3bXo1M2JpZnB6ay1BVVRPVklUUk8iLCJzIjoiMTYiLCJwIjoiMTAsLTEwIiwiYSI6IjAifV19.70I09RsqGcGKLXEYIMd7MdtzBX9BQSD_xhOPg0bBA5U/image" alt="Mercedes E-class">
        <h2>Mercedes E-CLASS</h2>
    </a>
</a>
</a>
</div>
    </div>
  <div class="despre-noi">
    <h2>Despre Noi</h2>
    <div class="despre-noi-content">
      <p>Suntem pe piata auto inca din 2010 iar scopul nostru este sa punem pe roti dorintele clientilor. Reusim sa facem asta cu o gama larga de autoturisme disponibile pentru persoanele fizice sau juridice si care vin la pachet cu: 

        -Kilometraj certificat
        -Verificate tehnic si estetic
        -Garantie 
        -Raport CARVERTICAL gratuit.</p>
    </div>
    <img src="https://t3.ftcdn.net/jpg/04/57/81/38/360_F_457813895_KuxSAilv7e7bdBunMFFxJUgkxCy2xQRI.jpg">
  </div>
  <div class="vinde-masina">
    <h2>Vinde-ți Mașina</h2>
    <p>Ai o masina si vrei s-o vinzi dar nu vrei bataia de cap cauzata de tot procesul de vanzare, raspuns la telefoane si intalniri cu potentiali clienti curiosi? Noi te putem ajuta!</p>
    <form>
      <img src="https://ireland.apollo.olxcdn.com/v1/files/eyJmbiI6Im41ZDJ2ZzZxcmd6bzMtQVVUT1ZJVFJPIn0.qbzo2WCIHqGqeBBGPSSatYxYJpvhVhuxUWDG6hTWA9U/image;s=644x461">
      <br>
      <button type="submit">Vinde-ti masina.</button>
    </form>
  </div>
  <div class="comanda-masina">
    <h2>Comandă o Mașină</h2>
    <p>Contactează-ne pentru a comanda mașina ta personalizată.</p>
    <img src="https://static.automarket.ro/img/auto_resized/db/article/050/915/968550l-1000x640-b-4ed86d4b.jpg">
    <br>
    <button type="submit">Comanda masina.</button>
  </div>
</body>
</body>
</html>