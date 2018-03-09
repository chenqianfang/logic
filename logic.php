<?php

/**
 * 这道题的答案是？
 *
 * @param $data
 * @return bool
 */
function check_1($data) {
    return true;
}

/**
 * 第五题的答案是？
 *
 * @param $data
 * @return bool
 */
function check_2($data) {
    $question = ['A' => 'C', 'B' => 'D', 'C' => 'A', 'D' => 'B'];
    if ($question[$data[2]] === $data[5]) {
        return true;
    }

    return false;
}

/**
 * 哪一题的答案与其他3项不同？
 *
 * @param $data
 * @return bool
 */
function check_3($data) {
    $question = ['A' => $data[3], 'B' => $data[6], 'C' => $data[2], 'D' => $data[4]];
    $answer = $question[$data[3]];
    unset($question[$data[3]]);
    if (!in_array($answer, $question)) {
        return true;
    }

    return false;
}

/**
 * 哪两题的答案相同？
 *
 * @param $data
 * @return mixed
 */
function check_4($data) {
    $question = [
        'A' => $data[1] === $data[5],
        'B' => $data[2] === $data[7],
        'C' => $data[1] === $data[9],
        'D' => $data[6] === $data[10]
    ];

    return $question[$data[4]];
}

/**
 * 哪一题的答案与本题相同？
 *
 * @param $data
 * @return bool
 */
function check_5($data) {
    $question = ['A' => $data[8], 'B' => $data[4], 'C' => $data[9], 'D' => $data[7]];
    if ($question[$data[5]] === $data[5]) {
        return true;
    }

    return false;
}

/**
 * 哪两题的答案与第8题相同？
 *
 * @param $data
 * @return mixed
 */
function check_6($data) {
    $question = [
        'A' => $data[2] === $data[4] && $data[4] === $data[8],
        'B' => $data[1] === $data[6] && $data[6] === $data[8],
        'C' => $data[3] === $data[10] && $data[10] === $data[8],
        'D' => $data[5] === $data[9] && $data[9] === $data[8]
    ];

    return $question[$data[6]];
}

/**
 * 10题中次数最少的选项是？
 *
 * @param $data
 * @return bool
 */
function check_7($data) {
    $question = ['A' => 'C', 'B' => 'B', 'C' => 'A', 'D' => 'D'];
    $count = array_count_values($data);
    arsort($count);
    $arr = array_keys($count);
    if (array_pop($arr) === $question[$data[7]]) {
        return true;
    }

    return false;
}

/**
 * 哪一题的答案与第1题的答案字母顺序不相邻？
 *
 * @param $data
 * @return bool
 */
function check_8($data) {
    $map = ['A' => 1, 'B' => 2, 'C' => 3, 'D' => 4];
    $question = ['A' => $data[7], 'B' => $data['5'], 'C' => $data['2'], 'D' => $data['10']];
    if (abs($map[$data[1]] - $map[$question[$data[8]]]) > 1) {
        return true;
    }

    return false;
}

/**
 * 第1题与第6题的答案相同和第x题与第5题的答案相同的真假性相反？
 *
 * @param $data
 * @return bool
 */
function check_9($data) {
    $question = ['A' => $data[6], 'B' => $data[10], 'C' => $data[2], 'D' => $data[9]];
    if (($question[$data[9]] === $data[5]) != ($data[1] === $data[6])) {
        return true;
    }

    return false;

}

/**
 * 选项中出现次数最多与最少的差是？
 *
 * @param $data
 * @return bool
 */
function check_10($data) {
    $question = ['A' => 3, 'B' => 2, 'C' => 4, 'D' => 1];
    $count = array_count_values($data);
    arsort($count);
    $min = array_pop($count);
    asort($count);
    $max = array_pop($count);
    if ($question[$data[10]] === $max - $min) {
        return true;
    }

    return false;
}

$option = ['A', 'B', 'C', 'D'];

foreach ($option as $v[1]) {
    foreach ($option as $v[2]) {
        foreach ($option as $v[3]) {
            foreach ($option as $v[4]) {
                foreach ($option as $v[5]) {
                    foreach ($option as $v[6]) {
                        foreach ($option as $v[7]) {
                            foreach ($option as $v[8]) {
                                foreach ($option as $v[9]) {
                                    foreach ($option as $v[10]) {
                                        for ($i = 1; $i <= 10; $i++) {
                                            $answer[$i] = $v[$i];
                                        }
                                        for ($i = 1; $i <= 10; $i++) {
                                            $func = "check_" . $i;
                                            if (!$func($answer)) {
                                                break;
                                            }
                                        }
                                        if ($i === 11) {
                                            echo implode(' ', $answer) . PHP_EOL;
                                            die;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
