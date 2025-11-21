<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Category List</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

<style>
    body { background:#f8f9fa; }
    h1 { color:#ff6600; text-align:center; margin:20px 0; }
    .btn-orange { background-color: #ff6600; color:white; }
    .btn-orange:hover { background-color: #e65c00; }
    table img { height:80px; width:auto; border-radius:5px; }


</style>

</head>
<body>

@include('partials.sidebar')
@include('partials.header')
<div class="container-fluid w-100 p-4 d-flex flex-wrap justify-content-center align-items-center">
    <h1 class="text-center w-100 mb-4">Category List</h1>

    <div class="table-responsive w-100">
        <table class="table table-bordered table-striped text-center">
            <thead class="text-white bg-warning">
            <tr>
                <th class="text-white bg-warning">S:no</th>
                <th class="text-white bg-warning">Category name</th>
                <th class="text-white bg-warning">Banner</th>
                <th class="text-white bg-warning">Image</th>
                <th class="text-white bg-warning">Description</th>
                <th class="text-white bg-warning">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->c_name }}</td>
                <td>
                    @if($category->c_banner_img)

                          <img src="{{ asset($category->c_banner_img) }}" alt="{{ $category->c_name }}" class="preview-img" onclick="openPreview(this)">
                    @else
                        -
                    @endif
                </td>
                <td>
                    @if($category->c_image)
    <img src="{{ asset($category->c_image) }}" alt="{{ $category->c_name }}" class="preview-img" onclick="openPreview(this)">                    @else
                        -
                    @endif
                </td>
                <td>{{ Str::limit($category->c_description, 50) }}</td>
                <td>
                    <a href="{{ route('category.edit', $category->c_id) }}" class="btn btn-sm btn-orange">Edit</a>
                    <form action="{{ route('category.destroy', $category->c_id) }}" method="POST" class="d-inline" onsubmit="return confirmDelete(this)">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6">No categories found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div id="imgPreviewModal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.8); justify-content:center; align-items:center; z-index:1000; transition:all 1s;">
    <span style="position:absolute; top:20px; right:30px; color:white; font-size:30px; cursor:pointer; transition:all 1s;" onclick="closePreview()">&times;</span>
    <img id="previewImg" src="" style="max-width:90%; max-height:90%; border-radius:10px; box-shadow:0 0 15px white;">
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function confirmDelete(form) {
    event.preventDefault();
    Swal.fire({
        title: 'Are you sure?',
        text: "This will delete the category!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#ff6600',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
        }
    });
}
</script>

{{-- menubtn script --}}
   <!-- Scripts -->


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

<script>
function openPreview(img) {
    const modal = document.getElementById('imgPreviewModal');
    const preview = document.getElementById('previewImg');
    preview.src = img.src;  // set clicked image src
    modal.style.display = 'flex'; // show modal
}

function closePreview() {
    document.getElementById('imgPreviewModal').style.display = 'none';
}

// Optional: close modal if clicked outside image
document.getElementById('imgPreviewModal').addEventListener('click', function(e) {
    if(e.target.id === 'imgPreviewModal') {
        closePreview();
    }
});
</script>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
