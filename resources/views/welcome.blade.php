<!doctype html>
<html>
    <head>
        <title>Laravel</title>

    </head>
    <body>

      @foreach ($tasks as $task)
        <li><?= $task->body; ?></li>
      @endforeach


    </body>
</html>
