@extends('layouts.dashboard')

@section('title')
Edit Member | FIT PLACE
@endsection

@section('dashboardContent')
<div class="container-fluid">
    <div class="card shadow">
        <div class="card-header" style="display:flex; justify-content:space-between">
            <h4>Edit member</h4>
            <a class="btn btn-sm btnOp" href="{{route('member.index')}}">Back</a>
        </div>
        <div class="card-body">
            <form action="{{route('member.update', $member->id)}}" method="post">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="Name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$member->name}}">
                    @error('name')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{$member->email}}">
                    @error('email')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="Phone" class="form-label">Phone</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{$member->phone}}">
                    @error('phone')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{$member->address}}">
                    @error('address')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="join" class="form-label">Join at</label>
                    <input type="date" class="form-control @error('join_at') is-invalid @enderror" id="join" name="join_at" value="{{$member->join_at}}">
                    @error('join_at')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exp" class="form-label">Expired</label>
                    <input type="date" class="form-control @error('expired') is-invalid @enderror" id="exp" name="expired" value="{{$member->expired}}">
                    @error('expired')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="pt" class="form-label">Personal Trainer</label>
                    <select class="form-control @error('p_trainer_id') is-invalid @enderror" name="p_trainer_id">
                        <option value="0">None</option>
                        <option value="1">Georgie</option>
                        <option value="2">Mark</option>
                    </select>
                    @error('p_trainer_id')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-sm btnOp">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection