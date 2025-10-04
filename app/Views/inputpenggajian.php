<h3>Input Penggajian untuk: <?= $anggota['nama_depan'].' '.$anggota['nama_belakang'].' ('.$anggota['jabatan'].')' ?></h3>

<form method="post" action="<?= base_url('/admin/penggajian/save') ?>">
    <input type="hidden" name="id_anggota" value="<?= $anggota['id_anggota'] ?>">

    <label>Pilih Komponen Gaji / Tunjangan</label><br>
    <select name="id_komponen_gaji" required>
        <?php foreach ($komponen as $k): ?>
            <option value="<?= $k['id_komponen_gaji'] ?>">
                <?= $k['nama_komponen'].' - Rp'.number_format($k['nominal'],0,',','.') ?>
            </option>
        <?php endforeach; ?>
    </select>
    <br><br>

    <button type="submit">Simpan</button>
</form>
