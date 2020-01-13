
<?php 
  $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>


<header>
      <a href="index.php">
        <img class="Headerlogo" src="vendor/images/Webp.net-resizeimage.png" alt="" />
      </a>
</header>

    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#"> </a>
      <button class="navbar-toggler ml-auto custom-toggler" type="button" data-toggle="collapse"
        data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
          <i class="fa fa-navicon"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav navbar">
          <a 
          id="<?= ($activePage == 'portfolio' || $activePage == 'lobrotterdam' || $activePage == 'introsign' 
          || $activePage == 'reinieracademie' ||  $activePage == 'tu-delft' || $activePage == 'douwes' || 
          $activePage == 'muzee' || $activePage == 'metenwegen' || $activePage == 'hoorneman' ) ? 'Current':''; ?>"  
          class="nav-item nav-link" href="portfolio.php">PORTFOLIO <span class="sr-only">(current)</span></a>
          <a id="<?= ($activePage == 'aanpak') ? 'Current':''; ?>"  class="nav-item nav-link" href="aanpak.php">AANPAK</a>
          <a id="<?= ($activePage == 'opdrachtgevers') ? 'Current':''; ?>" class="nav-item nav-link" href="opdrachtgevers.php">OPDRACHTGEVERS</a>
          <a id="<?= ($activePage == 'overons') ? 'Current':''; ?>" class="nav-item nav-link" href="overons.php">OVER ONS</a>
          <a id="<?= ($activePage == 'contact') ? 'Current':''; ?>" class="nav-item nav-link" href="contact.php">CONTACT</a>
        </div>
      </div>
    </nav>