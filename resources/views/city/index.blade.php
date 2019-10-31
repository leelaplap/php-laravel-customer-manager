@extends('home')
@section('title','Cites list')
@section('content')
    <form action=""></form>
    <div class="row justify-content-center">

        <div class="col-md-6" >
            <a href="{{route('cities.create')}}" class="btn badge-dark">ADD</a>

            <div class="card">
                <table class="table" >
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col" style="text-align: center">Action</th>
                    </tr>
                    </thead>
                    @foreach($cities as $key =>$city)
                        <tbody>
                        <tr>
                            <th scope="row">{{++$key}}</th>
                            <td>{{$city->name}}</td>
                            <td style="text-align: center">
                                <a href="{{route('cities.edit',$city->id)}}" class="btn badge-dark">Edit</a>
                                <a href="{{route('cities.delete',$city->id)}}"class="btn badge-dark">Del</a>
                            </td>
                        </tr>

                        </tbody>
                    @endforeach
                </table>
            </div>
            {{$cities->links()}}

        </div>
    </div>
@endsection
