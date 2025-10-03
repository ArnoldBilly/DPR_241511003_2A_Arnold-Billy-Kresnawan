    <h1>Data Anggota DPR</h1>
    <h3><a href="<?= site_url('/admin/anggota/input') ?>">Tambah Anggota DPR</a></h3>
    <table border="1" cellpadding="5">
        <tr>
            <th>Nama Anggota DPR</th>
            <th>Aksi</th>
        </tr>
        <?php if(!empty($anggota)): ?>
            <?php foreach($anggota as $angg): ?>
                <tr>
                    <td><?= esc($angg['nama_depan']). esc(' '). esc($angg['nama_belakang'])?></td>
                    <td><a href=" <?= site_url('admin/anggota/details/' .$angg['id_anggota']) ?>">Details</a> || <a href="<?= site_url('admin/anggota/edit/' .$angg['id_anggota']) ?>">Edit</a> || <a href="<?= site_url('admin/anggota/delete/' .$angg['id_anggota']); ?>" onclick="return confirm('Betul hapus anggota DPR atas nama <?= $angg['nama_depan']?> <?=  $angg['nama_belakang']?>?')">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>