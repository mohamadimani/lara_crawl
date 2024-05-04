<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {{ $title }}</title>

    <style>
        ul.news {
            display: flex;
            list-style: none;
            text-align: center;
            width: 100%;
            display: block;
        }

        ul.news li {
            padding: 15px;
            margin: 15px;
            text-align: center;
            display: inline-block;
            border-radius: 5px;
            box-shadow: 1px 1px 3px rgb(154, 154, 154);
            direction: rtl;
        }

        ul.news li img {
            width: 150px;
            height: 150px;
        }
    </style>
</head>

<body>

    <h2 style="text-align: center"> تایتل و مقالات این صفحه از "{{ $title }}" گرفته شده است </h2>
    <ul class="news">
        @foreach ($news as $key => $row)
            <li>
                <span>
                    <img src="{{ $images[$key] }}" alt="">
                </span>
                <br>
                <span>
                    {{ $row }}
                </span>
            </li>
        @endforeach
    </ul>
</body>

</html>
