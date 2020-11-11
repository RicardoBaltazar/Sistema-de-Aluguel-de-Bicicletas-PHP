<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Aluguel de Bicicletas</title>
</head>

<body>
    <div class="home-page">
        <header>
            <nav>
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo">Aluguel de Bicicletas</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="page-login.php">Login</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            <section>
                <div class="container center-align">
                    <h4>Cadastrar</h4>
                    <form class="col s6">
                        <div class="">
                            <div class="input-field col s6">
                                <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                                <label for="first_name">Nome</label>
                            </div>
                        </div>
                        <div class="">
                            <div class="input-field col s6">
                                <input id="email" type="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="">
                            <div class="input-field col s6">
                                <input id="password" type="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <select class="browser-default">
                            <option value="" disabled selected>Se Cadastrar como:</option>
                            <option value="1">Cliente</option>
                            <option value="2">Fornecedor</option>
                        </select>
                        <div class="center-align col s12">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </section>
        </main>
    </div>
</body>

</html>