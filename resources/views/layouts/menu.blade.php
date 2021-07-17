<!-- need to remove -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('home') }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
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
	<a class="nav-link" href="{{ route('loans.index') }}">
		<i class="nav-icon fas fa-user-tag"></i>
		<p>Manage Loan Requests</p>
	</a>
</li>