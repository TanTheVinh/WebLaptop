<?php
require_once('./includes/include.php');
require_once('./includes/conn.php');
<<<<<<< HEAD
=======
// require_once('logout.php');
>>>>>>> 3cc529505b2088aebb25d9b2671216278fb6eba1
$taikhoan = $_SESSION['taikhoan'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $TENND = ($_POST["tennd"]);
  $GIOITINH = ($_POST['gioiTinh']);
  $EMAIL = $_POST['email'];
  $SDT = $_POST['sdt'];
  $DIACHI = $_POST['diaChi'];
  // echo $GIOITINH."".$EMAIL."".$SDT;
  $conn = Connect();
  $sql1 = "UPDATE nguoidung SET TENND='$TENND',GIOITINH='$GIOITINH', EMAIL='$EMAIL',SDT='$SDT',DIACHI='$DIACHI' WHERE TAIKHOAN='$taikhoan'";
  if ($conn->query($sql1)) {
  } else {
    echo "error: " . $sql1 . "<br>" . $conn->error;
  }
  $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<?php include('./includes/head.php') ?>


<body>
  <!-- header -->
  <?php include('./includes/header.php') ?>
  <!-- account info -->
  <section id="account">
    <div class="container">
      <h4>Tài khoản</h4>
      <div class="row">
        <div id="account__left">
          <ul id="setting__menu">
            <li class="active" id="TTTK" onclick="activeTTTK()">
              <a href="#">Thông tin tài khoản</a>
            </li>
            <li id="TTDH" onclick="activeTTDH()">
              <a href="#">Trạng thái đơn hàng</a>
            </li>
            <li id="LSMH" onclick="activeLSMH()">
              <a href="#">Lịch sử mua hàng</a>
            </li>
            <li id="DMK" onclick="activeDMK()">
              <a href="#">Đổi mật khẩu</a>
            </li>
            <li id="DX"><a href="./logout.php">Đăng xuất</a></li>
          </ul>
        </div>
        <div id="account__right">
          <div id="myAccount">
            <div id="thongTinTaiKhoan">
              <?php
              $sql_account = "SELECT * FROM nguoidung where taikhoan = '$taikhoan'";
              $res_account = Check_db($sql_account);
              $temp = 0;
              if (mysqli_num_rows($res_account)) {
                while ($row = mysqli_fetch_assoc($res_account)) {
                  $tennd = $row['TENND'];
                  $gioitinh = $row['GIOITINH'];
                  $sdt = $row['SDT'];
                  $email = $row['EMAIL'];
                  $diachi = $row['DIACHI'];

              ?>
                  <form action="" method="POST">
                    <table>
                      <tr>
                        <th>
                          <label for="firstName">Họ tên</label>
                        </th>
                        <td>
                          <input type="text" name="tennd" id="userFistName" value="<?php echo $tennd ?>" />
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <label for="lastName">Giới tính</label>
                        </th>
                        <td>
                          <input type="radio" name="gioiTinh" id='nam' value="Nam">
                          <label for="gioiTinh">Nam</label>
                          <input type="radio" name="gioiTinh" id="nu" value="Nữ">
                          <label for="gioiTinh">Nữ</label>
                          <?php if ($gioitinh == 'Nữ') { ?>
                            <script>
                              document.getElementById('nu').checked = true;
                            </script>
                          <?php }
                          if ($gioitinh == 'Nam') { ?>
                            <script>
                              document.getElementById('nam').checked = true;
                            </script>
                          <?php } ?>
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <label for="email">Email</label>
                        </th>
                        <td>
                          <input type="email" name="email" id="userEmail" value="<?php echo $email ?>" />
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <label for="sdt">Số điện thoại</label>
                        </th>
                        <td>
                          <input type="tel" name="sdt" id="" value="<?php echo $sdt ?>" />
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <label for="diaChi">Địa chỉ</label>
                        </th>
                        <td>
                          <input type="text" name="diaChi" id="" value="<?php echo $diachi ?>" />
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>
                          <button type="submit" name="capnhat_tt">Cập nhật</button>
                        </td>
                      </tr>
                    </table>
                  </form>
              <?php }
              } ?>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
              <div id="account__img">
                <img src="./image/laptop.jpg" alt="" />
                <i class="fa fa-camera"></i>

              </div>
>>>>>>> 3cc529505b2088aebb25d9b2671216278fb6eba1
>>>>>>> 988c39291fa539bbdf4e0b69b87b3dd865ba9231
            </div>
            <div id="trangThaiDonHang">
              <table id="trangThaiDonHang_tblItem" class="table">
                <thead id="trangThaiDonHang_tblHead">
                  <tr>
                    <th>Hình Ảnh Sản Phẩm</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Số lượng</th>
                    <th>Số Tiền</th>
                  </tr>
                </thead>
                <tbody id="trangThaiDonHang_tblBody">
                  <tr>
                    <td>
                      <a href="#" class="trangThaiDonHang_product">
                        <img src="./image/laptop.jpg" alt="" />
                      </a>
                    </td>
                    <td>
                      <div class="trangThaiDonHang_product--intro">
                        <h4>Title</h4>
                        <p>Lorem ipsum dolor sit amet.</p>
                      </div>
                    </td>
                    <td>
                      <span>1</span>
                    </td>
                    <td>5.000.000VND</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div id="lichSuMuaHang">
              <div class="lichSuMuaHang">
                <table id="tblItem" class="table">
                  <thead id="tblHead">
                    <tr>
                      <th>Hình Ảnh Sản Phẩm</th>
                      <th>Tên Sản Phẩm</th>
                      <th>Số lượng</th>
                      <th>Số Tiền</th>
                      <th>Trạng thái</th>
                    </tr>
                  </thead>
                  <tbody id="tblBody">
                    <tr>
                      <td>
                        <a href="#" class="cartItem__product">
                          <img src="./image/laptop.jpg" alt="" />
                        </a>
                      </td>
                      <td>
                        <div class="cartItem__product--intro">
                          <h4>Title</h4>
                          <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                      </td>
                      <td>
                        <span>1</span>
                      </td>
                      <td>5.000.000VND</td>
                      <td>
                        <span>Đã nhận</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div id="doiMatKhau">
              <form action="" id="formDoiMatKhau">
                <table id="tblDoiMatKhau">
                  <tr>
                    <th>
                      <label for="matKhauCu">Mật khẩu cũ:</label>
                    </th>
                    <td style="width: 10px"></td>
                    <td>
                      <input type="password" name="" id="" />
                    </td>
                  </tr>
                  <tr style="height: 10px">
                    <th></th>
                    <td style="width: 10px"></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th>
                      <label for="matKhauMoi">Mật khẩu mới:</label>
                    </th>
                    <td style="width: 10px"></td>
                    <td>
                      <input type="password" name="" id="" />
                    </td>
                  </tr>
                  <tr style="height: 10px">
                    <th></th>
                    <td style="width: 10px"></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th>
                      <label for="confirmMatKhauMoi">Nhập lại mật khẩu mới:</label>
                    </th>
                    <td style="width: 10px"></td>
                    <td>
                      <input type="password" name="" id="" />
                    </td>
                  </tr>
                  <tr style="height: 10px">
                    <th></th>
                    <td style="width: 10px"></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td style="width: 10px"></td>
                    <td>
                      <input type="submit" value="Đổi mật khẩu" />
                    </td>
                  </tr>
                </table>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- footer -->
  <?php include('./includes/footer.php') ?>
  <!-- script -->
  <?php include('./includes/script.php') ?>
  <!-- active -->
  <script>
    function activeTTTK() {
      document.getElementById("#thongTinTaiKhoan").css("display", "block");
      document.getElementById("#trangThaiDonHang").css("display", "none");
      document.getElementById("#lichSuMuaHang").css("display", "none");
      document.getElementById("#doiMatKhau").css("display", "none");
      document.getElementById('#TTTK').removeClass('active');
      document.getElementById('#TTDH').removeClass('active');
      document.getElementById('#LSMH').removeClass('active');
      document.getElementById('#DMK').removeClass('active');
    }

    function activeTTDH() {
      document.getElementById("#thongTinTaiKhoan").css("display", "none");
      document.getElementById("#trangThaiDonHang").css("display", "block");
      document.getElementById("#lichSuMuaHang").css("display", "none");
      document.getElementById("#doiMatKhau").css("display", "none");
      document.getElementById('#TTTK').removeClass('active');
      document.getElementById('#TTDH').addClass('active');
      document.getElementById('#LSMH').removeClass('active');
      document.getElementById('#DMK').removeClass('active');
    }

    function activeLSMH() {
      $("#LSMH").addClass("active");
      $("#myAccount").css("display", "none");
      $("#trangThaiDonHang").css("display", "none");
      $("#lichSuMuaHang").css("display", "block");
      $("#doiMatKhau").css("display", "none");
      $("#TTDH").removeClass("active");
      $("#TTTK").removeClass("active");
      $("#DMK").removeClass("active");
    }

    function activeDMK() {
      $("#DMK").addClass("active");
      $("#myAccount").css("display", "none");
      $("#trangThaiDonHang").css("display", "none");
      $("#lichSuMuaHang").css("display", "none");
      $("#doiMatKhau").css("display", "block");
      $("#TTDH").removeClass("active");
      $("#TTTK").removeClass("active");
      $("#LSMH").removeClass("active");
    }
  </script>
  <!-- MAIN JS -->
  <!-- <script src="./js/main.js"></script> -->

</body>

</html>