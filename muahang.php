<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body  {
                background-image: url("Images/hinh-nen.jpg") ;
                background-repeat: no-repeat;
                background-size: cover;
        }
    </style>
</head>
<body class="container-lg">
<p class="fs-4 text-center text-warning">MỜI BẠN ĐẶT NƯỚC UỐNG</p>
<form action="xuli-muahang.php" method="post" class="col-6 m-auto border border-danger border-3 p-2 bg-primary">
  <p>
    <label for="loainuocuong">Loại nước uống :</label>
    <input type="text" name="loainuocuong" id="loainuocuong" class="form-control bg-info"/>
  </p>
  <p>
    <label for="tennuocuong">Tên nước uống :</label>
    <input type="text" name="tennuocuong" id="tennuocuong" class="form-control bg-info"/>
  </p>
  <p>
    <label for="giaban">Giá bán :</label>
    <input type="text" name="giaban" id="giaban" class="form-control bg-info"/>
  </p>
  <p>
    <label for="soluong">Số lượng :</label>
    <input type="text" name="soluong" id="soluong" class="form-control bg-info"/>
  </p>
  <p class="d-flex mb-3 ">
    <input type="submit" name="muahang" id="muahang" value="ĐẶT HÀNG" class="p-2 w-25 form-control bg-success text-wrap"/>
    <input type="submit" name="xoa" id="xoa" value="XÓA" class="ms-2 w-25 form-control bg-success"/>
    <a href="index.html" class="ms-auto p-2 align-self-center text-decoration-none text-light">QUAY VỀ TRANG CHỦ</a>
  </p>
</form> 
</body>
</html>