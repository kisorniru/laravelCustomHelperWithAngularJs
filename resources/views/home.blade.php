@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Using Auth Function : " {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} " are logged in! <br>
                    Using custom helper Function : " {{ MyFuncs::auth_user_name() }} " are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
