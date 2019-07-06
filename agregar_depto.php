
<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css\bootstrap.css">
    <link rel="stylesheet" href="css\bootstrap.min.css">

 
  </head>
  <body onload="datos()">
<div class="container">
<div class="row">

<div class="col-12">

<div class="selector-pais">
     Elige un país
     <select><option>Santa ana</option>
	 <option>Metapan</option>
	 
	 </select>
</div>


<div class="selector-pais">
<select class="form-control form-control-lg">
</select>
 
</div>



</div>
</div>

 <script>
                function datos() {
                    $.ajax({
                            type: "POST",
                            url: "getPaises.php",
                            success: function(response)
                            {
                                $('.selector-pais select').html(response).fadeIn();
                            }
                    });
 
                };
				
			
				
            </script>
			
			



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src ="js/jquery-3.2.1.min.js"></script>
 <script>window.jQuery || document.write('<script src="js/jquery-3.2.1.slim.min"><\/script>')</script>
  
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 