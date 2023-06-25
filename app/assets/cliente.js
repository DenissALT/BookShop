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
    
    this.guardarCliente=()=>{
        var form=new FormData();
        form.append("ci",this.ci.value);
        form.append("nombre",this.nombre.value);
        form.append("apellido",this.apellido.value);
        form.append("telefono",this.telefono.value);
        form.append("direccion",this.direccion.value);
        form.append("email",this.email.value);
        form.append("ruc",this.ruc.value);
        fetch("../controlador/guardarCliente.php",{
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
    this.eliminarCliente=()=>{
        var form=new FormData();
        form.append("ci",this.ci.value);
        fetch("../controlador/eliminarCliente.php",{
            method:"POST",
            body:form,
        })
        .then((res)=>res.json()).then((data)=>{
            console.log(data);
            alert("cliente funado...");
        })
        .catch((error)=>console.log(error));
    };
    this.buscarCliente=()=>{
        var form=new FormData();
        alert(this.ci.value);
        form.append("ci",this.ci.value)
        fetch("../controlador/buscarCliente.php",{
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
            document.getElementById("ruc").value=data.ruc;
        })
        .catch((error)=>console.log(error));
    }
})