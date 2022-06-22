<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
  *,
  *:after,
  *:before {
    padding: 0;
    margin: 0;
  }
  .red {
color: red;
}
  html,
  body {
    font-size: 16px;
    font-family: 'lato';
    background-color: #fff;
  }

  .nav,
  header,
  h1,
  .menu-btn,
  .menu-btn .icon {
    display: flex;
  }

  .menu-btn,
  .nav-link {
    color: white;
  }

  header,
  .menu-container {
    background-color: #0066FF;
  }

  .menu-btn {
    border-right: solid .1rem #fff;
    border-left: none;
    padding: .5rem;
    transition: all .3s ease;
    cursor: pointer;
  }

  .menu-btn.anim-btn {
    padding: .4rem;
  }

  /*Iconos menu*/
  .menu-btn .icon {
    flex-direction: column;
    justify-content: space-around;
    align-items: flex-start;
    width: .5rem;
    height: 1.3rem;
  }

  .menu-btn .icon .item {
    background-color: #fff;
    width: .3rem;
    height: .3rem;
    border-radius: .15rem;
    transition: all .3s ease-in-out;
  }

  .menu-btn .icon .item.return {
    /*width: .9rem;*/
    transform: translateX(-.4rem)
  }

  /*--------------------*/
  header,
  h1,
  .nav {
    justify-content: center;
  }

  header {
    justify-content: space-around;
  }

  .logo img {
    width: px;
  }

  .nav {
    flex-direction: column;
  }

  .nav-item {
    list-style: none;
    padding: 1rem;
  }

  .nav-link {
    text-decoration: none;
    font-size: 1.2rem;
  }

  .menu-container {
    position: absolute;
    left: -100%;
    width: 10%;
    height: 80vh;
    top: 80px;
    padding-top: 2rem;
    transition: all .7s ease-in-out;
  }

  .menu-container.show {
    left: 0;
    width: 100%;
  }

  h1 {
    font-family: 'Baloo 2', bold;
    font-size: 30pt;
  }

  h3 {
    height: 5vh;
    font-family: 'Baloo 2', bold;
    color: white;
  }

  h4 {
    font-family: 'Baloo 2', bold;
    font-size: 50pt;
  }

  h5 {
    font-family: 'Baloo 2', bold;
    color: white;
  }
  

  @media (min-width:768px) {
    .menu-btn {
      display: none;
    }

    .menu-container {
      position: inherit;
      width: inherit;
      height: inherit;
      padding-top: 0;
    }

    .nav {
      flex-direction: row;
    }

    .nav-link {
      font-size: 1.2rem;
      font-weight: 400;
    }
  }
  
.masfoot{
  background-color: #E4ECFA;
}
  a {
    text-decoration: none !important;
  }

  /*** */
  .container .row .col {

    font-family: 'Baloo 2', bold;
    font-size: 14pt;
  }

  /*** */
  .container .row .col .mb-3 {
    font-family: 'Baloo 2', bold;
    font-size: 14pt;
  }

  /***Login */
  .form-control {
    width: 400px;
    height: 25px
  }

  /*************************************** */
  .flexbox-container {
    display: -ms-flex;
    display: -webkit-flex;
    display: flex;
  }
</style>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>

    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/datatables.min.css">
    <script src="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/datatables.min.js"></script>

    <!-- Buttons -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.53/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.53/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <style>
        #mydatatable tfoot input {
            width: 100% !important;
        }

        #mydatatable tfoot {
            display: table-header-group !important;
        }
    </style>
