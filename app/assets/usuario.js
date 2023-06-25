const appU=new(function(){
    this.tbody=document.getElementById("tbody");
    this.id=document.getElementById("id");
    this.ci=document.getElementById("ci");
    this.nombre=document.getElementById("nombre");
    this.apellido=document.getElementById("apellido");
    this.telefono=document.getElementById("telefono");
    this.direccion=document.getElementById("direccion");
    this.email=document.getElementById("email");
    this.usuario=document.getElementById("usuario");
    this.clave=document.getElementById("clave");
    
    this.guardarU=()=>{
        var form=new FormData();
        form.append("ci",this.ci.value);
        form.append("nombre",this.nombre.value);
        form.append("apellido",this.apellido.value);
        form.append("telefono",this.telefono.value);
        form.append("direccion",this.direccion.value);
        form.append("email",this.email.value);
        form.append("usuario",this.usuario.value);
        form.append("clave",this.clave.value);
        fetch("../controlador/guardarU.php",{
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
    this.eliminarU=()=>{
        var form=new FormData();
        form.append("ci",this.ci.value);
        fetch("../controlador/eliminarU.php",{
            method:"POST",
            body:form,
        })
        .then((res)=>res.json()).then((data)=>{
            console.log(data);
            alert("get funado...");
        })
        .catch((error)=>console.log(error));
    };
    this.buscarU=()=>{
        var form=new FormData();
        alert(this.ci.value);
        form.append("ci",this.ci.value)
        fetch("../controlador/buscarU.php",{
            method:"POST",
            body:form,
        })
        .then((res)=>res.json()).then((data)=>{
            document.getElementById("ci").value=data.ci;
            document.getElementById("nombre").value=data.nombre;
            document.getElementById("apellido").value=data.apellido;
            document.getElementById("telefono").value=data.telefono;
            document.getElementById("direccion").value=data.direccion;
            document.getElementById("email").value=data.email;
            document.getElementById("usuario").value=data.usuario;
            document.getElementById("clave").value=data.clave;
            
        })
        .catch((error)=>console.log(error));
    }
})