@php $active = 'departments' @endphp
@extends('layouts.main')
@section('title','Create Department')
@section('content')

<!-- <h1 class="text-warning">Teacher</h1><br> -->
<div class="card bg-warning" style="width:100%;">
    <div class="card-body">
        <h5 class="card-title">Add Department</h5><hr>
        <form class="row g-3">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Department</label>
                <input type="text" class="form-control" id="inputEmail4">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

@endsection