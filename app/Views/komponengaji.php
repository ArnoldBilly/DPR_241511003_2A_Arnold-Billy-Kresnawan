    <h1>Data Komponen Gaji</h1>
    <h3><a href="<?= site_url('/admin/gaji/input') ?>">Tambah Komponen Gaji</a></h3>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID Komponen Gaji</th>
            <th>Nama Komponen Gaji</th>
            <th>Aksi</th>
        </tr>
        <?php if(!empty($komponen)): ?>
            <?php foreach($komponen as $kmp): ?>
                <tr>
                    <td><?= esc($kmp['id_komponen_gaji'])?></td>
                    <td><?= esc($kmp['nama_komponen']) ?></td>
                    <td>
                        <a href="<?= site_url('/admin/gaji/details/') .$kmp['id_komponen_gaji']?>">Detail</a> ||
                        <a href="<?= site_url('/admin/gaji/edit/') .$kmp['id_komponen_gaji'] ?>">Edit</a> || 
                        <a href="<?= site_url('/admin/gaji/delete/') .$kmp['id_komponen_gaji']; ?>" onclick="return confirm('Betul hapus komponen gaji <?= $kmp['nama_komponen']?>?')">Delete</a>                    
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>

    <a href="<?= site_url('/admin') ?>">Kembali ke Home Page</a>