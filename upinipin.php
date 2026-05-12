<?php

for ($i = 1; $i <= 50; $i++) {

    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "upin dan ipin selamanya <br>";
    } elseif ($i % 3 == 0) {
        echo "ipin <br>";
    } elseif ($i % 5 == 0) {
        echo "upin <br>";
    } else {
        echo $i . "<br>";
    }

}

?>