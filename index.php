<!DOCTYPE html>
<html>
  <head>
  <title>Страница реализации тестового задания</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
 <body>
   <div class="container">
      <div class="row">
        <div class="col-6">
         <!--<form id="myform" action="javascript:void(null);" onsubmit="sendform()">-->
           <form id="myform" action="http://kotofoto.test/api.php" method="post">
             <div class="mb-3">
               <div class="input-group">
                 <p>
                <label for="key" class="form-label">Key</label>
                 <input type="text" class="form-control" id="key" name="key" required="required" value="76561198263364899">
                </p>
              </div>
            </div>
                <div class="mb-3">
                  <div class="input-group">
                 <p>
                 <label for="JSON_Data" class="form-label">JSON</label>
                 <input type="file" class="form-control" id="JSON_Data" name="JSON_Data" required="required" aria-describedby="inputGroupFileAddon04" aria-label="Upload" accept=".json">
                  </p>
                </div>
              </div>

               <div class="mb-3">
                 <div class="input-group">
                  <button type="submit" name="submit" id="btn" class="btn btn-primary">submit</button>

                </div>
              </div>
              <div id="status"></div>
         </form>
       </div>
       </div>
       <div id="result_form"></div>
     </div>

<!-- <script>
// $(document).ready(function() {
//     // bind form using ajaxForm
//     $('#myform').ajaxForm({
//         // dataType identifies the expected content type of the server response
//         dataType:  'json',
//
//         // success identifies the function to invoke when the server response
//         // has been received
//         success:   processJson
//     });
// });

/*
function sendform()  {
    var msg = jQuery('#myform').serialize();
     // ID формы
    jQuery.ajax({
    method: 'POST', // Метод отправки
    url: 'http://kotofoto.test/api.php', // Адрес обработчика
    beforeSend: function(){
        jQuery('#status').html('Отправляю...'); // Промежуточный статус
    },
    data: msg,
    cache: false,
    success: function(html){

    jQuery('#status').html(html);  }  });  // Вывод ответа
}
*/
</script> -->


 </body>
</html>
