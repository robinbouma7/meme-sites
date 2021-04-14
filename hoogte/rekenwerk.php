<!DOCTYPE html>
<?php
session_start();
$lengte = $_POST['lengte'];
$eenheid = $_POST["eenheid"];

if (!isset($_SESSION['fortnite'])) {
$geslacht = $_POST['geslacht'];
}


if ($geslacht === 'ditmagniet') {
    $lengte = 'omdat wij anti fortnite fans zijn mag jij je lengte niet weten. probeer het maar bij een andere tool!';
    $eenheid = '';
    $_SESSION['fortnite'] = true;
}
elseif (isset($_SESSION['fortnite']) && $_SESSION['fortnite'] === true) {
    $lengte = 'omdat wij anti fortnite fans zijn mag jij je lengte niet weten. probeer het maar bij een andere tool!';
    $eenheid = '';
}

else {
    if ($eenheid === 'm') {
        $lengte = $_POST['lengte'] / '100';
    }

    else if ($eenheid === 'mm') {
        $lengte = $_POST['lengte'] * '10';
    }

    else {
        $lengte = $_POST['lengte'];
    }
}
?>
<title>
    uitslag!!
</title>
<style>
    html {
        background: black;
    color: white;
    text-align: center;
    }
    h3 {
        border: 1px blue solid;
        padding: 1%;
        text-align: center;
        margin-left: 35%;
        margin-right: 35%;
        color: white;
    }
    #watermerk {
        position: absolute;
        left: 1%;
        top: 95%;
        font-size: 70%

    }
</style>
<html>
    <body>
        <h1>uw hoogte is berekend!!</h1>
        <p>
            uw berekende hoogte is (trommelgeroffel a.u.b.): <br><br>
        </p>
        <h3>
        <?php
        echo $lengte . ' ' . $eenheid;
        ?>
        </h3>
        <p id='watermerk'>deze technologie ver ver voor zijn tijd is gemaakd door robin bouma</p>
    </body>
</html>