@extends("layouts.index")
@section("title")
    Kullanıcı Listesi
@endsection
@section("content")
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-11">
            <h1>Ürün Listesi</h1>
            <table class="table table-striped" id="table1">
                <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Category Name</th>
                    <th>Product Features</th>
                    <th>Brand</th>
                    <th>Store name</th>
                    <th>Transactions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>24' monitor</td>
                    <td>Donanım Araçları</td>
                    <td>75 Hz</td>
                    <td>SBK</td>
                    <td>SBK Teknoloji</td>
                    <td>
                        <a href="{{route("admin.product.edit",["edit" => 1])}}" class="btn btn-outline-primary">Update</a>
                        <a href="#" class="btn btn-outline-danger">Delete</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
