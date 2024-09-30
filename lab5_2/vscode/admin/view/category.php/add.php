<?php 
   if(Helper::is_submit('add_category')) 
   { 
      $category = new Category(); 
      $category->setName(Helper::input_value('name')); 
      if(!empty($category->getName()) && CategoryDB::addCategeory($category)) 
      { 
          Helper::redirect('.'); 
      } 
   } 
?> 
<h1>Add Category</h1> 
<form action="" method="post" id="action_form"> 
    <input type="hidden" name="action" value="add_category"> 
    <label>Name:</label> 
    <input type="input" name="name" value="<?php echo Helper::input_value('name');  ?>"> 
    <br> 
    <label>&nbsp;</label> 
    <input type="submit" value="Add Category"> 
    <br> 
</form> 
<p><a href="<?php echo Helper::get_url('admin/');?>">View Category List</a></p>