<?php

include_once "../../app/Controller.php";

$controller = new Controller();

$dataCatLaptop = $controller->getDataSupplyLaptop();
$dataCatDesktop = $controller->getDataSupplyDesktop();
$dataCatGadget = $controller->getDataSupplyGadget();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script> 
        document.createElement("dataLaptop");
        document.createElement("dataDesktop");
        document.createElement("dataGadget");
        document.createElement("dataPreview");
        
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Category Preview -->

    <div class="h-screen">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-12">

                <h2 class="text-2xl font-bold text-gray-900">Collections</h2>

                <!-- Banner -->
                <div class="mt-6 rounded-lg relative isolate flex justify-center items-center gap-x-6 overflow-hidden bg-gray-50 px-6 py-2.5">
                        <div class="absolute left-[max(-7rem,calc(50%-52rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
                            <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"></div>
                        </div>
                        <div class="absolute left-[max(45rem,calc(50%+8rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
                            <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"></div>
                        </div>
                        <div class="flex flex-wrap items-center gap-x-56 gap-y-2">
                            <!-- <form action="../../config/index.php?showLaptop" method="POST">
                                <input type="submit" value="Laptop" class="flex-none rounded-full bg-gray-900 px-3.5 py-1 text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">
                            </form> -->
                            <a id="laptopTrigger" href="#showLaptop" class="flex-none rounded-full bg-gray-900 px-3.5 py-1 text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">Laptop</a>
                            <a id="desktopTrigger" href="#showDesktop" class="flex-none rounded-full bg-indigo-600 px-3.5 py-1 text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">Desktop</a>
                            <a id="gadgetTrigger" href="#showGadget" class="flex-none rounded-full bg-slate-500 px-3.5 py-1 text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">Gadget</a>
                        </div>
                        <!-- <div class="flex flex-1 justify-end">
                            <button type="button" class="-m-3 p-3 focus-visible:outline-offset-[-4px]">
                            <span class="sr-only">Dismiss</span>
                            <svg class="h-5 w-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                            </svg>
                            </button>
                        </div> -->
                </div>
                <!-- ... -->



                <div class="mt-6 grid grid-cols-3 gap-y-6 gap-x-6 space-y-0">
        
                    
                    <?php 

                        if(!empty($dataCatLaptop)) {

                            foreach ($dataCatLaptop as $row) {
            
                    ?>
                                        
                    <dataLaptop class="hidden">
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                            <a href="#">
                                <img class="p-4 rounded-t-lg" src="<?= $row["GAMBAR_SUPPLY"]; ?>" alt="" />
                            </a>
                            <div class="p-4">
                                <a href="#">
                                    <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900"><?= $row["NAMA_SUPPLY"]; ?></h5>
                                </a>
                                <div class="mb-3">
                                    <p class="mb-3 text-lg font-bold text-gray-700">Rp <?= $row["HARGA_SUPPLY"]; ?></p>

                                    <?php

                                    if(isset($row["STOK_SUPPLY"]) && $row["STOK_SUPPLY"] >= 50) {
                                        echo '<span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">' . $row["STOK_SUPPLY"] . '</span>';
                                    } else if(isset($row["STOK_SUPPLY"]) && $row["STOK_SUPPLY"] < 50 && $row["STOK_SUPPLY"] >= 30) {
                                        echo '<span class="bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">' . $row["STOK_SUPPLY"] . '</span>';
                                    } else {
                                        echo '<span class="bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">' . $row["STOK_SUPPLY"] . '</span>';
                                    }
                                    ?>
                                    
                                    <p class="mt-3 max-w-max text-white bg-gradient-to-br from-green-400 to-blue-600 font-medium rounded-lg text-sm p-2">Laptop</p>
                                
                                </div>

                                <a href="buy-supply.php?act=showPreview&id=<?= $row["ID_BARANG"]; ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    Show preview
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                    </svg>
                                </a>
    
                            </div>
                        </div>
                    </dataLaptop>
                        
                    <?php

                        }

                    } else {
                        echo "No data available";
                    }
                    
                    ?>
        
                </div>

                <!-- Data Desktop -->

                <div class="mt-6 grid grid-cols-3 gap-y-6 gap-x-6 space-y-0">
                        
                                    
                        <?php 

                            if(!empty($dataCatDesktop)) {

                                foreach ($dataCatDesktop as $row) {

                        ?>
                                            
                        <dataDesktop class="hidden">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                                <a href="#">
                                    <img class="p-4 rounded-t-lg" src="<?= $row["GAMBAR_SUPPLY"]; ?>" alt="" />
                                </a>
                                <div class="p-4">
                                    <a href="#">
                                        <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900"><?= $row["NAMA_SUPPLY"]; ?></h5>
                                    </a>
                                    <div class="mb-3">
                                        <p class="mb-3 text-lg font-bold text-gray-700">Rp <?= $row["HARGA_SUPPLY"]; ?></p>

                                        <?php

                                        if(isset($row["STOK_SUPPLY"]) && $row["STOK_SUPPLY"] >= 50) {
                                            echo '<span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">' . $row["STOK_SUPPLY"] . '</span>';
                                        } else if(isset($row["STOK_SUPPLY"]) && $row["STOK_SUPPLY"] < 50 && $row["STOK_SUPPLY"] >= 30) {
                                            echo '<span class="bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">' . $row["STOK_SUPPLY"] . '</span>';
                                        } else {
                                            echo '<span class="bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">' . $row["STOK_SUPPLY"] . '</span>';
                                        }
                                        ?>
                                        
                                        <p class="mt-3 max-w-max text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 font-medium rounded-lg text-sm p-2">Desktop</button>
                                        <!-- <p class="font-normal text-gray-700">Category: Laptop</p> -->
                                    </div>
                                    <a href="buy-supply.php?act=showPreview&id=<?= $row["ID_BARANG"]; ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                        Show preview
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </dataDesktop>

                            
                        <?php

                            }

                        } else {
                            echo "No data available";
                        }
                        
                        ?>

                <!-- ... -->

            </div>

            <!-- Data Gadget -->

            <div class="mt-6 grid grid-cols-3 gap-y-6 gap-x-6 space-y-0">
                       
                    <?php 

                        if(!empty($dataCatGadget)) {

                            foreach ($dataCatGadget as $row) {

                    ?>
                                        
                    <dataGadget class="hidden">
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                            <a href="#">
                                <img class="p-4 rounded-t-lg" src="<?= $row["GAMBAR_SUPPLY"]; ?>" alt="" />
                            </a>
                            <div class="p-4">
                                <a href="#">
                                    <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900"><?= $row["NAMA_SUPPLY"]; ?></h5>
                                </a>
                                <div class="mb-3">
                                    <p class="mb-3 text-lg font-bold text-gray-700">Rp <?= $row["HARGA_SUPPLY"]; ?></p>

                                    <?php

                                    if(isset($row["STOK_SUPPLY"]) && $row["STOK_SUPPLY"] >= 50) {
                                        echo '<span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">' . $row["STOK_SUPPLY"] . '</span>';
                                    } else if(isset($row["STOK_SUPPLY"]) && $row["STOK_SUPPLY"] < 50 && $row["STOK_SUPPLY"] >= 30) {
                                        echo '<span class="bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">' . $row["STOK_SUPPLY"] . '</span>';
                                    } else {
                                        echo '<span class="bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">' . $row["STOK_SUPPLY"] . '</span>';
                                    }
                                    ?>
                                    
                                    <p class="mt-3 max-w-max text-white bg-gradient-to-br from-pink-500 to-orange-400 font-medium rounded-lg text-sm p-2">Gadget</button>
                                    <!-- <p class="font-normal text-gray-700">Category: Laptop</p> -->
                                </div>

                                <!-- <form action="?showPreview&id=" method="GET">
                                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Default</button>
                                </form> -->
                                <a href="buy-supply.php?act=showPreview&id=<?= $row["ID_BARANG"]; ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    Show preview
                                </a>
                            </div>
                        </div>
                    </dataGadget>

                        
                    <?php

                        }

                    } else {
                        echo "No data available";
                    }
                    
                    ?>

            <!-- ... -->
        </div>
    </div>

    <!-- ... -->

    <!-- Product Quickviews -->
       
    <!--  -->

    <script>
    // const laptopTrigger = document.getElementById('laptopHref');
    // const laptopButton = document.getElementById('laptopTrigger');
    // const dataLaptop = document.getElementsByTagName('dataLaptop');
    // // document.createElement("dataLaptop");

    // const laptopQuickview = document.getElementById('laptopQuickview');
    // const closeButton = document.getElementById('closeButton');
    // const supplyButton = document.getElementById('supplyButton');
    // const supplyForm = document.getElementById('supplyForm');
    // const supplyData = document.getElementsByClassName('supplyData');

    // supplyButton.onclick = function() {
    //     supplyForm.style.display = "block";
    //     supplyData.style.display = "block";
    // }

    // supplyData.onclick = function() {
    //     supplyData.style.display = "none";
    // }

    $("#laptopTrigger").click(function(){
        $("dataLaptop").show();
        $("dataDesktop").hide();
        $("dataGadget").hide();
    });

    $("#desktopTrigger").click(function(){
        $("dataLaptop").hide();
        $("dataGadget").hide();
        $("dataDesktop").show();
    });

    $("#gadgetTrigger").click(function(){
        $("dataLaptop").hide();
        $("dataGadget").show();
        $("dataDesktop").hide();
    });

    // $(document).ready(function() {
    //     $("#previewButton").click(function() {
    //         var itemId = $(this).data("id");

    //         // Use AJAX to fetch data for the selected item
    //         $.ajax({
    //             type: "GET",
    //             url: "?act=showPreview&id=" + itemId,
    //             success: function(data) {
    //                 // Update the modal content with the fetched data
    //                 $("#modalContainer").html(data);
    //                 $("#dataPreview").show();
    //             },
    //             error: function() {
    //                 alert("Error fetching item data");
    //             }
    //         });
    //     });

    //     $("#closeButton").click(function() {
    //         $("#dataPreview").hide();
    //     });
    // });
    // laptopButton.onclick = function() {
    //     dataLaptop.style.display = "block";
    // }


    // laptopTrigger.onclick = function() {
    //     laptopQuickviews.style.display = "block";
    // }

    // cb1.onclick = function() {
    //     laptopQuickviews.style.display = "none";
    // } -->

    </script>

</body>

</html>