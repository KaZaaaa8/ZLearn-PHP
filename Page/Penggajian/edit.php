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
                $id = $_GET['id'];
                $karyawan = $koneksi->query("SELECT * FROM penggajian WHERE ID = '$id'");
                while ($data = $karyawan->fetch_array()) {
                ?>

                    <form action="editpenggajian.php" method="post">

                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nik" value="<?php echo $data['NIK_Karyawan'] ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">Tahun</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="tahun" value="<?php echo $data['Tahun'] ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">Bulan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="bulan" value="<?php echo $data['Bulan'] ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">Gaji Bayar</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="gajibayar" value="<?php echo $data['Gaji_Bayar'] ?>">
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