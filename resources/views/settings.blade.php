@extends('layouts.app')

@section('content')
<div class="container mb-5">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Settings</div>
                <div class="card-block">
                    <form class="form-horizontal mt-3" role="form" method="POST" action="{{ route('settings') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('theme') ? ' has-error' : '' }}">
                            <label for="theme" class="col-md-12 control-label">Theme</label>
                            
                            <div class="col-md-12">
                                <select id="theme" class="form-control" name="theme">
                                    @if (!empty($user_settings)):
                                        <option value="{{ $user_settings->theme }}" disabled selected hidden>{{ $user_settings->theme }}</option>
                                    @endif
                                    @foreach ($theme_names as $theme_name)
                                        <option value="{{ $theme_name->theme_name }}">{{ $theme_name->theme_name }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('theme'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('theme') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    Save Changes
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
