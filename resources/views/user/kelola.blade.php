<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    Please Wait

    <input id="data" type="hidden" value="{{ $data }}" >

    <script>
        var data = document.querySelector('#data').value;
        window.open(data);
        location.replace('/pay_confirm');
    </script>
</body>
</html>