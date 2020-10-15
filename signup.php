<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <title>Sitema Bike Rental App</title>
</head>
<body>
    
<header>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="home.php">Bike Rental App</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="home.php"><span ></span> Home </a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="section-page-signup">
            <p>Inscrever - se</p>

            <form action="">
                <label for="name">Nome</label>
                <input type="text" name="name" placeholder="Digite seu nome" required>

                <label for="email">Email</label>
                <input type="email" name="email" id="" placeholder="Digite seu email" required>

                <label for="password">Senha</label>
                <input type="password" name="password" id="" placeholder="Cria uma senha" required>

                <input type="submit" value="Cadastrar" class="input-submit">
            </form>
        </section>
    </main>
</body>
</html>