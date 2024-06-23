<!DOCTYPE html>
<html>
<head>
    <!-- ... Head content ... -->
</head>
<body>
    <header>
        <!-- ... Header content ... -->
        <!-- Navigation menu with the logout link -->
        <nav>
            <!-- ... Other navigation items ... -->
            <ul>
                <!-- Your other navigation items go here -->
                
                <!-- Logout link -->
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    
    <main>
        <!-- Your dashboard content -->
        @yield('content')
    </main>
    
    <footer>
        <!-- ... Footer content ... -->
    </footer>
    
    <!-- Logout form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
