<nav class="side-navigation">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                    <i class="fas fa-tachometer-alt"></i> 
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/list-of-servers') }}">
                    <i class="fas fa-list"></i>
                    List of Servers
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/register') }}">
                    <i class="fas fa-user-plus"></i>
                    Add a Member
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/settings') }}">
                    <i class="fas fa-cog"></i>
                    Settings
                </a>
            </li>
        </ul>
    </div>
</nav>