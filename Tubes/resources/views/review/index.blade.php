@extends('layout.app')

@section('title','List Review')

@section('content')
<div class="row gy-3">
    <div class="col">
        <div class="card shadow-sm p-4">
            <div class="col-md-12 mb-4">
                <a href="{{ url('/add') }}"><button class="btn btn-primary text-end">Add</button></a>
            </div>
            <div class="col-md-12">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID Customer</th>
                            <th scope="col">ID Pembelian</th>
                            <th scope="col">Review</th>
                            <th scope="col">Rating</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $index => $user)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{ $user->ID Customer }}</td>
                            <td>{{ $user->ID Pembelian }}</td>
                            <td>{{ $user->Review }}</td>
                            <td>{{ $user->Rating }}</td>
                            <td>
                                <a href="{{ url('/edit') }}/{{ $user->id }}"><button
                                        class="btn btn-success">Edit</button></a>
                                <a href="{{ route('processDeleteUser',$user->id) }}"><button
                                        class="btn btn-warning">Delete</button></a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection