<?php
/**
 * @var UserController $this
 * @var CActiveDataProvider $dataProvider
 */
?>
<style>

body{
    	background-color: #eceef3;
	}

	    .vertical-offset-100{
	        padding-top:100px;
		}
</style>
<script>
$(document).ready(function(){
  $(document).mousemove(function(e){
     TweenLite.to($('body'), 
        .5, 
        { css: 
            {
                'background-position':parseInt(event.pageX/8) + "px "+parseInt(event.pageY/12)+"px, "+parseInt(event.pageX/15)+"px "+parseInt(event.pageY/15)+"px, "+parseInt(event.pageX/30)+"px "+parseInt(event.pageY/30)+"px"
            }
        });
  });
});
</script>


	
<section id="password_recovery" class="authenty password-recovery" style="height: 643px;">
<div class="section-content">
<div class="wrap">
<div class="container">
	<div class="form-wrap">
	<div class="row">
		<div class="col-xs-12 col-sm-3 brand animated fadeInUp" data-animation="fadeInUp">
			<h2>Mi Cuenta</h2>
			<p>Ingrese el E-mail para recuperar su clave</p>
		</div>
		<div class="col-sm-1 hidden-xs">
			<div class="horizontal-divider"></div>
		</div>
		<div class="col-xs-12 col-sm-8 main animated fadeInLeft" data-animation="fadeInLeft" data-animation-delay=".5s" style="">
			<h2>Olvid&eacute; mi contrase&ntilde;a</h2>
			<p>No se preocupe. Le enviaremos un E-mail con las instrucciones a seguir</p>
			<form>
			  <div class="form-group">
			    <input type="email" class="form-control" placeholder="E-mail" required="required">
			  </div>
				<div class="row">
					<div class="col-xs-12 col-sm-4 col-sm-offset-8">
						<button type="submit" class="btn btn-block reset">Continuar</button>
					</div>
				</div>
			</form>	
		</div>
	</div>
		
</div>
</div>
</div>
</div>
</section>

