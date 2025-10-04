<body>
    <h2>Tambah Anggota DPR</h2>
    <form id="formTambahDPR" action="<?= site_url('/admin/gaji/store') ?>" method="post">
        <label></label>Nama Komponen Gaji<br>
        <input type="text" name="nama_komponen" id="nama_komponen">
        <span id="firstnameError" style="color:red"></span><br><br>

        <label>Kategori</label><br>
        <input type="radio" name="kategori" value="Gaji Pokok" id="kategori">
        <label for="gajipokok"></label>Gaji Pokok<br>
        <input type="radio" name="kategori" value="Tunjangan Melekat" id="kategori">
        <label for="tunjangan"></label>Tunjangan Melekat<br>
        <input type="radio" name="kategori" value="Tunjangan Lain" id="kategori">
        <label for="tunjangan"></label>Tunjangan Lain<br>
        <span id="statusError" style="color:red"></span><br>

        <label>Jabatan</label><br>
        <input type="radio" name="jabatan" value="Ketua" id="jabatan">
        <label for="ketua">Ketua</label><br>
        <input type="radio" name="jabatan" value="Wakil Ketua" id="jabatan">
        <label for="wakilketua">Wakil Ketua</label><br>
        <input type="radio" name="jabatan" value="Anggota" id="jabatan">
        <label for="anggota">Anggota</label><br>
        <input type="radio" name="jabatan" value="Semua" id="jabatan">
        <label for="semua">Semua</label>
        <span id="jabatanError" style="color:red"></span><br><br>

        <label>Nominal</label><br>
        <input type="number" name="nominal" id="nominal">
        <span id="gelarDepanError" style="color:red"></span><br><br>
        
        <label>Satuan</label><br>
        <input type="radio" name="satuan" value="Bulan" id="satuan">
        <label for="bulan">Bulanan</label><br>
        <input type="radio" name="satuan" value="Tahun" id="satuan">
        <label for="tahun">Tahunan</label><br>
        <input type="radio" name="satuan" value="Periode" id="satuan">
        <label for="tahun">Periode</label><br>        
        <span id="jabatanError" style="color:red"></span><br>
        <button type="submit">Simpan</button>
    </form>
</body>