@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5 style="text-align: center;">You are logged in!</h5>

                    <hr>
                    <table class="table table-bordered table-condensed table-hober">
                           <tr>
                               <td><h5><a href="{{URL::to('/insertinfo')}}">Insert Student Info</a></h5></td>
                               <td><h5><a href="{{URL::to('/insertsub')}}">Insert Student Subject</a></h5></td>
                               <td><h5><a href="">Insert Student Score</a></h5></td>
                           </tr> 
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
