
<nav class="navbar">
    <div class="nav-container">

        <!-- Logo -->
        <a href="{{ url('/') }}" class="logo">
            <span class="logo-icon">i</span>Store<span class="logo-dot">.</span>
        </a>

        <!-- Navigation -->
        <ul class="nav-menu">
            <li><a href="{{ url('/') }}" class="active">Home</a></li>
            <li><a href="{{ url('/products') }}">Products</a></li>
            <li><a href="{{ url('/categories') }}">Categories</a></li>
            <li><a href="{{ url('/about') }}">About Us</a></li>
        </ul>

        <!-- Right Navigation -->
        <div class="nav-actions">
            <a href="{{ url('/cart') }}" class="cart">
                <svg width="21" height="21" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor"
                    stroke-width="1.7" stroke-linecap="round"
                    stroke-linejoin="round">
                    <circle cx="9" cy="21" r="1"/>
                    <circle cx="20" cy="21" r="1"/>
                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>
                </svg>
                <span>Cart</span>
            </a>

            <a href="{{ url('/login') }}" class="login-btn">
                Sign In
            </a>
        </div>

        <!-- Mobile Menu -->
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="menu-icon">
            <span></span>
            <span></span>
            <span></span>
        </label>

    </div>
</nav>
