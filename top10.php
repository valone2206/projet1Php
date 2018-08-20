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

        <div class="container-fluid" >
            <div class="jumbotron" style="margin:1%">
                <div class="cols-sm-9">
                    <div class="row">
                        <h1>Top 10 des Comics les plus chères</h1>
                        <button class="btn btn-primary btn-xs pull-rigth" type="button" style="border-radius: 10px; float: right" >Nouveau</button>
                    </div>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr style="background-color : #233d4d;">
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Numéro</th>
                            <th scope="col">Maison d'édition</th>
                            <th scope="col">Année</th>
                            <th scope="col">Cgc</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Remarque</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Dark</th>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td>
                                <a href="#" style="padding-right:20px"><span class="fas fa-eye"></span></a>
                                <a href="#" style="padding-right:20px"><span class="fas fa-pen"></span></a>
                                <a href="#" style="padding-right:20px"><span class="fas fa-times-circle"></span></a>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">Dark</th>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td>
                                <a href="#" style="padding-right:20px"><span class="fas fa-times-circle"></span></a>
                                <a href="#" style="padding-right:20px"><span class="fas fa-times-circle"></span></a>
                                <a href="#" style="padding-right:20px"><span class="fas fa-times-circle"></span></a>
                            </td>

                        </tr>
                    </tbody>
                </table> 
            </div>
        </div>



        <!-- Optional JavaScript -->      
        <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>

</html>