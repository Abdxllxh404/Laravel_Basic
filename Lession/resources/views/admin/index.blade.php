<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
</head>

<style>
    a{
        margin: auto;
        padding: 5px;
        text-decoration: none;
    }
</style>
<body>

    <h1>WELLCOM TO ADMIN OUR WEBSITE</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed deleniti at doloribus dolorum, mollitia aperiam dicta eligendi praesentium recusandae tenetur ex autem blanditiis porro amet vero neque nemo voluptatibus iure?</p>


    <?php

        $user ="Kongruksiam";
        $array = array("Home","Member","About","Contact");

    ?>


    <h1>{{$user}}</h1>


        @if($user == "Kongruksiam")
            <h1>ยินดีต้อนรับคุณ ADMIN</h1>
        @else
            <h1>ผู้ใช้ท่านนี้ไม่ได้เป็น ADMIN</h1>
        @endif

        @foreach($array as $menu)
            <a href="#">{{$menu}}</a>
        @endforeach

        @for ($i=1; $i<=10; $i++)
        <ul>{{$i}}</ul>
        @endfor

</body>
</html>

