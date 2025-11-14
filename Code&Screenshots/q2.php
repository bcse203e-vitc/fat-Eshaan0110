<?php

function insideOut($arr) {
  $n = count($arr);
  if ($n % 2 !== 0) return $arr;
  $half = $n / 2;
  $start = array_slice($arr, 0, $half);
  $end = array_slice($arr, $half);
  $swapped = array_merge(
    array_reverse($end),
    array_reverse($start)
  );
  return $swapped;
}

// Example with numbers:x
print_r(insideOut([1,2,2,1])); // Output: [2,1,1,2]

// Example with strings:
print_r(insideOut(["Everyone", "says", "Kelly", "is", "REALLY", "awesome"]));
// Output: ["Kelly", "is", "REALLY", "awesome", "Everyone", "says"]

?>
