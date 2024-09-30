<?php 
    include_once('../model/da/database.php'); 
    include_once('../model/da/helper.php'); 
    include_once('../model/bl/category.php'); 
    include_once('../model/bl/category_db.php'); 
    $db = new Database(); 
?> 
<base href="<?php echo Helper::get_url('admin/'); ?>"> 
<link rel="stylesheet" type="text/css" href="../public/css/main.css"> 
<?php  
  $view = filter_input(INPUT_GET, 'v'); 
  $action = filter_input(INPUT_GET, 'a'); 
  if(empty($view) || empty($action)) 
  { 
     $view = 'common'; 
     $action = 'admin';  
  } 
  $path = 'view/'.$view.'/'.$action.'.php'; 
  if(file_exists($path)) 
  { 
    include_once($path); 
  } 
  else 
      { 
        header('Location:../404.php'); 
      } 
?> 