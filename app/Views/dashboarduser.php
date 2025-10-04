<body>
    <h1>Data Anggota DPR</h1>
    <h3><a href="<?= site_url('/admin/anggota/input') ?>">Tambah Anggota DPR</a></h3>
    <form method="get" action="<?= site_url('/admin/anggota') ?>">
        <input type="text" name="q" placeholder="Cari sesuatu?" value="<?= esc($search ?? '') ?>">
        <button type="submit">Cari</button>
    </form>
    <br>
    <table border="1" cellpadding="5" align="center">
        <tr>
            <th>Nama Anggota DPR</th>
            <th>Jabatan</th>
            <th>Status Pernikahan</th>
            <th>Aksi</th>
        </tr>
        <?php if(!empty($anggota)): ?>
            <?php foreach($anggota as $angg): ?>
                <tr>
                    <td><?= esc($angg['gelar_depan']). esc(' '). esc($angg['nama_depan']). esc(' '). esc($angg['nama_belakang']). esc(' '). esc($angg['gelar_belakang'])?></td>
                    <td><?= esc($angg['jabatan'])?> DPR</td>
                    <td><?= esc($angg['status_pernikahan']) ?></td>
                    <td><a href="<?= site_url('user/anggota/details/' .$angg['id_anggota'])?>">Detail</a></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</body>