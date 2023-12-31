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
                <a class="navbar-brand" href="#">OU Football Stats</a>
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
                            <a class="nav-link" href="Game-Controller.php">Games</a>
                        </li>
                        <!-- ... other nav items ... -->
                        <li class="nav-item">
                            <a class="nav-link" href="Player-Controller.php">Player Roster</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Passing-Controller.php">Passing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Receiving-Controller.php">Receiving</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Rushing-Controller.php">Rushing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Kicking-Controller.php">Kicking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Defense-Controller.php">Defense</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</body>
</html>
