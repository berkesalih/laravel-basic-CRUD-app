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
                    <th>Cart Number</th>
                    <th>Product ID</th>
                    <th>Sale Code</th>
                    <th>Sale Price</th>
                    <th>Sale Currency</th>
                    <th>Transactions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($viewdata as $a)
                    <tr>
                        <td>{{$a->orid }}</td>
                        <td>{{$a->product_id}}</td>
                        <td>{{$a->code }}</td>
                        <td>{{$a->prc }}</td>
                        <td>{{$a->cid }}</td>
                        <td>
                            <a href="{{route("admin.cart.edit",["edit" => $a->id])}}" class="btn btn-outline-primary">Update</a>
                            <a href="{{route("admin.cart.delete",["delete" => $a->id])}}" class="btn btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
