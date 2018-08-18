@extends('layouts.manage')

@section('content')
    <div class="col-md-12" id="style">
        <div class="row">
            <div class="col-md-8">
                <h1 class="title">Manage Permissions</h1>
            </div>
            <div class="col-md-4 pt-1">
                <a href="{{route('permissions.create')}}" class="btn btn-primary1 pull-right"><i class="icons icon-user-plus m-r-10"></i> Create New Permission</a>
            </div>
        </div>
        <hr class="mt-11">

        <div class="">
            <div class="">
                <table class="table table-condensed">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Description</th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($permissions as $permission)
                        <tr>
                            <th>{{$permission->display_name}}</th>
                            <td>{{$permission->name}}</td>
                            <td>{{$permission->description}}</td>
                            <td class="has-text-right"><a class="btn btn-default btn-sm btn-outline-dark mr-5" href="{{route('permissions.show', $permission->id)}}">View</a><a class="btn btn-default btn-sm btn-outline-dark " href="{{route('permissions.edit', $permission->id)}}">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div> <!-- end of .card -->
    </div>
@endsection
