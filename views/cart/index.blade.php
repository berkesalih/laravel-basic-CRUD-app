@extends("layouts.index")
@section("title")
    Satış Listesi
@endsection
@section("content")
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-11">
            <h1>Satış Listesi</h1>
            <table class="table table-striped" id="table1">
                <thead>
                <tr>
                    <th>User Name</th>
                    <th>Category Name</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Transactions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Berke</td>
                    <td>Donanım Araçları</td>
                    <td>24' monitor</td>
                    <td>100$</td>
                    <td>
                        <a href="{{route("admin.cart.edit",["edit" => 1])}}" class="btn btn-outline-primary">Update</a>
                        <a href="#" class="btn btn-outline-danger">Delete</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
