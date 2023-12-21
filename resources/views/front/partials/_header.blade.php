<div id="header-wrap">
    <div class="top-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <div class="main-logo">
                            <a href="{{route('redirect')}}"><img src="project/images/main-logo.png" alt="logo"></a>
                        </div>

                    </div>
                    
                </div>
                <div class="col-md-6">
                    <div class="right-element">
                       


                        <a href="#" class="cart for-buy"><i class="icon icon-clipboard"></i><span>Cart:(0
                                $)</span></a>

                        <div class="action-menu">

                            <div class="search-bar">
                                <a href="#" class="search-button search-toggle" data-selector="#header-wrap">
                                    <i class="icon icon-search"></i>
                                </a>
                                <form role="search" method="get" class="search-box">
                                    <input class="search-field text search-input" placeholder="Search"
                                        type="search">
                                </form>
                            </div>
                        </div>
                        @if (Route::has('login'))
                        @auth
                        <div class="action-menu"  >
                           
                            
                            <x-app-layout >

                            </x-app-layout>
                            
                        </div>
                        @else
                        <div class="action-menu"  >
                        
                                <a class=" "  href="{{ route('login') }}">Login</a>
                        
                        </div>
                        <div class="action-menu"  >
                            
                                <a class=" "href="{{ route('register') }}">Register</a>
                            
                        </div>
                        @endauth
                        @endif

                    </div>
                </div>

            </div>
        </div>

    <header id="header">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-11">

                    <nav id="navbar">
                        <div class="main-menu stellarnav">
                            <ul class="menu-list">
                                <li class="menu-item active"><a href="{{route('redirect')}}">Home</a></li>
                                <li class="menu-item has-sub">
                                    <a href="#pages" class="nav-link">Books</a>

                                    <ul>
                                        <li class="active"><a href="../pages/az_books.blade.php">Azərbaycan</a></li>
                                        <li class="menu-item"><a href="../pages/tr_books.blade.php">Türk</a></li>
                                        <li class="menu-item"><a href="../pages/en_books.blade.php">İngilis</a></li>
                                        <li class="menu-item"><a class="'nav-link" href="../pages/ru_books.blade.php">Rus</a>
                                        </li>
                                    </ul>

                                </li>
                                <li class="menu-item"><a href="#featured-books"
                                        class="nav-link nav">Stationery</a></li>
                                <li class="menu-item"><a href="#popular-books" class="nav-link nav">Bags</a></li>
                                <li class="menu-item"><a href="#special-offer" class="nav-link nav">Offer</a>
                                </li>
                                <li class="menu-item"><a href="#latest-blog" class="nav-link nav">Gifts</a></li>
                                <li class="menu-item"><a href="{{route('about')}}"
                                        class="nav-link  nav">About</a></li>
                                <li class="menu-item"><a href="{{route('contact')}}"
                                        class="nav-link nav">Contact</a></li>
                              </ul>

                            <div class="hamburger">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </div>

                        </div>
                    </nav>

                </div>

            </div>
        </div>
    </header>

</div>