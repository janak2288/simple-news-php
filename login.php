<?php include 'header.php'?>
    <div class="flex justify-center mt-10">
        <form action="login.php" method="post" class="bg-slate-100 rounded shadow-md p-10">

<h1 class="text-center text-2xl font-bold text-indigo-600"> Login </h1>
<div class="mb-4">
<input type="text" name="username" class="mt-1 p-2 rounded-lg w-full" placeholder="username" required>
 </div>

<div class="mb-4">
<input type="password" name="password" class="mt-1 p-2 rounded-lg w-full" placeholder="password" required>
 </div>

<a href="index.php" class="bg-indigo-600 text-white p-2 rounded-lg w-full block text-center hover:bg-red-600"> Login </a>

         </form>
    </div>

 <?php include 'footer.php'?>   