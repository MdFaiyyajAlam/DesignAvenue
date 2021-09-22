@extends('layouts.base')
@section('content')

<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-dark table-hover table-striped">
                <tr>
                    <thead>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Action</th>
                    </thead>
                </tr>
                @foreach ($contacts as $c)

                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->contact }}</td>
                    <td>{{ $c->email }}</td>
                    <td class="d-flex">
                          <form action="{{route('destroyContact',['contact'=>$c->id])}}" method="post" class="d-flex">
                            @method('delete')
                            @csrf
                            <input type="submit" class="btn btn-danger" value="Delete">
                          </form>
                      </td>
                </tr>

                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection
