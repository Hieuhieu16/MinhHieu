
<?php
function phuongtrinh($a, $b, $c) {
    if ($a == 0) {
        if ($b == 0) {
            if ($c == 0) {
                return "Phương trình có vô số nghiệm";
            } else {
                return "Phương trình vô nghiệm";
            }
        } else {
            $x = -$c / $b;
            return "Phương trình bậc nhất, nghiệm: x = $x";
        }
    }
    $delta = $b * $b - 4 * $a * $c;

    if ($delta < 0) {
        return "Phương trình vô nghiệm";
    } elseif ($delta == 0) {
        $x = -$b / (2 * $a);
        return "Phương trình có nghiệm kép: x1 = x2 = $x";
    } else {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        return "Phương trình có 2 nghiệm phân biệt: x1 = $x1, x2 = $x2";
    }
}


echo phuongtrinh(0, 0, 5) 
."<br>";
?>