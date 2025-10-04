<h3>Detail Data DPR</h3>

<div class="card">
    <table class="datadetail" style="width:50%; margin-top:10px; border:solid; padding:10px;" align="center">
        <tr>
            <td><b>Nama Anggota DPR</b></td>
            <td>:</td>
            <td><?= esc($anggota['gelar_depan']). esc(' '). esc($anggota['nama_depan']). esc(' '). esc($anggota['nama_belakang']). esc(' '). esc($anggota['gelar_belakang'])?></td>
        </tr>
        <tr>
            <td><b>Jabatan</b></td>
            <td>:</td>
            <td><?= esc($anggota['jabatan'])?> DPR</td>
        </tr>
        <tr>
            <td><b>Status Pernikahan</b></td>
            <td>:</td>
            <td><?= esc($anggota['status_pernikahan']) ?></td>
        </tr>
    </table>
    <p><a href="<?= site_url('/user')?>">Kembali</a></p>
</div>