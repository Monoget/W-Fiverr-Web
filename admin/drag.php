<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link href="css/assets/css/imageuploadify.min.css" rel="stylesheet">
          <link rel="stylesheet" href="css/assets/css/lightbox.min.css">

          <style type="text/css">
              #imagebox{
           position: absolute;         ;
    z-index: 2;
    top: 0;
    width: 100%;
    left: 0;
    right: 0;
    bottom: 0;
    padding: 25px
              }
          </style>
    </head>

    <body>

        <div class="container" style="margin-top: 150px;">
            <div class="row">
                <div class="col-md-6">
                    <form>
                <input type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple name="images[]">
            </form>


                </div>
            </div>
        </div>

        <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
        <!-- <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
        <script type="text/javascript" src="css/assets/js/imageuploadify.min.js"></script>

  <script src="css/assets/js/lightbox.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('input[type="file"]').imageuploadify();
            })
        </script>

    </body>
</html>