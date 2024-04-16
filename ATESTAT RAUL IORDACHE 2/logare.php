<?php
include("include/header.php");
include("include/menu.php");
?>

<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-6">
      <form action="" method="GET" class="bg-black text-white p-4 shadow-sm rounded">
        <h2 class="mb-4 text-center">Logare</h2>
        <div class="form-group">
          <label for="username" class="text-white">Nume de utilizator:</label>
          <input type="text" class="form-control bg-black text-white" id="username" name="username" placeholder="Marcel075">
        </div>
        <div class="form-group">
          <label for="password" class="text-white">Parola:</label>
          <input type="password" class="form-control bg-black text-white" id="password" name="password" placeholder="Introduceți parola">
        </div>
        <div class="row">
          <div class="col">
            <button type="submit" class="btn btn-primary btn-block">Intră în cont</button>
            <div class="form-text text-center mt-2">Nu aveți cont? <a href="inregistrare.php">Înregistrați-vă aici</a></div>
          </div>
          <div class="col">
            
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
