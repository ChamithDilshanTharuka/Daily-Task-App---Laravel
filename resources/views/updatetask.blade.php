<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <br>
        <br>
        <br>

        <form action="/updatetaskthis" method="post">
        {{csrf_field()}}
        <input type="text" class="form-control" name="task" value="{{$taskdata->task}}"/>
        <input type="hidden" name="id" value="{{$taskdata->id}}"/>
        <input type="submit" class="btn btn-warning" value="Update"/>
        &nbsp;&nbsp;
        <input type="button" class="btn btn-danger" value="Cancel"/>
        </form>
    </div>

</body>
</html>