<?php $PROJECT_URL = 'http://localhost/dalt/'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body { font-size:12px; }
.curpoint { cursor:pointer; }
.pad0 { padding:0px; }
.mtop15p { margin-top:15px; }
.mbot0 { margin-bottom:0px; }
</style>
<script type="text/javascript">
var PROJECT_URL = 'http://localhost/dalt/pages/templates/categories-subcategories';
function js_ajax(method,url,data,fn_output){
 $.ajax({type: method, url: url,data:data, success: function(response) { fn_output(response); } }); 
}
function bootstrap_alert(type, div_Id, message){
  var alertMessage = 'success'; if(type==='error'){ alertMessage = 'danger'; }
  var content='<div class="alert alert-'+alertMessage+' alert-dismissible" style="margin-bottom:0px;">';
      content+='<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>Alert!</strong><br/> '+message+'</div>';
	  content+='</div>';
  document.getElementById(div_Id).innerHTML=content;
}
</script>
<script type="text/javascript">
class ProductCategoriesAddUI {
	
}
class ProductCategoriesViewUI {
	
  display(response){
	 var content='<div>';
		 content+='<h5 style="border-bottom:2px solid #ccc;padding-bottom:10px;"><b>Categories Information</b></h5>';
	     content+='</div>';
		 content+='<div class="list-group mbot0">';
		 content+='<div class="list-group-item">';
		
	for(var index=0;index<response.length;index++){
	 content+=productCategoriesViewUI.viewCategory(response[index]);
	}
	content+='</div>';
	content+='</div>';
	return content;
  }
  viewCategoryEditModal(){
	  
  }
  viewSubCategoryEditModal(){
	  
  }
  viewSubCategory(response){
	console.log(JSON.stringify(response));
	
	 var subCat_Id = response.subCat_Id;
	 var cat_Id = response.cat_Id;
	 var subCategoriesName = response.subCategoriesName;
	 var subCategoriesDesc = response.subCategoriesDesc;
	 var createdOn = response.createdOn;
	 var lastModifiedOn = response.lastModifiedOn;
	
	 var content='<div class="list-group">';
	 content+='<div class="list-group-item">';
	 content+='<div><h5 style="border-bottom:2px solid #ccc;padding-bottom:10px;">';
     content+='<b>'+subCategoriesName+'</b><i class="fa fa-edit curpoint pull-right"></i></h5><div>';
	 content+='<div>'+subCategoriesDesc+'</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	return content;
  }
  viewCategory(response){
	var cat_Id = response.cat_Id;
	var categoryName = response.categoryName;
	var categoryDesc = response.categoryDesc;
	var createdOn = response.categoryDesc;
	var subcategories = response.subcategories;
	var lastUpdated_on = response.lastUpdated_on;
	
	var content='<div class="curpoint" data-toggle="collapse" data-target="#categoryId-'+cat_Id+'">';
		content+='<h5 style="border-bottom:2px solid #ccc;padding:10px;background-color:#eee;margin-top:0px;margin-bottom:0px;">';
		content+='<i class="fa fa-angle-double-down" aria-hidden="true"></i> &nbsp; <b>'+categoryName+'</b>';
		content+='<i class="fa fa-edit curpoint pull-right" onclick="alert();"></i>  &nbsp;';
		content+='</h5>';
		content+='</div>';
		
		content+='<div id="categoryId-'+cat_Id+'" class="collapse">';
		
		content+='<div class="list-group mbot0">';
		content+='<div class="list-group-item">';
		content+='<div><b>Description:</b></div>';
		content+='<div>'+categoryDesc+'</div>';
		content+='<div align="center" class="mtop15p" style="background-color:#eee;padding:5px;"><b>Sub-Categories</b></div>';
		if(subcategories.length>0){
		  content+='<div class="container-fluid mtop15p pad0">';
		  content+='<div class="row">';
		  for(var index=0;index<subcategories.length;index++){
		   content+='<div class="col-sm-6">'+productCategoriesViewUI.viewSubCategory(subcategories[index])+'</div>';
		  }
		  content+='</div>'; 
		  content+='</div>';
		}
		
		content+='</div>'; 
		content+='</div>';
		
		content+='</div>';
	return content;
  }
}
var response = [{"cat_Id":"1","categoryName":"Goods and Services","categoryDesc":"Antega Antega","createdOn":"0000-00-00 00:00:00","lastUpdated_on":"0000-00-00 00:00:00","subcategories":[{"subCat_Id":"1","cat_Id":"1","subCategoriesName":"sdfd","subCategoriesDesc":"efwe","createdOn":"2020-11-03 17:10:11","lastModifiedOn":"2020-11-03 17:09:29"}]},{"cat_Id":"2","categoryName":"Anup","categoryDesc":"SuperMan","createdOn":"0000-00-00 00:00:00","lastUpdated_on":"0000-00-00 00:00:00","subcategories":[]},{"cat_Id":"3","categoryName":"vbg","categoryDesc":"wdef","createdOn":"0000-00-00 00:00:00","lastUpdated_on":"0000-00-00 00:00:00","subcategories":[{"subCat_Id":"2","cat_Id":"3","subCategoriesName":"asdes","subCategoriesDesc":"awdaw","createdOn":"2020-11-03 17:53:32","lastModifiedOn":"2020-11-03 17:53:32"}]},{"cat_Id":"4","categoryName":"Hello","categoryDesc":"Hello","createdOn":"0000-00-00 00:00:00","lastUpdated_on":"0000-00-00 00:00:00","subcategories":[]},{"cat_Id":"5","categoryName":"Hello","categoryDesc":"Hello","createdOn":"2020-11-03 17:12:27","lastUpdated_on":"2020-11-03 17:12:27","subcategories":[]},{"cat_Id":"6","categoryName":"Hello1","categoryDesc":"Hello","createdOn":"2020-11-03 17:19:33","lastUpdated_on":"2020-11-03 17:19:33","subcategories":[]}];
var productCategoriesViewUI = new ProductCategoriesViewUI();
var productCategoriesAddUI = new ProductCategoriesAddUI();
</script>
<script type="text/javascript">
function form_submit_addNewCategory(){
 var categoryName = $('#addNewCategoryForm_categoryName').val();
 var categoryDesc = $('#addNewCategoryForm_categoryDesc').val();
 if(categoryName.length>0 && categoryDesc.length>0){
	js_ajax('POST',PROJECT_URL+'/products/categories/add',{categoryName:categoryName, categoryDesc:categoryDesc },function(response){
		bootstrap_alert(response.msgType, 'addNewCategoryForm_alertMsg', response.msg);
	});
 } else {
	var message = 'Missing';
	if(categoryName.length === 0) { message+=' Category Name,'; }
	if(categoryDesc.length === 0) { message+=' Category Description,'; }
	message= message.substring(0, message.length-1);
	bootstrap_alert('error', 'addNewCategoryForm_alertMsg', message);
 }
}

function form_submit_addNewSubCategory(){
 var cat_Id = $('#addNewSubCategoryForm_categoryName').val();
 var subCategoryName = $('#addNewSubCategoryForm_subCategoryName').val();
 var subCategoryDesc = $('#addNewSubCategoryForm_subCategoryDesc').val();
 if(cat_Id.length>0 && subCategoryName.length>0 && subCategoryDesc.length>0){
	js_ajax('POST',PROJECT_URL+'/products/subcategories/add',
	{cat_Id:cat_Id, subCategoryName:subCategoryName, subCategoryDesc:subCategoryDesc },function(response){
		bootstrap_alert(response.msgType, 'addNewSubCategoryForm_alertMsg', response.msg);
	});
 } else {
	var message = 'Missing';
	if(cat_Id.length === 0) { message+=' Category Id,'; }
	if(subCategoryName.length === 0) { message+=' Category Name,'; }
	if(subCategoryDesc.length === 0) { message+=' Category Description,'; }
	message= message.substring(0, message.length-1);
	bootstrap_alert('error', 'addNewSubCategoryForm_alertMsg', message);
 }
}

function form_selOpt_categoriesList(div_Id){
 js_ajax('POST',PROJECT_URL+'/products/categories/view',{},function(response){
   var content='<option value="">Select Categories</option>';
   for(var index=0;index<response.length;index++){
	 content+='<option value="'+response[index].cat_Id+'">'+response[index].categoryName+'</option>'; 
   }
   document.getElementById(div_Id).innerHTML=content;
 });	
}

$(document).ready(function(){
  form_selOpt_categoriesList('addNewSubCategoryForm_categoryName');
  document.getElementById("ViewCategoriesInfo").innerHTML = productCategoriesViewUI.display(response);
});
</script>
</head>
<body>
  
<div class="container-fluid mtop15p">
  <div class="row">
  
    <div class="col-sm-3">
	
	<!-- Add a New Category Form ::: START -->
	<div class="form-group">
	  <h5 style="border-bottom:2px solid #ccc;padding-bottom:10px;"><b>Add New Category</b></h5>
	</div><!--/.form-group -->
	
	<div class="list-group">
	<div class="list-group-item">
	
	<div id="addNewCategoryForm_alertMsg" class="form-group"></div>
	<div class="form-group">
	  <label>Category Name</label>
	  <input type="text" id="addNewCategoryForm_categoryName" class="form-control" placeholder="Enter Category Name"/>
	</div><!--/.form-group -->
	<div class="form-group">
	  <label>Category Description</label>
	  <textarea id="addNewCategoryForm_categoryDesc" class="form-control" placeholder="Enter Category Description"></textarea>
	</div><!--/.form-group -->
	<div class="form-group">
	  <button class="btn btn-default form-control" onclick="javascript:form_submit_addNewCategory();"><b>Add New Category</b></button>
	</div><!--/.form-group -->
	
	</div><!--/.list-group-item -->
	</div><!--/.list-group -->
	<!-- Add a New Category Form ::: END -->
	
	<!-- Add a New Sub-Category Form ::: START -->
	<div class="form-group">
	  <h5 style="border-bottom:2px solid #ccc;padding-bottom:10px;"><b>Add New Sub-Category</b></h5>
	</div><!--/.form-group -->
	
	<div class="list-group">
	<div class="list-group-item">
	
	<div id="addNewSubCategoryForm_alertMsg" class="form-group"></div>
	<div class="form-group">
	  <label>Category Name</label>
	  <select id="addNewSubCategoryForm_categoryName" class="form-control">
	    <option value="">Select Categories</option>
	  </select>
	</div><!--/.form-group -->
	<div class="form-group">
	  <label>Sub-Category Name</label>
	  <input type="text" id="addNewSubCategoryForm_subCategoryName" class="form-control" placeholder="Enter Sub-Category Name"/>
	</div><!--/.form-group -->
	<div class="form-group">
	  <label>Sub-Category Description</label>
	  <textarea id="addNewSubCategoryForm_subCategoryDesc" class="form-control" placeholder="Enter Sub-Category Description"></textarea>
	</div><!--/.form-group -->
	<div class="form-group">
	  <button class="btn btn-default form-control" onclick="javascript:form_submit_addNewSubCategory();"><b>Add New Sub-Category</b></button>
	</div><!--/.form-group -->
	
	</div><!--/.list-group-item -->
	</div><!--/.list-group -->
	<!-- Add a New Sub-Category Form ::: END -->
	
	</div><!--/.col-sm-3 -->
	
	<div id="ViewCategoriesInfo" class="col-sm-6">
	<!-- View Categories in Table Form ::: START -->
	
	
	
	
	
	
	
	
	</div><!--/.list-group-item -->
	</div><!--/.list-group -->
	<!-- View Categories in Table Form ::: END -->
	</div><!--/.col-sm-6 -->
	
  </div><!--/.row -->
</div><!--/.container-fluid -->

</body>
</html>