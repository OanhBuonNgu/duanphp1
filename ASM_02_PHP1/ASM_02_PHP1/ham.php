<?php 
    try{
        $host = "localhost";
        $dbname = "php1_news";
        $username = "root";
        $password ="";
        $conn = new PDO("mysql:host=$host;dbname=$dbname; charset=utf8",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    catch (PDOException $e){
        die("Lỗi : " . $e->getMessage());
    }  

    function TinNoiBat(){
        $sql = "SELECT * FROM tin WHERE NoiBat=1 AND lang='vi' AND AnHien=1 ORDER BY Ngay DESC LIMIT 0,5";
        global $conn;
        $kq = $conn->query($sql);
        return $kq;
    };
    function TinXemNhieu(){
        $sql = "SELECT * FROM tin WHERE  lang='vi' AND AnHien=1 ORDER BY SoXemNhieu DESC LIMIT 0,6";
        global $conn;
        $kq= $conn->query($sql);
        return $kq;
    };
    function TinMoiNhat($soTin=8){
        $sql = "SELECT * FROM tin WHERE lang='vi' AND AnHien=1 ORDER BY Ngay DESC LIMIT 0,$soTin";
        global $conn;
        $kq = $conn->query($sql);
        return $kq;
    };
    function TheLoai(){
        $sql = "SELECT * FROM theloai WHERE lang='vi' AND AnHien=1 AND HienMenu=1 ORDER BY ThuTu ASC";
        global $conn;
        $kq = $conn->query($sql);
        return $kq;
    };
    function LoaiTinTrongTheLoai($idTL){
        $sql = "SELECT * FROM loaitin WHERE lang='vi' AND AnHien=1 AND idTL=$idTL ORDER BY ThuTu ASC";
        global $conn;
        $kq = $conn->query($sql);
        return $kq;
    };
    function TinTrongLoai($idLT){
        $sql = "SELECT * FROM tin WHERE lang='vi' AND AnHien=1 AND idLT=$idLT ORDER BY Ngay DESC "; 
        global $conn;
        $kq = $conn->query($sql);
        return $kq;
    }
    function layTenLoaiTin($idLT){
        $sql = "SELECT Ten FROM loaitin WHERE idLT=$idLT"; 
        global $conn;
        $kq = $conn->query($sql);
        $row = $kq->fetch();
        return $row['Ten'];
    }

?>


