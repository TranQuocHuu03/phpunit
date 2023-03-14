<?php
function isPrime($n) {
  if($n <= 1) {
    return false;
  }

  for($i = 2; $i <= sqrt($n); $i++) {
    if($n % $i == 0) {
      return false;
    }
  }

  return true;
}
// kiểm tra một số bất kì
$num = 7;   
if(isPrime($num)) {
  echo "$num là số nguyên tố";
} else {
  echo "$num không phải là số nguyên tố";
}

?>