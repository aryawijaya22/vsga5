<!DOCTYPE html>
<html lang="en"
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>List Katagori film</title>
</head>
<body>
  <?php
    include_once("connection.php");
    
    $result = mysqli_query($conn, "SELECT * FROM tbl_film");
  ?>
  <main>
    <h1>List Katagori Buku</h1>

    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Kode Katagori</th>
          <th>Nama Katagori</th>
          <th>Keterangan</th>
      </tr>
      </thead>
      <tbody>
        <?php
          while($user_data = mysqli_fetch_array($result))
          {
        ?>
        <tr>
          <td><?php echo $user_data ['id'];?></td>
          <td><?php echo $user_data ['Kode_katagori_film'];?></td>
          <td><?php echo $user_data ['nama_katagori_film'];?></td>
          <td><?php echo $user_data ['Keterangan'];?></td>
        </tr>
        <?php
          }
          ?>
      </tbody>
    </table>
  </main>
</body>
</html>