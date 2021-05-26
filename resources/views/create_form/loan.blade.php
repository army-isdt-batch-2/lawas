@php $active = 'loans' @endphp
@extends('layouts.main')
@section('title','Apply Loan')
@section('content')

<!-- <h1 class="text-warning">Teacher</h1><br> -->
<div class="card bg-warning" style="width:100%;">
    <div class="card-body">
        <h5 class="card-title">Apply Loan</h5><hr>
        <form method="post" action="/create_form/loan" class="row g-3">
          @csrf
            <div class="col-4">
                <label for="employee_id">Employee ID</label>
                <input name="employee_id" id="employee_id" type="text" class="form-control" required>
            </div>
            <div class="col-4">
                <label for="full_name">Full Name</label>
                <input name="full_name" id="full_name" type="text" class="form-control" required>
            </div>
            <div class="col-4">
                <label for="designation">Designation</label>
                <input name="designation" id="designation" type="text" class="form-control" required>
            </div>

            <div class="col-md-4">
                <label for="loan_type">Loan Type</label>
                <select name="loan_type" id="loan_type" class="form-select" required>
                    <option selected>Choose...</option>
                    <option>...</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                </select>
                <label for="amount">Loan Amount</label>
                <input name="amount" id="amount" type="number" class="form-control" required>
                <label for="months_payable">Months Payable</label>
                <input name="months_payable" id="months_payable" type="number" class="form-control" required>
            </div>
            <div class="col-md-8">
                <textarea name="note" id="note" cols="30" rows="7" class="form-control" required></textarea>
            </div>
            <hr>
            <div class="col-12 d-grid gap-2">
                <button class="btn btn-dark text-warning">Apply</button>
            </div>
        </form>
    </div>
</div>

@endsection
