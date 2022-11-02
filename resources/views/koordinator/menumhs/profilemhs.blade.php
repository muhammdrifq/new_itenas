<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <Title>mahasiswa</Title>
    <link rel="stylesheet" type="text/css" href="../style/Mahasiswa/profilmhs.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

     <!-- tailwindscss -->
     <script src="https://cdn.tailwindcss.com"></script>
     <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
     
     <style>
        body{
            font-size: 0.875rem;
        }
     </style>
</head>

<body>
    <!-- navbar -->
    <nav class="flex items-center bg-orange-500 flex-wrap h-14 z-30">
        <a href="menumhs_coba.html"><img class="img-responsive w-32 mx-4" src="../gambar/logo_itenas.png" alt=""></a>
        <div class="top-nav w-full inline-flex flex-grow w-auto">
            <div class="ml-auto">
                <button id="dropdownDefault" data-dropdown-toggle="dropdown" href="gantipassword.html" class="px-3 pr-4 hover:text-slate-100 transition-all">
                    <ion-icon class="text-4xl" name="settings-outline"></ion-icon>
                    <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 border-2" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 349px);">
                        <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownDefault">
                        <li>
                            <a href="gantipassword.html" class="block py-2 px-4 hover:bg-gray-200 ">Edit Password</a>
                        </li>
                        <li>
                            <a href="editprofile.html" class="block py-2 px-4 hover:bg-gray-200 ">Edit Profile</a>
                        </li>
                        </ul>
                    </div>
                </button>
                <a href="" class="px-3 hover:text-slate-100 transition-all">
                    <span><ion-icon class="text-4xl " name="person-circle-outline"></ion-icon></span>
                </a>
                <a href="menumhs_coba.html" class="px-3 pr-4 hover:text-slate-100 transition-all">
                    <span><ion-icon class="text-4xl " name="chevron-back-circle-outline"></ion-icon></span>
                </a>
              
            </div>
        </div>
    </nav>
    
    <div class="flex flex-wrap">
        <!-- kiri -->
        <div class="justify-center my-auto mx-auto p-3">
            <div class="rounded-full w-64 h-64 overflow-hidden">
                <img class="h-auto object-center"
                src="https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1-744x744.jpg" alt="blog">
            </div>
        </div>
        
        <!-- kanan -->
        <div class="w-full p-5">
            <div class="container px-10 mx-auto border-t-2 pt-4">
                <div class="">
                    <h1 class="text-4xl text-gray-600">Bambang Supratman</h1>
                </div>
                <button onclick="showprofile()" class="text-gray-600 hover:text-lime-600 showprofile text-lime-500">Show Profile +</button>
                <div class="profile">
                    <div class="flex-none lg:flex border-2 p-5 mb-6  ">
                        <div class="lg:w-1/2 lg:border-r-2  pl-10">
                            <h2 class="leading-relaxed mb-1 font-semibold text-1xl text-gray-600 text-center mr-8 mb-4 pb-1 border-b-2">BIODATA</h2>
                            <div class="flex">
                                <div class="lg:pr-3">
                                    <p class="leading-relaxed mb-1 text-gray-600">Nama</p>
                                    <p class="leading-relaxed mb-1 text-gray-600">NRP</p>
                                    <p class="leading-relaxed mb-1 text-gray-600">Kelas</p>
                                    <p class="leading-relaxed mb-1 text-gray-600">Prodi</p>
                                    <p class="leading-relaxed mb-1 text-gray-600">Semester</p>
                                </div>
                                <div>
                                    <p class="leading-relaxed mb-1 text-gray-600"> <span class="lg:mx-10">:</span>Dika Prasetia</p>
                                    <p class="leading-relaxed mb-1 text-gray-600"> <span class="lg:mx-10">:</span>152019073</p>
                                    <p class="leading-relaxed mb-1 text-gray-600"> <span class="lg:mx-10">:</span>B</p>
                                    <p class="leading-relaxed mb-1 text-gray-600"> <span class="lg:mx-10">:</span>Informatika</p>
                                    <p class="leading-relaxed mb-1 text-gray-600"> <span class="lg:mx-10">:</span>7</p>
                                </div>
                            </div>
                           
                        </div>
                        <div class="lg:w-1/2 pl-10 pt-5 lg:pt-0">
                            <h2 class="leading-relaxed mb-1 font-semibold text-1xl text-gray-600 text-center mr-8 mb-4 pb-1 border-b-2">ANGGOTA</h2>
                            <div class="flex">
                                <div class="lg:pr-3">
                                    <p class="leading-relaxed mb-1 text-gray-600">152019073</p>
                                    <p class="leading-relaxed mb-1 text-gray-600">152019073</p>
                                    <p class="leading-relaxed mb-1 text-gray-600">152019073</p>
                                    <p class="leading-relaxed mb-1 text-gray-600">152019073</p>
                                    <p class="leading-relaxed mb-1 text-gray-600">152019073</p>
                                </div>
                                <div>
                                    <p class="leading-relaxed mb-1 text-gray-600"> <span class="lg:mx-5 mx-1"></span>Dika Prasetia</p>
                                    <p class="leading-relaxed mb-1 text-gray-600"> <span class="lg:mx-5 mx-1"></span>Dika Prasetia</p>
                                    <p class="leading-relaxed mb-1 text-gray-600"> <span class="lg:mx-5 mx-1"></span>Dika Prasetia</p>
                                    <p class="leading-relaxed mb-1 text-gray-600"> <span class="lg:mx-5 mx-1"></span>Dika Prasetia</p>
                                    <p class="leading-relaxed mb-1 text-gray-600"> <span class="lg:mx-5 mx-1"></span>Dika Prasetia</p>
                                </div>
                                <div>
                                    <span><ion-icon name="flag" class="text-1xl ml-2 mt-1"></ion-icon></span>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="flex mt-4 mb-2 pb-2">
                    <button onclick="clickpost()"  class="text-3x1 text-gray-600 mr-5 klik-post focus:bg-gray-200 transition-all p-2 border-black border-b-4">Post anda</button>
                    <button onclick="clickpost()" class="text-3x1 text-gray-600 klik-hariwira  focus:bg-gray-200 transition-all border-black  p-2 ">Hari kewirausahaan</button>
                </div>
                <div class="mt-4 mb-4">
                    <h1 class="font-semibold text-gray-600">Buat Post Baru / Upload Laporan</h1>
                    <div class="flex w-full pt-1">
                        <button type="text" class="font-semibold text-gray-600 border-2 w-full p-2 rounded-md hover:bg-lime-400 hover:text-white transition-all duration-500 hover:border-lime-400 hover:p-3 show-modal">BUAT POSTINGAN</button>
                        <button type="text" class="hidden font-semibold text-gray-600 border-2 w-full p-2 rounded-md hover:bg-lime-400 hover:text-white transition-all duration-500 hover:border-lime-400 hover:p-3 showwira">UPLOAD LAPORAN</button>
                    </div>
                </div> 
                <div class="postan flex flex-wrap mt-2 border-black">
                    <!-- card post -->
                    <div class=" p-4 sm:w-1/2 lg:w-1/3 xl:w-1/4 w-full  hover:scale-105 transition-all duration-500">
                        <div class="h-full border-2 border-gray-300 border-opacity-60 rounded-lg overflow-hidden">
                            <div class="p-2 px-3 flex">
                                <div class="w-12">
                                    <div class="border-` border-gray-300 rounded-full w-12 h-12 overflow-hidden">
                                        <img class="h-auto object-center"
                                        src="https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1-744x744.jpg" alt="blog">
                                    </div>
                                </div>
                                <div class="w-full m-1 mx-3">
                                    <a href=""><span class="font-semibold">152019073<br>Dika Prasetia</span></a>
                                </div>
                                <div class="flex">
                                    <button class="mr-2"><a href="editpost.html"><ion-icon name="create-outline" class="text-2xl text-gray-500 hover:text-black"></ion-icon></a></button>
                                    <button type="text" class="post-hapus"><ion-icon name="close-circle-outline" class="text-2xl text-gray-500 hover:text-black"></ion-icon></button>
                               
                                </div>
                                <!-- <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown" id="dropdownMenuButton1"></button> -->
                            </div>
                            <a href="open_post.html">
                                <img class="lg:h-72 md:h-48 w-full object-cover object-center"
                                src="https://www.panicposters.com/media/catalog/product/cache/1/image/600x905.10638297872/9df78eab33525d08d6e5fb8d27136e95/p/p/pp33584-minions-clubbing-poster.jpg" alt="blog">
                            <div class="p-6 ease-in">
                                <h1 class="text-2xl font-semibold mb-3">Cities are crowded</h1>
                                <p class="leading-relaxed mb-1">Dika Prasetia</p>
                                <p class="leading-relaxed mb-1">INFORMATIKA</p>
                                <p class="leading-relaxed mb-3">SEMESTER 7</p>
                                <div class="flex items-center flex-wrap ">
                                    <h2 class="text-gray-400">7 Hours ago</h2>
                              
                                    <span class="text-gray-400 inline-flex ml-auto leading-none text-sm">
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
                <!-- hari kewirausahaan -->
                <div class="hariwira mt-8 hidden">
                    <div class="border-b-4 border-gray-400 flex">
                        <div class="flex ml-2">
                            <span class=""><ion-icon name="document" class="text-4xl"></ion-icon></span>
                            <p class="m-2 ml-4 font-semibold">Laporan Hari Wirausaha.docx</p>
                        </div>
                      <div class="ml-auto flex">
                        <p class="m-2 mr-4 text-gray-400">Waktu Pengumpulan</p>
                        <span class=""><ion-icon name="close-circle-outline"  class="text-4xl text-gray-600"></ion-icon></span>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- dropdown edit,delete -->
    <ul
        class=" dropdown-menu min-w-max absolute hidden bg-white text-base
          z-50
          float-left
          py-2
          list-none
          text-left
          rounded-lg
          shadow-lg
          mt-1
          hidden
          m-0
          bg-clip-padding
          border-none
        "
        aria-labelledby="dropdownMenuButton1"
      >
        <li>
          <a
            class="
              dropdown-item
              text-sm
              py-2
              px-4
              font-normal
              block
              w-full
              whitespace-nowrap
              bg-transparent
              text-gray-700
              hover:bg-gray-100
            "
            href="#"
            >Action</a
          >
        </li>
        <li>
          <a
            class="
              dropdown-item
              text-sm
              py-2
              px-4
              font-normal
              block
              w-full
              whitespace-nowrap
              bg-transparent
              text-gray-700
              hover:bg-gray-100
            "
            href="#"
            >Another action</a
          >
        </li>
        <li>
          <a
            class="
              dropdown-item
              text-sm
              py-2
              px-4
              font-normal
              block
              w-full
              whitespace-nowrap
              bg-transparent
              text-gray-700
              hover:bg-gray-100
            "
            href="#"
            >Something else here</a
          >
        </li>
      </ul>
    
      <!-- modal posting -->
      <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto flex justify-center bg-black/75" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered relative w-5/6 lg:w-1/3 mt-5 pointer-events-none ">
          <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <!-- header -->
            <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
              <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                Buat Postingan
              </h5>
              <button type="button"
                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- body -->
            <div class="modal-body relative p-4">
              <h5 class="text-gray-700 text-1xl pb-2 pt-2">Judul</h5>
              <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
              <h5 class="text-gray-700 text-1xl pb-2 pt-2">Deskripsi</h5>
              <textarea type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"></textarea>
              <h5 class="text-gray-700 text-1xl pb-2 pt-2">Poster</h5>
              <input type="file" id="formfile" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
              <h5 class="text-gray-700 text-1xl pb-2 pt-2">PDF</h5>
              <input type="file" id="formfile" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
              <h5 class="text-gray-700 text-1xl pb-2 pt-2">Word</h5>
              <input type="file" id="formfile" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
              <h5 class="text-gray-700 text-1xl pb-2 pt-2">PPT</h5>
              <input type="file" id="formfile" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
            </div>
          
            <div
              class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
              <button type="button"
                class="close-modal inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                data-bs-dismiss="modal">
                Close
              </button>
              <button type="button"
                class="inline-block px-6 py-2.5 bg-lime-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-lime-600 hover:shadow-lg focus:bg-lime-800 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
                Post
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- modal upload laporan -->
      <div class="modal-upload fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto flex justify-center bg-black/75" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered relative w-5/6 lg:w-1/3 mt-5 pointer-events-none ">
          <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <!-- header -->
            <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
              <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                UPLOAD LAPORAN
              </h5>
              <button type="button"
                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- body -->
            <div class="modal-body relative p-4">
              <h5 class="text-gray-700 text-1xl pb-2 pt-2">World</h5>
              <input type="file" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
              <h5 class="text-gray-700 text-1xl pb-2 pt-2">Pdf</h5>
              <input type="file" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
            </div>
          
            <div
              class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
              <button type="button"
                class="close-upload inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                data-bs-dismiss="modal">
              CLose
             </button>
              <button type="button"
                class="close-modal inline-block px-6 py-2.5 ml-4 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                data-bs-dismiss="modal">
                Submit
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- modal hapus post -->
      <div class="modal-hapus fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto flex justify-center bg-black/75" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered relative w-5/6 lg:w-1/5 mt-5 pointer-events-none flex items-center">
            <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                      Hapus Postingan
                    </h5>
                    <!-- <button type="button"
                
                      class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                      data-bs-dismiss="modal" aria-label="Close">
                      close
                    </button> -->
                  </div>
                  <div class="modal-body relative p-4 flex justify-center">
                    <button type="button"
                    class="mr-4 close-hapus inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                    data-bs-dismiss="modal">
                    Close
                  </button>
                  <button type="button"
                    class="ml-4 inline-block px-6 py-2.5 bg-red-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-600 hover:shadow-lg focus:bg-red-800 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
                    Delete
                  </button>
                  </div>
            </div>
        </div>
      </div>
      <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script>
        const modal = document.querySelector('.modal');
        const showmodal = document.querySelector('.show-modal');
        const showwira = document.querySelector('.showwira');
        const closemodal = document.querySelector('.close-modal');
        const modalhapus = document.querySelector('.modal-hapus');
        const modalupload = document.querySelector('.modal-upload');
        const showmodalhapus = document.querySelector('.post-hapus');
        const closehapus = document.querySelector('.close-hapus');
        const closeupload = document.querySelector('.close-upload');
        const klikpostsaya = document.querySelector('.klik-post');
        const klikhariwira = document.querySelector('.klik-hariwira');
        const postsaya = document.querySelector('.postan');
        const hariwirausaha = document.querySelector('.hariwira')
        const profile = document.querySelector('.profile');
        const x = document.querySelector('.showprofile');


        klikpostsaya.addEventListener('click',function(){
                postsaya.classList.remove('hidden')
                hariwirausaha.classList.add('hidden')
                showmodal.classList.remove('hidden')
                showwira.classList.add('hidden')
                klikpostsaya.classList.add('border-b-4')
                klikhariwira.classList.remove('border-b-4')

            });
            klikhariwira.addEventListener('click',function(){
                hariwirausaha.classList.remove('hidden')
                postsaya.classList.add('hidden')
                showmodal.classList.add('hidden')
                showwira.classList.remove('hidden')
                klikhariwira.classList.add('border-b-4')
                klikpostsaya.classList.remove('border-b-4')
            })

        showmodalhapus.addEventListener('click',function(){
                modalhapus.classList.remove('hidden')
            });
            closehapus.addEventListener('click',function(){
                modalhapus.classList.add('hidden')
            });
          showmodal.addEventListener('click',function(){
                modal.classList.remove('hidden')
            });
          closemodal.addEventListener('click',function(){
                modal.classList.add('hidden')
          });
          showwira.addEventListener('click',function(){
                 modalupload.classList.remove('hidden')
          })
          closeupload.addEventListener('click',function(){
                modalupload.classList.add('hidden')
          })

        
        
     
            function showprofile(){
                profile.classList.toggle("hidden");
                if (x.innerHTML === "Show Profile +"){
                    x.innerHTML = "Hide Profile -";
                }else{
                    x.innerHTML = "Show Profile +";
                }
            }
           
            closeModal.forEach(closemodal => {
            closemodal.addEventListener('click', function (){
                modal.classList.add('hidden')
            });
            });
    </script>

</body>

</html>