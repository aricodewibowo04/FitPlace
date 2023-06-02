@extends('layouts.dashboard')
@section('title')
Member | Fit Place
@endsection
@section('dashboardContent')
<div class="container-fluid">
    <div class="col-md-12">
        <div class="card shadow ">
            <div class="card-header" style="display:flex ; justify-content:space-between">
                <h4 class="card-title">Data Member</h4>
                <a class="btn btnOp" href="{{route('member.create')}}">Add</a>
            </div>
            <div class="card-body">
                <form class="d-flex" method="get" action="{{route('search')}}">
                    <input type="text" name="search" class="form-control me-1" id="search" placeholder="Type keyword..">
                    <button type="submit" class="btn btnOp">Search</button>
                </form>
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Join</th>
                                <th>Expired</th>
                                <th>Option</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($members as $m)
                            <tr>
                                <td>{{$m->name}}</td>
                                <td>{{$m->join_at}}</td>
                                <td>{{$m->expired}}</td>
                                <td class="text-right action_buttons">
                                    <form onsubmit="return confirm('are you sure want to delete')" action="{{route('member.destroy', $m->id)}}" method="post">
                                        <a class="btn btn-sm btnOp" href="{{route('member.edit', $m->id)}}"><i class="fa fa-pencil"></i></a>
                                        <a class="btn btn-sm btnOp" href="{{route('member.show', $m->id)}}"><i class="fa fa-eye"></i></a>
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btnOp" href="{{route('member.destroy', $m->id)}}"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-muted text-center">No data was found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{$members->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection