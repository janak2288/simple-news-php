<?php include 'header.php'; ?>
<h1 class="text-xl font-bold">Create Category </h1>
<hr class="h-1 bg-indigo-100">

<form class="max-w-3xl m-auto rounded-lg shadow px-4 py-5 mt-4" method="post" action="actioncategory.php">
<h1  class="text-center md:text-3xl text-2xl font-bold text-indigo-600"> Create New Category</h1>
<div class="mb-2"> 
<label class="text-xl"> Priority</label>
<input type="number" name="priority" class="w-full  ring-slate-800 ring-1 rounded p-2 my-2 focus:ring-indigo-600" placeholder="Priority">
 </div>


<div class="mb-2"> 
<label class="text-xl"> Cateogory Name</label>
<input type="text" name="category" class="w-full  ring-slate-800 ring-1 rounded p-2 my-2 focus:ring-indigo-600" placeholder="Category Name">
 </div>
<div class="mb-2 text-right flex flex-row-reverse"> 

<button class="rounded bg-red-600 text-white px-4 py-2 hover:bg-cyan-600 ml-2">Cancel </button>

<button name="store" class="rounded bg-indigo-600 text-white px-4 py-2 hover:bg-red-600 ">Add </button>

</div>

</form>
















<?php include 'footer.php'; ?>