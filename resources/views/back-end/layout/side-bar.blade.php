<div class="sidebar" data-color="purple" data-background-color="black" data-image="/assets/img/sidebar-2.jpg">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
    <div class="logo">
        <a href="{{ route('home') }}" class="simple-text logo-normal">
            Videos-web
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item ">
                <a class="nav-link" href="">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <!-- your sidebar here -->
            <li class="nav-item ">
                <a  class="nav-link"  href="{{ route('users.index') }}">
                    <i class="material-icons">person</i>
                    <p>Users</p>
                </a>
            </li>

            <li class="nav-item ">
                <a  class="nav-link"  href="{{ route('videos.index') }}">
                    <i class="material-icons">video_call</i>
                    <p>Videos</p>
                </a>
            </li>
        </ul>
    </div>
</div>