@php $active = 'loans' @endphp
@extends('layouts.main')
@section('title','Apply Loan')
@section('content')

<!-- <h1 class="text-warning">Teacher</h1><br> -->
<div class="card bg-warning" style="width:100%;">
    <div class="card-body">
        <h5 class="card-title">Apply Loan</h5><hr>
        <form class="row g-3">
            <div class="col-4">
                <label for="">Employee ID</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-4">
                <label for="">Full Name</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-4">
                <label for="">Designation</label>
                <input type="text" class="form-control">
            </div>

            <div class="col-md-4">
                <label for="">Loan Type</label>
                <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                </select>
                <label for="">Loan Amount</label>
                <input type="number" class="form-control">
                <label for="">Months Payable</label>
                <input type="number" class="form-control">
            </div>
            <div class="col-md-8">
                <textarea name="" id="" cols="30" rows="7" class="form-control"></textarea>
            </div>    
            <hr>
            <div class="col-12 d-grid gap-2">
                <button class="btn btn-dark text-warning">Apply</button>
            </div>
        </form>
    </div>
</div>

@endsection