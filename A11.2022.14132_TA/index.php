<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Todolist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="card" style="margin: 40px" >
            <div class="card-header">
                Kegiatan
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="tugas" class="form-label">Tugas</label>
                        <input type="text" class="form-control" id="tugas" >
                    </div>

                    <div class="mb-3">
                        <label for="deadline" class="form-label">DeadLine</label>
                        <input type="date" class="form-control" id="deadline" >
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

        <div class="card mt-5">
            <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tugas Saya</th>
                        <th scope="col">DeadLine</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr>
                           <th scope="row">1</th>
                            <td>Kalkulus</td>
                            <td>15-Januari-2023</td>
                            <td>
                                <button type="button" class="btn btn-success">Edit</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>