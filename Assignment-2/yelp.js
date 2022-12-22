
function initialize () {

}


function findRestaurants() {
    var xhr = new XMLHttpRequest();
    var input1 = (document.getElementById("search1").value).split(" ").join("+");
    var input2 = (document.getElementById("search2").value).split(" ").join("+");
    var url ="proxy.php?term="+ input1 + "&location="+input2+"&limit=10";
        xhr.open("GET", url);
    xhr.setRequestHeader("Accept","application/json");
    xhr.onreadystatechange = function () {
        if (this.readyState == 4) {
            var json = JSON.parse(this.responseText);
            var length = json.businesses.length;
            if(length == 0){
                alert("nothing found")
            }
            else{
                if(false && json<0){
                    alert("Something went wrong");
                }
                 var list = document.getElementById("new");
                list.innerHTML = "";
                for(var count = 0; count <length; count ++){

                    var listStart = "<div class='column'><div class='card'>";
                    var img = "<img src="+json.businesses[count].image_url+" alt='Avatar' style='width:100%'>";
                    var url = "<div class='container'><a href='"+ json.businesses[count].url +"'>"+ json.businesses[count].name + " </a>";
                    var address = "<p>"+json.businesses[count].location.display_address+"</p>";
                    var ph = "<p>"+json.businesses[count].display_phone+"</p>";

                    var listEnd = "<p>"+json.businesses[count].rating+"</p></div></div>"
                    var complete = listStart+img+url+address+ph+listEnd;
                    list.innerHTML += complete;

                }
            }

        }
    };
    xhr.send(null);
}
