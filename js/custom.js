// to get current year
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();


/** google_map js **/

function myMap() {
    var mapProp = {
        center: new google.maps.LatLng(40.712775, -74.005973),
        zoom: 18,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}

var x = 0;
document.getElementById("c").innerHTML = x;

  function add(val) {
    document.getElementById("hello").innerHTML +=
      "<li class='dropdown-item'>" +
      val +
      "&nbsp <input type='button' value='X' onclick='remove()'></li>";
      x++;
      document.getElementById("c").innerText = x;
    
  }

  function remove() {
    let listItem = document.getElementsByTagName("li");
    for (var i = 0; i < listItem.length; i++) {
      listItem[i].onclick = function () {
        this.parentNode.removeChild(this);
      };
    }
    x = x - 1;
    document.getElementById("c").innerHTML = x;
  }


