<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
						
<!-- - - - - - - - - - - - - - - -->
<div class="container" >
 <div class="row" style="padding: 130px 20px 20px 20px">
        <div class="col-xs-12 col-md-4 col-lg-4 offset-md-1 d-none d-sm-none d-md-block">
                <img src="JPG/logo-siiinafe.png"  >
        </div>

        <div class="container col-xs-12 col-sm-8 col-md-6 col-lg-5 offset-sm-2 offset-md-1 offset-lg-1">

            <div class="card bg-light">
                <div class="card-body">                
                    <form action="./portal/body.php" method="POST" class="form-horizontal"><!--action es como la ruta donde se guarda la informacion-->         
                        <div class="form-group">                     
                            <label class="control-label">
                                Usuario
                            </label>                           
                            <div class="">
                                <input type="text" name="" placeholder="Ingresar Usuario" class="form-control" aria-describedby="validationTooltipUsernamePrepend" required><!--class="form-control" sirve para darle estilo a la caja de texto-->
                            </div>
                        </div>

                      
                        <div class="form-group">  
                            <label class="control-label">
                                Contraseña
                            </label>
                            <div class="">
                                <input type="password" name="" placeholder="Ingresar contraseña" class="form-control " required>
                            </div>
                        </div>

                      
                        <div class="form-group">                           
                            <div class=""><!-- es preferible da el tamaño en el div y no directamente en el elemento-->
    <center><input type="image" src="JPG/identificate.png" name=""></center><!--class="btn btn-primary" sirve para darle estilo a la caja de texto-->
                            </div>
                        </div>
                    </form>  
                    <!--ALERTAS-->
             <!-- Error Alert -->
<div class="alert alert-danger alert-dismissible fade show" id="myAlert">
    <strong>CREDENCIALES INVALIDAS!</strong>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
<!-- Warning Alert -->
<div class="alert alert-warning alert-dismissible fade show">
    <strong>USUARIO/CONTRASEÑA INCORRECTO!</strong>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
                <!---->                            
                </div>

            </div>            
        </div>        
    </div>
</div>
</body>
<script>
$(document).ready(function(){
    $(".close").click(function(){
        $("#myAlert").alert('close');
    });
});  
</script>
</html>