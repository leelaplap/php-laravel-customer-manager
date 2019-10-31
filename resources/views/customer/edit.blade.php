@extends('home')
@section('title','Edit Customer')
@section('content')

    <div class="row justify-content-center">

        <div class="col-md-4">

            <form method="post" action="{{route('customers.update',$customer->id)}}">
                @csrf
                <div class="form-group">
                    <label>Name Customer</label>
                    <input type="text" class="form-control" name="name" value="{{$customer->name}}">
                </div>
                <div class="form-group">
                    <label>D.O.B</label>
                    <input type="date" class="form-control" name="dob" value="{{$customer->dob}}">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="{{$customer->email}}">
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
