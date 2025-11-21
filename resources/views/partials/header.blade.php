<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>header of dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
        margin-left: 250px;
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
            cursor: pointer;
        }

        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
              cursor: pointer;
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
        .showbox{
            position: absolute;
            height: 100px;
            width: 130px;
            box-shadow:0px 0px 5px orange;

            right: 10px;




            }
            .logoutbtn{
                border: none;
                color: orangered;

                 background: none;

            }
</style>
<body>

          <!-- Topbar -->
      <div class="topbar d-flex justify-content-between align-items-center flex-wrap sticky-top">
         <button class="toggle-btn d-flex  d-md-block d-sm-block d-lg-none" id="hamburger"><i class="bi bi-list"></i></button>




        <div class="d-none d-md-flex align-items-center gap-2 ms-auto">

    <div class="avatar">
         <img src="https://t3.ftcdn.net/jpg/06/99/46/60/360_F_699466075_DaPTBNlNQTOwwjkOiFEoOvzDV0ByXR9E.jpg" alt="Profile">
    </div>

</div>

      </div>
       <div class="showbox bg-light rounded-3 p-1 mt-3"style="display:none">
            <form method="POST" action="{{ route('logout') }}">
        @csrf
        <ul class=" text-secondary list-unstyled">

            <li><a class="text-decoration-none text-secondary "> <i class="bi bi-person-check ms-3 fw-bold fs-4 mt-3"></i> <button type="submit" class="logoutbtn">  Profile</button></a></li>
            <li><a class="text-decoration-none text-secondary"><i class="bi bi-box-arrow-right ms-3 fw-bold fs-5 mt-3"></i>  <button type="submit" class="logoutbtn">Logout</button></a></li>

        </ul>
        </form>

  </div>


   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
    $('.avatar').click(function(){
        $('.showbox').fadeToggle(300);
    });
});
</script>



<script>

    $('.logoutbtn').click(function(e){
        e.preventDefault(); // prevent default form submit

        Swal.fire({
            title: 'Are you sure?',
            text: "You will be logged out!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, logout!'
        }).then((result) => {
            if (result.isConfirmed) {
                $('form').submit(); // submit the form if confirmed
            }
        })
    });

</script>




</body>
</html>
