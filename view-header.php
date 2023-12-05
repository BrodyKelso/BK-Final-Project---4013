<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$pageTitle?></title>
    <!-- Link to your local custom Bootstrap CSS file with Vapor theme -->
    <link href="bootstrap.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <!-- Navbar customized for Vapor theme -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Teams.php">Games</a>
              </li>
              <!-- ... other nav items ... -->
              <li class="nav-item">
                <a class="nav-link" href="Players.php">Defense</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Additional header content here -->
    </div>
  </body>
</html>
