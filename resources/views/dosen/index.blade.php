<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2>Data Dosen</h2>
            </div>
            <div class="col-6" align="right">
                <a href="{{ route('dosenAdd') }}" class="btn btn-primary">Input Data</a>
            </div>
            
            <table class="table table-hover">
                <tr>
                    <th>Id</th>
                    <th>NIP</th>
                    <th>Nama Lengkap</th>
                    <th>No Telepon</th>
                    <th>Email</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th>Aksi</th>
                </tr>
                @foreach($dosen as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->nip}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->telp}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->created_at}}</td>
                    <td>{{$data->updated_at}}</td>
                    <td>
                        <a href="/editdosen/{{$data->id}}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/hapusdosen/{{$data->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Data Akan Dihapus?')">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>