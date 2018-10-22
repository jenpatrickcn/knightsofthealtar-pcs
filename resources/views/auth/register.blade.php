@extends('layouts.app')

@section('content')
<div class="container mb-5">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Register a Member</div>
                <div class="card-block">
                    <form class="form-horizontal mt-3" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        
                        <div class="row no-gutters">
                            <div class="col-12 col-md-6 form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <label for="first_name" class="col-12 control-label">First Name</label>

                                <div class="col-12">
                                    <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                    @if ($errors->has('first_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-12 col-md-6 form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <label for="last_name" class="col-12 control-label">Last Name</label>

                                <div class="col-12">
                                    <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                    @if ($errors->has('last_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('rank') ? ' has-error' : '' }}">
                            <label for="rank" class="col-12 control-label">Rank</label>
                            
                            <div class="col-12">
                                <select id="rank" class="form-control" name="rank">
                                    <option value="{{ old('rank') }}" disabled selected hidden>{{ old('rank') }}</option>
                                    @foreach ($ranks as $rank)
                                        <option value="{{ $rank->name }}">{{ $rank->name }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('rank'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rank') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-12 control-label">E-Mail Address</label>

                            <div class="col-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-12">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-12 control-label">Confirm Password</label>

                            <div class="col-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
