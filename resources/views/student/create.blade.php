@extends('student/layout')
@section('content')
<div class="container mt-3">
    <form action="{{ route('student.store') }}" method="post">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-xl-8 p-4 m-auto shadow">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-info"> Add Student </h5>
                    </div>
                    <div class="card-body">

                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                                @php
                                    Session::forget('success');
                                @endphp
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                                <div class="form-group" {{ $errors->has('first_name') ? 'has-error' : '' }}>
                                    <label> First Name </label>
                                    <input type="text" name="first_name" placeholder="First Name" class="form-control" value="{{ old('first_name') }}">
                                    {!! $errors->first('first_name', '<small class="text-danger">:message</small>') !!}
                                </div>

                                <div class="form-group" {{ $errors->has('dob') ? 'has-error' : '' }}>
                                    <label > Date of Birth </label>
                                    <input type="date" name="dob" placeholder="Date of Birth" class="form-control" value="{{ old('dob') }}">
                                    {!! $errors->first('dob', '<small class="text-danger">:message</small>') !!}
                                </div>

                                <div class="form-group" {{ $errors->has('email') ? 'has-error' : '' }}>
                                    <label > Email </label>
                                    <input type="text" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}">
                                    {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}
                                </div>

                                <div class="form-group" {{ $errors->has('address') ? 'has-error' : '' }}>
                                    <label > Address </label>
                                    <input type="text" name="address" placeholder="Address" class="form-control" value="{{ old('address') }}">
                                    {!! $errors->first('address', '<small class="text-danger">:message</small>') !!}
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                                <div class="form-group" {{ $errors->has('last_name') ? 'has-error' : '' }}>
                                    <label > Last Name </label>
                                    <input type="text" name="last_name" placeholder="Last Name" class="form-control" value="{{ old('last_name') }}">
                                    {!! $errors->first('last_name', '<small class="text-danger">:message</small>') !!}
                                </div>

                                <div class="form-group" {{ $errors->has('gender') ? 'has-error' : '' }}>
                                    <label > Gender </label>
                                    <select name="gender" class="form-control">
                                        <option disabled selected> Select Gender </option>
                                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}> Male </option>
                                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}> Female </option>
                                    </select>
                                    {!! $errors->first('gender', '<small class="text-danger">:message</small>') !!}
                                </div>

                                <div class="form-group" {{ $errors->has('phone') ? 'has-error' : '' }}>
                                <label > Phone </label>
                                <input type="phone" name="phone" placeholder="Phone no" class="form-control" value="{{ old('phone') }}">
                                {!! $errors->first('phone', '<small class="text-danger">:message</small>') !!}
                            </div>

                                <div class="form-group" {{ $errors->has('zipcode') ? 'has-error' : '' }}>
                                <label > Zipcode </label>
                                <input type="number" name="zipcode" placeholder="Zipcode" class="form-control" value="{{ old('zipcode') }}">
                                {!! $errors->first('zipcode', '<small class="text-danger">:message</small>') !!}
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success" name="submit"> Submit </button>
                            <a href="{{ route('student.index') }}" class="btn btn-danger"> Close <i class="fa fa-times-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
