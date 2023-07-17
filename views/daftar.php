<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>DAFTAR NAMA SISWA YANG SUDAH JOIN</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th><p style="text-align:center">NO</th>
        <th><p style="text-align:center">Nama</th>
        <th><p style="text-align:center">PEKERJAAN</th>
        <th><p style="text-align:center">PACAR</th>
      </tr>
    </thead>
    <tbody>
      <?php

      require_once 'connect.php';

      $query = mysqli_query($connect, "SELECT * FROM nama");
      $no=0;
      while($hasil = mysqli_fetch_array($query)) {
        $no++;

      ?>
      <tr>
        <td><p style="text-align:center"><?php echo $no?></td>
        <td><p style="text-align:center"><?php echo $hasil['nama']?></td>
        <td><p style="text-align:center"><?php echo $hasil['organisasi']?></td>
        <td><p style="text-align:center"><?php echo $hasil['aliran']?></td>
      </tr>

    <?php
    
      }
    
    ?>
    </tbody>
  </table>
</div>

</body>
</html>
