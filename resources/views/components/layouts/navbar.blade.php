<header class="main-header">
    <nav>
        <a href="/" class="logo">
            <h2>Logo Here</h2>
        </a>
        <ul class="nav-list">
            <li>
                <x-nav-link href="/">Home</x-nav-link>
            </li>
            <li>
                <x-nav-link href="{{ route('products.index') }}">Products</x-nav-link>
            </li>
            <li>
                <x-nav-link href="{{ route('categories.index') }}">Categories</x-nav-link>
            </li>

        </ul>
        <div class="toggle-menu" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <ul class="mobile-nav-list" id="mobile-nav-list">
            <li>
                <x-nav-link href="/">Home</x-nav-link>
            </li>
            <li>
                <x-nav-link href="{{ route('products.index') }}">Products</x-nav-link>
            </li>
            <li>
                <x-nav-link href="{{ route('categories.index') }}">Categories</x-nav-link>
            </li>

        </ul>
    </nav>
</header>

<script>
    const mobileNavList = document.getElementById('mobile-nav-list');

    function toggleMenu() {
        mobileNavList.classList.contains('active') ? mobileNavList.classList.remove('active') : mobileNavList.classList
            .add('active');
    }
</script>
