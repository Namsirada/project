<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
</head>
<body>

<div class="container mt-2">
        <div class="row">
                <div id="backgroundImage text-center">
                    <h1>ข้อมูลสมาชิก</h1>
                </div>
            <div>
                <a href="{{ route('companies.create')}}" class="btn btn-success">Add Member</a>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
            <p>{{$message}}</p>
            </div>
            @endif
            <table class="table table-bordered">
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach($companies as $company)
                <tr>
                    <td>{{ $company->id }}</td>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->email }}</td>
                    <td>{{ $company->address }}</td>
                    <td>
                        <form action="{{ route('companies.destroy', $company->id) }}" method="POST">
                            <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-warning">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            {!!$companies->links('pagination::bootstrap-5')!!}
        </div>
    </div>
</body>
</html>
