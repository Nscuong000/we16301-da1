<?
case 'edit_taikhoan':
    if(isset($_POST[capnhat])&&($_POST['capnhat'])){
$user = $_POST['user'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$addres = $_POST['address'];
$tell = $_POST['tell'];
$id = $_POST['id'];

update_taikhoan($id,$user,$pass,$email,$address,$tell);
$checkuser = checkuser($user,$pass);
header('Location: index.php?act=edit_taikhoan');
}
include "view/taikhoan/edit_taikhoan.php";
break;

    ?>