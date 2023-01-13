
<?php

    for ($i = 0; $i< 10; $i++) {
        $_GET["iteration"] = $i;
        echo "<p></p><a href=index.php?iteration=$i>$i . 10 liens avec php</a>";
    }
