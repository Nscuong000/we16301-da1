//hàm cập nhật

<?php
function update_taikhoan($id,$user,$pass,$email,$address,$tell){
    $sql="update taikhoan set user='".$user."',pass='".$pass."',email='".$email."',address='".$address."',tell='".$tell."' where id=".$id;
    pdo_execute($sql);
}
?>