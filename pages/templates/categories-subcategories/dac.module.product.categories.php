<?php
header('Content-Type: application/json');
require_once 'app.database.php';
require_once 'app.initiator.php';
require_once 'app.utils.php';
require_once 'dal.module.product.categories.php';
 
$utility = new Utility();
$moduleCategories = new ModuleCategories();
if(isset($_GET["action"])){
  /* Product Categories */
  if($_GET["action"]=='categories'){
	if($_GET["do"]=='add'){ // Add
	  $categoryName = ''; if(isset($_POST["categoryName"])){ $categoryName = $_POST["categoryName"]; }
	  $categoryDesc = ''; if(isset($_POST["categoryDesc"])){ $categoryDesc = $_POST["categoryDesc"]; }
	  if((isset($categoryName) && strlen($categoryName) >0) &&
		 (isset($categoryDesc) && strlen($categoryDesc) >0) ){
		 // Check Category Name is unique
		 $checkQuery = $moduleCategories->query_isExist_prodCategories_categoryName($categoryName);
		 if(intval(json_decode($database01->getJSONData($checkQuery))[0]->{"count(*)"})>0){
			echo $utility->displayMsg('CATEGORIES_ADD', 'error', 'Category Name "'.$categoryName.'" already exists');  
		 } else {
			$addQuery = $moduleCategories->query_add_prodCategories($categoryName, $categoryDesc);
			$msg = $database01->addupdateData($addQuery);
			if($msg === 'success'){
				echo $utility->displayMsg('CATEGORIES_ADD', 'success', 'Added New Category Successfully'); 
			} else {
				echo $utility->displayMsg('CATEGORIES_ADD', 'error', 'Due to Internal Issue, New Category not added Successfully'); 
			}
		 }
	  } else {
		 $message = 'Missing';
		 if((!isset($categoryName) || strlen($categoryName) == 0)){ $message.= ' Category Name,'; }
		 if((!isset($categoryDesc) || strlen($categoryDesc) == 0)){ $message.= ' Category Description,'; }
		 $message=chop($message,',');
		 echo $utility->displayMsg('CATEGORIES_ADD', 'error', $message); 
	  }
	} 
	else if($_GET["do"]=='isExist'){ // Checks isExist
	  if(isset($_POST["categoryName"])){ 
	    $categoryName = $_POST["categoryName"]; 
	    // Check Category Name is unique
		 $checkQuery = $moduleCategories->query_isExist_prodCategories_categoryName($categoryName);
		 if(intval(json_decode($database01->getJSONData($checkQuery))[0]->{"count(*)"})>0){
			echo $utility->displayMsg('CATEGORIES_CHECK_EXIST', 'success', 'Category Name "'.$categoryName.'" already exists'); 
		 } else {
			echo $utility->displayMsg('CATEGORIES_CHECK_NOTEXIST', 'success', 'Category Name "'.$categoryName.'" not exist'); 
		 }
	  }	
	}
	else if($_GET["do"]=='view'){ // view
		$query = $moduleCategories->query_view_prodCategories();
		echo $database01->getJSONData($query);
	} 
	else if($_GET["do"]=='update'){ // update
		if(isset($_POST["cat_Id"])){
			$cat_Id = $_POST["cat_Id"];
			$categoryName = '';  if(isset($_POST["categoryName"])){ $categoryName = $_POST["categoryName"]; }
			$categoryDesc = '';  if(isset($_POST["cat_Id"])){ $categoryDesc = $_POST["categoryDesc"]; }
			$updateParams=array();
			$updateParams["cat_Id"] = $cat_Id;
			$updateParams["categoryName"] = $categoryName;
			$updateParams["categoryDesc"] = $categoryDesc;
			$query = $moduleCategories->query_update_prodCategories($updateParams);
			$msg = $database01->addupdateData($query);
			if($msg === 'success'){
		    echo $utility->displayMsg('CATEGORIES_UPDATE', 'success', 'Updated New Category Successfully'); 
		 } else {
		    echo $utility->displayMsg('CATEGORIES_UPDATE', 'error', 'Due to Internal Issue, New Category not updated Successfully'); 
		 }
		} else {
			echo $utility->displayMsg('CATEGORIES_UPDATE', 'error', 'Missing Category Id'); 
		}
	} 
	else if($_GET["do"]=='delete'){ // delete
		$cat_Id = ''; if(isset($_POST["cat_Id"])){ $cat_Id = $_POST["cat_Id"]; }
		if(isset($cat_Id) && strlen($cat_Id) >0){
		   $query = $moduleCategories->query_delete_prodCategories($cat_Id);
		   $msg = $database01->addupdateData($query);
		   if($msg === 'success'){
		      echo $utility->displayMsg('CATEGORIES_DELETE', 'success', 'Deleted Category Successfully'); 
		   } else {
		      echo $utility->displayMsg('CATEGORIES_DELETE', 'error', 'Due to Internal Issue, Category not deleted Successfully'); 
		   }
		} else {
		 echo $utility->displayMsg('CATEGORIES_DELETE', 'error', 'Missing Category Id'); 
	    }
	}
	else {
		echo $utility->displayMsg('INVALID_DO', 'error', 'Do Parameter is invalid');
	}
	  
  } 
  else if($_GET["action"]=='subcategories'){
	if($_GET["do"]=='add'){ // Add
	  $cat_Id = ''; if(isset($_POST["cat_Id"])){ $cat_Id = $_POST["cat_Id"]; }
	  $subCategoryName = ''; if(isset($_POST["subCategoryName"])){ $subCategoryName = $_POST["subCategoryName"]; }
	  $subCategoryDesc = ''; if(isset($_POST["subCategoryDesc"])){ $subCategoryDesc = $_POST["subCategoryDesc"]; }
	  if((isset($cat_Id) && strlen($cat_Id) >0) && (isset($subCategoryName) && strlen($subCategoryName) >0) &&
		 (isset($subCategoryDesc) && strlen($subCategoryDesc) >0) ){
		 $checkQuery = $moduleCategories->query_isExist_prodSubCategories_subCategoryName($subCategoryName);
		 if(intval(json_decode($database01->getJSONData($checkQuery))[0]->{"count(*)"})>0){
			echo $utility->displayMsg('SUBCATEGORIES_ADD', 'error', 'Category Name "'.$categoryName.'" already exists');   
		 } else {
		 $query = $moduleCategories->query_add_prodSubCategories($cat_Id, $subCategoryName, $subCategoryDesc);
		 $msg = $database01->addupdateData($query);
		 if($msg === 'success'){
		    echo $utility->displayMsg('SUBCATEGORIES_ADD', 'success', 'Added New Sub-Category Successfully'); 
		 } else {
		    echo $utility->displayMsg('SUBCATEGORIES_ADD', 'error', 'Due to Internal Issue, New Sub-Category not added Successfully'); 
		 }
	   }
	  } else {
		 $message = 'Missing';
		 if((!isset($cat_Id) || strlen($cat_Id) == 0)){ $message.= ' Category Id,'; }
		 if((!isset($subCategoryName) || strlen($subCategoryName) == 0)){ $message.= ' Category Name,'; }
		 if((!isset($subCategoryDesc) || strlen($subCategoryDesc) == 0)){ $message.= ' Category Description,'; }
		 $message=chop($message,',');
		 echo $utility->displayMsg('SUBCATEGORIES_ADD', 'error', $message); 
	  }
	} 
	else if($_GET["do"]=='isExist'){ // Checks isExist
	  if(isset($_POST["subCategoryName"])){ 
	    $subCategoryName = $_POST["subCategoryName"]; 
	    // Check Category Name is unique
		 $checkQuery = $moduleCategories->query_isExist_prodSubCategories_subCategoryName($subCategoryName);
		 if(intval(json_decode($database01->getJSONData($checkQuery))[0]->{"count(*)"})>0){
			echo $utility->displayMsg('SUBCATEGORIES_CHECK_EXIST', 'success', 'Sub-Category Name "'.$categoryName.'" already exists'); 
		 } else {
			echo $utility->displayMsg('SUBCATEGORIES_CHECK_NOTEXIST', 'success', 'Sub-Category Name "'.$categoryName.'" not exist'); 
		 }
	  }	
	}
	else if($_GET["do"]=='view'){ // view
		$query01 = $moduleCategories->query_view_prodCategories();
		$dejsonData = $database01->getJSONData($query01);
		$jsonData = json_decode($dejsonData);
		  for($index=0;$index<count($jsonData);$index++){
			$cat_Id = $jsonData[$index]->{"cat_Id"};
		    $query02 = $moduleCategories->query_view_prodSubCategories($cat_Id);
			$jsonData[$index]->{"subcategories"} = json_decode($database01->getJSONData($query02));
		  }
		echo json_encode($jsonData);
	} 
	
	else {
		echo $utility->displayMsg('INVALID_DO', 'error', 'Do Parameter is invalid');
	}
	
	
  }
  else {
	echo $utility->displayMsg('INVALID_ACTION', 'error', 'Action Parameter is invalid'); 
  }
} else { 
   echo $utility->displayMsg('NO_ACTION', 'error', 'Action Parameter is not defined'); 
}
?>