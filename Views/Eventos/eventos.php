<?php headerHome($data);?>

<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-color: #065F09;height:5% ">
		<h2 class="ltext-105 cl0 txt-center">
			Eventos 
		</h2>
	</section>

<section  style="width: 100%;justify-content:center;">
    <?php if($data['valor'] == "1"){  ?>
    <div class="row" style="justify-content:center;margin-top: 15px;">
        <input type="button" onclick="openModal()" value="Añadir Nuevo Evento" class="btn btn-success ">
    </div>
    <?php } ?>
</section>

<div class="row" style="background-color: white; padding: 20px;justify-content:center">
    
   <?php echo $data['select'] ?>
</div>



<!-- Modal -->
<div class="modal fade" id="modalFormRol" tabindex="-1" role="dialog" style="margin-top: 100px"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header headerResgister ">
         
        <h5 class="modal-title" id="titleModal">Nuevo Evento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="x">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form name="formEvento" id="formEvento">
              <input type="hidden" id="idEvento" name="idEvento" value="0">
                <div class="form-group">
                  <label class="control-label">Nombre Evento</label>
                  <input class="form-control" id="txtNombre" name="txtNombre" type="text" placeholder="Nombre del rol" >
                </div>
                
                <div class="form-group">
                  <label class="control-label">Descripcion Evento</label>
                  <textarea class="form-control" id="txtDescripcion" name="txtDescripcion" rows="2" placeholder="Descripcion del rol" ></textarea>
                </div>
              
              <div class="row " style="margin-left: 5px;">
                 <div class="form-group "style="margin: 5px;" >
                  <label class="control-label">Dia</label>
                  <select class="form-control" id="dia" name="dia" >
                      <?php for($i = 1; $i<32; $i++){ ?>
                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                      <?php } ?>  
                    </select>
                </div> 
                  
                  <div class="form-group" style="margin: 5px;">
                    <label for="exampleSelect1">Mes</label>
                    <select class="form-control" id="mes" name="mes" >
                        <option value="Enero">Enero</option>
                        <option value="Febrero">Febrero</option>
                        <option value="Marzo">Marzo</option>
                        <option value="Abril">Abril</option>
                        <option value="Mayo">Mayo</option>
                        <option value="Junio">Junio</option>
                        <option value="julio">julio</option>
                        <option value="Agosto">Agosto</option>
                        <option value="Septiembre">Septiembre</option>
                        <option value="Octubre">Octubre</option>
                        <option value="Noviembre">Noviembre</option>
                        <option value="Diciembre">Diciembre</option>
                    </select>
                  </div>
                  
                <div class="form-group " style="margin: 5px;">
                  <label class="control-label">Año</label>
                  <select class="form-control" id="ano" name="ano" >
                        <?php for($i = 2018; $i<2031; $i++){ ?>
                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                      <?php } ?> 
                        
                    </select>
                </div>
                  
                  
              </div>
              <br>
                  <div class="tile-footer">
                      <button id="btnActionForm" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>
              &nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="#" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
            </div>
              </form>
            </div>
          </div>
      </div>
    </div>



<div class="modal fade" id="idmodal" tabindex="-1" style="margin-top: 100px">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title a">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body b">
        <p>Modal body text goes here.</p>
      </div>
        <div class="modal-body c">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <a class="btn btn-danger" href="#" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
      </div>
    </div>
  </div>
</div>

<script>
    function openModal(){
    document.querySelector('#idEvento').value="";
    document.querySelector('#titleModal').innerHTML="Nuevo Evento";
    document.querySelector('#btnText').innerHTML="Guardar";
    document.querySelector('.modal-header').classList.replace("headerUpdate","headerResgister")
    document.querySelector('#btnActionForm').classList.replace("btn-info","btn-primary");
    document.querySelector("#txtNombre").value = "";
    document.querySelector("#txtDescripcion").value = "";
    dia = document.querySelector("#dia").value = "";
    document.querySelector("#mes").value = "";
    document.querySelector("#ano").value = "";
    $('#modalFormRol').modal('show');
    
}

document.addEventListener('DOMContentLoaded',function(){
    setTimeout(() => { 
    fntEditRol();
    ftnDelRol();
    ver();
    }, 500);
    
var formRol = document.querySelector("#formEvento");
formRol.onsubmit = function(e){
   e.preventDefault(); 
   var strNombre = document.querySelector("#txtNombre").value;
   var strDescripcion = document.querySelector("#txtDescripcion").value;
   var dia = document.querySelector("#dia").value;
   var mes = document.querySelector("#mes").value;
   var ano = document.querySelector("#ano").value;
   if(strNombre == '' || strDescripcion == ''|| dia == ''|| mes == ''|| ano == ''){
       swal("Atencion","Todos los campos son obligatorios","error");
       return false;
   }
   var request =(window.XMLHttpRequest) ? new XMLHttpRequest() :ActiveXObject('Microsoft.XMLHTTP');
   var ajaxUrl = base_url+'Eventos/setEventos';
   var formData = new FormData(formRol);
   request.open("POST",ajaxUrl,true);
   request.send(formData);
  
   request.onreadystatechange = function(){
       if(request.readyState == 4 && request.status == 200){
        var objData = JSON.parse(request.responseText);
        if(objData.status){
           $('#modalFormRol').modal("hide");
           
                location.reload();
             
           }else{
               swal("Error", objData.msg, "error");
           }     
}}}
});

function fntEditRol(){
     var btnEditRol = document.querySelectorAll(".btnEditRol");
     btnEditRol.forEach(function(btnEditRol){
         btnEditRol.addEventListener('click',function(){
            document.querySelector('#titleModal').innerHTML="Actualizar Evento";
            document.querySelector('#btnText').innerHTML="Actualizar";
            document.querySelector('.modal-header').classList.replace("headerResgister","headerUpdate");
            document.querySelector('#btnActionForm').classList.replace("btn-primary","btn-info");
            var idrol = this.getAttribute("rl");
            var request =(window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl = base_url+'Eventos/getEvento/'+idrol;
            request.open("GET",ajaxUrl,true);
            request.send();
            request.onreadystatechange = function(){
                if(request.readyState == 4 && request.status == 200){
                    var objData = JSON.parse(request.responseText);
                    if(objData.status){
                      document.querySelector("#idEvento").value = idrol;
                      document.querySelector("#txtNombre").value = objData.msg.nombreEvento;
                      document.querySelector("#txtDescripcion").value = objData.msg.descripcionEvento;
                      document.querySelector("#dia").value = objData.msg.diaEvento;
                      document.querySelector("#mes").value = objData.msg.mesEvento;
                      document.querySelector("#ano").value = objData.msg.anoEvento;
    
                     $('#modalFormRol').modal('show');
                    }else{
                        swal("Error",objData.msg,"error");
                    }
                }
            } });});
        } 
function ftnDelRol(){
                var btnDelRol = document.querySelectorAll(".btnDelRol");
                btnDelRol.forEach(function(btnDelRol){
                    btnDelRol.addEventListener('click',function(){
                       var idrol = this.getAttribute("rl"); 
                        var request =(window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                        var ajaxUrl = base_url+'Eventos/DelEventos';
                        var strData = "idEvento="+idrol;
                        request.open("POST",ajaxUrl,true);
                        request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                        request.send(strData);
                        request.onreadystatechange = function(){
                        if(request.readyState == 4 && request.status == 200){
                        var objData = JSON.parse(request.responseText);
                         if(objData.status){
                             location.reload(); 
                         }else{
                             swal("Atencion!", objData.msg , "error");
                         }
                        }   
                        }
                       
                });
               });
            }


function ver(){
                var btnDelRol = document.querySelectorAll(".ver");
                btnDelRol.forEach(function(btnDelRol){
                    btnDelRol.addEventListener('click',function(){
                        
                        document.querySelector('#titleModal').innerHTML="Actualizar Evento";
            document.querySelector('#btnText').innerHTML="Actualizar";
            document.querySelector('.modal-header').classList.replace("headerResgister","headerUpdate");
            document.querySelector('#btnActionForm').classList.replace("btn-primary","btn-info");
            var idrol = this.getAttribute("rl");
            var request =(window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl = base_url+'Eventos/getEvento/'+idrol;
            request.open("GET",ajaxUrl,true);
            request.send();
            request.onreadystatechange = function(){
                if(request.readyState == 4 && request.status == 200){
                    var objData = JSON.parse(request.responseText);
                    if(objData.status){
                      document.querySelector(".a").innerHTML = '<label class="control-label">'+objData.msg.diaEvento+" "+objData.msg.mesEvento+" "+objData.msg.anoEvento+'</label>';
                      document.querySelector(".b").innerHTML = '<label class="control-label">'+objData.msg.nombreEvento+'</label>';
                      document.querySelector(".c").innerHTML= '<label class="control-label">'+objData.msg.descripcionEvento+'</label>';
    
                     $('#idmodal').modal("show");  
                    }else{
                        swal("Error",objData.msg,"error");
                    }
                }
            }
                        
                      
                    });
               });
            }
            
   
</script>
<?php footerHome($data);?>