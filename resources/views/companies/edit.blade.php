<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
</head>
<body>

    <div class="container mt-2">
        <div class="row">
                <div id="backgroundImage">
                    <h1>แก้ไขข้อมูลสมาชิก</h1>
                </div>
            <form action="{{  route('companies.update', $company->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Name</strong>
                            <input type="text" name="name" value="{{$company->name}}" class="form-control" placeholder="Name">
                            @error('name')
                                <div class="alert alert-danger">{{  $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Email</strong>
                            <input type="email" name="email" value="{{$company->email}}" class="form-control" placeholder="Email">
                            @error('email')
                            <div class="alert alert-danger">{{  $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Address</strong>
                            <input type="text" name="address" value="{{$company->address}}" class="form-control" placeholder="Address">
                            @error('address')
                            <div class="alert alert-danger">{{  $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="mt-3 btn btn-success">Update</button>
                        <a href="{{ route('companies.index')}}" class="mt-3 btn btn-primary">Cancel</a>
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{  sesion('status') }}
                        </div>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
