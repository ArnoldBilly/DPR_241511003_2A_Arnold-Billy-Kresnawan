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
                    <a href="<?= base_url('user/penggajian/details/'.$pgj['id_anggota']) ?>">Detail</a>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>