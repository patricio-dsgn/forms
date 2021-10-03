function crete_file(){

    // XMLHttpRequest object (ajax)
    var hr = new XMLHttpRequest();

    // vars to send to backend PHP
    var url = "./xhr.php";

    var send_create = document.getElementById("send_create").value;
    var var_create = document.getElementById("var_create").value;

    var vars =
        "ajax_send_create="+send_create
        +"&ajax_var_create="+var_create
    ;

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

document.getElementById('send_create').onclick = crete_file;





function delete_file(){

    // XMLHttpRequest object (ajax)
    var hr = new XMLHttpRequest();

    // vars to send to backend PHP
    var url = "./xhr.php";

    var send_delete = document.getElementById("send_delete").value;
    var var_delete = document.getElementById("var_delete").value;

    var vars =
        "ajax_send_delete="+send_delete
        +"&ajax_var_delete="+var_delete
    ;

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

document.getElementById('send_delete').onclick = delete_file;
