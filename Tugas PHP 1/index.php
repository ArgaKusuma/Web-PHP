<!DOCTYPE html>

<head>
<h1>Tugas PHP 1</h1>
</head>

<body>
<div class="container-md mt-5">
<h1>Input data Mahasiswa</h1> <Br>
<form action="proses.php" method="POST">
<div class="form-group">
<label for="Nama_lengkap" class="col-2 col-form-label">Nama Lengkap</label>
<div class="col-10">
<input type="text" class="form-control" id="Nama" name="Nama"></div>
</div>

<div class="form-group">
<label for="NIM" class="col-2 col-form-label">NIM</label>
<div class="col-10">
<input type="text" class="form-control" id="NIM" name="NIM"></div>
</div>

<div class="form-group">
<label for="Tgl_lhr" class="col-2 col-form-label">Tanggal lahir</label>
<div class="col-10">
<input type="date" class="form-control" id="Tgl_lhr" name="Tgl_lhr"></div>
</div>

<div class="form-group">
<label for="Tmp_lhr" class="col-2 col-form-label">Tempat lahir</label>
<div class="col-10">
<input type="text" class="form-control" id="Tmp_lhr" name="Tmp_lhr"></div>
</div>

<div class="form-group">
<label for="Umur" class="col-2 col-form-label">Umur</label>
<div class="col-10">
<input type="number" class="form-control" id="Umur" name="Umur"></div>
</div>

<div class="form-group">
<label for="Hobi" class="col-2 col-form-label">Hobi</label>
<div class="col-10">
<input type="text" class="form-control" id="Hobi" name="Hobi"></div>
</div>

<div class="form-group">
<label for="Nama_lengkap" class="col-2 col-form-label">Keterangan</label>
<div class="col-10">
<input type="text" class="form-control" id="Keterangan" name="Keterangan"></div>
</div>
<br>
<button type="submit" class="btn btn-primary mb-3">Submit</button>
</form>
</div>
</body>
</html>