<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <Title>Edit post</Title>
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
    </head>
    <body>
        <nav class="flex items-center bg-orange-500  h-14 z-30">
            <a href="menumhs_coba.html"><img class="img-responsive w-32 ml-4" src="https://www.itenas.ac.id/wp-content/uploads/2020/07/Varian-Logo-Itenas-04-500x127.png" alt=""></a>
            <div class="w-full inline-flex flex-grow w-auto">
              
                <div class="ml-auto">
                    <a href="profilemhs.html" class="px-3 pr-4 hover:text-slate-100 transition-all">
                        <span><ion-icon class="text-4xl " name="chevron-back-circle-outline"></ion-icon></span>
                    </a>
                </div>
            </div>
        </nav>
            <div class="w-full flex items-center justify-center">
                <div class=" w-full lg:w-1/2 mt-5 ">
                    <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                      <!-- header -->
                      <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md text-center">
                        <h5 class="text-xl font-medium leading-normal text-gray-800 " id="exampleModalScrollableLabel">
                          Edit Postingan
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
                        <h5 class="text-gray-700 text-1xl pb-2 pt-2">Link Youtube</h5>
                        <input type="text" id="formfile" placeholder="Masukkan Link youtube" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                      </div>
                    
                      <div
                        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-center p-4 border-t border-gray-200 rounded-b-md">
                        <button type="button"
                          class="w-full inline-block px-6 py-2.5 bg-lime-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-lime-600 hover:shadow-lg focus:bg-lime-800 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
                          Edit Postingan
                        </button>
                      </div>
                    </div>
                  </div>
            </div>
           
       
    </body>
</html>