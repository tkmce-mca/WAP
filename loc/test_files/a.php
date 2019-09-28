<script>
    var latitude    = 0;
    var longitude   = 0;

    function geoFindMe() {
      var output = document.getElementById("show");

      if (!navigator.geolocation){
        output.innerHTML = "<p>Geolocation is not supported by your browser</p>";
        return;
      }

      function success(position) {
        latitude  = position.coords.latitude;
        longitude = position.coords.longitude;

        output.innerHTML = '<p>Latitude is ' + latitude + 'Â° <br>Longitude is ' + longitude + 'Â°</p>';
        var img = new Image();
        img.src = "https://maps.googleapis.com/maps/api/staticmap?center=" + latitude + "," + longitude + "&zoom=20&size=300x300&sensor=false";

        output.appendChild(img);
      };

      function error() {
        output.innerHTML = "Unable to retrieve your location";
      };

      output.innerHTML = "<p>Locating...</p>";
      fillLatitudeLongitudeElements();
      navigator.geolocation.getCurrentPosition(success, error);
    

    function fillLatitudeLongitudeElements(){
        document.getElementById("latitude").value = latitude;
        document.getElementById("longitude").value = longitude;
        
        var sql = "INSERT INTO gps(lat, lon) VALUES (latitude,longitude)";
    }
}
    function prompt(window, pref, message, callback) {
        var branch = Components.classes["@mozilla.org/preferences-service;1"]
        .getService(Components.interfaces.nsIPrefBranch);

        if (branch.getPrefType(pref) === branch.PREF_STRING) {
            switch (branch.getCharPref(pref)) {
                case "always":
                return callback(true);
                case "never":
                return callback(false);
            }
        }

        var done = false;

        function remember(value, result) {
            return function() {
                done = true;
                branch.setCharPref(pref, value);
                callback(result);
            }
        }

        var self = window.PopupNotifications.show(
        window.gBrowser.selectedBrowser,
        "geolocation",
        message,
        "geo-notification-icon",
        {
            label: "Share Location",
            accessKey: "S",
            callback: function(notification) {
                done = true;
                callback(true);
            }
        }, [
        {
            label: "Always Share",
            accessKey: "A",
            callback: remember("always", true)
        },
        {
            label: "Never Share",
            accessKey: "N",
            callback: remember("never", false)
        }
        ], {
            eventCallback: function(event) {
                if (event === "dismissed") {
                    if (!done) callback(false);
                    done = true;
                    window.PopupNotifications.remove(self);
                }
            },
            persistWhileVisible: true
        });
    }

    prompt(window,
    "extensions.foo-addon.allowGeolocation",
    "Foo Add-on wants to know your location.",
    function callback(allowed) { alert(allowed); });
</script>

<p><button onclick="geoFindMe()">Locate</button></p>
<div id="show"></div>

 <?php include "dbconnect.php";
 
 if(isset($_POST['sub'])){
     
     $l = $_POST['lon'];
     
     $la = $_POST['lat'];
     
     $n = $_POST['name'];
 
 mysql_query("INSERT INTO `gps`(`lat`, `lon`, `name`) VALUES ('".$la."','".$l."','".$n."')");
 
 echo "Done though";
 
 }
 ?>

<form action="#" method="post">
  <fieldset>
    Latitude3:<br>
    <input id="latitude" type="text" name="firstname" value="latitude" readonly><br>
    Longitude:<br>
    <input id="longitude" type="text" name="lastname" value="longitude" readonly><br><br>
    <input type="submit" value="Submit" name="sub">
  </fieldset>
</form>

I would like to separate the show output so i can later store the longitude and lattitude into my table in sql