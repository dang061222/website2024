<h1>Categories</h1> 
        <table> 
            <tr> 
                <th>Id</th> 
                <th>Name</th> 
                <th>&nbsp;</th> 
            </tr> 
            <?php  
                if(!empty(CategoryDB::getCategories())) 
                  foreach (CategoryDB::getCategories() as $category) : ?> 
            <tr> 
                <td><?php echo $category->getId(); ?></td> 
                <td><?php echo $category->getName(); ?></td> 
                <td> 
                <a href="<?php echo Helper::get_url('admin/?c=editcat&id=' . $category->getId());?>">Edit</a> 
                <a href="<?php echo Helper::get_url('admin/?c=deletecat&id=' . $category->getId());?>">Delete</a> 
                </td> 
            </tr> 
            <?php endforeach; ?> 
        </table> 
<p><a href="<?php echo Helper::get_url('admin/?c=addcat');?>">Add Category</a></p>