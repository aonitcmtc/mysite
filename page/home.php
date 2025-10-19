<div>
    <h1>Home Page</h1>
</div>

<?php
    echo "Session user :: " . $_SESSION["user"] . ".<br>";
    echo "Session group :: " . $_SESSION["group"] . ".<br>";

    echo "Cookie is: " . $_COOKIE['member'];
?>
