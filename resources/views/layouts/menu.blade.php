<!-- need to remove -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('home') }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>

</li>
<li class="nav-item">
	<a class="nav-link" href="{{ route('stores.index') }}">
	<i class="nav-icon fas fa-store"></i>
	<p>Manage Stores</p>
</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="{{ route('users.index') }}">
		<i class="nav-icon far fa-user"></i>
	<p>Manage Users</p>
</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="{{ route('roles.index') }}">
		<i class="nav-icon fas fa-user-tag"></i>
		<p>Manage Roles</p>
	</a>
</li>

<li class="nav-item">
	<a class="nav-link" href="{{ route('products.index') }}">
		<i class="nav-icon fab fa-product-hunt"></i>
	<p>Manage Product</p>
    </a>
</li>