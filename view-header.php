<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $pageTitle ?></title>
    
    <!-- Include Bootstrap CSS from a CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <!-- Navbar customized for Vapor theme -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Game-View.php">Games</a>
                        </li>
                        <!-- ... other nav items ... -->
                        <li class="nav-item">
                            <a class="nav-link" href="Player-View.php">Player Roster</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Passing-View.php">Passing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Receiving-View.php">Receiving</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Rushing-View.php">Rushing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Kicking-View.php">Kicking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Defense-View.php">Defense</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Additional header content here -->
    </div>
    
    <!-- Include Bootstrap JavaScript dependencies (jQuery, Popper.js, Bootstrap JS) from CDNs -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
