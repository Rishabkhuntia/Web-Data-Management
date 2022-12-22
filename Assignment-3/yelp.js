var map;
var pointer;
var pointers = [];
  
  function initialize () {
  map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 32.75, lng: -97.13},
          zoom: 16
        });
      }

      
function setmarker(cordinates, labelCount){
  pointer = new google.maps.Marker({
    map: map,
    draggable: true,
    position: {lat: cordinates.latitude , lng:cordinates.longitude },
    title: labelCount.toString(),
    label: labelCount.toString()
  });
  pointers.push(pointer);
}
function removerMarkers(){
    var k =0;
    while (k<pointers.length){
        pointers[k].setMap(null);
        k++;
    }
}

function sendRequest () {
    removerMarkers();
    var bounds = map.getBounds();
    var lat = bounds.getSouthWest().lat();
    var long = bounds.getNorthEast().lng();
    var radius = (Math.round(google.maps.geometry.spherical.computeDistanceBetween(bounds.getSouthWest(), bounds.getNorthEast())/2)).toString();
    var xhr = new XMLHttpRequest();
    var input = (document.getElementById("search").value).split(" ").join("+");

    var url ="proxy.php?term="+ input + "&latitude="+lat+"&longitude="+long+"&radius="+ radius +"&limit=10";
    xhr.open("GET", url);
    xhr.setRequestHeader("Accept","application/json");
    xhr.onreadystatechange = function () {
        if (this.readyState == 4) {
            var json = JSON.parse(this.responseText);
            var length = json.businesses.length;
            if(length == 0){
                alert("Nothing found, Please move the map...")
            }
            else{
                var markerCount = 1;
                var list = document.getElementById("new");
                list.innerHTML = "";
                let i = 0;
                while(i<length){
                    let cords = json.businesses[i].coordinates;
                    setmarker(cords, markerCount);
                markerCount++;
                var listBeg = "<div class='column'><div class='card'>";
                var img = "<img src="+json.businesses[i].image_url+" alt='Avatar' style='width:100%'>";
                var url = "<div class='container'><a href='"+ json.businesses[i].url +"'>"+ json.businesses[i].name + " </a>";
                var listEnd = "<p>"+json.businesses[i].rating+"</p></div></div>"
                var complete = listBeg+img+url+listEnd;
                list.innerHTML += complete;
                i++;
            }
        }

    }
};
xhr.send(null);
}
