<body>
 <div id="container">
  <h1>Countries</h1>
  <div id="body">
<?php
foreach($results as $data) {
    echo $data->pc_name . " - " . $data->location . "<br>";
}
?>
   <p><?php echo $links; ?></p>
  </div>
  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
 </div>
</body>