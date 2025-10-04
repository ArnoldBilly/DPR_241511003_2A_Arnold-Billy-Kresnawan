<h1>Penggajian Anggota DPR</h1>
<table border="1" cellpadding="5">
    <tr>
        <th>No</th>
        <th>Nama Anggota DPR</th>
        <th>Take Home Pay</th>
        <th>Aksi</th>
    </tr>
    <?php $i = 1; ?>
    <?php if (!empty($penggajian)): ?>
        <?php foreach ($penggajian as $pgj): ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= esc($pgj['nama']) ?></td>
                <td>
                    <?= $pgj['take_home_pay'] !== null 
                        ? number_format($pgj['take_home_pay'], 0, ',', '.') 
                        : "Belum Mengambil Penghasilan" ?>
                </td>
                <td>
                    <a href="<?= base_url('admin/penggajian/ambil/'.$pgj['id_anggota'])?>">Ambil Tunjangan</a> |
                    <a href="<?= base_url('admin/penggajian/details/'.$pgj['id_anggota']) ?>">Detail</a> |
                    <a href="<?= base_url('admin/penggajian/edit/'.$pgj['id_anggota']) ?>">Edit</a>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>

<a href="<?= site_url('/admin') ?>">Kembali ke Home Page</a>
