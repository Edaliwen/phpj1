<?php
    include("assets/inc/headFront.php");
?>
<title>Formulaire méthode GET</title>
<?php
    include("assets/inc/headerFront.php");
?>
<main class="container">
<form action="userGet.php" class="row g-3 needs-validation" method="get" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Prénom</label>
    <input type="text"  name="prenom" class="form-control" id="validationCustom01" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Nom</label>
    <input type="text"  name="nom" class="form-control" id="validationCustom02" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-outline-primary" type="submit">Valider</button>
  </div>
</form>
</main>
<?php
    include("assets/inc/footerFront.php");
?>