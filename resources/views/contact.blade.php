<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Halaman Kontak</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body>
        <p>Halaman Kontak</p>
<ul>
        <li>
            <a href="{{route('pengguna.page','US2')}}">Pindah Halaman Pengguna</a>
        </li>
        <li>
            <a href="{{route('about.page')}}">Pindah Halaman Tentang</a>
        </li>
        <li>
            <a href="{{route('edit.page')}}">ke Halaman Edit</a>
        </li>
    </ul>
    </body>