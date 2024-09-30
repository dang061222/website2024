<?php 
class CategoryDB extends Database 
{ 
   public static function getCategories() 
   { 
        $sql = "select * from categories"; 
        if(!empty(self::db_get_list($sql))) 
        { 
            foreach(self::db_get_list($sql) as $row){ 
                $category = new Category(); 
                $category->setId($row['categoryID']); 
                $category->setName($row['categoryName']); 
                $categorys[] = $category; 
            } 
            return $categorys; 
        } 
        return false; 
   } 
   public static function getCategoryById($categoryid) 
   { 
        $sql = "select * from categories where categoryID=:categoryID"; 
        $params = ['categoryID' => $categoryid]; 
        $row = self::db_get_row($sql, $params); 
        if(!empty($row)) 
        { 
            $category = new Category(); 
            $category->setId($row['categoryID']); 
            $category->setName($row['categoryName']); 
            return $category; 
        } 
        return false; 
   } 
 
   public static function addCategeory($category) 
   { 
        $sql = "insert into categories(categoryName) values(:categoryName)"; 
        $params = [ 
            "categoryName" => $category->getName() 
        ]; 
        if (self::db_execute($sql, $params)) 
            return true; 
        else 
            return false; 
   } 
   public static function updateCategeory($category) 
   { 
        $sql = "update categories set categoryName=:categoryName where categoryID=:categoryID"; 
        $params = [ 
            "categoryID" => $category->getId(), 
            "categoryName" => $category->getName() 
        ]; 
        if (self::db_execute($sql, $params)) 
            return true; 
        else 
            return false; 
   } 
   public static function deleteCategeory($category) 
   { 
        $sql = "delete from categories where categoryID=:categoryID"; 
        $params = [ 
            "categoryID" => $category->getId() 
        ]; 
        if (self::db_execute($sql, $params)) 
            return true; 
        else 
            return false; 
   }  
} 
?>