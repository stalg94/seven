<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To Do</title>
</head>
<body>
<div class="text-center pt-10">
    <h1 class="text2x1">What next you need to do?</h1>
    <form method="post" action="/todos/create" class="py-5 ">
        @csrf
        <input type="text" name="title" class="py-2 px-2 border rounded">
{{--        <input type="submit" value="Create" >--}}
        <button style="cursor: pointer" type="submit" value="Create" class=" py-2 border rounded">Create</button>
    </form>
</div>


</body>
</html>
