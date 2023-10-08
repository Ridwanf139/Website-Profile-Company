<?php
error_reporting(E_ALL ^ (E_ALL));
session_start();
//
if (empty($_SESSION['username'])) {
    header("location:../login.php"); 
    exit();
}
?>
<?php
    include "config/koneksi.php";
    $id_admin    = mysqli_real_escape_string($connection,$_GET['id_admin']); 
    $query      = "SELECT * FROM tbl_admin WHERE id_admin='".$id_admin."'"; 
    $sql        = mysqli_query($connection, $query); 
    $data       = mysqli_fetch_array($sql);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <?php include "navbar.php"; ?>
        <br>
        <!-- Content here -->
        <form action="config/update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" value="aksi_admin" name="aksi_admin">
        <input type="hidden" value="<?php echo $data['id_admin']; ?>" name="id_admin">
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>" id="validationServer01" placeholder="Isi Nama Admin" required />
        </div>
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" name="username" value="<?php echo $data['username']; ?>" id="validationServer02" placeholder="Isi Username Admin" required />
        </div>
        <div class="mb-3">
            <label class="form-label">Password (Baru)</label>
            <input type="text" class="form-control" name="password" id="validationServer03" placeholder="Isi Password Baru Admin" required />
        </div>
        <div class="mb-3">
            <input type="submit" value="Simpan" class="btn btn-primary" style="width:100%">
        </div>
        </form>
</body>
<?php include "footer.php"; ?>

</html>