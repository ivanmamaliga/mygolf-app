<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    @yield('title', 'Blog')
  </title>
</head>
<body>

  <ul>
    <li><a href={{route('home')}}>Home</a><li> 
    <li><a href={{route('about')}}>About</a><li> 
    <li><a href={{route('about')}}>NewPage1</a><li> 
  <ul>

  <div class="main">
    @yield('content')
  </div>
  
</body>
<html>
