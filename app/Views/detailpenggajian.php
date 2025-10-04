<h2>Detail Penggajian Anggota DPR</h2>

<p>
    <strong>Nama Anggota:</strong> 
    <?= esc(($anggota['gelar_depan'] ?? '').' '.$anggota['nama_depan'].' '.$anggota['nama_belakang'].' '.($anggota['gelar_belakang'] ?? '')) ?>
</p>

<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama Komponen</th>
        <th>Kategori</th>
        <th>Nominal</th>
    </tr>
    <?php if (!empty($komponen)): ?>
        <?php $i=1; $total=0; ?>
        <?php foreach ($komponen as $row): ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= esc($row['nama_komponen']) ?></td>
                <td><?= esc($row['kategori']) ?></td>
                <td><?= number_format($row['nominal'], 0, ',', '.') ?></td>
            </tr>
            <?php $total += $row['nominal']; ?>
        <?php endforeach; ?>
        <tr>
            <td colspan="3" align="right"><strong>Total Take Home Pay</strong></td>
            <td><strong><?= number_format($total, 0, ',', '.') ?></strong></td>
        </tr>
    <?php else: ?>
        <tr>
            <td colspan="4" align="center">Belum ada komponen gaji yang diambil</td>
        </tr>
    <?php endif; ?>
</table>

<br>
<a href="<?= site_url('admin/datapenggajian') ?>">Kembali ke Daftar</a>
