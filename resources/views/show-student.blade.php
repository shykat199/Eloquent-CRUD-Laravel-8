<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>

<div class="container">
    <table class="table">
        @if(Session::has('post_deleted'))
            <span class="alert alert-success alert-dismissible">
                {{Session::get('post_deleted')}}
            </span>
        @endif
        <a href="{{route('add-student')}}" type="button" class="btn btn-primary">All Student</a>


            <div class="col-12 col-md-10 col-lg-8">
                <form class="card card-sm" method="get"  accept="" enctype="multipart/form-data">

                    <div class="card-body row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-search h4 text-body  mr-2"></i>
                        </div>
                        <!--end of col-->
                        <div class="col">
                            <input class="form-control form-control-lg form-control-borderless"
                                   name="key" type="search" placeholder="Search By Name Or Email" value="">
                        </div>
                        <!--end of col-->
                        <div class="col-auto">
                            <button class="btn btn-lg btn-success ml-2" type="submit">Search</button>
                        </div>
                        <div class="col-auto">
                            <a href="{{url('/signup/view')}}">
                                <button class="btn btn-lg btn-warning ml-2" type="button">Reset</button>
                            </a>
                        </div>
                        <!--end of col-->
                    </div>
                </form>
            </div>


        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>
        </tr>
        </thead>

        <tbody>
        @php
            $i = 1;
        @endphp
        @foreach ($data as $datas)
            <tr>
                <th>{{ $i++ }}</th>
                <th>{{ $datas->name }}</th>
                <td>{{ $datas->email }}</td>
                <td>{{ $datas->number }}</td>
                <td>{{ $datas->address }}</td>

                <td>
                    <a class="btn btn-warning" href="/edit-student/{{ $datas->id }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>&nbsp;&nbsp;
                    <a class="btn btn-danger" href="/delete-student/{{ $datas->id }}">
                        <i class="fa-solid fa-trash"></i>
                    </a>
                </td>

            </tr>
        @endforeach
        </tbody>


    </table>

    <div class="container">
        {{$data->links('pagination::bootstrap-4')}}
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
