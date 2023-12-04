<?php 

session_start();
$username = $_SESSION['name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
<div class="min-h-full">
  <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
          </div>
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
          <div class="ml-4 flex items-center md:ml-6">
            <!-- <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
              </svg>
            </button> -->
            <h3 class="text-white block rounded-md px-3 py-2 text-base font-medium">Hello, <?php echo $username; ?></h3>
  
            <img class="ml-5 h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
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
          <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
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
        <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Reports</a>
      </div>
      <div class="border-t border-gray-700 pb-3 pt-4">
        <div class="flex items-center px-5">
          <div class="flex-shrink-0">
            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          </div>
          <div class="ml-3">
            <div class="text-base font-medium leading-none text-white">Tom Cook</div>
            <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
          </div>
          <button type="button" class="relative ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">View notifications</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
            </svg>
          </button>
        </div>
        <div class="mt-3 space-y-1 px-2">
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your Profile</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign out</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>
    </div>
  </header> -->
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Fitur Beli Supply -->
      <div class="relative overflow-hidden bg-white">
        <div class="pb-80 pt-16 sm:pb-40 sm:pt-24 lg:pb-48 lg:pt-40">
          <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
            <div class="sm:max-w-lg">
              <h1 class="text-4xl font-bold tracking-tight leading-loose text-gray-900 sm:text-6xl">Supply for your PC Desktop</h1>
              <p class="mt-4 text-xl text-gray-500">We also offer a range of supplies designed to meet your essential PC needs, assisting you in maintaining and optimizing your computer.</p>
            </div>
            <div>
              <div class="mt-10">
                <!-- Decorative image grid -->
                <div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                  <div class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                    <div class="flex items-center space-x-6 lg:space-x-8">
                      <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                        <div class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                          <img src="https://cdn.mos.cms.futurecdn.net/cd8789b58034aacd16e60cfb73c2e74a-650-80.jpg.webp" alt="" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="https://i.pinimg.com/736x/d4/4f/d0/d44fd0a3be470fce27f13d772d46124d.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                      </div>
                      <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="https://i.pinimg.com/564x/a5/29/61/a529610016c5d6e1542f1b4139fdc616.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="https://i.pinimg.com/564x/52/66/fc/5266fc0868d05141a6c151b2d8b9624f.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="https://i.pinimg.com/236x/2b/57/fc/2b57fc98b0bc02655407c4984fe8b604.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                      </div>
                      <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="https://i.pinimg.com/236x/fd/72/7d/fd727db859403b1d94373ec4f118cd3f.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="https://i.pinimg.com/236x/ab/86/c5/ab86c5ac8703c9490865bc9c3094c23c.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <a href="#" class="inline-block rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-center font-medium text-white hover:bg-indigo-700">Find your supply</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Fitur Lain -->
      <div class="relative overflow-hidden bg-white">
        <div class="pb-80 pt-8 sm:pb-40 sm:pt-24 lg:pb-12 lg:pt-12">
          <div class="grid grid-cols-2 gap-x-56 mx-auto max-w-7xl">
            <!-- Decorative image grid -->
              <div class="">
                <div class="pointer-events-none lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                  <div class="">
                    <div class="flex items-center space-x-6 lg:space-x-8">
                      <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                        <div class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                          <img src="https://cdn.mos.cms.futurecdn.net/cd8789b58034aacd16e60cfb73c2e74a-650-80.jpg.webp" alt="" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="https://i.pinimg.com/736x/d4/4f/d0/d44fd0a3be470fce27f13d772d46124d.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                      </div>
                      <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="https://i.pinimg.com/564x/a5/29/61/a529610016c5d6e1542f1b4139fdc616.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="https://i.pinimg.com/564x/52/66/fc/5266fc0868d05141a6c151b2d8b9624f.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="https://i.pinimg.com/236x/2b/57/fc/2b57fc98b0bc02655407c4984fe8b604.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                      </div>
                      <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="https://i.pinimg.com/236x/fd/72/7d/fd727db859403b1d94373ec4f118cd3f.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="https://i.pinimg.com/236x/ab/86/c5/ab86c5ac8703c9490865bc9c3094c23c.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="place-self-center sm:max-w-lg">
                <h1 class="text-4xl font-bold tracking-tight leading-loose text-gray-900 sm:text-6xl">Supply for your PC Desktop</h1>
                <p class="mt-4 text-xl text-gray-500">We also offer a range of supplies designed to meet your essential PC needs, assisting you in maintaining and optimizing your computer.</p>
                <a href="#" class="mt-10 inline-block rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-center font-medium text-white hover:bg-indigo-700">Find your supply</a>
              </div>
          </div>
        </div>
      </div>
    </main>
  </div>

<script>
  
</script>

</body>
</html>