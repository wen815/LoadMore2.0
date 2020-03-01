function ajaxfunction(i){
xmlHttp.onreadystatechange=readyStateChangeHandle;
url="./page.php";
url+="?page="+i+"&sid"+Math.random();
xmlHttp.open("GET",url,true);
xmlHttp.send();

   
}
function readyStateChangeHandle(){
    if(xmlHttp.readyState===4&&xmlHttp.status===200){
        xmlDoc=xmlHttp.responseText;
        var s=document.getElementById("s");
        s.innerHTML=xmlDoc;
 
    }
}
ajaxfunction(1);
