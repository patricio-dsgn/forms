var vali = function () {

  // variable mensaje verificar si quedan campos vacios
  var msg = "";

  // crear variable para input
  // remover clases
  // verificar si input está vacio
  var obj = document.getElementById("name");
  obj.classList.remove("error");
  obj.classList.remove("success");
  if (obj.value == "") {
    msg += "name";
    obj.classList.add("error");
  }else{
    obj.classList.add("success");
  }

  // crear variable para input
  // remover clases
  // verificar si input está vacio
  var obj = document.getElementById("phone");
  obj.classList.remove("error");
  obj.classList.remove("success");
  if (obj.value == "") {
    msg += "phone";
    obj.classList.add("error");
  }else{
    obj.classList.add("success");
  }

  // crear variable para input
  // remover clases
  // verificar si input está vacio
  var obj = document.getElementById("email");
  obj.classList.remove("error");
  obj.classList.remove("success");
  if (obj.value == "") {
    msg += "email";
    obj.classList.add("error");
  }else{
    obj.classList.add("success");
  }

  // crear variable para input
  // remover clases
  // verificar si input está vacio
  var obj = document.getElementById("message");
  obj.classList.remove("error");
  obj.classList.remove("success");
  if (obj.value == "") {
    msg += "message";
    obj.classList.add("error");
  }else{
    obj.classList.add("success");
  }


  // verificar si quedan campos vacios
  if (msg == "") {
    return true;
  }else{
    msg = "complete los datos para enviar formulario";
    alert(msg);
    return false;
  }

};

// crear variable formulario
var element = document.getElementById("form_mail");


// aplicar función cuando se envie el formulario(onsubmit)
element.onsubmit = vali;

