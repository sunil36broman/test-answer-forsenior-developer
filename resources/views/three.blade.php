<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Itech Test</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>

    </style>
</head>
<body>
    <div class="content">
    =============3=================
    </div>

    <script type="text/javascript">

            function checkAge(data, func) {
                func();
            }
            var data = {email:'trump@gmail.com', age:70};
            checkAge(data, function(){
                console.log("Email is valid");
                if(data.age<18){
                    console.log("not valid");
                }
            });

    </script>
</body>
</html>
