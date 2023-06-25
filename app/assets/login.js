const appLogin=new(function(){
    this.tbody=document.getElementById("tbody");
    this.id=document.getElementById("id");
    this.usuario=document.getElementById("usuario");
    this.clave=document.getElementById("clave");

    this.verificarLogin=()=>{
        var form=new FormData();
        form.append("id",this.id.value);
        form.append("usuario",this.usuario.value);
        form.append("clave",this.clave.value);
        fetch("../controlador/verificarLogin.php",{
            method:"POST",
            body:form,
        })
        .then((res)=>res.json()).then((data)=>{
            if(data.clave!=null){
                alert("BIENVENIDO DE NUEVO "+this.usuario.value);
                window.location.href="../vista/lobby.php";
            }
        })
        .catch((error)=>console.log(error));
    };
})