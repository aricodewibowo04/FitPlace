@extends('layouts.dashboard')

@section('title')
Dashboard | Fit Place
@endsection

@section('dashboardContent')
<div>
    <div class="card-body">
        <div class="container-fluid">
            <div class="card ">
                <div class="card-header ">
                <i class="fa fa-user"></i> Profile
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Id Admin : <strong>{{Auth::user()->id}}</strong></li>
                        <li class="list-group-item">Email : <strong>{{Auth::user()->email}}</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div>
        <canvas id="myChart"></canvas>
    </div>
</div>

@endsection