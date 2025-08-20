<?php
//Cau1:Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
$Dem = strlen("Nguyen minh Hieu");
    echo "So ki tu la:".$Dem;echo "<br>";
//Cau2:Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
$wordCount = str_word_count("Nguyen Minh Hieu");
    echo "Số từ trong chuỗi là: $wordCount";echo "<br>";
//Cau3:Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
$daonguoc= strrev('Toi rat dep trai');
    echo "Dao nguoc thanh :".$daonguoc; echo "<br>";
//Cau4:Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
$timkiem = strpos("1235678 toi yeu ban","ban");
    echo "Vi tri can tim la: ".$timkiem;
    echo "<br>";
//Cau5:Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
$thaythe = str_replace("Toi la Hieu", "My name is Hieu","Hello, Toi la Hieu, toi 20 tuoi");
    echo "Thay the thanh :".$thaythe;echo "<br>";
//Cau6: Viết 1 chương trình PHP để  kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
$chuoi1 = "Toi ten Nguyen Minh Hieu";
$chuoi2 = "khong";
if ( strncmp($chuoi1, $chuoi2,3)==0){ ; // So sánh 3 ký tự đầu tiên
    echo "Chuỗi '$chuoi1' bắt đầu bằng '$chuoi2'";
} else {
    echo "Chuỗi '$chuoi1' không bắt đầu bằng '$chuoi2'";
} echo "<br>";
//Cau 7:Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
$chuoiGoc = "hieu dep trai!";
$chuoiHoa = strtoupper($chuoiGoc);
echo "Chuỗi sau khi chuyển thành chữ hoa: $chuoiHoa";
echo "<br>";
//Cau8 Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
$bandau="Hieu NGUYEN MINH K59SN";
$vietthuong= strtolower($bandau);
echo "Chuỗi thành chữ thường: $vietthuong<br>";
//Cau9:Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
$dautien = "nguyen minh hieu";
$lucsau = ucwords($dautien);
echo  "Chuỗi sau khi chuyển đổi: $lucsau<br>";
//Cau10:Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
$khoangtrang= "  Helllo ae Thanh hoa  ";
$trimmed = trim($khoangtrang);
echo "Chuỗi sau khi loại bỏ khoảng trắng: '$trimmed'";echo "<br>";
//Cau11: Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
$a="Google CocCoc";
$loaiBoKyTuDau = ltrim($a, "G");
echo "Chuỗi sau khi loại bỏ ký tự đầu tiên: '$loaiBoKyTuDau'";echo "<br>";
//Cau12: Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
$b="Football club";
$loaiBoKyTuCuoi = rtrim($b, "b");
echo "Chuỗi sau khi loại bỏ ký tự cuối cùng: '$loaiBoKyTuCuoi'";echo "<br>";
//Cau13: Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
$c= "Cam, Chuoi, Buoi, Tao";
$phanTu = explode(", ", $c);  
echo "Mảng các phần tử là: ";
print_r($phanTu);echo "<br>";

//Cau14:Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
$d= array("Toi","và","ban","la","bạn");
$chuoiNoi = implode(" ", $d);
echo "Chuỗi nối các phần tử là: $chuoiNoi";echo "<br>";
//Cau15:Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
$e= "Hieu dep trai";
$themVaoDau = str_pad($e, strlen($e) + 5, "Hieu ", STR_PAD_LEFT);
$themVaoCuoi = str_pad($e, strlen($e) + 15, " dep trai", STR_PAD_RIGHT);
echo "Chuỗi sau khi thêm vào đầu: $themVaoDau";echo"<br>";
echo" Chuỗi sau khi thêm vào cuối: $themVaoCuoi";echo "<br>";

//Cau16: Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().

$f="Toi la fan cua MU";
$chuoiKetThuc = "MU"; 
if (strrchr($f, $chuoiKetThuc) === false) {
    echo "Chuỗi '$f' không kết thúc bằng '$chuoiKetThuc'";
} else {
    echo "Chuỗi '$f' kết thúc bằng '$chuoiKetThuc'";
} echo "<br>";
//Cau17: Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
$g= "Toi yeu ban";
$h = "yeu";
if (strstr($g, $h) !== false) {
    echo "Chuỗi '$g' chứa chuỗi con '$h'";
} else {
    echo "Chuỗi '$g' không chứa chuỗi con '$h'";
} echo "<br>";
//Cau 18:Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
$i= "Toi@#dep* trai!";
$thayTheKyTu = preg_replace('/[^a-zA-Z0-9]/',' '  , $i);//^ bên trong dấu [] nghĩa là không thuộc
echo "Chuỗi sau khi thay thế ký tự không phải chữ cái hoặc số: $thayTheKyTu";echo "<br>";

//Cau19: Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
$k= 16.5 ;
if (is_int($k)=== True) {  
    echo "số $k là một số nguyên";
} else {
    echo "số $k không phải là một số nguyên";
} echo "<br>";

//Cau20: Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
$email = "nguyenminhhieu16012005@gmail.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email '$email' là hợp lệ.";
} else {
    echo "Email '$email' không hợp lệ.";
} echo "<br>";  

?>
