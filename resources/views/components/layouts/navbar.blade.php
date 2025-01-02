<header class="main-header">
    <nav>
        <a href="/" class="logo">
            <h2>Logo Here</h2>
        </a>
        <ul class="nav-list">
            <x-nav-links href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</x-nav-links>
            <x-nav-links href="{{ route('products') }}"
                class="{{ request()->is('products') ? 'active' : '' }}">Products</x-nav-links>
            <x-nav-links href="{{ route('categories') }}"
                class="{{ request()->is('categories') ? 'active' : '' }}">Categories</x-nav-links>
        </ul>
        <div class="toggle-menu" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <ul class="mobile-nav-list" id="mobile-nav-list">
            <x-nav-links href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</x-nav-links>
            <x-nav-links href="{{ route('products') }}"
                class="{{ request()->is('products') ? 'active' : '' }}">Products</x-nav-links>
            <x-nav-links href="{{ route('categories') }}"
                class="{{ request()->is('categories') ? 'active' : '' }}">Categories</x-nav-links>
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