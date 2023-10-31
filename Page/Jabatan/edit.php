<?php
require '../../Config/config.php';
require '../../Config/koneksi.php';
?>

<!doctype html>
<html lang="en">

<?php
include "../../Template/Head.php";
?>

<!-- Navbar -->
<?php
include "../../Template/Navbar.php";
?>
<!-- End Navbar -->

<style>
    .mx-auto {
        width: 1000px;
    }

    .card {
        margin-top: 10px;
    }
</style>

<body>
    <!--card-->
    <div class="mx-auto">
        <div class="card">
            <div class="card-header bg-dark" style="color: white;">
                Edit Data
            </div>
            <div class="card-body">

                <?php
                include "../../Config/koneksi.php";
                $ID = $_GET['ID'];
                $karyawan = $koneksi->query("SELECT * FROM bagian WHERE ID = '$ID'");
                while ($data = $karyawan->fetch_array()) {
                ?>

                    <form action="editjabatan.php" method="post">
                        <div class="row mb-3">
                            <label for="nik" class="col-sm-2 col-form-label">ID Jabatan</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="id" value="<?php echo $data['ID'] ?>" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">Nama Jabatan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" value="<?php echo $data['Nama'] ?>">
                            </div>
                        </div>
                        
                        <div style="float:left; margin-right:20px;">
                            <button class="btn btn-dark" type="submit" value="SIMPAN">Simpan Data</button>
                        </div>

                    </form>

                    <div style="float:left; margin-right:20px;">
                        <button class="btn btn-dark" value="KEMBALI" onclick="history.go(-1);">Kembali</button>
                    </div>
            </div>
        </div>
    </div>

<?php
                }
?>

<!--footer-->
<?php
include "../../Template/Footer.php";
?>
<!--end footer-->

<!--End card-->
<?php
include "../../Template/Script.php";
?>

</body>


</html>