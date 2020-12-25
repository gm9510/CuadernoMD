function pageReq(nm,nmbr){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("display").innerHTML = this.responseText;
        }
    };

    xhttp.open("GET", "page.php?name=" + nm + "&number=" + nmbr, true);
    xhttp.send();
}
