function valNama(name = " ", pesan = " "){
    if (name.value.length == 0){
       alert(pesan);
        return false;
        
    }
    else
        return true;

}

function valNim(nim = " ", pesan1 = " ", pesan2 = " "){
    if ( nim.value.length == 0){
       alert(pesan1);
        return false;
    }
    else if(nim.value.length != 7 ){
        alert(pesan2)
        return false;
    }
    else
        return true;
}

function formNim(nim = " ", pesan = " "){
    var numberExp = /(?=.*\d)((?=.*[A-Z])|(?=.*[a-z]))./i;
    if(nim.value.match(numberExp)){
        return true;
    }
    else{
        alert(pesan);
        return false;
    }    
}



function validasi(){
    var name = document.getElementById("name");
    var nim = document.getElementById("nim");
    var stateNim = valNim(nim, "nim harus di isi", "nim harus memiliki 7 karakter");
    var stateNama = valNama(name, "nama harus di isi"); 
    if (stateNim == true ){
        formNim(nim,"nim hanya menerima angka dan huruf");
    }

    

}
