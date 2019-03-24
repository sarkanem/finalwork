<nav aria-label="breadcrumb" class="mt-5">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/finalwork/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Log-in</li>
    </ol>
</nav>

<div class="container-fluid">

<?php if (isset($_SESSION['errors'])) { ?>
<div class="alert alert-danger">
    <ul>
        <?php foreach($_SESSION['errors'] as $error) { ?>
        <li><?= $error; ?></li>
        <?php } ?>
    </ul>
</div>
<?php 
unset($_SESSION['errors']);
} ?>


<div><h3>WHAT'S YOUR PURRSONALITY?</h3></div>

<form action="/finalwork/login-action.php" method="POST">

    <div class="form-group">
        <input type="text" name="email" placeholder="e-mail" required>
    </div>
    <div class="form-group">
        <input type="password" name="password" placeholder="password" required>
    </div>

    <input type="submit" value="Cat-in">

</form>

</div>