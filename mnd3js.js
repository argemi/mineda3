//variabile globale
//indicatorii de sortare ai coloanelor din lista
var aSort=[0,0,0,0,0,0]
//expresia de filtrare
var sFilt="-"

function fsort(nrcol) {
//sortare ajax dupa coloana nrcol
var sortord
if (aSort[nrcol]==0 || aSort[nrcol]==2)
	{sortord='ASC'; aSort[nrcol]=1}
else
	{sortord='DESC'; aSort[nrcol]=2}
var clink=gbase+'index.php/mnd3c/userlist/'+nrcol+'/'+sortord+"/"+sFilt;
//$('#ultp').load('http://localhost/codeigniter/index.php/mnd3c/userlist/'+nrcol+'/'+sortord+"/"+sFilt);
$('#ultp').load(clink);
}

function filt() {
//filtrare user dupa randul de filtrare - cu Ajax .load
//alert ("FILTRU")
sFilt=""
if (document.formfilt.username_filt.value!="")	sFilt=sFilt+" AND username LIKE '%"+document.formfilt.username_filt.value+"%'"
if (sFilt.length ==0) sFilt="-"
//clink='http://localhost/codeigniter/index.php/mnd3c/userlist/0/""/'+escape(sFilt)
clink=gbase+'index.php/mnd3c/userlist/0/""/'+escape(sFilt)
var filtrow=$("#filtrare").html()
//incarca in div-ul ultp, prin view-ul mnd3t_ultp.html, datele din select cu filtru
$('#ultp').load(clink);   
//$("#filtrare").replaceWith(filtrow)   //NU merge!!
}


function userappend() {
//afiseaza forma modala pt adaugare user
$("#modaltitle").text("Adaugare") //modifica text element (paragraf modaltitle)
//alert($("#modaltitle").html())  //afiseaza text element
el = document.getElementById("modaluser")
el.style.visibility = "visible"
}

function userrecord() {
//apeleaza procedura de editare user
clink=gbase+'index.php/mnd3c/userrecord'
$.post(clink,{ name: "Zara" },
  function(data,status){
    alert("Data: " + data + "\nStatus: " + status);
  }
)
//
document.getElementById("modaluser").style.visibility = "hidden";
}

