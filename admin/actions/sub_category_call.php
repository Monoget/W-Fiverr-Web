<?php
    include("../database.php");

    $category_id = $_POST['category_id'];

    $query = "SELECT * from sub_category where category_name='$category_id'";
    $sub_categories = db::getRecords($query);
    
    if ($sub_categories != NULL)
    {
     foreach ($sub_categories as $sub_category)
     {
    
    echo  "<option value='".$sub_category['subcategory_id']."' >".$sub_category['subcategory_name']."</option>";
     
    
     } }
   
?>