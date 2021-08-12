@extends("layouts.index")
@section("title")
    Kullanıcı Listesi
@endsection
@section("content")
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-11">
            <h1>Kullanıcı Listesi</h1>
            <table class="table table-striped" id="table1">
                <thead>
                <tr>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Phone</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Transactions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($viewdata as $a)
                    <tr>
                        <td>{{$a->uname}}</td>
                        <td>{{$a->email}}</td>
                        <td>{{$a->password}}</td>
                        <td>{{$a->mpno}}</td>
                        <td>{{$a->fname}}</td>
                        <td>{{$a->lname}}</td>
                        <td>
                            <a href="{{route("admin.user.edit",["edit" => $a->id])}}" class="btn btn-outline-primary">Update</a>
                            <a href="{{route("admin.user.delete",["delete" => $a->id])}}" class="btn btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
