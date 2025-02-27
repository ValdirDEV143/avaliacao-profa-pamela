<!-- //// Atividade 3 //// -->


<?php
for ($i = 1; $i <= 100; $i++){

    if ($i % 3 == 0 && $i % 5 == 0) {
            echo "AB<br>"; 
    } elseif ($i % 3 == 0) {
            echo "A<br>";
    } elseif ($i % 5 == 0) {
            echo "B<br>"; 
    } else {
            echo "$i<br>";
    }
    }
    ?>