@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <form class="form-horizontal" id="form-filter">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-3">
                                    <label for="role">Role</label>
                                    <select class="form-control form-select select-filter" name="role" id="role">
                                        <option selected>All</option>
                                        @foreach( $roles as $role => $value)
                                            <option value="{{$value}}"
                                                    @if ((string)$value === $selectRole) selected @endif>
                                                {{$role}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label for="city">City</label>
                                    <select class="form-control form-select select-filter" name="city" id="city">
                                        <option selected>All</option>
                                        @foreach( $cities as $city)
                                            <option value="{{$city}}"
                                                @if ($city === $selectCity) selected @endif>
                                                {{$city}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label for="city">Company</label>
                                    <select class="form-control form-select select-filter" name="city" id="city">
                                        <option selected>All</option>
                                        @foreach( $companies as $company)
                                            <option value="{{$company->id}}"
                                                @if ((string)$company->id === $selectCompanies) selected  @endif>
                                                {{$company->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-centered mb-0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Avatar</th>
                            <th>Info</th>
                            <th>Role</th>
                            <th>Position</th>
                            <th>City</th>
                            <th>Company</th>
                            <th>Delete</th>
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
                                {{$each->name}} - {{$each->gender_name}}
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
                            <td>
                                {{$each->position}}
                            </td>
                            <td>
                                {{$each->city}}
                            </td>
                            <td>
                                {{optional($each->companies)->name}}
                            </td>
                            <td>
                                <form action="{{ route("admin.$table.destroy" , $each) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
{{--                        @php--}}
{{--                            dd($selectRole)--}}
{{--                        @endphp--}}
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

@push('js')
    <script>
        $(document).ready(function (){
            $(".select-filter").change(function (){
                $("#form-filter").submit();
            });
        });
    </script>
@endpush
