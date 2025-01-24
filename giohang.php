<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
   body  {
            background-image: url("Images/hinh-nen.jpg") ;
            background-repeat: no-repeat;
            background-size: cover;
        }
</style>
</head>
<body>
<p class="fs-4 text-center text-warning">MỜI BẠN MUA NƯỚC UỐNG</p>
<form method="post" action="_hocPHP/lienhe.php" class="col-6 m-auto border border-danger border-3 p-2 bg-primary">
<p>Gửi đến mail: 
   <input name="guiden" class="form-control bg-info">
</p>
<p>Nội dung: 
   <textarea name="noidung" class="form-control bg-info">
   <?php
        $gia=0;
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bannuocgk";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM loainuocgk";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Loai nuoc uong: ". $row["loainuocuong"]." - Ten nuoc uong: ". $row["tennuocuong"]. " - Gia ban: " . $row["giaban"]." VND "." - So luong: ". $row["soluong"]. ' ly  |    ';
            $gia+=$row["giaban"]*$row["soluong"];
        }
        echo "----> Tong tien : ".$gia." VND ";
        } else {
        echo "Chưa có nội dung";
        }
        $conn->close();
    ?>
   </textarea>
</p>
<p>Số điện thoại người mua ( có zalo ): 
   <input name="dtnguoimua" class="form-control bg-info">
</p>
<p>Địa chỉ giao hàng: 
   <input name="diachigiao" class="form-control bg-info">
</p>
<p class="d-flex justify-content-between"> 
  <button type="submit" class="btn btn-success" >MUA HÀNG</button>
  <a href="muahang.php" class="align-self-center text-decoration-none text-light">QUAY VỀ TRANG MUA HÀNG</a>
</p>
</form>
</body>
</html>