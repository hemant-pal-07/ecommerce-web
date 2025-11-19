<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Product List</title>

<!-- Bootstrap CSS CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<style>
    body { background-color: #f8f9fa; }
    h1 { color: #ff6600; margin-bottom: 25px; text-align: center; }
    .btn-orange { background-color: #ff6600; color: white; }
    .btn-orange:hover { background-color: #e65c00; }
    #productTable_wrapper .dataTables_filter input {
        border-radius:5px;
        border:1px solid #ff6600;
        padding:5px;
    }
    #productTable_wrapper .dataTables_length select {
        border-radius:5px;
        border:1px solid #ff6600;
        padding:3px;
    }
    .badge-color { display:inline-block; width:20px; height:20px; border-radius:50%; margin:2px; border:1px solid #ccc; }

        thead{
            height: 20px;
            width: 100px;
        }
</style>
</head>
<body>

@include('partials.sidebar')
@include('partials.header')

<div class="container p-2">
    <h1>Product List</h1>

    <table id="productTable" class="display table table-bordered text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Old Price</th>
                <th>Stock</th>
                <th>Images</th>
                <th>Sizes</th>
                <th>Colors</th>
                <th>Short description</th>
                <th>Long description</th>
                  <th>Visibility</th>
                 <th>Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $p)
            <tr>
                <td>{{ $p->p_id }}</td>
                <td>{{ $p->p_name }}</td>
                <td>{{ $p->category->c_name ?? $p->p_category_id }}</td>
                <td>₹{{ $p->p_price }}</td>
                <td>{{ $p->p_old_price ?? '-' }}</td>
                <td>
                    @if($p->p_stock > 0)
                        <span class="badge bg-success">{{ $p->p_stock }}</span>
                    @else
                        <span class="badge bg-danger">Out of Stock</span>
                    @endif
                </td>
                {{-- image column --}}
                 <td class="d-flex w-100">
        @foreach($p->colors as $color)
        @foreach($color->images ?? [] as $img)
    <img src="{{ asset('storage/colors/' . $img->img_path) }}" alt="{{ $img->img_alt_text }}" width="40px" class="d-flex">
@endforeach

        @endforeach
    </td>

                <!-- Sizes Column -->
                <td>
                    @php
                        $sizes = [];
                        foreach($p->colors as $color){
                            $sizes = array_merge($sizes, $color->sizes->pluck('size_name')->toArray());
                        }
                    @endphp
                    {{ implode(', ', $sizes) ?: '-' }}
                </td>

                <!-- Colors Column -->
                <td>
                    @foreach($p->colors as $color)
                        <span class="badge-color" style="background: {{ $color->color_code ?? '#ccc' }}" title="{{ $color->color_name }}"></span>
                    @endforeach
                </td>

                     <!-- Short Description -->
        <td>{{ Str::limit($p->p_short_description, 50) }}</td>

        <!-- Long Description -->
        <td>{{ Str::limit(strip_tags($p->p_long_description), 80) }}</td>


                <td>
                    @if($p->p_visibility_status)
                        <span class="badge bg-success">Visible</span>
                    @else
                        <span class="badge bg-secondary">Hidden</span>
                    @endif
                </td>

                <td>{{ ucfirst($p->p_type) }}</td>

                <td>
                    <a href="{{ route('product.edit', $p->p_id) }}" class="btn btn-sm btn-orange">Edit</a>
                    <form action="{{ route('product.destroy', $p->p_id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-orange mt-3" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script>
$(document).ready(function () {
    $('#productTable').DataTable({
        "pageLength": 5,
        "lengthMenu": [5, 10, 25, 50, 100,"All"],
        "order": [[0, "desc"]],
        "language": {
            "search": "Search Product:",
            "lengthMenu": "Show _MENU_ entries"
        }
    });

    // Row hover effect
    $('#productTable tbody tr').hover(
        function () { $(this).css('background-color', '#ffe6cc'); },
        function () { $(this).css('background-color', ''); }
    );
});
</script>

</body>
</html>
