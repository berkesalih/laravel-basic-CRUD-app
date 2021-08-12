@extends("layouts.index")
@section("title")
    Kategori Ekleme/Düzenleme
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
                        <div class="row">
                        @csrf
                        @method("PUT")
                        @foreach($viewdata_ as $a)
                        <div class="col-md-8 col-12">
                            <div class="form-group">
                                <input type="text" value="{{$a->cat_title}}" class="form-control" placeholder="Category Name" name="catname">
                                <input type="hidden" value="{{ $a->id}}" class="form-control" placeholder="Category Name" name="catname">
                            </div>
                        </div>
                        <div class="col-md-8 col-12">
                            <div class="form-group">
                                <textarea type="text" class="form-control" placeholder="Category Description" name="catdesc">{{$a? $a->cat_description : ""}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-8 col-12">
                            <div class="form-group">
                                <div class="form-check">
                                    <div class="checkbox">
                                        <input name="status"{{$a->cat_status>0 ? "checked" : ""}} type="checkbox" class="form-check-input" id="checkbox2">
                                        <label for="checkbox2">Status</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                            <div class="col-12 d-flex">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </div>
                    </form>
                            @else
                    <form class="form" method="POST">
                        <div class="row">
                            @csrf
                                <div class="col-md-8 col-12">
                                    <div class="form-group">
                                        <input type="text"  class="form-control" placeholder="Category Name" name="catname">
                                    </div>
                                </div>
                                <div class="col-md-8 col-12">
                                    <div class="form-group">
                                        <textarea type="text" class="form-control" placeholder="Category Description" name="catdesc"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-8 col-12">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <div class="checkbox">
                                                <input name="status" type="checkbox" class="form-check-input" id="checkbox2">
                                                <label for="checkbox2">Status</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <div class="col-12 d-flex">
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

