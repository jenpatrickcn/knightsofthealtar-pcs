@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card rounded-0 mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-8">
                        <div class="row mb-3">
                            <div class="col-5">
                                <div class="form-group">
                                    <label for="server-sheet-date">From </label>
                                    <input type="date" class="form-control rounded-0 mb-1" name="ss-from-date" id="ss-from-date">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label for="server-sheet-date">To </label>
                                    <input type="date" class="form-control rounded-0 mb-1" name="ss-to-date" id="ss-to-date">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="server-sheet-week-number">Week </label>
                                    <input type="number" class="form-control rounded-0 mb-1" name="ss-week-number" id="ss-week-number">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 d-flex align-items-center justify-content-center">
                        <h4>{{ Carbon\Carbon::now('Asia/Shanghai') }}</h4>
                    </div>
                </div>
                
                
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#serve-main" role="tab" data-toggle="tab">
                            Main
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#serve-candle" role="tab" data-toggle="tab">
                            Candle
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#serve-daily" role="tab" data-toggle="tab">
                            Daily
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#serve-benediction" role="tab" data-toggle="tab">
                            Benediction
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#serve-baptismal" role="tab" data-toggle="tab">
                            Baptismal
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#serve-extra" role="tab" data-toggle="tab">
                            Extra Serves
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content pt-3">
                    @include('partials.page-list-of-servers.tab-main-serve')

                    @include('partials.page-list-of-servers.tab-candle-serve')

                    @include('partials.page-list-of-servers.tab-daily-serve')

                    @include('partials.page-list-of-servers.tab-benediction-serve')

                    @include('partials.page-list-of-servers.tab-baptismal-serve')

                    @include('partials.page-list-of-servers.tab-extra-serve')
                </div>

                <form class="form-horizontal mt-3" role="form" method="POST" action="#">
                    {{ csrf_field() }}
				</form>
            </div>
        </div>
    </div>
</div>
@endsection
