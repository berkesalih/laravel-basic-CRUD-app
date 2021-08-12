@extends("layouts.index")
@section("title")
    Kullanıcı Düzenleme
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
                                <input type="text" id="first-name-column" value="{{$a->fname}}" class="form-control" placeholder="First Name" name="fname">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <input type="text" id="last-name-column" value="{{$a->lname}}" class="form-control" placeholder="Last Name" name="lname">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <input type="text" id="city-column" value="{{$a->uname}}" class="form-control" placeholder="User Name" name="uname">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <input type="text" id="country-floating" value="{{$a->mpno}}" class="form-control" name="mbphone" placeholder="Mobile Phone">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <input type="text" id="company-column"  value="{{$a->password}}" class="form-control" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <input type="email" id="email-id-column" value="{{$a->email}}" class="form-control" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <div class="form-check">
                                <div class="checkbox">
                                    <input type="checkbox" name="status" id="checkbox5" class="form-check-input" >
                                    <label for="checkbox5">Status</label>
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
                                        <input type="text" id="first-name-column" value="" class="form-control" placeholder="First Name" name="fname">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="lname">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <input type="text" id="city-column" class="form-control" placeholder="User Name" name="uname">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <input type="text" id="country-floating" class="form-control" name="mbphone" placeholder="Mobile Phone">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <input type="text" id="company-column"  class="form-control" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <input type="email" id="email-id-column" class="form-control" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <input type="checkbox" name="status" id="checkbox5" class="form-check-input" checked="">
                                            <label for="checkbox5">Status</label>
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



