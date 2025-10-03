<body>
    <h2>Tambah Anggota DPR</h2>
    <form id="formTambahDPR" action="<?= site_url('/admin/anggota/store') ?>" method="post">
        <label></label>Nama Depan<br>
        <input type="text" name="nama_depan" id="nama_depan">
        <span id="firstnameError" style="color:red"></span><br><br>

        <label>Nama Belakang</label><br>
        <input type="text" name="nama_belakang" id="nama_belakang">
        <span id="lastnameError" style="color:red"></span><br><br>

        <label>Gelar Depan</label><br>
        <input type="text" name="gelar_depan" id="gelar_depan">
        <span id="gelarDepanError" style="color:red"></span><br><br>

        <label>Gelar Belakang</label><br>
        <input type="text" name="gelar_belakang" id="gelar_belakang">
        <span id="gelarbelakangError" style="color:red"></span><br><br>

        <label>Jabatan</label><br>
        <input type="radio" name="jabatan" value="Ketua" id="jabatan">
        <label for="ketua">Ketua</label><br>
        <input type="radio" name="jabatan" value="Wakil Ketua" id="jabatan">
        <label for="wakilketua">Wakil Ketua</label><br>
        <input type="radio" name="jabatan" value="Anggota" id="jabatan">
        <label for="anggota">Anggota</label>
        <span id="jabatanError" style="color:red"></span><br><br>

        <label>Status Pernikahan</label><br>
        <input type="radio" name="status" value="Kawin" id="status">
        <label for="kawin"></label>Kawin<br>
        <input type="radio" name="status" value="Belum Kawin" id="status">
        <label for="belumkawin">Belum Kawin</label><br>
        <span id="statusError" style="color:red"></span><br><br>
        
        <button type="submit">Simpan</button>
    </form>
</body>