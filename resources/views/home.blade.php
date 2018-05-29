@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::user()->verify === 0)
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h5 class="display-5">Verify your account</h5>
                            </div>
                            <div class="col-md-4 text-right">
                                <button type="button" class="btn btn-outline-secondary">Send verify email</button>
                            </div>
                        </div>
                    @endif

                    <hr>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="first_name">First name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="last_name">Last name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="street">Street</label>
                            <input type="text" name="street" id="street" class="form-control">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="number">Number</label>
                            <input type="text" name="number" id="number" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="city">City</label>
                            <input type="text" name="city" id="city" class="form-control">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="zip_code">Zip-Code</label>
                            <input type="text" name="zip_code" id="zip_code" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="country">Country</label>
                            <input type="text" name="country" id="country" class="form-control">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="region">Region</label>
                            <select name="region" id="region" class="form-control">
                                <option value="na">North America</option>
                                <option value="eu">Europe</option>
                                <option value="as">Asia</option>
                                <option value="an">Australia and New Zeland</option>
                                <option value="af">Africa</option>
                                <option value="sa">South America</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group text-center">
                            <input type="submit" value="Update" class="btn btn-outline-primary pr-5 pl-5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
