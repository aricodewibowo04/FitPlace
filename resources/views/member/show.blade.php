@extends('layouts.dashboard')
@section('title')
Detail | Fit Place
@endsection
@section('dashboardContent')
<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="#" class="img-fluid rounded-start img-thumbnail" alt="..." >
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><small><b>Name : </b></small>{{$member->name}}</li>
                    <li class="list-group-item"><small><b>Email : </b></small>{{$member->email}}</li>
                    <li class="list-group-item"><small><b>Phone : </b></small>{{$member->phone}}</li>
                    <li class="list-group-item"><small><b>address : </b></small>{{$member->address}}</li>
                    <li class="list-group-item"><small><b>Join at : </b></small>{{$member->join_at}}</li>
                    <li class="list-group-item"><small><b>Expired : </b></small>{{$member->expired}}</li>
                    <li class="list-group-item"><small><b>Referal : </b></small>{{$member->user->name}}</li>
                    <li class="list-group-item"><small><b>P.Trainer : </b></small>{{$member->p_trainer->name}}</li>
                </ul>
            </div>
            
        </div>
        <div class="card-footer">
                <a href="{{route('member.index')}}" class="btn btn-sm btnOp">Back</a>
            </div>
    </div>
</div>
@endsection