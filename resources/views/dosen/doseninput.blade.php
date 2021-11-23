<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="{{ route('dosenSave') }}" method="post">
                    @csrf
                <br>    
                <h2>Tambah Data Dosen</h2>
                    <div class="mb-3">
                        <label for="">NIP</label>
                        <input type="text" class="form-control" name="nip" placeholder="NIP" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="">Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="">No Telepon</label>
                        <input type="number" class="form-control" placeholder="No Telepon" name="telp" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                    </div>
                    
                    <input type="submit" class="btn btn-primary" value="Simpan Data">
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>