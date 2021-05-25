@php $active = 'deduction' @endphp
@extends('layouts.main')
@section('title','Mandatory Deduction')
@section('content')

<!-- <h1 class="text-warning">Teacher</h1><br> -->
<div class="card bg-warning" style="width:100%;">
    <div class="card-body">
        <h5 class="card-title">Deductions</h5><hr>
        <form class="row g-3">
            <div class="col-4">
                <label for="inputEmail4" class="form-label">Contribution Type</label>
                <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                </select>
            </div>
            <div class="col-8">
                <label for="inputEmail4" class="form-label">Base Range</label>
                <input type="text" class="form-control" id="inputEmail4">
            </div>
            <div class="col-4">
                <label for="inputEmail4" class="form-label">Monthly Contribution</label>
                <input type="text" class="form-control" id="inputEmail4">
            </div>
            <div class="col-4">
                <label for="inputEmail4" class="form-label">Employee Share</label>
                <input type="text" class="form-control" id="inputEmail4">
            </div>
            <div class="col-4">
                <label for="inputEmail4" class="form-label">Employer Share</label>
                <input type="text" class="form-control" id="inputEmail4">
            </div>
            <div class="col-12 d-grid gap-2">
                <button class="btn btn-dark text-warning">Apply</button>
            </div>
        </form>
    </div>
</div>

@endsection