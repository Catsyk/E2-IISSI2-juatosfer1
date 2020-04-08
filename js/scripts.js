window.onload = function() {
   n = new Date();
   n.setDate(n.getDate()-2);
   y = n.getFullYear();
   m = n.getMonth() + 1;
   var meses = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];
   d = n.getDate();
   document.getElementById("date").textContent = d + " de " + meses[m] + " del " + y;
}