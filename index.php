<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>Upload csv</title>
  <!-- custom-theme -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
  Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css" />
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>

</head>
<style type="text/css">
#usr{
    width: 350px;
    height: 51px;
}
body{
	font-size: 8px;
	line-height: 1.1;
}
</style>
<body>
  <div class="wthree_agile_admin_info">
    <div class="inner_content">
      <div class="inner_content_w3_agile_info two_in">
        <div class="agile-tables">
          <div class="w3l-table-info agile_info_shadow">
           <h3 class="w3_inner_tittle two">Upload Dealer Info CSV file </h3>
           <p style="color: red;">• Please Follow this Instructions </br>
• Imported File must be CSV file (Comma delimited)</br>
• File only contains data, no header</br>
• File must be like Example Excel file, Download this
</p>
<a href="dealer_info2.csv" style="font-size: 14px; text-align: center;">Download Example Excel File</a>
<p style="color: red;">
• Click On browse button</br>
• Select the csv file and Click on Upload button</br>
• The bellow table will show the CSV file’s data</br>
• If the data already exist the status will be Incorrect with red mark</br>
• If you think Data is not ok, you can cancel the import by clicking on Import Button</br>
• If you Find Everything ok, click on Submit button</br>
• After On Click Submit button the Data will finally store in Orginal Database
</br>
</p>
</br></br></br>
        <div class="box">
        <form action="import.php" method="post" enctype="multipart/form-data" name="form1" id="form1" >
          <input  type="file" class="form-control" id="usr" name="csv">
          <label for="file-7"><span></span> <strong></label>
          <br>
          <label for="file-7"><span></span> <button type="type" name="importer"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> Upload &hellip;</button></label>
        </form>
        </div>
        <div class="w3l-table-info agile_info_shadow">
          <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
              		<th>id</th>
					<th>dealer_id</th>
					<th>typeOfDealer</th>
					<th>dealerName</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'db.php';
                    $result = $conn->query("SELECT  * FROM table_temp");
                    while($row = $result->fetch()){
                ?>
                <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['d1']; ?></td>
                  <td><?php echo $row['d2']; ?></td>
                  <td><?php echo $row['d3']; ?></td>
                </tr>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>id</th>
                  <th>dealer_id</th>
					<th>typeOfDealer</th>
					<th>dealerName</th>
                </tr>
              </tfoot>
            </table>
            <div class="box" style="float: right; margin-top:20px;">
                <form action="import.php" method="post" enctype="multipart/form-data" name="form1" id="form1" >
                    <input type="submit" name="agree" value="submit">
                </form>
            </div>
            <div class="box" style="float: right; margin-top:20px;">
                <form action="import.php" method="post" enctype="multipart/form-data" name="form1" id="form1" >
                    <input type="submit" name="Cancel" value="Cancel">
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
  <script type="../text/javascript" src="../js/jquery-2.1.4.min.js"></script>
  <script src="../js/modernizr.custom.js"></script>
  <script src="../js/classie.js"></script>
  <script src="../js/gnmenu.js"></script>
  <script src="../js/sweetalert.min.js"></script>
  <script>
    new gnMenu( document.getElementById( 'gn-menu' ) );
  </script>
  <script type="text/javascript" src="../js/jquery.basictable.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
  </script>
  <!-- //js -->
  <script src="../js/screenfull.js"></script>
  <script>
    $(function () {
      $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

      if (!screenfull.enabled) {
        return false;
      }

      $('#toggle').click(function () {
        screenfull.toggle($('#container')[0]);
      });
    });

    $(document).ready(function() {
      $('#example').DataTable( {
        "pagingType": "full_numbers"
      } );
    } );
  </script>
</body>
</html>
