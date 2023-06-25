const appU=new(function(){
    this.tbody=document.getElementById("tbody");
    this.id=document.getElementById("id");
    this.codigo=document.getElementById("codigo");
    this.descripcion=document.getElementById("descripcion");
    this.precio=document.getElementById("precio");
    this.costo=document.getElementById("costo");
    this.existencia=document.getElementById("existencia");
    this.iva=document.getElementById("iva");
    
    this.guardarArticulo=()=>{
        var form=new FormData();
        form.append("codigo",this.codigo.value);
        form.append("descripcion",this.descripcion.value);
        form.append("precio",this.precio.value);
        form.append("costo",this.costo.value);
        form.append("existencia",this.existencia.value);
        form.append("iva",this.iva.value);
        fetch("../controlador/guardarArticulo.php",{
            method:"POST",
            body:form,
        })
        .then((res)=>res.json())
        .then((data)=>{
            console.log(data);
            alert("registro insetado");
        })
        .catch((error)=>console.log(error));
    };
    this.eliminarArticulo=()=>{
        var form=new FormData();
        form.append("codigo",this.codigo.value);
        fetch("../controlador/eliminarArticulo.php",{
            method:"POST",
            body:form,
        })
        .then((res)=>res.json()).then((data)=>{
            console.log(data);
            alert("articulo funado...");
        })
        .catch((error)=>console.log(error));
    };
})