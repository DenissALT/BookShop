const appC=new(function(){
    this.tbody=document.getElementById("tbody");
    this.id=document.getElementById("id");
    this.ci=document.getElementById("ci");
    this.nombre=document.getElementById("nombre");
    this.apellido=document.getElementById("apellido");
    this.telefono=document.getElementById("telefono");
    this.direccion=document.getElementById("direccion");
    this.email=document.getElementById("email");
    this.ruc=document.getElementById("ruc");
    
    this.ruc=document.getElementById("ruc");
    this.guardarCompra=()=>{
        var form=new FormData();
        form.append("compra",this.compra.value);
        form.append("fecha",this.fecha.value);
        form.append("proveedorid",this.proveedorid.value);
        form.append("total",this.total.value);
        form.append("usuario",this.usuario.value);
        form.append("ruc",this.ruc.value);
        fetch("../controlador/guardarCompra.php",{
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
    this.eliminarCompra=()=>{
        var form=new FormData();
        form.append("compra",this.compra.value);
        fetch("../controlador/eliminarCompra.php",{
            method:"POST",
            body:form,
        })
        .then((res)=>res.json()).then((data)=>{
            console.log(data);
            alert("compra funada...");
        })
        .catch((error)=>console.log(error));
    };
    window.onload = function(){
        var fecha = new Date(); //Fecha actual
        var mes = fecha.getMonth()+1; //Obteniendo mes
        var dia = fecha.getDate(); //Obteniendo dia
        var año = fecha.getFullYear(); //Obteniendo año
        if(dia<10)dia='0'+dia; //agrega cero si el menor de 10
        if(mes<10)mes='0'+mes //agrega cero si el menor de 10
        document.getElementById('fecha').value=año+"-"+mes+"-"+dia;
    };

    this.buscarRUC=()=>
    {
        var form=new FormData();
        //alert(this.ruc.value);
        form.append("ruc",this.ruc.value)
        fetch("../controlador/buscarRUC.php",{
            method:"POST",
            body:form,
        })
        .then((res)=>res.json()).then((data)=>{
            if(data<=0)
            {
                alert("Null");

            }else{
                document.getElementById("ruc").value=data.ruc;
                document.getElementById("nombre").value=data.nombre;
                document.getElementById("direccion").value=data.direccion;
                document.getElementById("telefono").value=data.telefono;
            }
            
        })
        .catch((error)=>console.log("error "+error));
    };
})