<body>
    <h2>Edit Penggajian Anggota DPR</h2>

    <p>
        <strong>Nama Anggota:</strong> 
        <?= esc($anggota['gelar_depan'].' '.$anggota['nama_depan'].' '.$anggota['nama_belakang'].' '.$anggota['gelar_belakang']) ?>
    </p>

    <h3>Komponen Gaji yang Sudah Diambil</h3>
    <table border="1" cellpadding="5" cellspacing="0" align="center">
        <tr>
            <th>No</th>
            <th>Nama Komponen</th>
            <th>Kategori</th>
            <th>Nominal</th>
            <th>Aksi</th>
        </tr>
        <?php if (!empty($komponenDiambil)): ?>
            <?php $i=1; ?>
            <?php foreach ($komponenDiambil as $row): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= esc($row['nama_komponen']) ?></td>
                    <td><?= esc($row['kategori']) ?></td>
                    <td><?= number_format($row['nominal'], 0, ',', '.') ?></td>
                    <td>
                        <a href="<?= site_url('admin/penggajian/deleteKomponen/'.$anggota['id_anggota'].'/'.$row['id_komponen_gaji']) ?>" onclick="return confirm('Yakin hapus komponen <?= esc($row['nama_komponen'])?>?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5" align="center">Belum ada komponen gaji yang diambil</td>
            </tr>
        <?php endif; ?>
    </table>
    <a href="<?= site_url('admin/datapenggajian') ?>">Kembali ke Daftar</a>
</body>