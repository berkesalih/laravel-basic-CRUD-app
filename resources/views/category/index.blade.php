@extends("layouts.index")
@section("title")
    Kategori Listesi
@endsection
@section("content")
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-11">
            <h1>Kategori Listesi</h1>
            <table class="table table-striped" id="table1">
                <thead>
                <tr>
                    <th>Category Name</th>
                    <th>Category Desc</th>
                    <th>Transactions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($viewdata as $a)
                <tr>
                    <td>{{$a->cat_title}}</td>
                    <td>{{$a->cat_description}}</td>
                    <td>
                        <a href="{{route("admin.category.edit",["edit" => $a->id])}}" class="btn btn-outline-primary">Update</a>
                        <a href="{{route("admin.category.delete",["delete" => $a->id])}}" class="btn btn-outline-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
