<?php
include("include/header.php");
include("include/menu.php");
?>

<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-6">
      <form action="" method="GET" class="bg-black text-white p-4 shadow-sm rounded">
        <h2 class="mb-4 text-center">Înregistrare</h2>
        <div class="form-group">
          <label for="username">Nume de utilizator:</label>
          <input type="text" class="form-control bg-black text-white" id="username" name="username" placeholder="IonIonescu05">
        </div>
        <div class="form-group">
          <label for="email">Adresa de email:</label>
          <input type="email" class="form-control bg-black text-white" id="email" name="email" placeholder="ionionescu@gmail.com">
        </div>
        <div class="form-group">
          <label for="password1">Parola:</label>
          <input type="password" class="form-control bg-black text-white" id="password1" name="password1" placeholder="Introduceți parola">
        </div>
        <div class="form-group">
          <label for="password2">Rescrie parola:</label>
          <input type="password" class="form-control bg-black text-white" id="password2" name="password2" placeholder="Introduceți din nou parola">
        </div>
        <div class="row">
          <div class="col">
            <button type="submit" class="btn btn-primary btn-block">Înregistrează-te</button>
          </div>
          <div class="col">
            <div class="form-text text-center mt-2">Ai deja cont? <a href="logare.php">Loghează-te</a></div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<footer class="footer">
  <div class="container text-center">
    AutoDeal 2024
  </div>
</footer>

</body>
</html>
