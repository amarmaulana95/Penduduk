<!doctype html>
<html>
    <head>
        <title>data keluarga</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../css/dataTables.bootstrap.css"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/bootstrap.min.css" rel="stylesheet">

    </head>

    <style type="text/css">
    body {
      min-height: 200px;
      padding-top: 70px;
    }
    .navbar-inverse {
    background-color: #005401;
    border-color: #005401;
    }
    .navbar-inverse .navbar-nav>li>a {
    color: #FFFFFF;
    }

    .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>
    a:hover, .navbar-inverse .navbar-nav>.active>a:focus {
    color: #fff;
    background-color: #005401;
    }


    .navbar-inverse .navbar-brand {
    color: #FFFFFF;
    }
   @media print {
      .noprint {
         display: none;
      }
   }
    </style>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-fire"></span>Desa Sirnagalih</a>
    </div>

    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="../index.php">Home</a></li>
        <li><a href="tambah.php">tambah</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            Administrator <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li><a href="./admin.php?hlm=user">Profil</a></li>
            <li><a href="./admin.php?hlm=user&sub=pass">Ganti Password</a></li>
            <li class="divider"></li>
            <li><a href="../logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>


   
    <body>
        <div class="container">
       <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th width="2%">No</th>
                        <th width="5%">nama</th>
                        <th width="5%">telepon</th>

                        <th width="5%">username</th>
                        <th width="5%">password</th>

                        <th width="5%">option</th>
                    </tr>
                </thead>

                <tbody>
                    <?php

                    mysql_connect('localhost', 'root', '');
                    mysql_select_db('projek');
                    $sql = mysql_query('SELECT * FROM admin ');
                    $no = 1;
                    while ($r = mysql_fetch_array($sql)) {
                    
                    ?>

                    <tr align='left'>
                        <td><?php echo  $no;?></td>
                        <td><?php echo  $r['nama']; ?></td>
                        <td><?php echo  $r['tlp']; ?></td>
                        <td><?php echo  $r['username']; ?></td>
                        <td><?php echo  $r['password']; ?></td>

                         <td>
                            <a href="edit.php?id=<?php echo  $r['id']; ?>"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></a> 
                            <a href="hapus.php?id=<?php echo  $r['id']; ?>"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></a>
                        </td>
                    </tr>
                    <?php
                    $no++;
                    }
                    ?>
                </tbody>
            </table>  
        </div>
        
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../datatables/jquery.dataTables.js"></script>
        <script src="../datatables/dataTables.bootstrap.js"></script>
        <script src="../js/dataTables.jquery.min.js"></script>
        <script src="../js/bootstrapt.js"></script>


        <script type="text/javascript">
            $(function() {
                $("#example").dataTable();
            });
        </script>
    </body>
</html>
