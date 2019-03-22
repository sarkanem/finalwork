<?php

include 'db.php';

include 'parts/header.php';

    if (isset($_GET['page']) && $_GET['page'] == 'articles'){
        include 'parts/articles.php';
    } elseif (isset($_GET['page']) && $_GET['page'] == 'chat'){
        include 'parts/chat.php';
    } elseif (isset($_GET['page']) && $_GET['page'] == 'form'){
        include 'parts/form.php';
    } elseif (isset($_GET['page']) && $_GET['page'] == 'about'){
        include 'parts/about.php';
    } else {
        include 'parts/content.php';
    }

include 'parts/footer.php'; 
