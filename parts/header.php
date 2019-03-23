<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HENRI-LE-CHAT-NOIR</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="/finalwork/style.css" type="text/css" rel="stylesheet" />
    <link rel='icon' type='image/png' href='/finalwork/images/favicon.png' />
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <a class="navbar-brand" href="/finalwork/"><img src="/finalwork/images/logo.png" alt="logo" class="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link <?= !isset($_GET['page']) ? ' active' : ''; ?>" href="/finalwork/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $_GET['page'] == 'articles' ? ' active' : ''; ?>"
                        href="/finalwork/?page=articles">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $_GET['page'] == 'chat' ? ' active' : ''; ?>"
                        href="/finalwork/?page=chat">Chat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $_GET['page'] == 'about' ? ' active' : ''; ?>"
                        href="/finalwork/?page=about">About</a>
                </li>

                <?php  if (isset($_SESSION['user_id'])) { ?>
                <li class="nav-item">
                    <a class="nav-link <?= $_GET['page'] == 'logout' ? ' active' : ''; ?>"
                        href="/finalwork/logout.php">Logout</a>
                </li>
                <?php } else { ?>

                <li class="nav-item">
                    <a class="nav-link <?= $_GET['page'] == 'form' ? ' active' : ''; ?>"
                        href="/finalwork/?page=form">Register</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $_GET['page'] == 'login' ? ' active' : ''; ?>"
                        href="/finalwork/?page=login">Cat-in</a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </nav>