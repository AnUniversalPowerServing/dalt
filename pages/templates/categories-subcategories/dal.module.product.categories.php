<?php
class ModuleCategories {
 /***
  * ===========================
  * Table: prod_categories
  * ===========================
  */
 function query_add_prodCategories($categoryName, $categoryDesc){
  return "INSERT INTO prod_categories(categoryName, categoryDesc) VALUES ('".$categoryName."','".$categoryDesc."');";
 }
 
 function query_isExist_prodCategories_categoryName($categoryName){
  return "SELECT count(*) FROM prod_categories WHERE categoryName='".$categoryName."';";
 }
 
 function query_view_prodCategories(){
  return "SELECT * FROM prod_categories;";
 }
 
 function query_update_prodCategories($updateParams){
  $cat_Id = '';  if(isset($updateParams["cat_Id"])){ $cat_Id = $updateParams["cat_Id"]; }
  $categoryName = '';  if(isset($updateParams["categoryName"])){ $categoryName = $updateParams["categoryName"]; }
  $categoryDesc = '';  if(isset($updateParams["categoryDesc"])){ $categoryDesc = $updateParams["categoryDesc"]; }
  $sql="UPDATE prod_categories SET ";
  if(strlen($categoryName)>0){ $sql.="categoryName=".$categoryName.","; }
  if(strlen($categoryDesc)>0){ $sql.="categoryDesc=".$categoryDesc.","; }
  $sql=chop($sql,',');
  $sql.=" WHERE cat_Id=".$cat_Id;
  return $sql;
 }
 
 function query_delete_prodCategories($cat_Id){
  return "DELETE FROM prod_categories WHERE cat_Id=".$cat_Id.";";
 }
 
 /***
  * ===========================
  * Table: prod_categories_sub
  * ===========================
  */
 function query_add_prodSubCategories($cat_Id, $subCategoriesName, $subCategoriesDesc){
  $sql="INSERT INTO prod_categories_sub(cat_Id, subCategoriesName, subCategoriesDesc) ";
  $sql.="VALUES ('".$cat_Id."', '".$subCategoriesName."', '".$subCategoriesDesc."');";
  return $sql;  
 }
 
 function query_isExist_prodSubCategories_subCategoryName($subCategoryName){
  return "SELECT count(*) FROM prod_categories_sub WHERE subCategoryName='".$subCategoryName."';";
 }
 
 function query_view_prodSubCategories($cat_Id){
  return "SELECT * FROM prod_categories_sub WHERE cat_Id='".$cat_Id."';";
 }
 
 function query_update_prodSubCategories($updateParams){
  $subCat_Id = ''; if(isset($updateParams["subCat_Id"])){ $subCat_Id = $updateParams["subCat_Id"]; };
  $cat_Id = '';  if(isset($updateParams["cat_Id"])){ $cat_Id = $updateParams["cat_Id"]; }
  $subCategoriesName = '';  if(isset($updateParams["subCategoriesName"])){ $subCategoriesName = $updateParams["subCategoriesName"]; }
  $subCategoriesDesc = '';  if(isset($updateParams["subCategoriesDesc"])){ $subCategoriesDesc = $updateParams["subCategoriesDesc"]; }
  $sql="UPDATE prod_categories_sub SET ";
  if(strlen($cat_Id)>0){ $sql.="cat_Id=".$cat_Id.","; }
  if(strlen($subCategoriesName)>0){ $sql.="subCategoriesName=".$subCategoriesName.","; }
  if(strlen($subCategoriesDesc)>0){ $sql.="subCategoriesDesc=".$subCategoriesDesc.","; }
  $sql=chop($sql,',');
  $sql.=" WHERE subCat_Id=".$subCat_Id;
  return $sql;
 }
 
 function query_delete_prodSubCategories($subCat_Id){
  return "DELETE FROM prod_categories_sub WHERE subCat_Id=".$subCat_Id.";";
 }
 
}

?>