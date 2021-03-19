<?php
    require '../vendor/autoload.php';
    require '../admin/start.php';
    check_session_user();
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <title>Taggeador do GitHub</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Taggeador de Repositórios do GitHub</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="list-repositories.php">Repositórios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tags</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Busca" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Busca</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
        <section>
            <div class="container">
                <div class="row">
                    <?php
                        $gitHubUser = $_SESSION['gitHubUser'];

                        $get = file_get_contents("http://api-github-tagger.herokuapp.com/users/$gitHubUser/starred-repositories");

                        $repositories = json_decode($get, true);
                        $reposNumber = count($repositories);
                        if ($reposNumber > 0) {
                            for($i = 0; $i < $reposNumber; $i++) {
                                echo  
                                    "<div class='card'>
                                            <div class='card-header'>"
                                                .$repositories[$i]['name'].
                                            "</div>
                                            <div class='card-body'>
                                                <p class='card-text'>".$repositories[$i]['description']."</p>";
                                                $tagscount = count($repositories[$i]['tags']);
                                                if ($tagscount != 0) {
                                                    for ($x = 0; $x < $tagscount; $x++) {
                                                        echo "<div class='container'><button type='button' class='btn btn-outline-primary'>".$repositories[$i]['tags'][$x]."</button></div>";
                                                    }
                                                } else {
                                                    echo "<p class='card-text'>Nenhuma tag adicionada ainda.</p>";    
                                                }
                                                echo "<div><a href='#' class='btn btn-primary'>Adicionar Tags</a>
                                                <a href='".$repositories[$i]['url']."' class='btn btn-secondary'>Acessar Repositório</a></div>
                                            </div>
                                    </div>";
                            }
                        }
                    ?>
                </div>
            </div>
        </section>
    </body>
</html>