<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Captcha Form</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   </head>
   <body>
      <div class="container">
         <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
               <h1>ME REJOINDRE</h1><br/>
               <form id="frmCaptcha">
                  <div class="form-group">

                     <input type="text" class="form-control" id="name" placeholder="Votre nom" name="name">
                    <input type="text" class="form-control" id="mobile" placeholder="Votre courriel" name="mobile">
                  </div>

                  <div class="form-group">
                     <label>Details:</label>
                     <textarea class="form-control" id="details" placeholder="Sujet" name="details"></textarea>
                  </div>

				  <div class="form-group">
					 <div class="row">
						<div class="col-lg-10">
							<label>Captcha:</label>
							<input type="text" class="form-control" id="captcha" placeholder="Enter captcha" name="captcha">
						</div>
						<div class="col-lg-2" style="margin-top:25px;">
							<img src="my-capt.php"/>
						</div>
					 </div>
                  </div>

                  <button type="button" class="btn btn-default" onclick="submit_data()">Envoyer</button>
               </form>
            </div>
         </div>
      </div>
	  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	  <script>
	  function submit_data(){
		jQuery.ajax({
			url:'insert.php',
			type:'post',
			data:jQuery('#frmCaptcha').serialize(),
			success:function(data){
				alert(data);
			}
		});
	  }
	  </script>
   </body>
</html>
