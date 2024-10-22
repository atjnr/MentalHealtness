<?php

if (isset($_POST['submit'])) {
    $penerima   = $_POST['penerima'];
    $pengirim   = $_POST['pengirim'];
    $tujuan     = $_POST['tujuan'];
    $bukti     = $_POST['bukti'];
    $whatsapp   = $_POST['whatsapp'];
    header("location: https://api.whatsapp.com/send?phone=$whatsapp&text=Saya%20telah%20membayar%20untuk%20konsultasi%20dengan%20dokter%20di%20Mental%20Healthness%20dengan%20Tujuan%20Rekening%20:%20$penerima%20A/N%20Pemilik%20Rekening%20:%20$pengirim%20No.%20Rekening%20Tujuan%20:%20$tujuan");
} else {
    echo"<script>
    window.location=history.go(-1);
    </script>
";
}
?>