
<?php include('form/formVal.php'); ?>
<footer class="Footer">
    <div class="container">
      <div class="col-lg-8 ml-2">
        <h3>Binenkort met ons aan tafel?</h3>
        <p>
          Mail ons direct of laat je gegevens hier achter, zodat we via
          telefoon of <span>e-mail contact met je kunnen opnemen</span>
        </p>
      </div>
      <address>
        <span>De Ruyterstraat 36</span>
        <span>2518 AS Den Haag</span>
        <span>070 82 00 217</span>
        <a href="mailto:info@qabana.nl">info@qabana.nl</a>
      </address>
      <span class="error"> <?= $bedrijfErr ?></span>
      <span class="error"> <?= $nameErr ?></span>
      <span class="error"> <?= $telefoonErr ?></span>
      <span class="error"> <?= $emailErr ?></span>
      <span class="error"> <?= $berichtErr ?></span>
      <div class="succes"> <?= $succes ?></div>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <br />
        <div class="form-group">
          <label>Bedrijfsnaam</label>
          <input type="text" class="col-lg-3 col-md-4 col-sm-6" placeholder="Bedrijf" type="text" name="bedrijf" require value="<?= $bedrijf ?>" />
        </div>
        <div class="form-group">
          <label>Naam</label>
          <input type="text" class="col-lg-3 col-md-4 col-sm-6" placeholder="Naam" type="text" name="naam" require  value="<?= $naam ?>" />
        </div>
        <div class="form-group">
          <label>Telefoonnummer</label>
          <input type="text" class="col-lg-3 col-md-4 col-sm-6" placeholder="070 82 00 217" type="text" name="telefoon" require  value="<?= $telefoon ?>" />
        </div>
        <div class="form-group">
          <label>E-mail</label>
          <input type="text" class="col-lg-3 col-md-4 col-sm-6" placeholder="naam@email.nl" type="text" name="email" require  value="<?= $email ?>" />
        </div>
        <div class="form-group">
          <label>Bericht</label>
          <textarea class="form-control" id="text" placeholder="Waar wil je het met ons over hebben ?"
            rows="7" type="text" name="bericht" require  value="<?= $bericht ?>"></textarea>
        </div>
        <div class="form-group">
          <button  type="submit" name="submit" data-submit="..Sending" class="btn btn-outline-warning">
            Verstuur naar Qabana
          </button>
        </div>
      </form>
    </div>
  </footer>  
  <script src="vendor/jquery/jquery.scroll.js"></script>
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
