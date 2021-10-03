function postStuff(){

    // XMLHttpRequest object (ajax)
    var hr = new XMLHttpRequest();

    // vars to send to backend PHP
    var url = "./xhr.php";
    var var1 = document.getElementById("var1").value;

    var vars ="ajax_var1="+var1;

    hr.open("POST", url, true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        console.log(hr);
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    }

    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    // hr.send(); // Actually execute the request
    document.getElementById("status").innerHTML = "processing...";
}

document.getElementById('send').onclick = postStuff;
