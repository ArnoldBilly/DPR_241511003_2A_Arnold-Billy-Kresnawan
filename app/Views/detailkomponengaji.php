<h3>Detail Komponen Gaji Anggota DPR</h3>

<div class="card">
    <table class="datadetail" style="width:50%; margin-top:10px; border:solid; padding:10px;">
        <tr>
            <td><b>ID Komponen Gaji</b></td>
            <td>:</td>
            <td><?= esc($komponen['id_komponen_gaji'])?></td>
        </tr>
        <tr>
            <td><b>Nama Komponen Gaji</b></td>
            <td>:</td>
            <td><?= esc($komponen['nama_komponen']) ?></td>
        </tr>
        <tr>
            <td><b>Kategori</b></td>
            <td>:</td>
            <td><?= esc($komponen['kategori']) ?></td>
        </tr>
        <tr>
            <td><b>Jabatan</b></td>
            <td>:</td>
            <td><?= esc($komponen['jabatan']) ?></td>
        </tr>
        <tr>
            <td><b>Nominal</b></td>
            <td>:</td>
            <td><?= esc($komponen['nominal']) ?></td>
        </tr>
        <tr>
            <td><b>Satuan</b></td>
            <td>:</td>
            <td><?= esc($komponen['satuan']) ?></td>
        </tr>
    </table>
    <p><a href="<?= site_url('admin/komponengaji')?>">Kembali</a></p>
</div>