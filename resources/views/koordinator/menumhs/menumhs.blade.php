<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <Title>menu</Title>
        <link rel="stylesheet" type="text/css" href="../style/menustyle.css">
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:light' rel='stylesheet' type='text/css'>      
        <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- tailwindscss -->
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <style>
            body{
                font-size: 0.875rem;
            }
            @media only screen and (max-width: 1023px) {
                .modal-post-head{
                    margin-top: 20px;
                    width: 85%;
                }
                .modal-body{
                    height: 700px;
                    width: 100%;
                    overflow: hidden;
                }
                .modal-kanan{
                    width: 100% !important;
                    height: 85% !important;
                    border: 1px solid transparent;
                  
                }
                .modal-kiri{
                    height: 35%;
                }
                .modal-kiri img{
                   border: 2px solid white;   

                }
                .modal-chat{
                    height: 70% !important;
                   
                }
                .footer-modal{
                    position: absolute;
                    bottom: 0;
                    width: 100%;
                    margin-left: 0;
                }
            }
        </style>
      
    </head>
    <body>

    <nav class="flex items-center bg-orange-500 flex-wrap h-14 z-30">
        <div class="flex-none w-auto sm:pr-32 sm:pl-4">
            <!-- <span><ion-icon class="text-4xl " name="menu"></ion-icon></span> -->
            <a href=""><img class="img-responsive w-32 mx-4 visible " src="https://www.itenas.ac.id/wp-content/uploads/2020/07/Varian-Logo-Itenas-04-500x127.png" alt=""></a>
        </div>
        <div class="grow justify-center flex">
            <!-- <a href=""><img class="img-responsive w-32 mx-4 visible " src="https://www.itenas.ac.id/wp-content/uploads/2021/01/Varian-Logo-Itenas-FULL-03.png" alt=""></a> -->
        </div>
        <div class="flex-none w-auto">
            <div class="ml-auto">
                <!-- <button type="button" class="show-notif px-3">
                    <div class="absolute inline-block -translate-x-2/4 -translate-y-1/4 rotate-0 skew-x-0 skew-y-0 p-2.5 text-sm bg-red-700 rounded-full z-10"></div>
                    <ion-icon class="text-4xl hover:text-slate-100 transition-all" name="notifications-outline"></ion-icon>
                </button> -->
                <a href="profilemhs.html" class="px-3 hover:text-slate-100 transition-all">
                    <span><ion-icon class="text-4xl " name="person-circle-outline"></ion-icon></span>
                </a>
                <a href="" class="px-3 pr-4 hover:text-slate-100 transition-all">
                    <span><ion-icon class="text-4xl " name="exit-outline"></ion-icon></span>
                </a>
            </div>
        </div>
    </nav>

    <div class="modal flex items-center hidden ">
        <!-- modal -->
        <span><ion-icon class="text-4xl text-white fixed" name="navigate" style="right: 180px; top: 39px;"></ion-icon></span>
    <div class="bg-white rounded shadow-lg fixed top-12 right-10 inline-block   " style="width: 400px;">
        <!-- modal header -->
        <div class="px-4 py-2 flex justify-between items-center">
            <h3 class="font-semibold text-lg">Notification</h3>
            <button class="text-black close-modal hover:scale-125 transition-all">&cross;</button>
          </div>
        <!-- modal body -->
        <!-- 1 -->
        <div class="flex justify-between px-3 py-1 bg-white items-center gap-1 rounded-lg border border-gray-100 my-3 hover:scale-105 transition-all ">
            <div class="w-16">
                <div class="border-gray-300 rounded-full w-11 h-10 overflow-hidden mr-3">
                    <img class="h-auto object-center"
                    src="https://venngage-wordpress-gallery.s3.amazonaws.com/uploads/2018/10/Classic-Tweak-Halloween-Event-Poster-Example2.jpg" alt="blog">
                </div>
            </div>
            <div class="w-72">
                <p class="font-semibold break-words">152019073 Muhammad Hasby faturisqi</p>
                <p class="font-mono break-words"> would like to connect with you</p>
                <p class="text-gray-600">7 hours ago</p>
            </div>
            <div class="flex gap-2">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                      </svg>
                </button>
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                </button>
            </div>
        </div>
        <!-- 2 -->
        <div class="flex justify-between px-3 py-1 bg-white items-center gap-1 rounded-lg border border-gray-100 my-3 hover:scale-105 transition-all">
            <div class="w-16">
                <div class="border-gray-300 rounded-full w-11 h-10 overflow-hidden mr-3">
                    <img class="h-auto object-center"
                    src="https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1-744x744.jpg" alt="blog">
                </div>
            </div>
            <div class="w-72">
                <p class="font-semibold break-words">152019073 Muhammad Hasby faturisqi</p>
                <p class="font-mono break-words"> would like to connect with you</p>
                <p class="text-gray-600">7 hours ago</p>
            </div>
            <div class="flex gap-2">
                <button class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                      </svg>
                </button>
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                </button>
            </div>
        </div>
      </div>
    </div>

    <!-- modal posting -->
    <div class="modal modal-post flex items-center justify-center bg-black/75 hidden transition-all">
        <!-- modal -->
    <div class="modal-post-head bg-white rounded shadow-lg fixed inline-block h-5/6">
        <!-- modal body -->
        <div class="modal-body flex-none lg:flex h-full lg:bg-black p-0">
            <!-- kiri gambar-->
            <div class="modal-kiri flex justify-center my-auto mx-auto" style="max-width: 900px;">
                <img class="w-full object-cover object-center" style="max-height: 500px; max-width: 1000px;"
                src="https://posterspy.com/wp-content/uploads/2019/09/joker-okppp-okayp-RVB-01.png" alt="blog">
            </div>
            <!-- kanan -->
            <div class="modal-kanan grow bg-white overflow-hidden" style="width: 400px;">
                <button class="text-black close-post hover:scale-125 transition-all right-3 absolute p-2 ">&cross;</button>
                <!-- header-profile -->
                <div class="p-2 px-3 flex pb-2 fixed ">
                    <div class="w-12">
                        <div class="rounded-full w-12 h-12 overflow-hidden">
                            <img class="h-auto object-center w-full"
                            src="https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1-744x744.jpg" alt="blog">
                        </div>
                    </div>
                    <div class="w-full m-1 mx-3">
                        <a href=""><span class="font-semibold">152019073<br>Muhammad Hasby fatirisqi</span></a>
                    </div>
                </div>
                <!-- body -->
                <div class="modal-chat p-3 border-2 max-h-screen overflow-y-auto break-words" style="width: 100%;margin-top: 80px; height: 100%;">
                    <p>Kelompoksanjcsakcsasacasncasncasnclsaclsacnsalcnaslncsa
                        sacsalkncsnalcnsalcsnalcasnlcasnlcasnlcasnlcasnlcsnalcas              
                    </p>
                    <!-- comment -->
                    <div class="mt-4">
                        <div class="flex pb-2">
                            <div class="w-12">
                                <div class="rounded-full w-12 h-12 overflow-hidden">
                                    <img class="h-auto object-center w-full"
                                    src="https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1-744x744.jpg" alt="blog">
                                </div>
                            </div>
                            <div class="w-full m-1 mx-3 w-72 break-words">
                                <a href=""><span class="font-semibold">152019073 Muhammad Hasby fatirisqi</span></a>
                                <p>hai</p>
                                <p class="text-gray-400">7 jam</p>
                            </div>
                        </div>
                    </div>
                       <!-- comment -->
                       <div class="mt-4">
                        <div class="flex pb-2">
                            <div class="w-12">
                                <div class="rounded-full w-12 h-12 overflow-hidden">
                                    <img class="h-auto object-center w-full"
                                    src="https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1-744x744.jpg" alt="blog">
                                </div>
                            </div>
                            <div class="w-full m-1 mx-3 w-72 break-words">
                                <a href=""><span class="font-semibold">152019073 Muhammad Hasby fatirisqi</span></a>
                                <p>hai</p>
                                <p class="text-gray-400">7 jam</p>
                            </div>
                        </div>
                    </div>
                       <!-- comment -->
                       <div class="mt-4">
                        <div class="flex pb-2">
                            <div class="w-12">
                                <div class="rounded-full w-12 h-12 overflow-hidden">
                                    <img class="h-auto object-center w-full"
                                    src="https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1-744x744.jpg" alt="blog">
                                </div>
                            </div>
                            <div class="w-full m-1 mx-3 w-72 break-words">
                                <a href=""><span class="font-semibold">152019073 Muhammad Hasby fatirisqi</span></a>
                                <p>hai</p>
                                <p class="text-gray-400">7 jam</p>
                            </div>
                        </div>
                    </div>
                       <!-- comment -->
                       <div class="mt-4">
                        <div class="flex pb-2">
                            <div class="w-12">
                                <div class="rounded-full w-12 h-12 overflow-hidden">
                                    <img class="h-auto object-center w-full"
                                    src="https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1-744x744.jpg" alt="blog">
                                </div>
                            </div>
                            <div class="w-full m-1 mx-3 w-72 break-words">
                                <a href=""><span class="font-semibold">152019073 Muhammad Hasby fatirisqi</span></a>
                                <p>hai</p>
                                <p class="text-gray-400">7 jam</p>
                            </div>
                        </div>
                    </div>
                       <!-- comment -->
                       <div class="mt-4">
                        <div class="flex pb-2">
                            <div class="w-12">
                                <div class="rounded-full w-12 h-12 overflow-hidden">
                                    <img class="h-auto object-center w-full"
                                    src="https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1-744x744.jpg" alt="blog">
                                </div>
                            </div>
                            <div class="w-full m-1 mx-3 w-72 break-words">
                                <a href=""><span class="font-semibold">152019073 Muhammad Hasby fatirisqi</span></a>
                                <p>hai</p>
                                <p class="text-gray-400">7 jam</p>
                            </div>
                        </div>
                    </div>
                      <!-- comment -->
                      <div class="mt-4">
                        <div class="flex pb-2">
                            <div class="w-12">
                                <div class="rounded-full w-12 h-12 overflow-hidden">
                                    <img class="h-auto object-center w-full"
                                    src="https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1-744x744.jpg" alt="blog">
                                </div>
                            </div>
                            <div class="w-full m-1 mx-3 w-72 break-words">
                                <a href=""><span class="font-semibold">152019073 Muhammad Hasby fatirisqi</span></a>
                                <p>hai</p>
                                <p class="text-gray-400">7 jam</p>
                            </div>
                        </div>
                    </div>
                      <!-- comment -->
                      <div class="mt-4">
                        <div class="flex pb-2">
                            <div class="w-12">
                                <div class="rounded-full w-12 h-12 overflow-hidden">
                                    <img class="h-auto object-center w-full"
                                    src="https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1-744x744.jpg" alt="blog">
                                </div>
                            </div>
                            <div class="w-full m-1 mx-3 w-72 break-words">
                                <a href=""><span class="font-semibold">152019073 Muhammad Hasby fatirisqi</span></a>
                                <p>hai</p>
                                <p class="text-gray-400">7 jam</p>
                            </div>
                        </div>
                    </div>
                      <!-- comment -->
                      <div class="mt-4">
                        <div class="flex pb-2">
                            <div class="w-12">
                                <div class="rounded-full w-12 h-12 overflow-hidden">
                                    <img class="h-auto object-center w-full"
                                    src="https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1-744x744.jpg" alt="blog">
                                </div>
                            </div>
                            <div class="w-full m-1 mx-3 w-72 break-words">
                                <a href=""><span class="font-semibold">152019073 Muhammad Hasby fatirisqi</span></a>
                                <p>hai</p>
                                <p class="text-gray-400">7 jam</p>
                            </div>
                        </div>
                    </div>
                      <!-- comment -->
                      <div class="mt-4">
                        <div class="flex pb-2">
                            <div class="w-12">
                                <div class="rounded-full w-12 h-12 overflow-hidden">
                                    <img class="h-auto object-center w-full"
                                    src="https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1-744x744.jpg" alt="blog">
                                </div>
                            </div>
                            <div class="w-full m-1 mx-3 w-72 break-words">
                                <a href=""><span class="font-semibold">152019073 Muhammad Hasby fatirisqi</span></a>
                                <p>hai</p>
                                <p class="text-gray-400">7 jam</p>
                            </div>
                        </div>
                    </div>
                      <!-- comment -->
                      <div class="mt-4">
                        <div class="flex pb-2">
                            <div class="w-12">
                                <div class="rounded-full w-12 h-12 overflow-hidden">
                                    <img class="h-auto object-center w-full"
                                    src="https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1-744x744.jpg" alt="blog">
                                </div>
                            </div>
                            <div class="w-full m-1 mx-3 w-72 break-words">
                                <a href=""><span class="font-semibold">152019073 Muhammad Hasby fatirisqi</span></a>
                                <p>hai</p>
                                <p class="text-gray-400">7 jam</p>
                            </div>
                        </div>
                    </div>
                      <!-- comment -->
                      <div class="mt-4">
                        <div class="flex pb-2">
                            <div class="w-12">
                                <div class="rounded-full w-12 h-12 overflow-hidden">
                                    <img class="h-auto object-center w-full"
                                    src="https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1-744x744.jpg" alt="blog">
                                </div>
                            </div>
                            <div class="w-full m-1 mx-3 w-72 break-words">
                                <a href=""><span class="font-semibold">152019073 Muhammad Hasby fatirisqi</span></a>
                                <p>hai</p>
                                <p class="text-gray-400">7 jam</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer -->
                <div class="footer-modal lg:absolute lg:bottom-0 z-30 bg-white" style="width: 400px;">
                    <div class="flex pl-3 pt-3">
                        <span><ion-icon class="text-2xl text-gray-500 pr-3" name="heart-outline"></ion-icon></span>
                        <span><ion-icon class="text-2xl text-gray" name="navigate"></ion-icon></span>
                    </div> 
                    <h4 class="text-gray-400 pt-2 pl-3">7 Hours ago</h4>
                    <form>
                        <div class="flex items-center mt-3 px-3 bg-transparent rounded-lg dark:bg-gray-700 mt-1 border-t-2">
                            <textarea id="chat" rows="1" class="form-control block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Your message..." style="max-height: 60px;min-height: 40px;"></textarea>
                                <button type="submit" class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer ">
                                POST
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
       
      </div>
    </div>
    <!-- search -->
    <div class="w-full bg-white z-10">
        <form action="" class="relative mx-auto w-max py-4">
            <input type="search" 
                  class="transition-all duration-500 mx-1 peer cursor-pointer relative z-10 h-12 w-18 rounded-full border-2 border-gray-300 bg-transparent pl-12 outline-none focus:w-72 focus:cursor-text focus:border-lime-300 focus:pl-14 focus:pr-4 " placeholder="search" />
            <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-y-0 my-auto h-8 w-12 border-r  stroke-gray-500 px-3.5 peer-focus:border-lime-300  peer-focus:stroke-lime-500 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
          </form>
    </div>
      
        
        <section class="md:h-full flex items-center text-gray-600">
            <div class="container px-10 mx-auto">
                <div class="flex flex-wrap -m-4">
                    <div class="p-4 sm:w-1/2 lg:w-1/3 xl:w-1/4 w-full  hover:scale-105 transition-all duration-500">
                        <div class="h-full border-2 border-gray-300 border-opacity-60 rounded-lg overflow-hidden">
                            <!-- <div class="p-2 px-3 flex">
                                <div class="w-12">
                                    <div class="border-gray-800 rounded-full w-12 h-12 overflow-hidden">
                                        <a href="open_post.html">
                                            <img class="object-cover" style="height: 100%;width: 100%;"
                                            src="https://www.anime-planet.com/images/characters/tooru-ichii-24293.jpg" alt="blog">
                                        </a>
                                    </div>
                                </div>
                                <div class="w-full m-1 mx-3">
                                    <a href=""><span class="font-semibold">152019073<br>Muhammad Hasby fatirisqi</span></a>
                                </div>
                            </div> -->
                            <a href="open_post.html">
                            <img class="lg:h-72 md:h-48 w-full object-cover object-center show-post"
                                src="https://mirroradvertising.id/wp-content/uploads/2018/10/poster-pendidikan-16.jpg" alt="blog">
                            <div class="p-6 ease-in">
                                <p class="text-2xl font-semibold mb-3" href="">Cities are crowded</p>
                                <p class="leading-relaxed mb-1">Nama Kelompok</p>
                                <p class="leading-relaxed mb-1">INFORMATIKA</p>
                                <p class="leading-relaxed mb-3">SEMESTER 7</p>
                                <div class="flex items-center flex-wrap ">
                                    <h2 class="text-gray-400">7 Hours ago</h2>
                                    <!-- <span
                                        class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-7z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>1.2K
                                    </span> -->
                                    <span class="ml-auto text-gray-400 inline-flex items-center leading-none text-sm">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path
                                                d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                            </path>
                                        </svg>6
                                    </span>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="p-4 sm:w-1/2 lg:w-1/3 xl:w-1/4 w-full  hover:scale-105 transition-all duration-500">
                        <div class="h-full border-2 border-gray-300 border-opacity-60 rounded-lg overflow-hidden">
                            <a href="open_post.html">
                            <img class="lg:h-72 md:h-48 w-full object-cover object-center show-post"
                                src="https://cf.shopee.co.id/file/1bc2cac23b4673c9fd0786d0faf8dd9d" alt="blog">
                            <div class="p-6 ease-in">
                                <p class="text-2xl font-semibold mb-3" href="">Cities are crowded</p>
                                <p class="leading-relaxed mb-1">Nama Kelompok</p>
                                <p class="leading-relaxed mb-1">INFORMATIKA</p>
                                <p class="leading-relaxed mb-3">SEMESTER 7</p>
                                <div class="flex items-center flex-wrap ">
                                    <h2 class="text-gray-400">7 Hours ago</h2>
                                    <span class="ml-auto text-gray-400 inline-flex items-center leading-none text-sm">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path
                                                d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                            </path>
                                        </svg>6
                                    </span>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="p-4 sm:w-1/2 lg:w-1/3 xl:w-1/4 w-full  hover:scale-105 transition-all duration-500">
                        <div class="h-full border-2 border-gray-300 border-opacity-60 rounded-lg overflow-hidden">
                            <a href="open_post.html">
                            <img class="lg:h-72 md:h-48 w-full object-cover object-center show-post"
                                src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/dj-flyer-template-design-be97f51fd114dea20cf6e1ccab137c48_screen.jpg?ts=1637007043" alt="blog">
                            <div class="p-6 ease-in">
                                <p class="text-2xl font-semibold mb-3" href="">Cities are crowded</p>
                                <p class="leading-relaxed mb-1">Nama Kelompok</p>
                                <p class="leading-relaxed mb-1">INFORMATIKA</p>
                                <p class="leading-relaxed mb-3">SEMESTER 7</p>
                                <div class="flex items-center flex-wrap ">
                                    <h2 class="text-gray-400">7 Hours ago</h2>
                                    <span class="ml-auto text-gray-400 inline-flex items-center leading-none text-sm">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path
                                                d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                            </path>
                                        </svg>6
                                    </span>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>         
                </div>
            </div>
        </section>
        <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6 mt-4">
            <div class="flex flex-1 justify-between sm:hidden">
              <a href="#" class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
              <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
            </div>
            <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
              <div>
                <p class="text-sm text-gray-700">
                  Showing
                  <span class="font-medium">1</span>
                  to
                  <span class="font-medium">10</span>
                  of
                  <span class="font-medium">97</span>
                  results
                </p>
              </div>
              <div>
                <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                  <a href="#" class="relative inline-flex items-center rounded-l-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
                    <span class="sr-only">Previous</span>
                    <!-- Heroicon name: mini/chevron-left -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                    </svg>
                  </a>
                  <!-- Current: "z-10 bg-indigo-50 border-indigo-500 text-indigo-600", Default: "bg-white border-gray-300 text-gray-500 hover:bg-gray-50" -->
                  <a href="#" aria-current="page" class="relative z-10 inline-flex items-center border border-indigo-500 bg-indigo-50 px-4 py-2 text-sm font-medium text-indigo-600 focus:z-20">1</a>
                  <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">2</a>
                  <a href="#" class="relative hidden items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 md:inline-flex">3</a>
                  <span class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700">...</span>
                  <a href="#" class="relative hidden items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 md:inline-flex">8</a>
                  <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">9</a>
                  <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">10</a>
                  <a href="#" class="relative inline-flex items-center rounded-r-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
                    <span class="sr-only">Next</span>
                    <!-- Heroicon name: mini/chevron-right -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                    </svg>
                  </a>
                </nav>
              </div>
            </div>
          </div>
        <script>
            const modal = document.querySelector('.modal');
            const modalpost = document.querySelector('.modal-post');
            const shownotif = document.querySelector('.show-notif');
            const showpost = document.querySelector('.show-post');
            const closeModal = document.querySelectorAll('.close-modal');
            const closePost = document.querySelectorAll('.close-post');

            // modalnotif
            shownotif.addEventListener('click',function(){
                modal.classList.remove('hidden')
            });
            closeModal.forEach(closemodal => {
            closemodal.addEventListener('click', function (){
                modal.classList.add('hidden')
            });
            });

            // modalpost
            showpost.addEventListener('click',function(){
                modalpost.classList.remove('hidden')
            });
            closePost.forEach(closepost => {
            closepost.addEventListener('click', function (){
                modalpost.classList.add('hidden')
            });
            });
           
            const modalpost1 = document.querySelector('.modal-post');
            function myFunction(x) {
            if (x.matches) { // If media query matches
                modalpost1.classList.remove('items-center')
            } else {
                modalpost1.classList.add('items-center')
            }
            }

            var x = window.matchMedia("(max-width: 1023px)")
            myFunction(x) // Call listener function at run time
            x.addListener(myFunction) // Attach listener function on state changes

            
        </script>
    </body>
</html>