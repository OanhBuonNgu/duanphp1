<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">


<form class="border border-primary col-10 m-auto p-2" action="xulylogin.php" method="post">
    <div class="form-group">
        <label>Username</label> <input name="u" type="text" class="form-control" />
    </div>
    <div class="form-group">
        <label>Mật khẩu</label> <input name="p" type="password" class="form-control" />
    </div>
    <div class="form-group">
        <input style="display: block;width:15px;" name="nho" type="checkbox" /> Ghi nhớ
    </div>
    <div class="form-group">
        <input name="btn" type="submit" value="Đăng nhập" class="btn btn-primary" />
    </div>
</form>