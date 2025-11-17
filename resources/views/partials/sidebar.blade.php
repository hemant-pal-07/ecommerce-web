<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sidebar of dashboard</title>
</head>

<style>
          *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
         font-family: 'Poppins', sans-serif;
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
        .text{
            color: orangered;
        }
        .bi-list{
            color: orangered;
        }
</style>
<body>

       <!-- Sidebar -->
 <div id="sidebar1" class="sidebar1 p-5 bg-primary text-white d-lg-none ">


       <div class="sidebar-logo">
        <img src="dashboardimg/preskoollogo.jpg" alt="Logo">
        <span>Global International</span>

      </div>
        <hr>

</div>
     <div class="main-content" id="mainContent">



    <div  class="sidebar d-none d-md-block" id="sidebar">

       <div class=" d-flex ms-3 align-items-center">
    <img src="http://127.0.0.1:8000/assets/image/index/logo.png" class="logo" height="32px" width="130px">
      <i class="bi bi-list fs-2 ms-auto mx-4" id="menubtn" style="cursor: pointer;"></i>

  </div>

         <div class=" border p-2 m-2 rounded-2">
   <img src="{{ asset('assets/image/dashboardimg/erona image.jfif') }}" alt="photo" class="rounded-circle p-2 " height="60px" width="70px" alt="">
     <small class="p-1 ms-2">Unique Fashion</small>
     </div>
     <hr>
      <ul class="nav flex-column">
   <li class="nav-item">
        <a class="nav-link d-flex justify-content-between align-items-center"
       data-bs-toggle="collapse"
       href="#dashboard"
       role="button"
       aria-expanded="false"
       aria-controls="dashboard">
      <span class="text"><i class="bi bi-speedometer2 me-2  text-secondary"></i>Dashboard</span>
      <i class="bi bi-chevron-down"></i>
    </a>

      <div class="collapse" id="dashboard">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <li><a href="{{ route('admin.dashboard') }}" class="nav-link ps-4">Admin Dashboard</a></li>
          <li><a href="#" class="nav-link ps-4">more...</a></li>

        </ul>
      </div>

    </li>
     <li class="nav-item">
      <a class="nav-link collapsed" data-bs-toggle="collapse" href="#appSubmenu" role="button" aria-expanded="false" aria-controls="appSubmenu"><span class="text">
        <i class="bi bi-layout-text-window-reverse me-2 text-secondary"></i>Products</span><i class="bi bi-chevron-down float-end"></i>
      </a>
      <div class="collapse" id="appSubmenu">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <li><a href="{{route('product.create')}}" class="nav-link ps-4">Add product</a></li>
          <li><a href="{{ route('product.list') }}" class="nav-link ps-4">Product list</a></li>
        </ul>
      </div>
    </li>
     <li class="nav-item">
      <a class="nav-link collapsed" data-bs-toggle="collapse" href="#appSubmenu1" role="button" aria-expanded="false" aria-controls="appSubmenu1"><span class="text">
        <i class="bi bi-layout-text-window-reverse me-2  text-secondary"></i>All Category</span><i class="bi bi-chevron-down float-end"></i>
      </a>
      <div class="collapse" id="appSubmenu1">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <li><a href="{{ route('product.category') }}" class="nav-link ps-4">Add category</a></li>
          <li><a href="{{route('category.list') }}" class="nav-link ps-4">Category list</a></li>
          <li><a href="#" class="nav-link ps-4">....</a></li>
        </ul>
      </div>
    </li>

    <hr>

     <li class="nav-item">
      <a class="nav-link" href="#"><i class="bi bi-file-earmark-text me-2"></i>Customer contact list</a>
    </li>


  </ul>

    </div>

</body>
</html>
