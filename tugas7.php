<!-- //predikat terhadap hasil ujian diberikan ketika : mendapatkan predikat A jika nilai lebih dari 90, mendapatkan predikat B jika  -->
<!-- //nilai lebih dari 75, selain itu mendapatkan predikat c -->


<?php

$nilai = 95;
 
if ($nilai > 90) {
    echo "mencetak nilai A";
}
elseif ($nilai > 75 && $nilai < 90 ) {
    echo "mencetak nilai B";
}
else {
    echo "mencetak nilai c";
}

?>

//nilainya 3 poin