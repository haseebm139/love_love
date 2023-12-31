<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item"><a
                                class="dropdown-toggle nav-link dropdown-user-link" href="#"
                                data-toggle="dropdown">
                                @php $profile = auth()->user()->profile??'default.png'; @endphp
                                <div class="user-nav d-sm-flex d-none"><span
                                        class="user-name text-bold-600">{{ auth()->user()->first_name }}
                                        {{ auth()->user()->last_name }}</span><span
                                        class="user-status">Available</span></div><span><img class="round"
                                        src='{{ asset("documents/profile/$profile") }}' alt="avatar"
                                        height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                    href="{{ route('admin.profile') }}"><i class="feather icon-user"></i> Edit
                                    Profile</a>
                                {{-- <a class="dropdown-item" href="app-email.html"><i
                                        class="feather icon-mail"></i> My
                                    Inbox</a>
                                    <a class="dropdown-item" href="app-todo.html"><i
                                        class="feather icon-check-square"></i> Task</a><a class="dropdown-item"
                                    href="app-chat.html"><i class="feather icon-message-square"></i> Chats</a> --}}
                                <div class="dropdown-divider"></div><a class="dropdown-item"
                                    href="{{ route('logout') }}"><i class="feather icon-power"></i>
                                    Logout</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="javascript:;"><i
                                        class="feather icon-settings"></i>
                                    Setting</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span
                        class="mr-75 feather icon-alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
