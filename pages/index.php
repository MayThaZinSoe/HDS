<!DOCTYPEhtml>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>カスタマイズ診断システム</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

  <div id="wrapper">

      <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0; background-color:#FF4D4D">

      <div class="navbar-header">
          <img src="../s1.jpg">
      </div>

      <h1>カスタマイズ診断システム</h1>

          <div class="navbar-default sidebar" role="navigation">
              <div class="sidebar-nav navbar-collapse">

                  <ul class="nav" id="side-menu">
                      <li class="sidebar-search">
                          <div class="input-group custom-search-form">
                              <input type="text" class="form-control" placeholder="Search...">
                              <span class="input-group-btn">
                              <button class="btn btn-default" type="button">
                                  <i class="fa fa-search"></i>
                              </button>
                          </span>
                          </div>
                      </li>
                      <li>
                          <a href="tables.html"><i class="fa fa-table fa-fw">Tables</i></a>
                      </li>
                       <li>
                       <a href="Detail.html"><i class="fa fa-th fa-fw">Detail</i></a>
                      </li>
                      <li>
                          <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                      </li>
                </ul>

              </div>
          </div>
      </nav>
        <!-- /.navbar-static-side -->

<div id="page-wrapper">
        <div class="col-lg-12">
                  <h4 class="page-header" style="color:red">クライアント一覧</h4>
        </div>

          <!-- /.row -->
          <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-default">

                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <div class="dataTable_wrapper">
                              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                  <thead>
                                      <tr>
                                          <th>企業名</th>
                                          <th>カスタマイズ(あり、なし)</th>
                                          <th>詳細</th>
                                          <th>なんか</th>
                                          <th>なんか</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr class="odd gradeX">
                                          <td>Trident</td>
                                          <td>Internet Explorer 4.0</td>
                                          <td>Win 95+</td>
                                          <td class="center">4</td>
                                          <td class="center">X</td>
                                      </tr>


                                      <tr class="gradeA">
                                          <td>Gecko</td>
                                          <td>Seamonkey 1.1</td>
                                          <td>Win 98+ / OSX.2+</td>
                                          <td class="center">1.8</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="gradeA">
                                          <td>Gecko</td>
                                          <td>Epiphany 2.20</td>
                                          <td>Gnome</td>
                                          <td class="center">1.8</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="gradeA">
                                          <td>Webkit</td>
                                          <td>Safari 1.2</td>
                                          <td>OSX.3</td>
                                          <td class="center">125.5</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="gradeA">
                                          <td>Webkit</td>
                                          <td>Safari 1.3</td>
                                          <td>OSX.3</td>
                                          <td class="center">312.8</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="gradeA">
                                          <td>Webkit</td>
                                          <td>Safari 2.0</td>
                                          <td>OSX.4+</td>
                                          <td class="center">419.3</td>
                                          <td class="center">A</td>
                                      </tr>
                                      <tr class="gradeA">
                                          <td>Webkit</td>
                                          <td>Safari 3.0</td>
                                          <td>OSX.4+</td>
                                          <td class="center">522.1</td>
                                          <td class="center">A</td>
                                      </tr>


                                  </tbody>
                              </table>
                          </div>
                          <!-- /.table-responsive -->

                      </div>
                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
          <div class="row">
          </div>
          <!-- /.row -->
          <div class="row">
          </div>
          <!-- /.row -->
          <div class="row">

                  </div>

                  <!-- /.panel -->
              </div>
              <!-- /.col-lg-6 -->

                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->
              </div>
              <!-- /.col-lg-6 -->
          </div>
          <!-- /.row -->
      </div>
      <!-- /#page-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- jQuery -->
  <script src="../bower_components/jquery/dist/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

  <!-- DataTables JavaScript -->
  <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="../dist/js/sb-admin-2.js"></script>

  <!-- Page-Level Demo Scripts - Tables - Use for reference -->
  <script>
  $(document).ready(function() {
      $('#dataTables-example').DataTable({
              responsive: true
      });
  });
  </script>

</body>

</html>
