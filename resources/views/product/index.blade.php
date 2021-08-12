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
                    <th>User Id </th>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Product Order<</th>
                    <th>Product Price<</th>
                    <th>Product Currency<</th>
                    <th>Transactions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($viewdata as $a)
                    <tr>
                        <td>{{$a->user_id}}</td>
                        <td>{{$a->product_title}}</td>
                        <td>{{$a->product_description}}</td>
                        <td>{{$a->product_order}}</td>
                        <td>{{$a->product_prc}}</td>
                        <td>{{$a->product_cid}}</td>
                        <td>
                            <a href="{{route("admin.product.edit",["edit" => $a->id])}}" class="btn btn-outline-primary">Update</a>
                            <a href="{{route("admin.product.delete",["delete" => $a->id])}}" class="btn btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
