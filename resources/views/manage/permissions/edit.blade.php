@extends('layouts.manage')

@section('content')
    <div id="style">
        <div class="row mt-10">
            <div class="col-md-8">
                <h1 class="title">View Permission Details</h1>
            </div> <!-- end of column -->

            <div class="col-md-4 pt-2">
                <a href="{{route('permissions.edit', $permission->id)}}" class="btn btn-primary1"><i class="icons icon-edit mr-10"></i> Edit Permission</a>
            </div>
        </div>
        <hr class="m-t-0">

        <form class="col-md-11" action="{{route('permissions.update', $permission->id)}}" method="POST">
            {{csrf_field()}}
            {{method_field('PUT')}}

            <div class="row">
                <label for="display_name" class="label">Name (Display Name)</label>
                <input type="text" class="form-control" name="display_name" id="display_name" value="{{$permission->display_name}}">
            </div>

            <div class="row">
                <label for="name" class="label">Slug <small>(Cannot be changed)</small></label>
                <input type="text" class="form-control" name="name" id="name" value="{{$permission->name}}" disabled>
            </div>

            <div class="row">
                <label for="description" class="label">Description</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="Describe what this permission does" value="{{$permission->description}}">
            </div>
            <div class="pt-3">
                <button class="btn btn-primary1">Save Changes</button>
            </div>

        </form>
    </div>
@endsection
