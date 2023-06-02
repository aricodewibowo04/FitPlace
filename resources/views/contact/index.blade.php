@extends('layouts.dashboard')
@section('title')
Referal | Fit Place
@endsection
@section('dashboardContent')
<div class="container-fluid">
    <div class="col-md-12">
        <div class="card shadow ">
            <div class="card-header" style="display:flex ; justify-content:space-between">
                <h4 class="card-title">Data Referal</h4>
                <!-- <a class="btn btnOp" href="{{route('member.create')}}">Add</a> -->
            </div>
            <div class="card-body">
                <!-- <form class="d-flex" method="get" action="{{route('search')}}">
                    <input type="text" name="search" class="form-control me-1" id="search" placeholder="Type keyword..">
                    <button type="submit" class="btn btnOp">Search</button>
                </form> -->
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Option</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($referals as $r)
                            <tr>
                                <td>{{$r->name}}</td>
                                <td>{{$r->email}}</td>
                                <td>{{$r->phone}}</td>
                                <td class="text-truncate" style="max-width: 80px;">{{$r->message}}</td>
                                <td class="d-flex">
                                    <form onsubmit="return confirm('are you sure want to delete')" action="{{route('contact.destroy', $r->id)}}" method="post">
                                        <a class="btn btn-sm btnOp" href="{{route('contact.show', $r->id)}}"><i class="fa fa-eye"></i></a>
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btnOp" href="{{route('contact.destroy', $r->id)}}"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-muted text-center">No data was found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{$referals->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection