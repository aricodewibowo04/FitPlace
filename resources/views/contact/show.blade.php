@extends('layouts.dashboard')
@section('title')
Detail | Fit Place
@endsection
@section('dashboardContent')
<div class="card mb-3" style="max-width: 540px;">
    <div class="card-body">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><small><b>From : </b></small>{{$referal->name}}</li>
            <li class="list-group-item"><small><b>Email : </b></small>{{$referal->email}}</li>
            <li class="list-group-item"><small><b>phone : </b></small>{{$referal->phone}}</li>
            <li class="list-group-item">
                <div class="card">
                    <p>Subject</p>
                    <p>{{$referal->message}}</p>
                </div>
            </li>
        </ul>
        <div class="card-footer">
            <a href="{{route('contact.index')}}" class="btn btn-sm btnOp">Back</a>
        </div>
    </div>
</div>
@endsection