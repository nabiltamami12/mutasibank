	<nav class="navbar navbar-default navbar-fixed-top">
			<!-- <div class="brand">
				<a href="index.html"><img src="{{asset('assets/img/logo2.png')}}" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div> -->
			<div class="container-fluid">
				<div id="navbar-menu">
								<ul class="nav navbar-nav navbar-left">
					<img src="{{asset('assets/img/logo2.png')}}" alt="Klorofil Logo" class="img-responsive logo" style="width: 200px; height: auto;padding-top: 2rem"></ul>
					<ul class="nav navbar-nav navbar-right">
						<ul class="nav navbar-nav navbar-right">

							
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a>
                                    {{ Auth::user()->name }} 
                                </a>
                            </li>
                        @endguest

						    </ul>
					</ul>
				</div>
			</div>
		</nav>

		