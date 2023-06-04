<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
       <div class="container my-4">
        <div class="card">
            <div class="card-header">
                <h1>    My Todo App </h1>
                <form action="/mytodo" method="post">
                  @csrf
                    <div class="form-group">
                      <input id="todo" class="form-control" type="text" name="todo">
                    </div>
                    <button type="Submit" class="btn btn-success mt-3">Add item</button>
                </form>
       

            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>S.no</th>
                        <th>Todo item</th>
                        <th>Action</th>
                    </tr>

                    @foreach ( $mytodos as $index =>$todo)
                    <tr>
                      <td>{{ ++$index}}</td>
                      <td>{{ $todo->todo }}</td>

                      <td>
                        <form action="/mytodo/{{ $todo->id }}" method="post">
                          @method('delete')
                          @csrf
                          <a href="/mytodo/{{ $todo->id }}/edit" class="badge bg-primary">Edit</a>
                          <button type="submit" class="btn badge bg-danger">Delete</button>
                        </form>
                     
                      </td>
                    </tr>
                        
                    @endforeach
                </table>
            </div>
        </div>
       </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>