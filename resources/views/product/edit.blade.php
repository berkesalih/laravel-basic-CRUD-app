@extends("layouts.index")
@section("title")
    Ürün Ekleme/Düzenleme
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
                                <input type="text"  value="{{$a->product_title}}" class="form-control" placeholder="Product Name" name="pname">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <input type="text"  value="{{$a->product_unicode}}" class="form-control" placeholder="Unicode" name="unicode">
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <textarea class="form-control" name="desc" placeholder="Description">{{$a->product_description}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{$a->product_order}}" name="order" placeholder="Product Order">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{$a->product_prc}}" name="prc" placeholder="Product Price">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{$a->product_cid}}" name="cid" placeholder="Product exchange">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <div class="checkbox">
                                    <input name="status" type="checkbox" class="form-check-input" id="checkbox2">
                                    <label for="checkbox2">Status</label>
                                </div>
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
                                    <input type="text" id="product-name-column" value="" class="form-control" placeholder="Product Name" name="pname">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" id="product-name-column" value="" class="form-control" placeholder="Unicode" name="unicode">
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="desc" placeholder="Description"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="order" placeholder="Product Order">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="prc" placeholder="Product Price">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="cid" placeholder="Product exchange">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <div class="checkbox">
                                        <input name="status" type="checkbox" class="form-check-input" id="checkbox2">
                                        <label for="checkbox2">Status</label>
                                    </div>
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

