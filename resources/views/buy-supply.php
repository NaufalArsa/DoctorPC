<?php

include_once "../../app/Controller.php";

$controller = new Controller();

if (isset($_GET['act']) && $_GET['act'] == 'showPreview') {

    $id = $_GET['id'];

    $dataPreview = $controller->getDataPreview($id);

    // Output HTML for the modal content
    foreach ($dataPreview as $row) {
        $name = $row['NAMA_SUPPLY'];
        $price = $row['HARGA_SUPPLY'];
        $stock = $row['STOK_SUPPLY'];
        $idcategory = $row['ID_CATEGORY'];

        if($idcategory == 1) {
            $category = "Laptop";
        } else if($idcategory == 2) {
            $category = "Desktop";
        } else {
            $category = "Gadget";
        }

        $image = $row['GAMBAR_SUPPLY'];

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <div class="bg-white">
    <div class="pt-6">
        <nav aria-label="Breadcrumb">
        <ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <li>
            <div class="flex items-center">
                <a href="supply-list.php" class="mr-2 text-sm font-medium text-gray-900">Our Collections</a>
                <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                </svg>
            </div>
            </li>

            <li class="text-sm">
            <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600"><?= $name ?></a>
            </li>
        </ol>
        </nav>

        <!-- Image gallery -->
        <div class="mx-auto max-h-80  mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:px-8">
        <div class="hidden overflow-hidden rounded-lg lg:block">
            <img src="<?= $image ?>" alt="Two each of gray, white, and black shirts laying flat." class="h-full w-full object-cover object-center">
        </div>
        <!-- <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
            <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
            <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-tertiary-product-shot-01.jpg" alt="Model wearing plain black basic tee." class="h-full w-full object-cover object-center">
            </div>
            <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
            <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-tertiary-product-shot-02.jpg" alt="Model wearing plain gray basic tee." class="h-full w-full object-cover object-center">
            </div>
        </div>
        <div class="aspect-h-5 aspect-w-4 lg:aspect-h-4 lg:aspect-w-3 sm:overflow-hidden sm:rounded-lg">
            <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-featured-product-shot.jpg" alt="Model wearing plain white basic tee." class="h-full w-full object-cover object-center">
        </div> -->
        </div>

        <!-- Product info -->
        <div class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
        <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
            <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl"><?= $name ?></h1>
        </div>

        <!-- Options -->
        <div class="mt-4 lg:row-span-3 lg:mt-0">
            <h2 class="sr-only">Receipt</h2>
            <p class="text-3xl tracking-tight text-gray-900">Receipt</p>

            <!-- Reviews -->

            <form class="mt-10">
            <!-- Colors -->
            <div>
                <h3 class="text-sm font-medium text-gray-900">Color</h3>

            </div>

            <!-- Sizes -->
            <div class="mt-10">
                <div class="flex items-center justify-between">
                <h3 class="text-sm font-medium text-gray-900">Size</h3>
                </div>

                
            </div>

            <button type="submit" class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add to bag</button>
            </form>
        </div>

        <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
            <!-- Description and details -->
            <div>
            <h3 class="sr-only">Price</h3>

            <div class="space-y-6">
                <p class="text-3xl tracking-tight text-gray-900">Rp <?= $price ?></p>
            </div>
            </div>

            <div class="mt-4">
                <h3 class="text-lg font-medium text-gray-900">Stock</h3>
                <p class="mt-2 text-gray-400"><span class="text-gray-600"><?= $stock ?></span></p>
            </div>

            <div class="mt-4">
                <h2 class="text-lg font-medium text-gray-900">Category</h2>

            <div class="mt-2 space-y-6">
                <p class="text-sm text-gray-600"><?= $category ?></p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>

</body>
</html>