<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action = "proses_form.php" method = "POST" class = "w-50">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nim" name="nim" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label" for="nama">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="Laki-Laki" required="required"> 
        <label for="radio_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="perempuan" required="required"> 
        <label for="radio_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="prodi" name="prodi" class="custom-select" required="required">
        <option value="teknik informatika">Teknik Informatika</option>
        <option value="sistem informasi">Sistem Informasi</option>
        <option value="bisnis digital">Bisnis digital</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Keahlian</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="keahlian" id="keahlian_0" type="checkbox" class="custom-control-input" value="HTML" required="required"> 
        <label for="keahlian_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="keahlian" id="keahlian_1" type="checkbox" class="custom-control-input" value="CSS" required="required"> 
        <label for="keahlian_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="keahlian" id="keahlian_2" type="checkbox" class="custom-control-input" value="Javascript" required="required"> 
        <label for="keahlian_2" class="custom-control-label">Javascript</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="keahlian" id="keahlian_3" type="checkbox" required="required" class="custom-control-input" value="python"> 
        <label for="keahlian_3" class="custom-control-label">Python</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="keahlian" id="keahlian_4" type="checkbox" required="required" class="custom-control-input" value="RDW bootstrap"> 
        <label for="keahlian_4" class="custom-control-label">RWD Bootstrap</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="keahlian" id="keahlian_5" type="checkbox" required="required" class="custom-control-input" value="lainnya"> 
        <label for="keahlian_5" class="custom-control-label">Lainnya</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="domisili" class="col-4 col-form-label">Domisili</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-map-marker"></i>
          </div>
        </div> 
        <input id="domisili" name="domisili" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-envelope"></i>
          </div>
        </div> 
        <input id="email" name="email" type="text" class="form-control" required="required">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form
