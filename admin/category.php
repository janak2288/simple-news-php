<?php include 'header.php'; ?>

<h1 class="text-xl font-bold">Categories </h1>
<hr class="h-1 bg-indigo-100">

<div class="text-right my-5"> 
<a href="createcategory.php" class="bg-indigo-600 p-2 px-3 rounded hover:bg-red-600 text-white focus:ring-2">
<span class="dashicons dashicons-plus"></span> Add Category </a></div>


<table class="border w-full"> 
<thead> 

<tr> 
<th class="border bg-indigo-100 border-indigo-600">Priority  </th> 
<th class="border bg-indigo-100 border-indigo-600"> Category Name </th>
<th class="border bg-indigo-100 border-indigo-600"> Action </th> 
</tr></thead>

<tbody class="text-center" > 
<?php
include '../includes/dbconnection.php';

$sql = "SELECT * FROM categories";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {

?>




<tr> 
<td class="border border-indigo-600 p-2"> <?= $row['priority'] ?></td>
<td class="border border-indigo-600 p-2"> <?= $row['name'] ?></td>
<td class="border border-indigo-600 p-2 space-x-3"> 

<a href="" class="bg-green-100 text-green-600 border border-green-600 rounded p-1 px-2"> <span class="dashicons dashicons-edit"></span> Edit </a> 

<a href="" class="bg-red-100 text-red-600 border border-red-600 rounded p-1 px-2 "> 
	<span class="dashicons dashicons-trash"></span> Delete </a> 

</td>

</tr>

<?php } } ?>
</tbody>






</table>



<?php include 'footer.php'; ?>