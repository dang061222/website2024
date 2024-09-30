<?php 
   if(!empty(Helper::input_value('id'))) 
   { 
       $category = CategoryDB::getCategoryById(Helper::input_value('id')); 
       if(Helper::is_submit('edit_category')) 
       { 
          $category->setName(Helper::input_value('name')); 
          if(CategoryDB::updateCategeory($category)) 
              Helper::redirect('.'); 
       } 
   } 
?> 
<h1>Edit Category</h1> 
<form action="" method="post" id="action_form"> 
    <input type="hidden" name="action" value="edit_category"> 
    <label>Name:</label> 
    <input type="input" name="name" value="<?php echo $category->getName();  ?>"> 
    <br> 
    <label>&nbsp;</label> 
    <input type="submit" value="Update"> 
    <br> 
</form> 
<p><a href="<?php echo Helper::get_url('admin/');?>">View Category List</a></p>