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
            .modal-post-head{
                padding-top: 56px !important;
            }
            @media only screen and (max-width: 1023px) {
                .modal-post-head{
                    width: 85%;
                  
                }
                .modal-body{
                    width: 100%;
         
                }
                .modal-kanan{
                    width: 100% !important;
                    height: 85% !important;
                  
                }
                .modal-kiri{
                    height: 35%;
                }
                .modal-kiri img{
                    max-height: 450px !important;

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

    <nav class="navbar pl-2 flex items-center bg-orange-500 flex-wrap h-14 z-40 w-full fixed">
        <div class="flex-none lg:flex w-auto sm:pr-32 sm:pl-4">
            <div class="">
                <div class="flex">
                    <div class="w-full m-2 ml-3 w-72 break-words">
                        <h1 class="font-semibold text-white lg:text-base">KELOMPOK 1 - INFORMATIKA</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-none w-auto">
            <div class="ml-auto">
                <a href="menumhs_coba.html" class=" pr-2 hover:text-slate-100 transition-all">
                    <span><ion-icon class="text-4xl " name="chevron-back-circle-outline"></ion-icon></span>
                </a>
            </div>
        </div>
    </nav>


    <!-- modal posting -->
        <!-- modal --> 
    <div class="modal-post-head bg-white rounded shadow-lg lg:fixed inline-block w-full ">
        <!-- modal body -->
        <div class="modal-body flex-none lg:flex h-full bg-black p-0 lg:fixed w-full">
            <!-- kiri gambar-->
            <div class="w-full flex justify-center items-center">
                <div class="relative flex justify-center w-full">
                <div class="modal-kiri my-auto mx-auto h-full flex items-center justify-center slide active:scale-125 transition-all " style="max-width: 1500px;">
                    <img class="w-full object-cover object-center lg:mb-16 " style="max-height: 800px; max-width: 1000px;"
                    src="https://venngage-wordpress-gallery.s3.amazonaws.com/uploads/2018/10/Classic-Tweak-Halloween-Event-Poster-Example2.jpg  " alt="blog">   
                </div>
                <div class="modal-kiri my-auto mx-auto h-full flex items-center justify-center slide active:scale-125 transition-all " style="max-width: 1500px;">
                    <img class="w-full object-cover object-center lg:mb-16" style="max-height: 800px; max-width: 1000px;"
                    src="https://pict.sindonews.net/dyn/850/pena/news/2022/05/15/700/769971/6-serial-anime-yang-produksinya-dibuat-2-studio-berbeda-ayl.jpg" alt="blog">   
                </div>
                   
             
                    <button type="button" onclick = "plusSlides(-1)" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                            <span class="hidden">Previous</span>
                        </span>
                    </button>
                    <button type="button" onclick = "plusSlides(-1)" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            <span class="hidden">Next</span>
                        </span>
                    </button>
                   
                </div>
            </div>
         
            <!-- kanan -->
            <div class="modal-kanan bg-white overflow-y-auto overflow-x-hidden" style="width: 470px;">
                <div class="w-full mx-3 mt-3 ">
                    <h1 class="text-base font-semibold">JUDUL NYA INI</h1>
                    <p>Dikumpulkan Pada xxx</p>
                    <div class="border-l-2 mt-2">
                        <div class="mx-2">
                            <a class="flex" href="">
                                <div>
                                   <span><ion-icon class="text-4xl" name="image-sharp"></ion-icon></span> 
                                </div>
                                <div class="m-2">
                                    <label>POSTER.jpg</label>
                                </div>               
                            </a>
                        </div>
                        <div class="mx-2">
                            <a class="flex" href="">
                                <div>
                                    <span class=""><ion-icon class="text-4xl" name="document-sharp"></ion-icon></span>
                                </div>
                                <div class="m-2">
                                    <label>BMC</label>
                                </div>               
                            </a>
                        </div>
                        <div class="mx-2">
                            <a class="flex" href="">
                                <div>
                                    <span class=""><ion-icon class="text-4xl" name="document-sharp"></ion-icon></span>
                                </div>
                                <div class="m-2">
                                    <label>DOKUMEN.DOCX</label>
                                </div>               
                            </a>
                        </div>
                        <div class="mx-2">
                            <a class="flex" href="">
                                <div>
                                    <span class=""><ion-icon class="text-4xl" name="document-sharp"></ion-icon></span>
                                </div>
                                <div class="m-2">
                                    <label>DOKUMEN.PDF</label>
                                </div>               
                            </a>
                        </div>
                        <div class="mx-2">
                            <a class="flex" href="">
                                <div>
                                    <span class=""><ion-icon class="text-4xl" name="document-sharp"></ion-icon></span>
                                </div>
                                <div class="m-2">
                                    <label>DOKUMEN.PPT</label>
                                </div>               
                            </a>
                        </div>
                        <div class="mx-2">
                            <a class="flex" href="">
                                <div>
                                    <span class=""><ion-icon class="text-4xl" name="link"></ion-icon></span>
                                </div>
                                <div class="m-2">
                                    <label>LINK YOUTUBE</label>
                                </div>               
                            </a>
                        </div>
                    </div>

                </div>
                <h1 class="text-center mb-1 mt-2">GRADE</h1>
                <div class="w-full flex justify-center items-center">
                    <input type="text" class="form-control w-1/2 text-center">
                </div>
                <div class="m-3 flex border-b-2 border-t-2 pt-4 pb-4">
                    <ul>
                        <li class="mb-2 font-semibold">Anggota Kelompok</li>
                        <li>152019073<span class="mr-2"></span> Dika Prasetia <span class="ml-1"><ion-icon name="flag" class="text-1xl "></ion-icon></span></li> 
                        <li>152019073<span class="mr-2"></span> Dika Prasetia</li>
                        <li>152019073<span class="mr-2"></span> Dika Prasetia</li>
                        <li>152019073<span class="mr-2"></span> Dika Prasetia</li>

                        
                    </ul>
                </div>
                <!-- body -->
                <div class="modal-chat pl-2 break-words">
                    <!-- comment -->
                    <div class="mt-4 ml-2">
                        <div class="flex pb-2">
                            <div class="w-10">
                                <div class="rounded-full w-10 h-10 overflow-hidden">
                                    <img class="h-auto object-center w-full"
                                    src="https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1-744x744.jpg" alt="blog">
                                </div>
                            </div>
                            <div class="w-full mx-2 break-words" style="width: 80%;">
                                <a href=""><span class="font-semibold"> 152019083 Muhammad Hasby fatirisqi amin</span></a>
                                <p>yeay
                                </p>
                                <p class="text-gray-400 mt-1">7 jam</p>
                            </div>
                        </div>
                    </div>
                    <!-- comment -->
                    <div class="mt-4 ml-2">
                        <div class="flex pb-2">
                            <div class="w-10">
                                <div class="rounded-full w-10 h-10 overflow-hidden">
                                    <img class="h-auto object-center w-full"
                                    src="https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1-744x744.jpg" alt="blog">
                                </div>
                            </div>
                            <div class="w-full mx-2 break-words" style="width: 80%;">
                                <a href=""><span class="font-semibold"> Muhammad Hasby fatirisqi</span></a>
                                <p>yeay
                                </p>
                                <p class="text-gray-400 mt-1">7 jam</p>
                            </div>
                        </div>
                    </div>
                    <!-- comment -->
                    <div class="mt-4 ml-2">
                        <div class="flex pb-2">
                            <div class="w-10">
                                <div class="rounded-full w-10 h-10 overflow-hidden">
                                    <img class="h-auto object-center w-full"
                                    src="https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1-744x744.jpg" alt="blog">
                                </div>
                            </div>
                            <div class="w-full mx-2 break-words" style="width: 80%;">
                                <a href=""><span class="font-semibold"> Muhammad Hasby fatirisqi</span></a>
                                <p>yeay
                                </p>
                                <p class="text-gray-400 mt-1">7 jam</p>
                            </div>
                        </div>
                    </div>
                      
                       <!-- comment -->
                       <div class="mt-72">
                    
                    </div>
            

            
                </div>
                <!-- footer -->
                <div class="footer-modal fixed lg:bottom-0 z-30 bg-white lg:w-1/5 border-t-2" style="min-width: 340px;">
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

       
        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
            showSlides(slideIndex += n);
            }

            function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("slide");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
             }


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