<?php
include("../../app/Controller.php");

$controller = new Controller();
$dataReq = $controller->showrequest();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Service Request</title>
    <style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        /* Set the body to at least the full height of the viewport */
    }

    main {
        flex: 1;
        /* Allow the main content to grow and fill the available space */
    }

    footer {
        shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        max-width: 100%;
        width: 100%;
    }
    </style>
</head>

<body class="bg-gray-100">

    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="hidden md:block">
                        <div class="ml-5 flex items-baseline space-x-4">
                            <a href="#" class="text-white rounded-md px-3 py-2 text-lg font-bold">SERVICE - IT</a>
                            <!-- <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Team</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Projects</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Calendar</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Reports</a> -->
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="  flex items-center">
                        <!-- <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                      <span class="absolute -inset-1.5"></span>
                      <span class="sr-only">View notifications</span>
                      <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                      </svg>
                    </button> -->
                        <h3 class="text-white block text-base font-medium">Hello,
                            <?php

                        if(isset($_SESSION['name'])) {
                            $username = $_SESSION['name'];
                        } else {
                            $username = "Guest";
                        }

                        echo $username; ?></h3>

                        <a href="#"><i
                                class="ml-5 h-8 w-8 grid place-self-center p-2 pl-2.5 hover:text-gray-800 hover:bg-white hover:rounded-full hover:duration-700 fa-regular fa-user text-white"></i></a>
                        <!-- <img class="ml-5 h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""> -->
                        <!-- Profile dropdown -->
                        <!-- <div class="relative ml-3">
                      <div>
                        <button type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                          <span class="absolute -inset-1.5"></span>
                          <span class="sr-only">Open user menu</span>
                        </button>
                      </div>
                      <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                      </div>
                    </div> -->
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <!-- Mobile menu button -->
                    <button type="button"
                        class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!-- Menu open: "hidden", Menu closed: "block" -->
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!-- Menu open: "block", Menu closed: "hidden" -->
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="md:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium"
                    aria-current="page">Dashboard</a>
                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Reports</a>
            </div>
            <div class="border-t border-gray-700 pb-3 pt-4">
                <div class="flex items-center px-5">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full"
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                        <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
                    </div>
                    <button type="button"
                        class="relative ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">View notifications</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </button>
                </div>
                <div class="mt-3 space-y-1 px-2">
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your
                        Profile</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign
                        out</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-8">
        <button type="button" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
            id="addRequestBtn">Tambah Request</button>
        <!-- Form to add a new service request -->
        <div id="addRequestFormModal" class="hidden fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <div
                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <span class="close-form absolute top-0 right-0 cursor-pointer p-4">&times;</span>
                        <form id="addRequestForm">
                            <div class="mb-4">
                                <label for="namaPelanggan" class="block text-gray-700 text-sm font-bold mb-2">Nama
                                    Pelanggan:</label>
                                <input type="text" name="namaPelanggan" required
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>

                            <div class="mb-4">
                                <label for="kontakPelanggan" class="block text-gray-700 text-sm font-bold mb-2">Kontak
                                    Pelanggan:</label>
                                <input type="text" name="kontakPelanggan" required
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>

                            <div class="mb-4">
                                <label for="merkDevice" class="block text-gray-700 text-sm font-bold mb-2">Merk
                                    Device:</label>
                                <input type="text" name="merkDevice" required
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>

                            <div class="mb-4">
                                <label for="statusService" class="block text-gray-700 text-sm font-bold mb-2">Status
                                    Service:</label>
                                <input type="text" name="statusService" required
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>

                            <div class="mb-4">
                                <label for="deskripsi"
                                    class="block text-gray-700 text-sm font-bold mb-2">Deskripsi:</label>
                                <textarea name="deskripsi" required
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                            </div>

                            <div class="mb-4">
                                <label for="idMechanic" class="block text-gray-700 text-sm font-bold mb-2">ID
                                    Mechanic:</label>
                                <input type="text" name="idMechanic" required
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>

                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded-md focus:outline-none focus:shadow-outline">Submit
                                Request</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <form class="flex items-center mb-4">
            <div class="flex-shrink-0">
                <input type="text"
                    class="border border-gray-300 focus:outline-none focus:ring focus:border-blue-300 rounded-md py-2 px-4"
                    id="search" placeholder="Masukan Nama">
            </div>
            <button type="button" class="ml-2 bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded-md"
                id="searchBtn">Search</button>
        </form>
        <table class="min-w-full bg-white border border-gray-300 mx-auto">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID Service</th>
                    <th class="py-2 px-4 border-b">Nama Pelanggan</th>
                    <th class="py-2 px-4 border-b">Kontak Pelanggan</th>
                    <th class="py-2 px-4 border-b">Merk Device</th>
                    <th class="py-2 px-4 border-b">Status Device</th>
                    <th class="py-2 px-4 border-b">Deskripsi</th>
                    <th class="py-2 px-4 border-b">ID Mechanic</th>
                    <th class="py-2 px-4 border-b">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
        foreach ($dataReq as $row) {
            echo "<tr>";
            echo "<td class='py-2 px-4 border-b'>{$row['ID_SERVICE']}</td>";
            echo "<td class='py-2 px-4 border-b'>{$row['NAMA_PELANGGAN']}</td>";
            echo "<td class='py-2 px-4 border-b'>{$row['KONTAK_PELANGGAN']}</td>";
            echo "<td class='py-2 px-4 border-b'>{$row['MERK_DEVICE']}</td>";
            echo "<td class='py-2 px-4 border-b'>{$row['STATUS_SERVICE']}</td>";
            echo "<td class='py-2 px-4 border-b'>{$row['DESKRIPSI']}</td>";
            echo "<td class='py-2 px-4 border-b'>{$row['ID_MECHANIC']}</td>";
            echo "<td class='py-2 px-4 border-b'><button class='bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded-md text-sm' onclick='deleteService({$row['ID_SERVICE']})'>Delete</button></td>";
            echo "</tr>";
        }
        ?>
            </tbody>
        </table>

    </div>
    <script>
    $(document).ready(function() {
        // Handle search button click event
        $("#searchBtn").click(function() {
            var searchText = $("#search").val().toLowerCase();

            // Loop through each row in the table and hide/show based on the search text
            $("tbody tr").each(function() {
                var rowText = $(this).text().toLowerCase();
                if (rowText.includes(searchText)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
        $("#addRequestBtn").click(function() {
            $("#addRequestFormModal").show();
        });

        // Close the form modal when the close button is clicked
        $(".close-form").click(function() {
            $("#addRequestFormModal").hide();
        });

        // Handle form submission using AJAX
        $("#addRequestForm").submit(function(event) {
            event.preventDefault();
            var formData = $(this).serialize();

            $.ajax({
                type: 'POST',
                url: '../../app/Controller.php', // Replace with the actual path to your controller
                data: formData +
                    '&action=addRequest', // Include the action for adding a request
                success: function(response) {
                    // Reload the page or update the table as needed
                    location.reload();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert('An error occurred while adding the service request.');
                }
            });
        });
    });

    function deleteService(serviceId) {
        if (confirm('Are you sure you want to delete this service?')) {
            $.ajax({
                type: 'POST',
                url: '../../app/Controller.php', // Replace with the actual path to your controller
                data: {
                    action: 'deleteService',
                    serviceId: serviceId
                },
                success: function(response) {
                    // Reload the page or update the table as needed
                    location.reload();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert('An error occurred while deleting the service.');
                }
            });
        }
    }
    </script>
</body>
<footer class="shadow max-auto px-8 bg-gray-800 mt-auto">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/"
                class="hover:underline">Kelompok 2</a>. All Rights Reserved.</span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
            <li><a href="#" class="hover:underline me-4 md:me-6">Naufal</a></li>
            <li><a href="#" class="hover:underline me-4 md:me-6">Ryan</a></li>
            <li><a href="#" class="hover:underline me-4 md:me-6">Arvin</a></li>
            <li><a href="#" class="hover:underline me-4 md:me-6">Hali</a></li>
            <li><a href="#" class="hover:underline">Alam</a></li>
        </ul>
    </div>
</footer>

</html>

<?php
?>