const appU=new(function(){
    this.tbody=document.getElementById("tbody");
    this.id=document.getElementById("id");
    this.ci=document.getElementById("ci");
    this.nombre=document.getElementById("nombre");
    this.apellido=document.getElementById("apellido");
    this.telefono=document.getElementById("telefono");
    this.direccion=document.getElementById("direccion");
    this.email=document.getElementById("email");
    this.ruc=document.getElementById("ruc");
    
    this.guardarProveedor=()=>{
        var form=new FormData();
        form.append("ci",this.ci.value);
        form.append("nombre",this.nombre.value);
        form.append("apellido",this.apellido.value);
        form.append("telefono",this.telefono.value);
        form.append("direccion",this.direccion.value);
        form.append("email",this.email.value);
        form.append("ruc",this.ruc.value);
        fetch("../controlador/guardarProveedor.php",{
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
    this.eliminarProveedor=()=>{
        var form=new FormData();
        form.append("ci",this.ci.value);
        fetch("../controlador/eliminarProveedor.php",{
            method:"POST",
            body:form,
        })
        .then((res)=>res.json()).then((data)=>{
            console.log(data);
            alert("proveedor funado...");
        })
        .catch((error)=>console.log(error));
    };
    this.buscarProveedor=()=>{
        var form=new FormData();
        alert(this.ruc.value);
        form.append("ruc",this.ruc.value)
        fetch("../controlador/buscarProveedor.php",{
            method:"POST",
            body:form,
        })
        .then((res)=>res.json()).then((data)=>{
            document.getElementById("nombre").value=data.nombre;
            document.getElementById("telefono").value=data.telefono;
            document.getElementById("direccion").value=data.direccion;
        })
        .catch((error)=>console.log(error));
    };
})