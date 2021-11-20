<!DOCTYPE html>
<html>
<head>
    <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
    +0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
    crossorigin="anonymous">
    <title>Pendaftaran</title>
</head>
<body style="background-color: #113CFC">
    <div class="row" style="margin-top:50px;">
    <div class="col-md"></div>
    <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px">
    <form action="proses_tambah_member.php" method="post">
    <center><h3>DAFTAR USER</h3></center>
        Nama User:
        <input type="text" name="nama_user" value="" class="form-control">
        <br>
        Alamat:
        <textarea name="alamat" class="form-control" rows="4"></textarea>
        <br>
        Gender:
        <select name="gender" class="form-control">
            <option></option>
            <option value="L">Laki laki</option>
            <option value="P">Perempuan</option>
        </select>
        <br>
        Username:
            <input type="text" name="username" value="" class="form-control">
        <br>
        Password:
            <input type="password" name="password" value="" class="form-control">
        <br>
        <div class="form-check mb-2 mr-sm-2">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="remember"> Apakah anda menyetujui segala peraturan dalam Ruang Pensil?
                </label>
        </div>
        <br>    
        
            <input type="submit" name="simpan" value="Selesai" class="btn btn-primary">
        </form>
    </div>
        <div class="col-md"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>