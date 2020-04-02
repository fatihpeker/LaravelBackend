<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
       <div id="app" >
           <example-component></example-component>
           <get-products></get-products>
           <ul>
               <li v-for="isim in isimler" >@{{isim}}</li>
           </ul>
        <!--   <button  v-on:click="getAllProducts"></button> -->
       </div>
       <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
