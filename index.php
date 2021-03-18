<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">

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
                                <a class="nav-link active" aria-current="page" href="#">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/repositories/list-repositories.php">Repositórios</a>
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
                <form method="post" action="login.php" id="form-login" name="formlogin">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Usuário GitHub</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="gitHubUser">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Ver meus repositórios</button>
                    <a class="btn btn-secondary" href="#" role="button">Cadastrar novo usuário</a>
                </form>
            </div>
            
        </section>
    </body>
</html>