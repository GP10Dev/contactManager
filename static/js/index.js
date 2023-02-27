function getContacts(){
    document.getElementById("contactList").innerHTML = "Getting Contacts";                    
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("contactList").innerHTML = this.responseText;
        }
    }  ; 
    xmlhttp.open("GET", "./server/getContacts.php", true);
    xmlhttp.send();
}