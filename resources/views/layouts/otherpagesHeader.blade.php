<div class="container">
    <!-- Tstbite Header, Bg White -->
    <header class="tstbite-header bg-white">
        <nav class="navbar navbar-expand-lg has-header-inner px-0">
            <a class="navbar-brand" href="index.html">
              <img src="{{ asset('assets/images/brands/flavorquest-logo-transparent.svg') }}" alt="FlavorQuest Logo" style="max-width: 181px;">

            </a>
            <div class="tstbite-header-links d-flex align-items-center ml-auto order-0 order-lg-2">
                <a href="javascript:void(0);" class="search-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26.667" height="26.667" viewBox="0 0 26.667 26.667">
                        <path
                            d="M24.39,26.276l-4.9-4.9a12.012,12.012,0,1,1,1.885-1.885l4.9,4.9a1.334,1.334,0,0,1-1.886,1.886ZM2.666,12a9.329,9.329,0,0,0,15.827,6.7,1.338,1.338,0,0,1,.206-.206A9.332,9.332,0,1,0,2.666,12Z" />
                    </svg>
                </a>
                @auth
                <a class="ml-4 ml-md-4 mr-2 mr-md-0 circle dropdown-toggle" id="avatarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('assets/images/avatars/user.png')}}" alt="Avatar">
                </a>

                <div class="  dropdown-menu" aria-labelledby="avatarDropdown">
                    <!-- Add your dropdown menu items here -->
                    <a class="dropdown-item" href="{{ route('recipes.index') }}">Recipe Dashboard</a>

                    <a class="dropdown-item" href="#">Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                </div>
                @else
                <a href="javascript:void(0);" data-toggle="modal" data-target="#loginModal"
                    class="btn btn-sm btn-outline-dark ml-0 ml-md-4">Login</a>
                @endauth

            </div>
            <button class="navbar-toggler pr-0 ml-2 ml-md-3" type="button" data-toggle="collapse" data-target="#menu-4"
                aria-controls="menu-4" aria-expanded="false" aria-label="Toggle navigation">
                <svg data-name="Icon/Hamburger" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path data-name="Icon Color"
                        d="M1.033,14a1.2,1.2,0,0,1-.409-.069.947.947,0,0,1-.337-.207,1.2,1.2,0,0,1-.216-.333,1.046,1.046,0,0,1-.072-.4A1.072,1.072,0,0,1,.072,12.6a.892.892,0,0,1,.216-.321.947.947,0,0,1,.337-.207A1.2,1.2,0,0,1,1.033,12H22.967a1.206,1.206,0,0,1,.409.069.935.935,0,0,1,.336.207.9.9,0,0,1,.217.321,1.072,1.072,0,0,1,.072.391,1.046,1.046,0,0,1-.072.4,1.206,1.206,0,0,1-.217.333.935.935,0,0,1-.336.207,1.206,1.206,0,0,1-.409.069Zm0-6a1.2,1.2,0,0,1-.409-.069.934.934,0,0,1-.337-.207,1.189,1.189,0,0,1-.216-.333A1.046,1.046,0,0,1,0,6.989,1.068,1.068,0,0,1,.072,6.6a.9.9,0,0,1,.216-.322.947.947,0,0,1,.337-.207A1.2,1.2,0,0,1,1.033,6H22.967a1.206,1.206,0,0,1,.409.068.935.935,0,0,1,.336.207.9.9,0,0,1,.217.322A1.068,1.068,0,0,1,24,6.989a1.046,1.046,0,0,1-.072.4,1.193,1.193,0,0,1-.217.333.923.923,0,0,1-.336.207A1.206,1.206,0,0,1,22.967,8Zm0-6a1.2,1.2,0,0,1-.409-.068.947.947,0,0,1-.337-.207,1.193,1.193,0,0,1-.216-.334A1.039,1.039,0,0,1,0,.988,1.068,1.068,0,0,1,.072.6.892.892,0,0,1,.288.276.934.934,0,0,1,.625.069,1.2,1.2,0,0,1,1.033,0H22.967a1.206,1.206,0,0,1,.409.069.923.923,0,0,1,.336.207A.9.9,0,0,1,23.928.6,1.068,1.068,0,0,1,24,.988a1.039,1.039,0,0,1-.072.4,1.2,1.2,0,0,1-.217.334.935.935,0,0,1-.336.207A1.206,1.206,0,0,1,22.967,2Z"
                        transform="translate(0 5)" fill="#000"></path>
                </svg>
            </button>


            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <!-- Modal Login -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content rounded-4 shadow-17 mb-4 mb-md-5">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <svg id="feather-icon_search" data-name="feather-icon/search"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <rect id="Bounding_Box" data-name="Bounding Box" width="24" height="24"
                                        fill="#d8d8d8" opacity="0">
                                    </rect>
                                    <path id="Shape"
                                        d="M14.435,15.849,8.071,9.485,1.707,15.849A1,1,0,0,1,.293,14.435L6.657,8.071.293,1.707A1,1,0,0,1,1.707.293L8.071,6.657,14.435.293a1,1,0,0,1,1.414,1.415L9.485,8.071l6.364,6.364a1,1,0,1,1-1.414,1.414Z"
                                        transform="translate(3.929 3.929)"></path>
                                </svg>
                            </span>
                        </button>
                        <div class="modal-body">
                            <h6 class="text-uppercase mb-4 pb-2">Login</h6>
                            <form>
                                <div class="form-group mt-md-3 pb-md-3">
                                    <div class="form-control-box">
                                        <input type="text" class="form-control" placeholder="Email">
                                        <span class="form-icon">
                                            <svg id="Icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <rect data-name="Bounding Box" width="24" height="24"
                                                    fill="rgba(255,255,255,0)"></rect>
                                                <path
                                                    d="M3,18a3,3,0,0,1-3-3V3.01C0,3,0,2.99,0,2.98A3,3,0,0,1,3,0H19a3,3,0,0,1,3,2.968c0,.018,0,.036,0,.054V15a3,3,0,0,1-3,3ZM2,15a1,1,0,0,0,1,1H19a1,1,0,0,0,1-1V4.921l-8.427,5.9a1,1,0,0,1-1.147,0L2,4.921ZM11,8.78l8.895-6.226A1,1,0,0,0,19,2H3a1,1,0,0,0-.895.553Z"
                                                    transform="translate(1 3)" fill="#7f7f7f"></path>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group mt-md-3 pb-md-3">
                                    <div class="form-control-box">
                                        <input type="password" class="form-control" placeholder="Password">
                                        <span class="form-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <rect data-name="Bounding Box" width="24" height="24"
                                                    fill="rgba(255,255,255,0)"></rect>
                                                <path
                                                    d="M3,22a3,3,0,0,1-3-3V12A3,3,0,0,1,3,9H4V6A6,6,0,0,1,16,6V9h1a3,3,0,0,1,3,3v7a3,3,0,0,1-3,3ZM2,12v7a1,1,0,0,0,1,1H17a1,1,0,0,0,1-1V12a1,1,0,0,0-1-1H3A1,1,0,0,0,2,12ZM14,9V6A4,4,0,1,0,6,6V9Z"
                                                    transform="translate(2 1)" fill="#7f7f7f"></path>
                                            </svg>
                                        </span>
                                        <div class="text-right">
                                            <a href="#0" class="text-orange small font-weight-medium">Forgot
                                                Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-lg btn-block btn-primary">Login</button>
                            </form>
                            <p class="text-center font-weight-light mt-4 pt-2">Or login with</p>
                            <ul class="login-social list-unstyled">
                                <li>
                                    <a href="javascript:void(0);" class="facebook">
                                        <img src="assets/images/icons/facebook2.svg" alt="Icon">
                                        <span>Facebook</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="google">
                                        <img src="assets/images/icons/google2.svg" alt="Icon">
                                        <span>Google</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="text-center login-footer">
                                <p>Don’t have an account? <a href="javascript:void(0)">Sign up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Your modal content -->
            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="loginModalLabel">Login</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            {{-- <iframe src="{{ route('login') }}" width="100%" height="400px"
                            frameborder="0"></iframe> --}}
                            @include('auth.login')
                            {{-- @include('auth.register') --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- Your modal content -->
            <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="loginModalLabel">Sign Up</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            {{-- <iframe src="{{ route('login') }}" width="100%" height="400px"
                            frameborder="0"></iframe> --}}
                            @include('auth.register')
                            {{-- @include('auth.register') --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="menu-4">
                <ul class="navbar-nav m-auto pt-3 pt-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome') }}">Home Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('category') }}">Category</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="favorites.html">Favorites</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact-us.html">Contact Us</a>
                    </li> --}}


                </ul>
            </div>
        </nav>
    </header>
</div>
