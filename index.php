<?php
include("config.php");
include("include/header.php");
include("include/menu.php");
include("include/functions.php");
?>


<!DOCTYPE html>
<html lang="en">



</header>
</body>

<!-- <div>
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
  </div> -->
</nav>


<body>
  <h2 class="my-5">MASINI PE STOC</h2>
  <?php $masini_stoc = getToateMasinileStoc(4); ?>
  <section id="featured-cars" class="featured-cars">
    <div class="container">

      <div class="featured-cars-content">
        <div class="row">
          <?php foreach ($masini_stoc as $masina) : ?>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-featured-cars">
                <div class="featured-img-box">
                  <div class="featured-cars-img">
                    <img src="static/images/<?php echo $masina['Imagine'] ?>" alt="cars">
                  </div>
                  <div class="featured-model-info">
                    <p>
                      An fabricatie: <?php echo $masina['An_Fabricatie'] ?>
                      <span class="featured-mi-span"> 3100 mi</span>
                      <span class="featured-hp-span"> 240HP</span>
                      automatic
                    </p>
                  </div>
                </div>
                <div class="featured-cars-txt">
                  <h2><a href="#"><?php echo $masina['Marca'] ?></a></h2>
                  <h3>$<?php echo $masina['Pret'] ?></h3>
                  <p>
                    <?php echo $masina['Descriere'] ?>.
                  </p>
                </div>
              </div>
            </div>


          <?php endforeach; ?>
        </div>
      </div>
    </div><!--/.container-->

  </section><!--/.featured-cars-->
  <!--featured-cars end -->

  <h2 class="my-5">MASINI PE STOC</h2>
  <?php $masini_anunturi = getToateMasinileAnunt(4); ?>
  <section id="featured-cars" class="featured-cars">
    <div class="container">

      <div class="featured-cars-content">
        <div class="row">
          <?php foreach ($masini_anunturi as $masina) : ?>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-featured-cars">
                <div class="featured-img-box">
                  <div class="featured-cars-img">
                    <img src="static/images/<?php echo $masina['imagine'] ?>" alt="cars">
                  </div>
                  <div class="featured-model-info">
                    <p>
                      An fabricatie: <?php echo $masina['an_fabricatie'] ?>
                      <span class="featured-mi-span"> <?php echo $masina['kilometraj'] ?></span>
                      <span class="featured-hp-span"> 240HP</span>
                      automatic
                    </p>
                  </div>
                </div>
                <div class="featured-cars-txt">
                  <h2><a href="#"><?php echo $masina['marca'] ?></a></h2>
                  <h3>$<?php echo $masina['pret'] ?></h3>
                  <p>
                    <?php echo $masina['descriere'] ?>.
                  </p>
                </div>
              </div>
            </div>


          <?php endforeach; ?>
        </div>
      </div>
    </div><!--/.container-->

  </section><!--/.featured-cars-->
  <!--featured-cars end -->
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
      <button type="submit"><a href="vinde_masina.php">Vinde-ți Mașina</a></button>
    </form>
  </div>
  <div class="comanda-masina">
    <h2>Comandă o Mașină</h2>
    <p>Contactează-ne pentru a comanda mașina ta personalizată.</p>
    <img src="https://static.automarket.ro/img/auto_resized/db/article/050/915/968550l-1000x640-b-4ed86d4b.jpg">
    <br>
    <button type="submit"> <a href="comanda_masina.php">Mașini pe Comandă</a>
  </div>
</body>
</body>

</html>