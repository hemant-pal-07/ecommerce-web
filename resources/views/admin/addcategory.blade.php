<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Add Category Form</title>
<!-- Bootstrap CSS CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
      <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

<style>
    body {
        background-color: #fff5f0;

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
    button{
        background: #ff6600;
        border:none;
        padding: 10px;
        color: white;
        border-radius: 5px;

    }
    .card{
        max-width: 750px;
    }
</style>
</head>
<body>


     @include('partials.sidebar')

     @include('partials.header')


       <div class="card w-100 mx-auto mt-4 ">
        <div class="card-header text-center bg-warning text-white">
            <h4>Add Category</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Category Name -->
                <div class="mb-3">
                    <label class="form-label text-center">Category Name</label>
                    <input type="text" name="c_name" class="form-control" value="{{ old('c_name') }}" required>
                    @error('c_name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Banner Image -->
                <div class="mb-3">
                    <label class="form-label">Banner Image</label>
                    <input type="file" name="c_banner_img" class="form-control" accept="image/*" onchange="previewBanner(event)">
                    @error('c_banner_img') <small class="text-danger">{{ $message }}</small> @enderror

                    <img id="bannerPreview" src="#" style="display:none; height: 120px; margin-top:10px;" />
                </div>

                <!-- Category Image -->
                <div class="mb-3">
                    <label class="form-label">Category Image</label>
                    <input type="file" name="c_image" class="form-control" accept="image/*" onchange="previewImage(event)">
                    @error('c_image') <small class="text-danger">{{ $message }}</small> @enderror

                    <img id="imagePreview" src="#" style="display:none; height: 120px; margin-top:10px;" />
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="c_description" class="form-control" rows="4" required>{{ old('c_description') }}</textarea>
                    @error('c_description') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                 <div class="text-center p-2">
                <button type="submit" class="button text-center">Save Category</button>
                  </div>
            </form>

        </div>
    </div>

</div>





<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
            confirmButtonColor: '#ff6600',
        });
    @endif
</script>


       <!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
      $(document).ready(function() {
        $("#menubtn").click(function(){

          const sidebar = $("#sidebar");
          const mainContent = $(".main-content");


          if (sidebar.css("margin-left") === "0px") {
            sidebar.animate({ marginLeft: "-190px" }, );
            mainContent.animate({ marginLeft: "60px" }, );

          } else {
            sidebar.animate({ marginLeft: "0px" } );
            mainContent.animate({ marginLeft: "250px" } );

          }
        });
      });
    </script>



<script>
  $(document).ready(function() {
    $("#hamburger").click(function() {
      $("#sidebar1").toggleClass("active");
    });
  });
</script>

</body>
</html>
