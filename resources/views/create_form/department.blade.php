@php $active = 'departments' @endphp
@extends('layouts.main')
@section('title','Create Department')
@section('content')

<!-- <h1 class="text-warning">Teacher</h1><br> -->
<div class="card bg-warning" style="width:100%;">
    <div class="card-body">
        <h5 class="card-title">Add Department</h5><hr>
        <form method="post" action="/create_form/department" class="row g-3">
          @csrf
            <div class="col-md-6">
                <label for="department" class="form-label">Department</label>
                <input type="text" class="form-control" id="department" name="department" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

@endsection
