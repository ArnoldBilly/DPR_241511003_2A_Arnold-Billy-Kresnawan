<body>
    <h1>Data Anggota DPR</h1>
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