const appLogin=new(function(){
    this.tbody=document.getElementById("tbody");
    this.usuario=document.getElementById("usuario");
    this.clave=document.getElementById("clave");
    
    this.verificarLogin=()=>{
        var form=new FormData();
        alert("BIENVENIDO DE NUEVO "+this.usuario.value);
        form.append("usuario",this.usuario.value);
        form.append("clave",this.clave.value);
        fetch("../controlador/verificarLogin.php",{
            method:"POST",
            body:form,
        })
        .then((res)=>res.json()).then((data)=>{
            if(data.clave!=null){
                window.location.href="../vista/index.php";
            }
        })
        .catch((error)=>console.log("error "+error));
    }
})