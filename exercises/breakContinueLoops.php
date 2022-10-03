<?php
  for ($i = 10; $i >= 0; $i--) {
    if ($i === 2) {
      echo "Ready!\n";
    } elseif ($i === 1) {
      echo "Set!\n";
      break;
    } elseif ($i === 0) {
      echo "Go!\n";
    } elseif ($i === 6) {
      continue;
    } else {
      echo $i . "\n";
    }
  }

  ?>