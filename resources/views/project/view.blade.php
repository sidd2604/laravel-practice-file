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
        
        <div class="card mt-5">
            <div class="card-header bg-primary text-white">
                <h3 class="text-center">Details</h3>
            </div>
            <div class="card-body">
                @if($product->image)
                    <div class="text-center">
                        <img src="{{ asset('project/' . $product->image) }}" alt="Project Image" class="img-fluid rounded" style="max-height: 300px;">
                    </div>
                @else
                    <p class="text-muted">No image available for this project.</p>
                @endif
                <h5 class="card-title text-center">Name: {{ $product->name }}</h5>
                <p class="card-text text-center">{{ $product->description }}</p>
                
            </div>
        </div>
        
    </div>
</body>

</html>