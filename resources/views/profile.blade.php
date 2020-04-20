@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body row">
                    <div class="col-4 bg-info">
                      <h2 class="h-6 text-center my-4">MENU</h2>
                      <ul class="list-group mb-5">
                          <li class="list-group-item"><a href="/home">Dasboard</a></li>
                          <li class="list-group-item"><a href="/profile">Profile</a></li>
                          <li class="list-group-item"><a href="">Settings</a></li>
                      </ul>
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col-6 pb-4">
                                <h3 class="pb-2">Profile</h3>
                                <h5><strong>NAME:</strong> {{Auth::user()->name}}</h5>
                                <h5><strong>EMAIL:</strong> {{Auth::user()->email}}</h5></div>
                            <div class="col-6 border-left border-success pb-4"><h3>Profile Image</h3>
                            <div>
                                @if (Auth::user()->userprofile)
                                <img src="{{Auth::user()->userprofile->thumbnail}}" class="figure-img img-fluid rounded" style="max-height:100px;">
                                    @else 
                                    <p>No profile image uploade!</p>
                                    @endif 
                            </div>
                            <a  href="{{route('userprofile.create')}}">Upload profil image</a>
                            </div>
                            <div class="col-12 border-top border-success pt-3"><h3>Uploaded Images</h3></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection