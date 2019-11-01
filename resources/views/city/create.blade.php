@extends('home')
@section('title','Add City')
@section('content')

    <div class="row justify-content-center">

        <div class="col-md-4">

                <form method="post" action="{{route('cities.store')}}">
                    @csrf
                    <div class="form-group">
                        <label >Name city</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter city">
                        @if($errors->has('name'))
                            <p class="text-danger"><img src="https://img.icons8.com/nolan/25/000000/warning-shield.png">{{$errors->first('name')}}</p>
                            @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>

@endsection
