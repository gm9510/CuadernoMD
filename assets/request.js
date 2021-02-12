export default function(postid){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("display").innerHTML = this.responseText;
        }
    };

    xhttp.open("GET", "/post/page?id=" + postid, true);
    xhttp.send();
};
