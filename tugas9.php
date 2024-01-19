<!-- //nilai variabel a bisa dibagi dengan 4, dan bisa dibagi dengan 5. berapakah nilai variabel tersebut dari rentang 1-25 -->

<?php

for ($a=1; $a <=25; $a++  ) {
    if ($a % 4 == 0 && $a % 5 == 0) {
        echo "Nilai variabel a yang memenuhi syarat: $a ";
    }
}
?>

//nilainya 5
