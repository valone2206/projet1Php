<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Projet1</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/superhero/bootstrap.min.css">
    </head>

    <body>

        <!--  Barre de Navigation     -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="acceuil.php">Projet 1</a>
            <button class="navbar-toggler" aria-expanded="false" aria-controls="navbarColor01" aria-label="Toggle navigation" type="button" data-target="#navbarColor01" data-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="acceuil.php">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="top10.php">Top 10</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="apropos.php">À Propos Du Site</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Recherche</button>
                </form>
            </div>
        </nav>



        <div class="container-fluid">
            <!--  Intro -->
            <div class="jumbotron" style="margin:1%">
                <h1 class="display-3 text-center">Bienvenue</h1>
                <blockquote class="blockquote text-center">
                    <p class="mb-0">“Une heure de lecture est le souverain remède contre les dégoûts de la vie.”</p>
                    <footer class="blockquote-footer">De <cite title="Source Title">Montesquieu</cite></footer>
                </blockquote>
            </div>
        </div>

        <div class="container-fluid" >
            <div class="jumbotron" style="margin:1%">
                <div class="row">
                    <!-- Body Gauche -->
                    <div class="col-sm-9">
                        <div class="row" style="margin-left:1%">
                            <div class="card border-primary mb-3" style="max-width: 20rem; margin-right: 10px">
                                <div class="card-header">Un trailer d'action pour la saison 2 de Marvel's Iron Fist</div>

                                <img src="images/iron1.jpg" class="img-responsive" alt="Cinque Terre" width="100%" height="100%"> 
                            </div>
                            <div class="card border-primary mb-3" style="max-width: 20rem; margin-right: 10px">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h4 class="card-title">Primary card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                            <div class="card border-primary mb-3" style="max-width: 20rem; margin-right:10px">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h4 class="card-title">Primary card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                            <div class="card border-primary mb-3" style="max-width: 20rem; margin-right:10px">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h4 class="card-title">Primary card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                            <div class="card border-primary mb-3" style="max-width: 20rem; margin-right:10px">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h4 class="card-title">Primary card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                            <div class="card border-primary mb-3" style="max-width: 20rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h4 class="card-title">Primary card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Body droite -->
                    <div class="col-sm-3">
                        <div class="row" style="margin-right: 1%">
                            <div class="list-group">
                                <a class="list-group-item list-group-item-action flex-column align-items-start active" href="#">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Le métro de NYC aux couleurs du jeu Spider-Man</h5>
                                        <small>16 août</small>
                                    </div>
                                </a>
                                <a class="list-group-item list-group-item-action flex-column align-items-start active" href="#">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Moonstruck (Image Comics) passe en publication directement en album</h5>
                                        <small>16 août</small>
                                    </div>

                                </a>
                                <a class="list-group-item list-group-item-action flex-column align-items-start active" href="#">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">MTelltale dévoile le planning de sorties des épisodes de The Walking Dead - The Final Season</h5>
                                        <small>16 août</small>
                                    </div>

                                </a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>




        <!-- Optional JavaScript -->      
        <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>

</html>