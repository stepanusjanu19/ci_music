<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
</head>
<body>
    <div class="w3-bar w3-border w3-light-grey w3-card-4">
        <a href="#" class="w3-bar-item w3-blue w3-button">Home</a>
        <a href="#" class="w3-bar-item w3-blue w3-button">Catalog Lagu</a>
        <?php if($this->session->userdata('access')=='Administrator'){ ?>
            <a href="#" class="w3-bar-item w3-button">Daftar Dosen</a>
            <a href="#" class="w3-bar-item w3-button">Daftar Mahasiswa</a>
            <a href="#" class="w3-bar-item w3-button">Daftar Mata Kuliah</a>
        <?php } if($this->session->userdata('access')=='Dosen'){ ?>
            <a href="#" class="w3-bar-item w3-button">Daftar Mahasiswa</a>
        <?php } if($this->session->userdata('access')=='Mahasiswa'){ ?>
            <a href="#" class="w3-bar-item w3-button">Daftar Mata Kuliah</a>
        <?php }; ?>
        <a href="<?php echo site_url('login/logout');?>" class="w3-bar-item w3-button w3-red w3-right">Keluar</a>
    </div>
</body>
</html> -->

<!doctype html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title><?= $title ?></title>
   <!-- Favicon -->
   <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.ico" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
   <!-- Typography CSS -->
   <link rel="stylesheet" href="<?= base_url() ?>assets/css/typography.css">
   <!-- Style CSS -->
   <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css">
   <link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css">

   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
</head>
<body>