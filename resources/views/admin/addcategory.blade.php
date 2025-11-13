<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Add Category Form</title>
<!-- Bootstrap CSS CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        background-color: #fff5f0;
    }
    .form-container {
        max-width: 500px;
        margin: 50px auto;
        background-color: #fff7f0;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    h1 {
        color: #ff6600;
        margin-bottom: 25px;
        text-align: center;
    }
    .form-label {
        color: #ff6600;
        font-weight: 600;
    }
    .btn-orange {
        background-color: #ff6600;
        color: white;
    }
    .btn-orange:hover {
        background-color: #e65c00;
    }
</style>
</head>
<body>


     @include('partials.sidebar')

     @include('partials.header')


<div class="form-container">
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf

        <h1>Add Category</h1>

        <div class="mb-3">
            <label for="categoryname" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="categoryname" name="categoryname" placeholder="Category Name" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Status</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="active" value="active" checked>
                <label class="form-check-label" for="active">Active</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="inactive" value="inactive">
                <label class="form-check-label" for="inactive">Inactive</label>
            </div>
        </div>

        <div class="mb-3">
            <label for="categorybanner" class="form-label">Category Banner</label>
            <input class="form-control" type="file" id="categorybanner" name="categorybanner">
        </div>

        <button type="submit" class="btn btn-orange w-100">Add Category</button>
    </form>
</div>

<!-- Bootstrap JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
