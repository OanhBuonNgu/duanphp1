<?php 
    $username = trim(strip_tags($_POST['u']));
    $password = trim(strip_tags($_POST['p']));
?>
<style>
    .div{
        width: 400px;
        height: 200px;
        background-color: gray;
        margin: 0 auto;
        border: 2px solid red;
    }
    p{
        margin-left: 20px;
        font-weight: 700;
        font-size: 30px;
        margin-top: 30px;
    }
</style>


<div class="div">
    <p>Tài khoản: <b><?=$username?></b></p>
    <p>Mật Khẩu: <b><?=$password?></b></p>
</div>
<?php
    session_start();
    if($username=="admin"&&$password=="caphenhe"){
        $_SESSION['dalogin']=1;
    }
    else unset($_SESSION['dalogin']);
?>
<?php 
    if(isset($_POST['nho'])==true){
        setcookie("username",$username, time()+3600*24*7);
        setcookie("password",$password, time()+3600*24*7);
    }
    else{
        setcookie("username", " ", -1);
        setcookie("password", " ", -1);
    }
?>