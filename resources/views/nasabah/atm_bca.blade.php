  <meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Cloud Messaging -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-messaging.js"></script>

<p id="token">
  
</p>

<script >
   var firebaseConfig = {
    apiKey: "AIzaSyDvl8kzNuuN14XiVz-aVIwTLOWE1giZ38o",
    authDomain: "panab-9f5bd.firebaseapp.com",
    databaseURL: "https://panab-9f5bd.firebaseio.com",
    projectId: "panab-9f5bd",
    storageBucket: "panab-9f5bd.appspot.com",
    messagingSenderId: "345415351251",
    appId: "1:345415351251:web:150b5082050b7892718d26",
    measurementId: "G-BJJS7B548S"
  };
  
  
  firebase.initializeApp(firebaseConfig);
  const messaging = firebase.messaging();
  function InitializeFirebaseMessaging() {
    messaging
              .requestPermission()
              .then(function () {
                console.log("Notification Permission")
                return messaging.getToken();
              })
              .then(function (token) {
                console.log("Token is : "+token);
                // document.getElementById("token").innerHTML=token;
                window.localStorage.setItem('x-auth-token', token);
saveToken(token);
              })
              .catch(function (reason) {
                console.log(reason);
              });
  }

  messaging.onMessage(function (payload) {
    console.log(payload);
    const notificationOption={
      body:payload.notification.body,
      icon:payload.notification.icon,
    };

    if (Notification.permission==="granted") {
      var notification = new Notification(payload.notification.title,notificationOption);
      notification.onclick=function(ev) {
        ev.preventDefault();
        window.open(payload.notification.click_action,'_blank');
        notification.close();
      }
    }

  })
  
 
  
  messaging.onTokenRefresh(function () {
    messaging.getToken()
    .then(function (newToken) {
      console.log("New Token : "+newToken);
      
    })
    .catch(function (reason) {
                console.log(reason);
    })

  })

  InitializeFirebaseMessaging();
   function saveToken(token) {
    $.ajax({
      url: 'notif',
      method: 'GET',
      data: 'token='+ token,
      headers: {'X-CSRF-TOKEN': token},
    }).done(function(result){
     // location.href = "notif".headers
    })
  }
</script>
<!-- Cloud Messaging -->
    <meta name="HandheldFriendly" content="true" />
    <meta name="viewport"
    content="width=device-width,
    height=device-height, user-scalable=no" />
 <link rel="icon" type="image/jpg" href="{{ asset('/startbootstrap-sb-admin-2-master/img/Logo-PLN-Terbaru.jpg') }} ">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
    crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
    integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
    crossorigin=""></script>
    <style type="text/css">

     /*#issMap { height: 57rem; width : 112rem; align-content: center;}*/
   </style>



   <style type="text/css">
    .no-padding {
      padding: 0px; 
    }


  </style>

</script>

<style type="text/css">

 #issMap { height: 56rem; width : 112rem; align-content: center;}
</style>


<style>
  .mybuttonWA{margin:0;padding:0;text-align:center;position:fixed;bottom:35px;right:45px}
  .buttonWA{font-size:17px;color:#f0e2dd;background:#1fe76e;padding:10px;margin:0;overflow:hidden;border-radius:3px;text-decoration:none}
  .mybuttonWA .buttonWA:hover{background:#62abd0}
</style>
<div class="mybuttonWA">
  <a class="buttonWA" href="https://api.whatsapp.com/send?phone=6283832XXXXXX&amp;text=Halo%20Admin%20Apa%20Kabar" rel="nofollow" target="_blank"><i class="fa fa-whatsapp"> </i> WhatsApp</a></div>

<div class="gcse-searchbox" data-enableHistory="true" data-autoCompleteMaxCompletions="5" data-autoCompleteMatchType='any'>
<div class="gcse-searchresults" data-refinementStyle="link">

<div >
	<button><a  href="https://www.google.com/search?safe=strict&rlz=1C1GCEA_enID907ID907&sxsrf=ALeKk01opLV1cj2BkzQstyM8aH0e7D-wUg:1603899484259&q=atm+btn+terdekat&npsic=0&rflfq=1&rlha=0&rllag=-8226127,114365765,1832&tbm=lcl&ved=2ahUKEwi8vY6Yz9fsAhVVg-YKHcihA9kQtgN6BAgMEAc&rldoc=1#rlfi=hd:;si:;mv:[[-8.205145446176392,114.40499540922848],[-8.248638524220668,114.32379957792965],null,[-8.226892581876395,114.36439749357906],14]">Klik me</button>
	<button><a  href="https://www.google.com/search?safe=strict&rlz=1C1GCEA_enID907ID907&sxsrf=ALeKk01opLV1cj2BkzQstyM8aH0e7D-wUg:1603899484259&q=atm+btn+terdekat&npsic=0&rflfq=1&rlha=0&rllag=-8226127,114365765,1832&tbm=lcl&ved=2ahUKEwi8vY6Yz9fsAhVVg-YKHcihA9kQtgN6BAgMEAc&rldoc=1#rlfi=hd:;si:;mv:[[-8.205145446176392,114.40499540922848],[-8.248638524220668,114.32379957792965],null,[-8.226892581876395,114.36439749357906],14]">Klik me</button>
</div>
  <div class="panel-body no-padding">
    <div id="issMap"></div>
  </div>
</div>


<!-- WhatsHelp.io widget -->
<script type="text/javascript">
  (function () {
    var options = {
                  whatsapp: "+6282183849679", // WhatsApp number
                  call_to_action: "Hubungi Kami", // Call to action
                  position: "right", // Position may be 'right' or 'left'
                };
                var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
                var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
                s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
                var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
              })();
            </script>
            <!-- /WhatsHelp.io widget -->
            

            <script>






              const mymap = L.map('issMap').setView([ -8.2094973,114.3737201
                ], 20);
       mymap.locate({setView: true, maxZoom: 10});

var lat;
var lon;

function clickEvent(e) {

        if (typeof(newMarker)==='undefined'){
            newMarker = new L.marker(e.latlng, { draggable: true });
            newMarker.addTo(mymap);}
        else { newMarker.setLatLng(e.latlng);}


        lat = e.latlng.lat;
        lon = e.latlng.lng;
        console.log(lat +" , "+lon+ " Inside");
        now();
}

mymap.on('click', clickEvent);
console.log(lat + " Global");

function now(){
    console.log(lat + " Global after click");
}


function onLocationFound(ev) {
    var radius = ev.accuracy;

    L.marker(ev.latlng).addTo(mymap)
        .bindPopup("You are within " + radius + " meters from this point").openPopup();
L.map("issMap").setView(ev.latlng);
    L.circle(ev.latlng).addTo(mymap);
}

mymap.on('locationfound', onLocationFound);
            function onLocationError(ev) {
    alert(ev.message);
mymap.on('locationerror', onLocationError);  

}
     


              // mymap.on('locationfound', function(ev){

              // var marker;
              // mymap.on('locationfound', function(ev){
              //   if (!marker) {
              //     marker = L.marker(ev.latlng).addTo(mymap).bindPopup('Anda Berada Disini').openPopup();
              //   } else {
              //     marker.setLatLng(ev.latlng);
              //   }
              // })
              const attribution = '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributor';






              const api_url = 'https://nominatim.openstreetmap.org/details.php?place_id=236525347'
              const tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'
              const tiles = L.tileLayer(tileUrl,{ attribution });
              tiles.addTo(mymap);
              async function getISS(){
                const response = await fetch(api_url);
                const data = await response.json();
                const { latitude, longitude } = data;

                document.getElementById('lat').textContent = latitude;
                document.getElementById('lan').textContent = longitude;
              }

            </script>



