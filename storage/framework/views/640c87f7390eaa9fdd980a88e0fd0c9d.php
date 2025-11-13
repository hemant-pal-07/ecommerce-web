<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>new product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">


</head>
<style>
    *{
        padding: 0;
        margin: 0;
    }
    body{
        background:orangered;
          font-family: 'Poppins',sans-serif;
    }
           select, textarea {
            padding: 10px;
            margin: 7px 0;
            border-radius: 7px;
            align-items: center;
            width: 100%;
        }
        input{
            padding: 10px;
            margin: 7px 0;
            border-radius: 7px;
            align-items: center;
             width: 100%;
             border:1px solid grey
        }
        form{
            border: 1px solid grey;
            background: white;
            border-radius: 7px;
        }
        h1{
            color: orangered;
            margin-top:-20px;
        }
        .color-option {
  display: flex;
  align-items: center;
  gap: 8px;
  cursor: pointer;
  margin: 6px;
}

.color-box {
  width: 22px;
  height: 22px;
  border-radius: 50%;
  border:1px solid grey;
  display: inline-block;
}

input[type="checkbox"] {
  display: none;
}

input[type="checkbox"]:checked + .color-box {
  border: 11px solid orange;
}
.size-box {
  padding: 6px 14px;
  border: 1px solid #444;
  border-radius: 6px;
  cursor: pointer;
  font-weight: 500;
  transition: 0.2s;
  display: inline-block;
  margin: 4px;
}
input[type="checkbox"] { display: none; }

input[type="checkbox"]:checked + .size-box {
  background: #000;
  color: #fff;
  border-color: #000;
}




</style>
<body>

  <div class="container w-75 p-5">
    <div class="row">

     <form action="" method="" class="p-5">
         <h1 class=" text-center">ADD PRODUCT DETAILS</h1>

        <label for="productName" class="p-1 mt-3">Product Name</label>
        <input type="text" id="productName" name="productName" placeholder="Enter your product name" required>


        <label for="category"  class="p-1 mt-3">Category</label>
        <select id="category" name="category" class="text-secondary" required>
            <option value="">Select Category</option>
            <option value="electronics">Electronics</option>
            <option value="clothing">Clothing</option>
            <option value="books">Books</option>
            <option value="accessories">Accessories</option>
        </select>

                <label for="price" class="p-1 mt-3">Price</label>
        <input type="number" id="price" name="price" placeholder="Enter your product price" required>

        <label for="color" class="p-1 mt-3"> Select color</label>


<div class="d-flex mx-2 g-5 flex-wrap rounded-2">

    <label class="color-option">
        <input type="checkbox" name="colors[]" value="Black">
        <span class="color-box" style="background: black;"></span> Black
    </label>

    <label class="color-option">
        <input type="checkbox" name="colors[]" value="White">
        <span class="color-box" style="background: white;"></span> White
    </label>

    <label class="color-option">
        <input type="checkbox" name="colors[]" value="Red">
        <span class="color-box" style="background: red;"></span> Red
    </label>

    <label class="color-option">
        <input type="checkbox" name="colors[]" value="Blue">
        <span class="color-box" style="background: blue;"></span> Blue
    </label>

    <label class="color-option">
        <input type="checkbox" name="colors[]" value="Green">
        <span class="color-box" style="background: green;"></span> Green
    </label>

</div>

<label for="size" class="mx-2 mt-3">Select size</label>

<div class="d-flex flex-wrap mx-2">

    <label>
        <input type="checkbox" name="sizes[]" value="S">
        <span class="size-box">S</span>
    </label>

    <label>
        <input type="checkbox" name="sizes[]" value="M">
        <span class="size-box">M</span>
    </label>

    <label>
        <input type="checkbox" name="sizes[]" value="L">
        <span class="size-box">L</span>
    </label>

    <label>
        <input type="checkbox" name="sizes[]" value="XL">
        <span class="size-box">XL</span>
    </label>

    <label>
        <input type="checkbox" name="sizes[]" value="XXL">
        <span class="size-box">XXL</span>
    </label>

</div>




             <label for="productDescription" class="p-2 mt-3">Product Description</label>
        <textarea id="productDescription" name="productDescription" rows="4" placeholder="please add some description of your product..."  required></textarea>

        <div class="p-2 text-center rounded-2 ">
        <button class=" p-2 btn btn-primary text-center w-50">Add Product in your web <i class="bi bi-arrow-right" class="g-3"></i></button>
        </div>
     </form>
    </div>
  </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\laravel_git\ecommerce-web\resources\views/addproduct.blade.php ENDPATH**/ ?>