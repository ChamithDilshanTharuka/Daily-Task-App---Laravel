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
    <div class="text-center">
        <h1>Daily Tasks</h1>
            <div class="row">
                <div class="col-md-12">

                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                @endforeach

                    <form method="post" action="/saveTask">
                        {{csrf_field()}}
                    <input type="text" class="form-control" name="task" placeholder="Enter Your Task Here">
                        </br>
                        <input type="submit" class="btn btn-primary" value="SAVE">
                        <input type="button" class="btn btn-warning" value="Clear">
                    </form>

                        <table class="table table-dark">
                            <th>ID</th>
                            <th>Task</th>
                            <th>Completed</th>
                            <th>Action</th>

                            @foreach($tasks as $task)
                                <tr>
                                    <td>{{$task->id}}</td>
                                    <td>{{$task->task}}</td>

                                <td>
                                    @if ($task->iscompleted)
                                    <button class="btn btn-success">Completed</button>
                                    @else
                                    <button class="btn btn-warning">Not Completed</button>
                                    @endif
                                </td>
                                
                                <td>
                                @if(!$task->iscompleted)
                                    
                                <a href="/markascompleted/{{$task->id}}" class="btn btn-primary">Mask As Completed</a>

                                @else
                                <a href="/markasnotcompleted/{{$task->id}}" class="btn btn-danger">Mask As Not Completed</a>
                                @endif    

                                <a href="/deletetask/{{$task->id}}" class="btn btn-warning">Delete</a>

                                <a href="/updatetask/{{$task->id}}" class="btn btn-success">Update</a>
                            </td>
                                </tr>
                            @endforeach
                </div>
            </div>
    </div>
</div>
    
</body>
</html>