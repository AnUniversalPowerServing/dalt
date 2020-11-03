<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#htaccess"><b>.htaccess</b></a></li>
  <li><a data-toggle="tab" href="#sql"><b>SQL Schema</b></a></li>
  <li><a data-toggle="tab" href="#backEnd"><b>Backend</b></a></li>
  <li><a data-toggle="tab" href="#frontEnd"><b>Frontend</b></a></li>
</ul>

<div class="list-group">
<div class="list-group-item" style="border-radius:0px;">

<div class="tab-content">

<!-- htaccess ::: START -->
<div id="htaccess" class="tab-pane fade in active">

</div>
<!-- htaccess ::: END -->

<!-- SQL Database ::: START -->
<div id="sql" class="tab-pane fade">
<!-- -->
<div class="mtop15p mbot15p">
<pre class="code">
<code id="output" class="sql">
<?php 
 echo htmlspecialchars(file_get_contents($PROJECT_URL.'pages/templates/categories-subcategories/db.module.categories-subcategories.sql.txt'));
?>
</code>
</pre>
</div><!--/.mtop15p .mbot15p -->
<!-- -->
</div><!--/#sql -->
<!-- SQL Database ::: END -->

<!-- Backend ::: START -->
<div id="backEnd" class="tab-pane fade fs11">

<ul class="nav nav-pills">
  <li class="active"><a data-toggle="pill" href="#dac"><b>Data Access Controller</b></a></li>
  <li><a data-toggle="pill" href="#dal"><b>Data Access Layer</b></a></li>
</ul>

<div class="tab-content">
<div id="dac" class="tab-pane fade in active">
<!-- -->
<div class="mtop15p mbot15p">
<pre class="code">
<code id="output" class="php">
<?php 
 echo htmlspecialchars(file_get_contents($PROJECT_URL.'pages/templates/categories-subcategories/dac.module.product.categories.php.txt'));
?>
</code>
</pre>
</div><!--/.mtop15p .mbot15p -->
<!-- -->
</div><!--/#dac -->
<div id="dal" class="tab-pane fade">
<!-- -->
<div class="mtop15p mbot15p">
<pre class="code">
<code id="output" class="php">
<?php 
 echo htmlspecialchars(file_get_contents($PROJECT_URL.'pages/templates/categories-subcategories/dal.module.product.categories.php.txt'));
?>
</code>
</pre>
</div><!--/.mtop15p .mbot15p -->
<!-- -->
</div><!--/#dal -->
</div><!--/.tab-content -->


</div><!--/#backend -->
<!-- Backend ::: END -->

  
  <div id="frontEnd" class="tab-pane fade">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
  </div>
</div>

</div><!--/.list-group-item -->
</div><!--/.list-group -->
<!-- -->