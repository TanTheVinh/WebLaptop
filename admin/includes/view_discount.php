<?php 
    require_once('./includes/include.php');
    require_once('./includes/conn.php');
?>
<div class="view_product_box">
    <h2>Danh sách nhân viên</h2>
    <div class="border_bottom"></div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="search_bar">
            <input type="text" id="search" placeholder="Type to search..." />
        </div>
        <table width="100%">
            <thead>
                <tr>
                    <th class="text-center">Mã giảm giá</th>
                    <th>Tên giảm giá</th>
                    <th>Phần trăm</th>
                    <th>Xóa</th>
                    <th class="text-center">Sửa</th>
                </tr>
            </thead>
            <?php
            $sql_all_discount = "SELECT * FROM GIAMGIA";
            $res_all_discount = Check_db($sql_all_discount);
            while ($row = mysqli_fetch_array($res_all_discount)) {
                $magiamgia = $row['MAGIAMGIA'];
                $tengiamgia = $row['TENGIAMGIA'];
                $phantram = $row['PHANTRAM'];
            ?>
            <tbody>
                <tr>
                    <td class="text-center"><?php echo $magiamgia; ?></td>
                    <td><?php echo $tengiamgia; ?></td>
                    <td><?php echo $phantram; ?></td>
                    <td><a class="btn btn-danger btn-submit btn-sm" 
                            href="index.php?action=view_discount&delete_discount=<?php echo $magiamgia; ?>">Xóa</a></td>
                    <td class="text-center"><a class="btn btn-primary btn-submit btn-sm"
                        href="index.php?action=update_discount&discount_id=<?php echo $magiamgia; ?>">Chỉnh sửa</a></td>
                </tr>
            </tbody>
            <?php
            } // End while loop 
            ?>
        </table>
    </form>
</div>

<?php 
    function View_Discount_Of_Product($masp){
        $sql_discount = "SELECT * FROM giamgia WHERE MAGIAMGIA = (SELECT MAGIAMGIA FROM sanpham WHERE MASP = '$masp');";
        $res_discount = Check_db($sql_discount);
        if(mysqli_num_rows($res_discount) > 0){
            $row_discount = mysqli_fetch_assoc($res_discount);
            return $row_discount['PHANTRAM'];
        }
        else{
            return 100;
        }
    }
?>