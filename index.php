<?php

include 'db.php';

include 'parts/header.php';

    if (isset($_GET['page']) && $_GET['page'] == 'episodes'){
        include 'parts/episodes.php';
    } elseif (isset($_GET['page']) && $_GET['page'] == 'chat'){
        include 'parts/chat.php';
    } elseif (isset($_GET['page']) && $_GET['page'] == 'form'){
        include 'parts/form.php';
    } elseif (isset($_GET['page']) && $_GET['page'] == 'about'){
        include 'parts/about.php';
    } elseif (isset($_GET['page']) && $_GET['page'] == 'login'){
        include 'parts/login.php';
    } else {
        include 'parts/content.php';
    }

include 'parts/footer.php'; 
