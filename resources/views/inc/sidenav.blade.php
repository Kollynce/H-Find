<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand" style="color:#ffffff;">
                Manager Dashboard
        </li>
        <li style="color:#ffffff; padding-bottom: 20px">
            <h4 class="pl-2">Dashboard</h4>
        </li>
        <li style="color:#ffffff;">
            <h5>Administrator</h5>
        </li>
        <li>
            <a href="{{route('users.index')}}">&nbsp;&nbsp;    Manage User</a>
        </li>
        <li>
            <a href="{{route('posts')}}">&nbsp;&nbsp;    Manage Posts</a>
        </li>
        @can('superadmin')
        <li>
            <a href="{{route('permissions.index')}}">&nbsp;&nbsp;    Roles & Permissions</a>
        </li>
        @endcan
    </ul>
</div>