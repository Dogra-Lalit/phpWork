<?php

function solution($R, $V) {
    $minA = 0;
    $minB = 0;
    $balA = 0;
    $balB = 0;
    $n = strlen($R);
    for($i =0; $i<$n;$i++){
        if($R[$i] === 'A'){
            $balA += $V[$i];
            $balB -= $V[$i];
            if($balB < $minB){
                $minB = $balB;
            }
        }elseif ($R[$i] === 'B') {
            $balB += $V[$i];
            $balA -= $V[$i];
            if($balA < $minA){
                $minA = $balB;
            }
        }
    }
    return [$minA , $minB];
}

// Test cases
echo json_encode(solution("BAABA", [2, 4, 1, 1, 2])) . "\n";  // Output: [2, 4]
echo json_encode(solution("ABAB", [10, 5, 10, 15])) . "\n";    // Output: [0, 15]
echo json_encode(solution("B", [100])) . "\n";                // Output: [100, 0]
// $R1 = "BAABA";
// $V1 = [2, 4, 1, 1, 2];
// $result1 = solution($R1, $V1);

// $R2 = "ABAB";
// $V2 = [10, 5, 10, 15];
// $result2 = solution($R2, $V2);

// $R3 = "B";
// $V3 = [100];
// $result3 = solution($R3, $V3);

// echo '<pre>';
// print_r($result1);
// echo '<br>';
// print_r($result2);
// echo '</pre>';
// print_r($result3);
?>