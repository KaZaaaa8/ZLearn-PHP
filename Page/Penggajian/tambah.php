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
    <br>
    <!--card-->
    <div class="mx-auto">
        <div class="card">
            <div class="card-header bg-dark" style="color: white;" >
                Tambah Data
            </div>
            <div class="card-body">
                <form action="tambahdatapenggajian.php" method="post">
                    <div class="row mb-3">
                        <label for="nik" class="col-sm-2 col-form-label">NIK Karyawan</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="nik">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nik" class="col-sm-2 col-form-label">Tahun</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="tahun">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nik" class="col-sm-2 col-form-label">Bulan</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="bulan">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nik" class="col-sm-2 col-form-label">Gaji Bayar</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="gajibayar">
                        </div>
                    </div>

                    <div style="float:left; margin-right:20px;" >
                        <button class="btn btn-dark" type="submit" value="SIMPAN">Simpan Data</button>
                    </div>

                </form>

                <div style="float:left; margin-right:20px;">
                    <button class="btn btn-dark" value="KEMBALI" onclick="history.go(-1);">Kembali</button>
                </div>
            </div>
        </div>
    </div>

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