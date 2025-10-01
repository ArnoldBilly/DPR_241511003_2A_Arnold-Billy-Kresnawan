<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <style>
        body { font-family: Arial, sans-serif; margin:0; padding:0; }
        .header { background:#007bff; color:#fff; padding:15px; text-align:center; }
        .menu { background:#f4f4f4; padding:10px; text-align:center; }
        .menu a { margin:0 10px; text-decoration:none; color:#007bff; }
        .menu a.active { border-bottom: 2px solid blue; font-weight: bold;}
        .content { padding:20px; min-height:300px; }
        .footer { background:#333; color:#fff; text-align:center; padding:10px; }
    </style>
</head>
<body>

    <div class="header">
        <h2><?php $title ?></h2>
        <h2>APLIKASI PENGHITUNGAN & TRANSPARANSI GAJI DPR</h2>
    </div>

    <div class="content">
        <?php echo $content ?>
    </div>

    <div class="footer">
        <p>&copy; <?= date('Y') ?> My Website</p>
    </div>
</body>
</html>