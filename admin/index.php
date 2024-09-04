<?php include('header.php') ?>


<h1 class="text-xl font-bold">Dashboard </h1>
<hr class="h-1 bg-indigo-100">

<div class="grid grid-cols-3 gap-5 mt-1"> 
    <div class="bg-indigo-100 p-5 rounded-lg shadow text-center hover:bg-red-100 hover:text-indigo-600 transition duration-300">
        <div class="flex items-center justify-center">
            <div class="text-6xl text-indigo-600 mr-4">
                <span class="dashicons dashicons-category"></span>
            </div>
            <div>
                <h2 class="font-bold text-2xl">Categories</h2>
                <p class="mt-2 text-4xl font-bold">4</p>
            </div>
        </div>
    </div>

    <div class="bg-indigo-100 p-5 rounded-lg shadow text-center hover:bg-red-100 hover:text-indigo-600 transition duration-300">
        <div class="flex items-center justify-center">
            <div class="text-6xl text-indigo-600 mr-4">
                <span class="dashicons dashicons-admin-site-alt3"></span>
            </div>
            <div>
                <h2 class="font-bold text-2xl">News</h2>
                <p class="mt-2 text-4xl font-bold">4</p>
            </div>
        </div>
    </div>

    <div class="bg-indigo-100 p-5 rounded-lg shadow text-center hover:bg-red-100 hover:text-indigo-600 transition duration-300">
        <div class="flex items-center justify-center">
            <div class="text-6xl text-indigo-600 mr-4">
                <span class="dashicons dashicons-visibility"></span>
            </div>
            <div>
                <h2 class="font-bold text-2xl">Views</h2>
                <p class="mt-2 text-4xl font-bold">4</p>
            </div>
        </div>
    </div>
</div>







<?php include('footer.php') ?>
