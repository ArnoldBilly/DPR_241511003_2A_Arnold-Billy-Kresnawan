<body>
    <h2>Edit Data Anggota DPR</h2>
    <form id="formEditDPR" action="<?= site_url('/admin/anggota/update/'. $anggota['id_anggota']) ?>" method="post">
        <label></label>Nama Depan<br>
        <input type="text" name="nama_depan" id="nama_depan" value="<?= esc($anggota['nama_depan']) ?>">
        <span id="firstnameError" style="color:red"></span><br><br>

        <label>Nama Belakang</label><br>
        <input type="text" name="nama_belakang" id="nama_belakang" value="<?= esc($anggota['nama_belakang'])?>">
        <span id="lastnameError" style="color:red"></span><br><br>

        <label>Gelar Depan</label><br>
        <input type="text" name="gelar_depan" id="gelar_depan" value="<?= esc($anggota['gelar_depan'])?>">
        <span id="gelarDepanError" style="color:red"></span><br><br>

        <label>Gelar Belakang</label><br>
        <input type="text" name="gelar_belakang" id="gelar_belakang" value="<?= esc($anggota['gelar_belakang'])?>">
        <span id="gelarbelakangError" style="color:red"></span><br><br>

        <label>Jabatan</label><br>
        <input type="radio" name="jabatan" value="Ketua" id="jabatan"
            <?= ($anggota['jabatan'] ?? '') === 'Ketua' ? 'checked' : '' ?>>
        <label for="ketua">Ketua</label><br>
        <input type="radio" name="jabatan" value="Wakil Ketua" id="jabatan"
            <?= ($anggota['jabatan'] ?? '') === 'Wakil Ketua' ? 'checked' : '' ?>>
        <label for="wakilketua">Wakil Ketua</label><br>
        <input type="radio" name="jabatan" value="Anggota" id="jabatan" 
            <?= ($anggota['jabatan'] ?? '') === 'Anggota' ? 'checked' : '' ?>>
        <label for="anggota">Anggota</label>
        <span id="jabatanError" style="color:red"></span><br><br>

        <label>Status Pernikahan</label><br>
        <input type="radio" name="status" value="Kawin" id="status_kawin"
            <?= ($anggota['status_pernikahan'] ?? '') === 'Kawin' ? 'checked' : '' ?>>
        <label for="status_kawin">Kawin</label><br>
        <input type="radio" name="status" value="Belum Kawin" id="status_belum"
            <?= ($anggota['status_pernikahan'] ?? '') === 'Belum Kawin' ? 'checked' : '' ?>>
        <label for="status_belum">Belum Kawin</label><br>
        <span id="statusError" style="color:red"></span><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>