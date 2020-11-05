@extends('layouts.master')
@section('content')
<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">

				<div class="panel-body">
		
							<div style="padding: 150px;">
									<center>
								<!--      <a href=" {{ url('loginbri') }}"><img src="bri.png" height= "130px" width="220" style="padding: 30px;"/></a> -->
								<a href="{{url ('loginbca')}}"><img src="bca.png" height= "160px" width="220" style="padding: 1em;"/></a>
								<a href="{{url ('loginbtn')}}"><img src="btn.png" height= "130px" width="220" style="padding: 1em;"/></a><br>
							<!-- 	<button><a href="https://www.googleapis.com/customsearch/v1?key=AIzaSyAPs88U4569yQnXf27a8Xzuflp4zQeYF-g&cx=017576662512468239146:omuauf_lfve&q=lectures"></a></button> -->
							<!-- 
							<button><a  href="https://www.google.com/search?safe=strict&rlz=1C1GCEA_enID907ID907&biw=1366&bih=657&sxsrf=ALeKk00MZcvFMTlytsEdbwKN5Yvm4ksO8Q:1603901494800&q=atm+bca+terdekat&npsic=0&rflfq=1&rlha=0&rllag=-8211130,114374650,339&tbm=lcl&ved=2ahUKEwiooujW1tfsAhXr5nMBHWI9CxQQtgN6BAgMEAc&rldoc=1#rlfi=hd:;si:;mv:[[-8.204014232338979,114.43193830632322],[-8.247507434520164,114.35074247502439],null,[-8.22576143002765,114.3913403906738],14]"> <i class="fa fa-window-restore fa-2x">BCA</i> </a></button>
							<button><a  href="https://www.google.com/search?safe=strict&rlz=1C1GCEA_enID907ID907&sxsrf=ALeKk01opLV1cj2BkzQstyM8aH0e7D-wUg:1603899484259&q=atm+btn+terdekat&npsic=0&rflfq=1&rlha=0&rllag=-8226127,114365765,1832&tbm=lcl&ved=2ahUKEwi8vY6Yz9fsAhVVg-YKHcihA9kQtgN6BAgMEAc&rldoc=1#rlfi=hd:;si:;mv:[[-8.205145446176392,114.40499540922848],[-8.248638524220668,114.32379957792965],null,[-8.226892581876395,114.36439749357906],20]"> <i class="fa fa-window-restore fa-2x">BTN </i></a></button> -->
							</center>
							</div>
							<h3  style="text-align: right;" class="panel-title">Terakhir Diakses  : {{ Carbon\Carbon::parse(Auth::user()->lastlast_login_at)->translatedFormat('d F Y') }} </h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END MAIN CONTENT -->
	</div>
	<!-- END MAIN -->
	@endsection