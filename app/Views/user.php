<!DOCTYPE html>
<html lang="en">
<body>
    <style>
        body {
            font-family: 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f4f8;
            color: #333;
            line-height: 1.6;
        }

        .title {
            background-color: #4a69bd;
            color: #fff;
            padding: 25px;
            text-align: center;
            margin: 0;
            font-size: 28px;
            font-weight: 600;
        }

        nav {
            background-color: #fff;
            padding: 15px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        nav a {
            text-decoration: none;
            color: #4a69bd;
            font-weight: 600;
            margin: 0 15px;
            transition: color 0.3s;
        }

        nav a.active {
            border-bottom: 2px solid blue; 
            font-weight: bold;
        }

        nav a:hover {
            color: #2e4a86;
        }

        .content {
            padding: 30px;
            max-width: 900px;
            margin: 30px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        li {
            background-color: #f8f9fa;
            padding: 15px 20px;
            margin-bottom: 10px;
            border-left: 5px solid #4a69bd;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        li a {
            text-decoration: none;
            background-color: #28a745;
            color: #fff;
            padding: 8px 15px;
            border-radius: 20px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        li a:hover {
            background-color: #218838;
        }

        hr {
            border: none;
            border-top: 1px solid #ddd;
            margin: 0;
        }

        .content h2 {
            color: #4a69bd;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e9ecef;
        }
        a { 
            text-decoration:none; 
            color:#007bff; 
        }
        a:hover { 
            text-decoration:underline; 
        }
        .footer { 
            background:#333; 
            color:#fff; 
            text-align:center; 
            padding:10px; 
        }
        table {
            border-collapse: collapse;
            width: 100%;
            background: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        table th {
            background: #343a40;
            color: #fff;
        }
    </style>
    <h1 class="title"><?= $title ?></h1>
    <nav>
        <a href="<?= site_url('user/anggotadpr') ?>">Daftar Anggota DPR</a> |
        <a href="<?= site_url('user/penggajiandpr') ?>">Lihat Penggajian Anggota DPR</a> |
        <a href="<?= base_url('/logout') ?>">Logout</a>
    </nav>
    <hr>
    <div class="content">
        <?= $content ?>
    </div>

    <div class="footer">
        <p>&copy; <?= date('Y') ?> My Website</p>
    </div>

    <script>
    const menuLinks = document.querySelectorAll("nav a"); 
    const currentUrl = window.location.href;

    menuLinks.forEach(link => {
        if (link.href === currentUrl) {
            link.classList.add("active");
        }
    });
    </script>

</body>
</html>