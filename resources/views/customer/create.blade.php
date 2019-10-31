@extends('home')
@section('title','Add Customer')
@section('content')

    <div class="row justify-content-center">

        <div class="col-md-4">

            <form method="post" action="{{route('customers.store')}}">
                @csrf
                <div class="form-group">
                    <label>Name Customer</label>
                    <input type="text" class="form-control
                        @if($errors->has('name'))
                        border-danger
                        @endif
                        " name="name" placeholder="Enter Name customer">
                    @if($errors->has('name'))
                        <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>D.O.B</label>
                    <input type="date" class="form-control
                        @if($errors->has('name'))
                        border-danger
                        @endif
                        " name="dob">
                    @if($errors->has('dob'))
                        <p class="text-danger">{{$errors->first('dob')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control
                        @if($errors->has('name'))
                        border-danger
                        @endif
                        " name="email" placeholder="Enter Email">
                    @if($errors->has('email'))
                        <p class="text-danger">{{$errors->first('email')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Chose the City</label>
                    <select name="city_id">
                        @foreach($cities as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
