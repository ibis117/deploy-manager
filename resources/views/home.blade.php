@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Address</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Street number</label>
                                    <input class="form-control" type="text" name="street_number" />
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Street name</label>
                                    <input class="form-control" type="text" name="street_name" />
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Suburb</label>
                                    <input class="form-control" type="text" name="suburb" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>State</label>
                                    <input class="form-control" type="text" name="state" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Postcode</label>
                                    <input class="form-control" type="text" name="postcode" />
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input class="form-control" type="text" name="country" />
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary" type="submit">Save address</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
