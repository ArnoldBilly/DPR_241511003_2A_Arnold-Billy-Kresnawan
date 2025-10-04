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

    input[type="text"] { 
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
    <form id="formTambahDPR" action="<?= site_url('/admin/anggota/store') ?>" method="post">
        <label></label>Nama Depan<br>
        <input type="text" name="nama_depan" id="nama_depan">
        <span id="namaDepanError" style="color:red"></span><br><br>

        <label>Nama Belakang</label><br>
        <input type="text" name="nama_belakang" id="nama_belakang">
        <span id="namaBelakangError" style="color:red"></span><br><br>

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
        <input type="radio" name="status" value="Cerai Hidup" id="status">
        <label for="ceraihidup"></label>Cerai Hidup<br>
        <input type="radio" name="status" value="Cerai Mati" id="status">
        <label for="ceraimati">Cerai Mati</label><br>
        <span id="statusError" style="color:red"></span><br><br>
        
        <button type="submit">Simpan</button>
    </form>
        <script>
        function validateEditForm() {
            const namaDepan = document.getElementById('nama_depan').value.trim();
            const namaBelakang = document.getElementById('nama_belakang').value.trim();
            let isValid = true;

            document.getElementById('namaDepanError').textContent = "";
            document.getElementById('namaBelakangError').textContent = "";

            if (namaDepan === "") {
                document.getElementById('namaDepanError').textContent = "Nama Depan tidak boleh kosong!";
                isValid = false;
            }
            if (namaBelakang === "") {
                document.getElementById('namaBelakangError').textContent = "Nama Belakang tidak boleh kosong!";
                isValid = false;
            }

            return isValid;
        }

        document.getElementById('formTambahDPR').addEventListener('submit', function(e) {
            if (!validateEditForm()) {
                e.preventDefault(); // cegah submit
            }
        });
    </script>
</body>