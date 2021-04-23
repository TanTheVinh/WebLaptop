<?php 
    require_once('../includes/include.php');
    require_once('../includes/conn.php');
    //Check_role_in_site($_SESSION['maquyen']);

    function Check_Staff($taikhoan){
        if(isset($_POST['submit'])){
            $sql = "SELECT * FROM NGUOIDUNG WHERE taikhoan = '$taikhoan';";
            $res = Check_db($sql);
            if(mysqli_num_rows($res) > 0){
                return true;
            }
            else{
                return false;
            }
        }
    }

    function View_All_Staff(){
        $sql = "SELECT * FROM NGUOIDUNG WHERE MAQUYEN = 'NV'";
        $res = Check_db($sql);
        if(mysqli_num_rows($res) > 0){
            while ($row = mysqli_fetch_assoc($res)) {
                $taikhoan = $row['TAIKHOAN'];
                $matkhau = $row['MATKHAU'];
                $gioitinh = $row['GIOITINH'];
                $tennd = $row['TENND'];
                $sdt = $row['SDT'];
                $diachi = $row['DIACHI'];
                $email = $row['EMAIL'];
                $ngaysinh = $row['NGAYSINH'];          
            }
        }
        else{
            echo "khong tim duoc nhan vien nao";
        }
    }

    function Add_Staff(){
        if(isset($_POST['Add_Staff'])){
            $taikhoan = Get_value($_POST['taikhoan']);
            $matkhau = Get_value(md5($_POST['matkhau']));
            $tennd = Get_value($_POST['tennd']);
            $gioitinh = $_POST['gioitinh'];
            $sdt = $_POST['sdt'];
            $diachi = Get_value($_POST['diachi']);
            $email = Get_value($_POST['email']);
            $ngaysinh = $_POST['ngaysinh'];
            if(!Check_Staff($taikhoan)){
                $conn = Connect();
                $matkhau = md5($matkhau);
                $sql = "INSERT INTO `nguoidung` (`TAIKHOAN`, `MAQUYEN`, `MATKHAU`, `TENND`, `GIOITINH`, `SDT`, `DIACHI`, `EMAIL`, `NGAYSINH`) 
                        VALUES ('$taikhoan', 'NV', '$matkhau', '$tennd', $gioitinh, $sdt, $diachi, $email, $ngaysinh);";
                mysqli_query($conn, $sql);
                mysqli_close($conn);
                echo "dang ky tai khoan thanh cong";
            }
            else{
                echo "tai khoan da ton tai";
            }
        }
    }

    function Delete_Staff($dstaikhoan){
        $conn = Connect();
        foreach ($dstaikhoan as $key=>$value) {
            if(Check_Staff($value)){
                $sql = "DELETE FROM NGUOIDUNG WHERE taikhoan = '$value'";
                mysqli_query($conn, $sql);
            }
        }
        mysqli_close($conn);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Tài khoản: <input type="text" name="taikhoan" id="taikhoan"><br>
        Mật khẩu: <input type="password" name="matkhau" id="matkhau"><br>
        Họ tên: <input type="text" name="tennd" id="tennd"><br>
        <button type="submit" name="submit" id="submit" value="add_staff">Thêm nhân viên</button>
    </form>
</body>
</html>