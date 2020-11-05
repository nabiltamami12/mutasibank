
<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					@if(Auth::user()->role=='admin')
					 <br \>
					 <br \>
					 <br \>

					<ul class="nav">
						<li>
							<a><i class="lnr lnr-user"></i> 
								<span>{{ Auth::user()->role }} </span>
							</a>
						</li>
				<!-- 		<li>
							<a href="{{ url('nasabah') }}" class="{{ request()->is('nasabah') ? 'active' : '' }}"><i class="lnr lnr-home"></i> 
								<span>Nasabah</span>
							</a>
						</li> -->
						<li>
							<a href="https://www.google.com/search?safe=strict&rlz=1C1GCEA_enID907ID907&biw=1366&bih=657&sxsrf=ALeKk00MZcvFMTlytsEdbwKN5Yvm4ksO8Q:1603901494800&q=atm+bca+terdekat&npsic=0&rflfq=1&rlha=0&rllag=-8211130,114374650,339&tbm=lcl&ved=2ahUKEwiooujW1tfsAhXr5nMBHWI9CxQQtgN6BAgMEAc&rldoc=1#rlfi=hd:;si:;mv:[[-8.204014232338979,114.43193830632322],[-8.247507434520164,114.35074247502439],null,[-8.22576143002765,114.3913403906738],14]" class="{{ request()->is('nasabah') ? 'active' : '' }}"><i class="fa fa-window-restore fa-2x"></i> 
								<span> ATM BCA TERDEKAT</span>
							</a>
						</li>
						<li>
							<a href="https://www.google.com/search?safe=strict&rlz=1C1GCEA_enID907ID907&sxsrf=ALeKk01opLV1cj2BkzQstyM8aH0e7D-wUg:1603899484259&q=atm+btn+terdekat&npsic=0&rflfq=1&rlha=0&rllag=-8226127,114365765,1832&tbm=lcl&ved=2ahUKEwi8vY6Yz9fsAhVVg-YKHcihA9kQtgN6BAgMEAc&rldoc=1#rlfi=hd:;si:;mv:[[-8.205145446176392,114.40499540922848],[-8.248638524220668,114.32379957792965],null,[-8.226892581876395,114.36439749357906],20]" class="{{ request()->is('nasabah') ? 'active' : '' }}"><i class="fa fa-window-restore fa-2x"></i> 
								<span> ATM BTN TERDEKAT</span>
							</a>
						</li>
						<li>
							<a href="{{ url('riwayat') }}" class="{{ request()->is('riwayat') ? 'active' : '' }}"><i class="lnr lnr-chart-bars"></i> 
								<span>Riwayat</span>
							</a>
						</li>
						<li>
							<a href="{{ route('logout') }}" ><i class="lnr lnr-arrow-left-circle"></i> 
								<span>Logout</span>
							</a>
						</li>
					</ul>
					@else
					 <br \>
					 <br \>
					 <br \>
					
						<ul class="nav">
						<li>
							<a><i class="lnr lnr-user"></i> 
								<span>{{ Auth::user()->name }} </span>
							</a>
						</li>

						<li>
							<a href="{{ url('dashboard') }}" class="{{ request()->is('dashboard') ? 'active' : '' }}"><i class="lnr lnr-home"></i> 
								<span>Beranda</span>
							</a>
						</li>
						<li>
							<a href="{{ url('cekmutasiku') }}" class="{{ request()->is('cekmutasiku') ? 'active' : '' }}"><i class="lnr lnr-chart-bars"></i> 
								<span>Cek Mutasi</span>
							</a>
						</li>
						<li>
							<a href="https://www.google.com/search?safe=strict&rlz=1C1GCEA_enID907ID907&biw=1366&bih=657&sxsrf=ALeKk00MZcvFMTlytsEdbwKN5Yvm4ksO8Q:1603901494800&q=atm+bca+terdekat&npsic=0&rflfq=1&rlha=0&rllag=-8211130,114374650,339&tbm=lcl&ved=2ahUKEwiooujW1tfsAhXr5nMBHWI9CxQQtgN6BAgMEAc&rldoc=1#rlfi=hd:;si:;mv:[[-8.204014232338979,114.43193830632322],[-8.247507434520164,114.35074247502439],null,[-8.22576143002765,114.3913403906738],14]" class="{{ request()->is('nasabah') ? 'active' : '' }}"><i class="fa fa-window-restore fa-2x"></i> 
								<span> ATM BCA TERDEKAT</span>
							</a>
						</li>
						<li>
							<a href="https://www.google.com/search?safe=strict&rlz=1C1GCEA_enID907ID907&sxsrf=ALeKk01opLV1cj2BkzQstyM8aH0e7D-wUg:1603899484259&q=atm+btn+terdekat&npsic=0&rflfq=1&rlha=0&rllag=-8226127,114365765,1832&tbm=lcl&ved=2ahUKEwi8vY6Yz9fsAhVVg-YKHcihA9kQtgN6BAgMEAc&rldoc=1#rlfi=hd:;si:;mv:[[-8.205145446176392,114.40499540922848],[-8.248638524220668,114.32379957792965],null,[-8.226892581876395,114.36439749357906],20]" class="{{ request()->is('nasabah') ? 'active' : '' }}"><i class="fa fa-window-restore fa-2x"></i> 
								<span> ATM BTN TERDEKAT</span>
							</a>
						</li>
						<li>
							<a href="{{ route('logout') }}" class="{{ request()->is('logout') ? 'active' : '' }}"><i class="lnr lnr-arrow-left-circle"></i> 
								<span>Logout</span>
							</a>
						</li>
					</ul>
					@endif
				</nav>
			</div>
		</div>