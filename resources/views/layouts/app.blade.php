@include('layouts.partials.page-start')
    @include('layouts.partials.header')

    <main id="content">
        <div class="container-fluid">
            <div class="row">

                @if (Auth::check())
                    <aside id="sidebar" class="col-md-2 pt-3 p-0 d-none d-md-block bg-light">
                        @include('layouts.partials.sidenav')
                    </aside>
                    <section class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                        @yield('content')
                    </section>
                @else
                    @yield('content')
                @endif

            </div>
        </div>
    </main>
    
@include('layouts.partials.page-end')