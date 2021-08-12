@extends("layouts.index")
@section("title")
    Kullanıcı Düzenleme
@endsection
@section("content")
    <div class="row">
        <div class="col-md-12">
            <div class="card-body">
                <form class="form" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="first-name-column">First Name</label>
                                <input type="text" id="first-name-column" value="" class="form-control" placeholder="First Name" name="fname">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="last-name-column">Last Name</label>
                                <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="lname">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="city-column">City</label>
                                <input type="text" id="city-column" class="form-control" placeholder="City" name="city">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="country-floating">Country</label>
                                <input type="text" id="country-floating" class="form-control" name="country" placeholder="Country">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="company-column">Company</label>
                                <input type="text" id="company-column"  class="form-control" name="company" placeholder="Company">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="email-id-column">Email</label>
                                <input type="email" id="email-id-column" class="form-control" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <div class="form-check">
                                <div class="checkbox">
                                    <input type="checkbox" name="remember" id="checkbox5" class="form-check-input" checked="">
                                    <label for="checkbox5">Remember Me</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection



