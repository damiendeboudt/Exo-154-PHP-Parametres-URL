<?php
if(isset($_GET["iteration"])) {
    if($_GET['iteration'] <= 0) {
        $_GET["iteration"] = 1;
    }

    if($_GET['iteration'] > 10) {
        $_GET["iteration"] = 10;
    }
    for($i = 0; $i < $_GET["iteration"]; $i++) {
        echo "Hello World <br>";
    }
}