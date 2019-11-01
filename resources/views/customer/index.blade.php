@extends('home')
@section('title','Customers list')
@section('content')

    <div class="row justify-content-center">

        <div class="col-md-8">
            <form action="{{route('customers.search')}}" method="get">
                @csrf
                <input type="text" name="search" >
                <button type="submit" class="btn btn-dark">Search</button>
            </form>

            <a href="{{route('customers.create')}}" class="btn badge-dark">ADD</a>

            <div class="card">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">D.O.B</th>
                        <th scope="col">Email</th>
                        <th scope="col">City</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    @foreach($customers as $key =>$customer)
                        <tbody>
                        <tr>
                            <th scope="row">{{++$key}}</th>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->dob}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{$customer->city->name}}</td>
                            <td>
                                <a href="{{route('customers.edit',$customer->id)}}" class="btn badge-dark">Edit</a>
                                <a href="{{route('customers.delete',$customer->id)}}" class="btn badge-dark">Del</a>
                            </td>
                        </tr>

                        </tbody>
                    @endforeach
                </table>
            </div>
            {{$customers->links()}}

        </div>
    </div>

@endsection
