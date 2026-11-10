<nav>
    <div class="lapisansatu">
        <div class="atas">
            <div class="brand">
                <h1>digicell</h1>
                <img src="asset/logo.png" alt="Logo">
            </div>
            <div class="search">
                <form action="{{ url('/products') }}" method="GET" class="search-form">
                    <i class="bi bi-search"></i>
                    <input type="text" name="search" placeholder="Cari iPhone, iPad, MacBook..."
                        value="{{ request('search') }}">
                    <button type="submit">Cari</button>
                </form>
            </div>
            <div class="user">
                <i class="fa-regular fa-user"></i>
            </div>
        </div>
        <div class="product">
            <ul>
                <li><a href="#">Mac</a></li>
                <li><a href="#">iPad</a></li>
                <li><a href="#">iPhone</a></li>
                <li><a href="#">Watch</a></li>
                <li><a href="#">AirPods</a></li>
                <li><a href="#">Accessories</a></li>
            </ul>
        </div>
    </div>
</nav>
