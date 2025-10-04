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
    <h2>Tambah Komponen Gaji DPR</h2>
    <form id="formGajiDPR" action="<?= site_url('/admin/gaji/store') ?>" method="post">
        <label></label>Nama Komponen Gaji<br>
        <input type="text" name="nama_komponen" id="nama_komponen">
        <span id="namaKomponenError" style="color:red"></span><br><br>

        <label>Kategori</label><br>
        <input type="radio" name="kategori" value="Gaji Pokok" id="kategori">
        <label for="gajipokok"></label>Gaji Pokok<br>
        <input type="radio" name="kategori" value="Tunjangan Melekat" id="kategori">
        <label for="tunjangan"></label>Tunjangan Melekat<br>
        <input type="radio" name="kategori" value="Tunjangan Lain" id="kategori">
        <label for="tunjangan"></label>Tunjangan Lain<br><br>

        <label>Jabatan</label><br>
        <input type="radio" name="jabatan" value="Ketua" id="jabatan">
        <label for="ketua">Ketua</label><br>
        <input type="radio" name="jabatan" value="Wakil Ketua" id="jabatan">
        <label for="wakilketua">Wakil Ketua</label><br>
        <input type="radio" name="jabatan" value="Anggota" id="jabatan">
        <label for="anggota">Anggota</label><br>
        <input type="radio" name="jabatan" value="Semua" id="jabatan">
        <label for="semua">Semua</label><br><br>

        <label>Nominal</label><br>
        <input type="number" name="nominal" id="nominal">
        <span id="NominalError" style="color:red"></span><br><br>
        
        <label>Satuan</label><br>
        <input type="radio" name="satuan" value="Bulan" id="satuan">
        <label for="bulan">Bulanan</label><br>
        <input type="radio" name="satuan" value="Tahun" id="satuan">
        <label for="tahun">Tahunan</label><br>
        <input type="radio" name="satuan" value="Periode" id="satuan">
        <label for="tahun">Periode</label><br>        
        <span id="satuanError" style="color:red"></span><br>
        <button type="submit">Simpan</button>
    </form>
        <script>
        function validateEditForm() {
            const namaKomponen = document.getElementById('nama_komponen').value.trim();
            const nominal = document.getElementById('nominal').value.trim();
            const satuan = document.querySelector('input[name="satuan"]:checked');
            let isValid = true;

            document.getElementById('namaKomponenError').textContent = "";
            document.getElementById('NominalError').textContent = "";
            document.getElementById('satuanError').textContent = "";
            if (namaKomponen === "") {
                document.getElementById('namaKomponenError').textContent = "Nama Komponen Gaji tidak boleh kosong.";
                isValid = false;
            }
            if (nominal === "" || isNaN(nominal) || Number(nominal) <= 0) { //NaN: Not a Number
                document.getElementById('NominalError').textContent = "Nominal harus berupa angka positif dan tidak boleh kosong.";
                isValid = false;
            }
            if (!satuan) {
                document.getElementById('satuanError').textContent = "Satuan harus dipilih.";
                isValid = false;
            }


            return isValid;
        }

        document.getElementById('formGajiDPR').addEventListener('submit', function(e) {
            if (!validateEditForm()) {
                e.preventDefault(); // cegah submit
            }
        });
    </script>
</body>