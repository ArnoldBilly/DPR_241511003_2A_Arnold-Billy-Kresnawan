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
    <h2>Edit Data Anggota DPR</h2>
    <form id="formEditDPR" action="<?= site_url('/admin/anggota/update/'. $anggota['id_anggota']) ?>" method="post">
        <label></label>Nama Depan<br>
        <input type="text" name="nama_depan" id="nama_depan" value="<?= esc($anggota['nama_depan']) ?>">
        <span id="namaDepanError" style="color:red"></span><br><br>

        <label>Nama Belakang</label><br>
        <input type="text" name="nama_belakang" id="nama_belakang" value="<?= esc($anggota['nama_belakang'])?>">
        <span id="namaBelakangError" style="color:red"></span><br><br>

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
        <input type="radio" name="status" value="Cerai Hidup" id="status"
            <?= ($anggota['status_pernikahan'] ?? '') === 'Cerai Hidup' ? 'checked' : '' ?>>
        <label for="ceraihidup"></label>Cerai Hidup<br>
        <input type="radio" name="status" value="Cerai Mati" id="status"
            <?= ($anggota['status_pernikahan'] ?? '') === 'Cerai Mati' ? 'checked' : '' ?>>
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

        document.getElementById('formEditDPR').addEventListener('submit', function(e) {
            if (!validateEditForm()) {
                e.preventDefault(); // cegah submit
            }
        });
    </script>
</body>