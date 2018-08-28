<section class="page-banner1 padding" style="background-position: 50% -57px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="text-uppercase" style="color: #FFFFFF">Profile</h1>
                <p style="color: #FFFFFF">Welcome to your profile and make the best of it.</p>
            </div>
        </div>
    </div>
</section>


<div class="container pt-4">
    <div class="row">
        <div class="col-md-12 text-center">
            <ul class="f-p-links margin_bottom">
                <li><a href="{{route('profile')}}"><i class="icon-icons230"></i>Profile</a></li>
                @cannot('user')
                <li><a href="{{route('property.index')}}"><i class="icon-icons215"></i> My Properties</a></li>
                <li><a href="{{route('property.create')}}"><i class="icon-icons215"></i> Submit Property</a></li>
                @endcan
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" ><i class="icon-lock-open3"></i>Logout</a></li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</div>


