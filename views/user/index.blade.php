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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>City</th>
                    <th>Transactions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Graiden</td>
                    <td>vehicula.aliquet@semconsequat.co.uk</td>
                    <td>076 4820 8838</td>
                    <td>Offenburg</td>
                    <td>
                        <a href="{{route("admin.user.edit",["edit" => 1])}}" class="btn btn-outline-primary">Update</a>
                        <a href="#" class="btn btn-outline-danger">Delete</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
