<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
        <script language="javascript" src="ajax.js" ></script>
        <style type="text/css">
            .button{
                display: inline-block;
                background: blue;
                padding: 5px 10px;
                color:#FFF;
                margin: 20px;
            }
        </style>
    </head>
    <body>
        <div id="content">
            <?php require('data.php'); ?>
        </div>
        <a href="#" class="button" id="load_more">LOAD MORE</a>
    </body>
</html>