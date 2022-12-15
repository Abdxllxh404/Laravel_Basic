<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT US</title>
</head>
<style>
    * {
        box-sizing: border-box;
    }

    body {
        padding: 10px;
    }
</style>

<body>
    <h1>Wellcome to our WEBSITE</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nemo iusto amet voluptatem non asperiores nam
        molestias aspernatur, incidunt alias maxime, facilis tempora. Iusto sunt minus consequatur temporibus numquam
        nihil</p>

    <p>ADDRESS :{{ $address }}</p>
    <p>TELL :{{ $tel }}</p>
    <p>E-MAIL :{{ $email }}</p>
    <p>{{ $error }}</p>
    <p>{{ $status }}</p>

    <p>
        <a href="{{ url('/') }}">home</a>
        <a href="{{ url('/admin') }}">admin</a>
        <a href="{{ url('/member') }}">member</a>
    </p>




</body>

</html>
