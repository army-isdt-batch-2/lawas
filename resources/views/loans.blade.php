@php $active = 'loans' @endphp
@extends('layouts.main')
@section('title','Loan')
@section('content')

<!-- <h1 class="text-warning">Teacher</h1><br> -->
<div class="card bg-warning" style="width:100%;">
    <div class="card-body">
        <h5 class="card-title">All Loans 
            <a href="/create_form/loan" class="float-end">  
                <button class="btn btn-dark text-warning"><b>Create</b></button>
            </a>
        </h5>
        <hr>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Employee ID</th>
                    <th scope="col">Loan Type</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Months Payable</th>
                    <th scope="col">Total</th>
                    <th scope="col">Balance</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody> 
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection