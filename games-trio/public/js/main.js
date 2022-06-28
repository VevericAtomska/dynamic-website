function downloadtime(){
    let a = Number(document.getElementById("broj-gb").value);
    let b = Number(document.getElementById('broj-mb').value);
    let c = Number(a*1024);
    let d = Number(b*60);
    let e = Math.round(Number(c/d));
    document.getElementById("rezultat").innerHTML="Downloading will take "+e+" minutes by our estimate";
	
}
