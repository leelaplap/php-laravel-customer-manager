@extends('home')
@section('title','Edit City')
@section('content')

    <div class="row justify-content-center">

        <div class="col-md-4">

            <form method="post" action="{{route('cities.update',$city->id)}}">
                @csrf
                <div class="form-group">
                    <label >Name city</label>
                    <input type="text" class="form-control" name="name" value="{{$city->name}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
