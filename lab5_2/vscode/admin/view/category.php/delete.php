<?php 
  if(!empty(Helper::input_value('id'))) 
  {    
     $category = CategoryDB::getCategoryById(Helper::input_value('id')); 
     if(Helper::is_submit('delete_category')) 
     { 
        if(CategoryDB::deleteCategeory($category)) 
        { 
           Helper::redirect('.'); 
        } 
     } 
  } 
?> 
<h2>Confirm deletion information</h2> 
<h3>Do you really want to delete this item ?</h3> 
<p style="margin-left:50px"><?php echo $category->getName();?></p> 
<div> 
    <form action="" method="post"> 
       <input type="hidden" name="action" value="delete_category"> 
       <input type="submit" value="Yes"> 
       <a href="<?php Helper::get_url('.'); ?>">No</a> 
    </form> 
</div> 