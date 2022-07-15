@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-centered mb-0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Avatar</th>
                            <th>Name</th>
                            <th>Role</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $each)
                        <tr>
                            <td>
                                <a href="{{ route("admin.$table.show" ,$each) }}">
                                    {{$each->id}}
                                </a>
                            </td>
                            <td>
{{--                                <img src="{{$each->avatar}}">--}}
                                {{$each->avatar}}
                            </td>
                            <td>
                                {{$each->name}}
                                <br>
                                <a href="mailto:{{$each->email}}">
                                    {{$each->email}}
                                </a>
                                <br>
                                <a href="tel:{{$each->phone}}">
                                    {{$each->phone}}
                                </a>
                            </td>
                            <td>
                                {{$each->role_name}}
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <nav>
                        <ul class="pagination pagination-rounded mb-0">
                            {{$data->links()}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
