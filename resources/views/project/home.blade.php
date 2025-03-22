<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Laravel CRUD</title>
</head>

<body>
    <!-- A grey horizontal navbar that becomes vertical on small screens -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

        <div class="container-fluid">
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-light" href={{ route('project.home') }}>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href={{ route('project.create') }}>Create</a>
                </li>

            </ul>
        </div>

    </nav>
    <div class="container">
        <div class="d-flex justify-content-end">
            <a href={{ route('project.create') }} class="btn btn-dark mt-2 btn-lg">Add</a>
        </div>
        <h1 class="text-center">
            Home Page
        </h1>
        <table class="table table-hover table-striped mt-5">
            <thead>
                <tr>
                    <th class="text-center">Sno.</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        {{-- <td>{{ $product->name }}</td> --}}
                        <td>
                            <a href={{ route('project.view', $product->id) }} class="text-dark">{{ $product->name }}</a>
                        </td>
                        <td>
                            <img src="project/{{ $product->image }}" alt="" class="rounded-circle" height="50px"
                                width="50px">
                        </td>
                        <td>{{ $product->description }}</td>
                        <td>
                            <a href={{ route('project.edit', $product->id) }} class="btn btn-dark btn-small"><strong>Edit</strong></a>
                            <a href={{ route('project.delete', $product->id) }} class="btn btn-danger btn-small"><strong>Delete</strong></a>
                            <a href={{ route('project.view', $product->id) }} class="btn btn-success btn-small"><strong>View</strong></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>