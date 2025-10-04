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
        a { text-decoration:none; color:#007bff; }
        a:hover { text-decoration:underline; }
        table { border-collapse: collapse; width: 100%; background: #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        table th, table td { border: 1px solid #ddd; padding: 10px; text-align: center; }
        table th { background: #343a40; color: #fff; }
    </style>
</head>
<body>

    <div class="header">
        <h2><?php $title ?></h2>
        <h2>APLIKASI PENGHITUNGAN & TRANSPARANSI GAJI DPR</h2>
    </div>

    <div class="menu">
        <a href="<?= base_url('/admin/komponengaji') ?>">Komponen Gaji</a>
        <a href="<?= base_url('admin/datapenggajian') ?>">Data Penggajian</a>
        <a href="<?= base_url('/admin') ?>">Home</a>
        <a href="<?= base_url('/logout') ?>">Logout</a>
    </div>

    <div class="content">
        <?php echo $content ?>
    </div>

    <div class="footer">
        <p>&copy; <?= date('Y') ?> My Website</p>
    </div>

    <script>
        const menuLinks = document.querySelectorAll(".menu a"); 
        const currentUrl = window.location.href;

        menuLinks.forEach(link => {
            if (link.href === currentUrl) {
                link.classList.add("active");
            }
        });
    </script>
</body>
</html>