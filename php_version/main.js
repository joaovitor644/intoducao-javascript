function request(){
    var xhttp = new XMLHttpRequest
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
           document.getElementById("tabela-pacientes").innerHTML = this.responseText;
        }
      
    }; 
    
    xhttp.open("POST",'php/file_request.php',true);
    xhttp.send();
}
window.onload = request();