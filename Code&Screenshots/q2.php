<?php

function insideOut($arr) {
    $n = count($arr);
    if ($n % 2 != 0) {
        return $arr; // Return as is if odd length
    }

    $result = $arr;
    $half = $n / 2;

    // Swap outermost and innermost elements pairwise within each half
    for ($i = 0; $i < $half / 2; $i++) {
        // Swap elements inside first half
        $temp = $result[$i];
        $result[$i] = $result[$half - 1 - $i];
        $result[$half - 1 - $i] = $temp;

        // Swap elements inside second half
        $temp2 = $result[$half + $i];
        $result[$half + $i] = $result[$n - 1 - $i];
        $result[$n - 1 - $i] = $temp2;
    }

    return $result;
}

echo implode(", ", insideOut([1, 2, 2, 1])) . "\n";
echo "<br>";
echo implode(" ", insideOut(["Everyone", "says", "Kelly", "is", "REALLY", "awesome"])) . "\n";


?>

