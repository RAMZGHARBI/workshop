function validerFormulaire(){ 
var title=document.getElementById("title").value;
if( title.length<3){
    alert("minimum 3 caracteres svp ");
    return false;
} 
var dest=document.getElementById("destination").value;
    if(dest.length<3 || !/^[A-Za-z\s]+$/.test(dest)){
        alert("invalide"); 
        return false;
    }
    var departureDate = document.getElementById("departure-date").value;
    var returnDate = document.getElementById("return-date").value;
    
    if (returnDate <= departureDate) {
        alert("Return date must be later than departure date.");
        return false;
    }
    var price = document.getElementById("price").value;
    if (isNaN(price) || price <= 0) {
        alert("Price must be a positive number.");
        return false;
    }
    
    alert("Form successfully validated!");
    return true;
}
