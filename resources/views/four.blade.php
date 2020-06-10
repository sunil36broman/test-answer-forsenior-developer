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
    =============4=================
    </div>

    <script type="text/javascript">

        var numbers = [4, 2, 5, 1, 3];
        numbers.sort(function(a, b) {
        return a - b;
        });
        console.log("4===========sort-js (array sort)");
        console.log(numbers);
        console.log("4===========end");




        const words = ['spray', 'limit', 'elite', 'exuberant', 'destruction', 'present'];
        const result = words.filter(word => word.length > 6);
        console.log("4===========filter-js (array filter) ");
        console.log(result);
        console.log("4===========end ");



        const array1 = [1, 4, 9, 16];
        const map1 = array1.map(x => x * 2);
        console.log("4===========map-js (array map) ");
        console.log(map1);
        console.log("4===========end ");



        const array2 = [1, 2, 3, 4];
        const reducer = (accumulator, currentValue) => accumulator + currentValue;
        console.log("4===========reduce-js (array reduce) ");
        console.log(array2.reduce(reducer));
        console.log(array2.reduce(reducer, 5));
        console.log("4===========end ");



    </script>
</body>
</html>
