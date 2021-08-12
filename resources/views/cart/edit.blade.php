@extends("layouts.index")
@section("title")
    Satış Ekleme/Düzenleme
@endsection
@section("content")
    @php
        if (is_numeric($viewdata_))
        {
            $edit = 0;
        }
        else
        {
            $edit=1;
        }
    @endphp
    <div class="row">
        <div class="col-md-12">
            <div class="card-body">
                @if($edit>0)
                <form class="form" method="POST">
                    @csrf
                    @method("PUT")
                    @foreach($viewdata_ as $a)
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <input type="text" id="product-name-column" value="{{$a->product_id}}" class="form-control" placeholder="Product ID" name="product_id">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <input type="text" id="product-name-column" value="{{$a->orid}}" class="form-control" placeholder="Sale Number" name="orid">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <input type="text" id="product-name-column" value="{{$a->sales_prc}}" class="form-control" placeholder="Sale Price" name="sales_prc">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <input type="text" id="category-name-column" value="{{$a->sales_cid}}" class="form-control" placeholder="Sale Currency" name="sales_cid">
                            </div>
                        </div>

                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                    </div>
                    @endforeach
                </form>
                @else
                    <form class="form" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" id="product-name-column" value="" class="form-control" placeholder="Product ID" name="product_id">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" id="product-name-column" value="" class="form-control" placeholder="Order Number" name="orid">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" id="product-name-column" value="" class="form-control" placeholder="Sale Price" name="sales_prc">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" id="category-name-column" class="form-control" placeholder="Sale Currency" name="sales_cid">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" id="category-name-column" class="form-control" placeholder="Sale Number" name="code">
                                </div>
                            </div>

                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection
