<style>
    h2 { 
        text-align: center; 
        color: #333; 
    } 
    form { 
        max-width: 500px; 
        margin: 20px auto; 
        padding: 20px; 
        background: #fff; 
        border-radius: 8px; 
        box-shadow: 0 2px 6px rgba(0,0,0,0.1); 
        }

    input[type="text"], input[type="number"] { 
        width: 100%; 
        padding: 8px; 
        margin-bottom: 10px; 
        border: 1px solid #ccc; 
        border-radius: 4px; 
        box-sizing: border-box; 
    }

    button { 
        width: 100%; 
        padding: 10px; 
        background: #007bff; 
        border: none; 
        color: #fff; 
        font-weight: bold; 
        border-radius: 4px; 
        cursor: pointer; 
    }
</style>
<body>
    <h2>Tambah Anggota DPR</h2>
    <form id="formTambahDPR" action="<?= site_url('/admin/gaji/update/' .$komponen['id_komponen_gaji']) ?>" method="post">
        <label></label>Nama Komponen Gaji<br>
        <input type="text" name="nama_komponen" id="nama_komponen" value="<?= esc($komponen['nama_komponen']) ?>">
        <span id="firstnameError" style="color:red"></span><br><br>

        <label>Kategori</label><br>
        <input type="radio" name="kategori" value="Gaji Pokok" id="kategori" 
            <?= ($komponen['kategori'] ?? '') === 'Gaji Pokok' ? 'checked' : '' ?>>
        <label for="gajipokok"></label>Gaji Pokok<br>
        <input type="radio" name="kategori" value="Tunjangan Melekat" id="kategori" 
            value="<?= ($komponen['kategori'] ?? '') === 'Tunjangan Melekat' ? 'checked' : '' ?>">
        <label for="tunjangan"></label>Tunjangan Melekat<br>
        <input type="radio" name="kategori" value="Tunjangan Lain" id="kategori" 
            value="<?= ($komponen['kategori'] ?? '') === 'Tunjangan Lain' ? 'checked' : '' ?>">
        <label for="tunjangan"></label>Tunjangan Lain<br>        
        <span id="statusError" style="color:red"></span><br>

        <label>Jabatan</label><br>
        <input type="radio" name="jabatan" value="Ketua" id="jabatan"
            <?= ($komponen['jabatan'] ?? '') === 'Ketua' ? 'checked' : '' ?>>
        <label for="ketua">Ketua</label><br>
        <input type="radio" name="jabatan" value="Wakil Ketua" id="jabatan"
            <?= ($komponen['jabatan'] ?? '') === 'Wakil Ketua' ? 'checked' : '' ?>>
        <label for="wakilketua">Wakil Ketua</label><br>
        <input type="radio" name="jabatan" value="Anggota" id="jabatan"
            <?= ($komponen['jabatan'] ?? '') === 'Anggota' ? 'checked' : '' ?>>
        <label for="anggota">Anggota</label>
        <span id="jabatanError" style="color:red"></span><br><br>

        <label>Nominal</label><br>
        <input type="number" name="nominal" id="nominal" value="<?= esc($komponen['nominal']) ?>">
        <span id="gelarDepanError" style="color:red"></span><br><br>
        
        <label>Satuan</label><br>
        <input type="radio" name="satuan" value="Bulan" id="satuan"
            <?= ($komponen['satuan'] ?? '') === 'Bulan' ? 'checked' : '' ?>>
        <label for="bulan">Bulanan</label><br>
        <input type="radio" name="satuan" value="Tahun" id="satuan"
            <?= ($komponen['satuan'] ?? '') === 'Tahun' ? 'checked' : '' ?>>
        <label for="tahun">Tahunan</label><br>
        <input type="radio" name="satuan" value="Periode" id="satuan"
            <?= ($komponen['satuan'] ?? '') === 'Periode' ? 'checked' : '' ?>>
        <label for="tahun">Tahunan</label><br>
        <span id="jabatanError" style="color:red"></span><br>
        <button type="submit">Simpan</button>
    </form>
</body>