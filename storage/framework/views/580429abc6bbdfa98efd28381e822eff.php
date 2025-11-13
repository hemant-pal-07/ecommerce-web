<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dashbooard</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

 <style>
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
         font-family: 'Poppins', sans-serif;
      }
      body {
        background-color: #f8f9fa;
      }
      .sidebar {
        width: 250px;
        height: 100vh;
        background: #fff;
        border-right: 1px solid #eaeaea;
        position: fixed;
        top: 0;
        left: 0;
        padding-top: 1rem;
        transition: all 0.3s ease;
        z-index: 1000;
      }


      .main-content {
        margin-left: 240px;
        transition: all 0.3s ease;
      }
      .topbar {
        background-color: #fff;
        padding: 10px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
      }
      .dashboard-card {
        border: none;
        border-radius: 12px;
        box-shadow: 0 1px 4px rgba(0,0,0,0.1);
      }
      .welcome-box {
        background: orangered;
        color: white;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;

      }
      .percent-badge {
        font-size: 0.75rem;
        padding: 3px 8px;
        border-radius: 6px;
        font-weight: 600;
      }
      .sidebar-logo {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 20px;
        margin-bottom: 1rem;
      }
      .sidebar-logo img {
        width: 35px;
        height: 35px;
      }
      .sidebar-logo span {
        font-weight: 600;
        flex-grow: 1;
        margin-left: 10px;
      }
      .toggle-btn {
        border: none;
        background: transparent;
        font-size: 1.5rem;
      }

      /* Responsive fix for sidebar */
      @media (max-width: 992px) {
        .sidebar {
          margin-left: -220px;
        }
        .main-content {
          margin-left: 0;
        }
      }
      #sidebar1 {
  position: fixed;
  top: 0;
  left: -1000px;
  width: 300px;
  height: 100vh;
  margin-top: 60px;
  transition: all 1s ease;
  z-index: 2000;
}
#sidebar1.active {
  left: 0;
}
 .search-box {
            border: 1px solid #e5e7eb;
            height: 45px;
            color: #e5e7eb;
            width: 280px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.06);

        }

        .search-box input {
            color: #555;
        }
           .badge {
            height: 24px;
            margin-top: -30px;

        }
         .card {
            transition: all 0.4s;
            box-shadow: 0px 10px 10px #b3b8be;

            &:hover {
                transform: translateY(-7px);
            }
        }
         .total {
            margin-left: -55px;
            margin-top: 30px;
        }


          .icon-box {
            width: 60px;
            height: 60px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .text-small {
            font-size: 0.9rem;

        }
        .icon{
          gap:10px;
          border-radius: 5px;
        }
         .sidebar .nav-link {
    color: #495057;
  }
  .nav-link i.bi-chevron-down {
  transition: transform 0.5s ease;
}

.nav-link[aria-expanded="true"] i.bi-chevron-down {
  transform: rotate(180deg);

}
.icon-btn:hover{
 background-color: #dbd9d9;
 cursor: pointer;
 transition: all 0.5s;

}
 .avatar {
            width: 38px;
            height: 38px;
            border-radius: 7px;
            overflow: hidden;
        }

        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
           .icon-btn {
            width: 40px;
            height: 40px;
            border: 1px solid #e5e7eb;
            border-radius: 7px;
            background: #fff;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            cursor: pointer;
            transition: all 0.3s;

            &:hover {
                background-color: #cbd1d8;

            }

        }
        .logo{
            margin-top: -15px;
        }



    </style>

  <body>






   
    <?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

     

     <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


      <div class="p-3">


      <div class="d-flex flex-column flex-md-row align-items-center p-2 mt-2">

    <!-- Left side (heading + breadcrumbs) -->
    <div class=" col-md-6 mb-2 mb-md-0  ">
        <h4 class="fw-bold ms-4">Admin Dashboard</h4>
        <a href="#" class="ms-4 text-decoration-none text-muted ">Dashboard /</a>
        <a href="#" class="text-decoration-none text-muted ">Admin Dashboard</a>
    </div>

    <!-- Right side (buttons) -->
    <div class="col-md-6 d-flex flex-column flex-md-row gap-2 mt-2 text-center justify-content-center">
       <a href="<?php echo e(route('product.create')); ?>"class="btn btn-primary ms-auto  align-items-center justify-content-center">
            <i class="bi bi-plus-circle me-1 "></i> Add New Product
        </a>
        <button class="btn btn-secondary btn-stack" >Product Details</button>
    </div>

</div>

      <!-- Welcome Box -->
      <div class="welcome-box mt-2 d-md-flex justify-content-between align-items-center">
        <div>
          <h4>Welcome Back, Mr. Hemant Pal <i class="bi bi-pencil-square"></i></h4>
          <p>Have a Good day at work</p>
        </div>
        <div><i class="bi bi-gear"></i>Updated Recently on 15 Nov 2025</div>
      </div>

      <!-- Dashboard Cards -->

    <div class="container-fluid">
  <div class="row g-3">
    <!-- Teachers -->
    <div class="col-md-6">
      <div class="card shadow-sm border-0">
        <div class="card-body d-flex align-items-center">
          <div class="icon-box bg-info-subtle me-3">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png" alt="Teachers" width="40">
          </div>
          <div class="flex-grow-1">
            <div class="d-flex align-items-center">
              <div>
                <h4 class="fw-bold mb-0">284</h4>
                <p class="text-muted  mb-2 mt-2">Total Teachers</p>
              </div>
              <span class="badge bg-info text-white fw-semibold ms-auto ">1.2%</span>
            </div>
            <div class="d-flex justify-content-between border-top pt-2 text-small">
              <span>Active : <strong>254</strong></span>
              <span>Inactive : <strong>30</strong></span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Staff -->
    <div class="col-md-6">
      <div class="card shadow-sm border-0">
        <div class="card-body d-flex align-items-center">
          <div class="icon-box bg-danger-subtle me-3">
           <img src="<?php echo e(asset('assets/image/dashboardimg/book-stack.png')); ?>" alt="Staff" width="40">
          </div>
          <div class="flex-grow-1">
            <div class="d-flex align-items-center">
              <div>
                <h4 class="fw-bold mb-0">164</h4>
                <p class="text-muted  mb-2 mt-2">Total Staff</p>
              </div>
              <span class="badge bg-warning text-white fw-semibold ms-auto">1.2%</span>
            </div>
            <div class="d-flex justify-content-between border-top pt-2 text-small">
              <span>Active : <strong>161</strong></span>
              <span>Inactive : <strong>02</strong></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Second Row -->
  <div class="row g-3 mt-2">
    <!-- Subjects -->
    <div class="col-md-6">
      <div class="card shadow-sm border-0">
        <div class="card-body d-flex align-items-center">
          <div class="icon-box bg-info-subtle me-3">
 <img src="<?php echo e(asset('assets/image/dashboardimg/team.png')); ?>" alt="Staff" width="40"></div>
          <div class="flex-grow-1">
            <div class="d-flex align-items-center">
              <div>
                <h4 class="fw-bold mb-0">82</h4>
                <p class="text-muted  mb-2 mt-2">Total Subjects</p>
              </div>
              <span class="badge bg-success text-white fw-semibold ms-auto">1.2%</span>
            </div>
            <div class="d-flex justify-content-between border-top pt-2 text-small">
              <span>Active : <strong>81</strong></span>
              <span>Inactive : <strong>01</strong></span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Duplicate Subjects Example -->
    <div class="col-md-6">
      <div class="card shadow-sm border-0">
        <div class="card-body d-flex align-items-center">
          <div class="icon-box bg-info-subtle me-3">
 <img src="<?php echo e(asset('assets/image/dashboardimg/book-stack.png')); ?>" alt="Staff" width="40"></div>
          <div class="flex-grow-1">
            <div class="d-flex align-items-center">
              <div>
                <h4 class="fw-bold mb-0">82</h4>
                <p class="text-muted  mb-2 mt-2">Total Subjects</p>
              </div>
              <span class="badge bg-success text-white fw-semibold ms-auto">1.2%</span>
            </div>
            <div class="d-flex justify-content-between border-top pt-2 text-small">
              <span>Active : <strong>81</strong></span>
              <span>Inactive : <strong>01</strong></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


     </div>
   </div>
   </div>
    </div>
    </div>




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
            sidebar.animate({ marginLeft: "0px" }, );
            mainContent.animate({ marginLeft: "250px" }, );

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






<?php if(session('success')): ?>
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: "<?php echo e(session('success')); ?>",
        timer: 3000,
        showConfirmButton: false
    });
</script>
<?php endif; ?>

<?php if(session('error')): ?>
<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: "<?php echo e(session('error')); ?>",
        timer: 3000,
        showConfirmButton: false
    });
</script>
<?php endif; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\laravel_git\ecommerce-web\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>