 <!doctype html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>{{ config('app.name', 'Laravel') }}</title>

     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>

     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">

     <style>
         .bd-placeholder-img {
             font-size: 1.125rem;
             text-anchor: middle;
             -webkit-user-select: none;
             -moz-user-select: none;
             user-select: none;
         }

         @media (min-width: 768px) {
             .bd-placeholder-img-lg {
                 font-size: 3.5rem;
             }
         }

     </style>
 </head>

 <body>
     <div class="container">
         <header class="blog-header py-3">
             <div class="row flex-nowrap justify-content-between align-items-center">
                 <div class="col-4">
                     <div class="dropdown">
                         <a class="btn btn-outline-dark" href="#" role="button" id="dropdownMenuLink"
                             data-bs-toggle="dropdown" aria-expanded="false">
                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-list" viewBox="0 0 16 16">
                                 <path fill-rule="evenodd"
                                     d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                             </svg>
                             Menu
                         </a>

                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                             <li><a class="dropdown-item" href="#">Action</a></li>
                             <li><a class="dropdown-item" href="#">Another action</a></li>
                             <li><a class="dropdown-item" href="#">Something else here</a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-4 text-center">
                     <a class="blog-header-logo text-dark mb-0 pb-0" href="#">
                         <svg class="bd-placeholder-img" width="300" height="70" xmlns="http://www.w3.org/2000/svg"
                             role="img" aria-label="Placeholder: Advertisment" preserveAspectRatio="xMidYMid slice"
                             focusable="false">
                             <title>Placeholder</title>
                             <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                 dy=".3em">Logo</text>
                         </svg>
                     </a>
                 </div>
                 <div class="col-4 d-flex justify-content-end align-items-center">
                     <a class="link-secondary mb-0 pb-0" href="#" aria-label="Search">
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                             stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             class="mx-3" role="img" viewBox="0 0 24 24">
                             <title>Search</title>
                             <circle cx="10.5" cy="10.5" r="7.5" />
                             <path d="M21 21l-5.2-5.2" />
                         </svg>
                     </a>
                 </div>
             </div>
         </header>

         <div class="nav-scroller mb-3">
             <nav class="nav d-flex justify-content-between">
                 @for ($i = 1; $i <= 8; $i++)
                     <a class="p-2 link-secondary" href="#">Menu item {{ $i }}</a>
                 @endfor
             </nav>
         </div>
     </div>

     <main class="container">
         <div class="row g-1 my-4">
             <div class="col-6">
                 <svg class="bd-placeholder-img" width="100%" height="500px" xmlns="http://www.w3.org/2000/svg"
                     role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                     focusable="false">
                     <title>Placeholder</title>
                     <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                         dy=".3em">Thumbnail</text>
                 </svg>
             </div>

             <div class="col-6">
                 <div class="row h-100 g-1">
                     <div class="col-12">
                         <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                             role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                             focusable="false">
                             <title>Placeholder</title>
                             <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                 dy=".3em">Thumbnail</text>
                         </svg>
                     </div>
                     <div class="col-6">
                         <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                             role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                             focusable="false">
                             <title>Placeholder</title>
                             <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                 dy=".3em">Thumbnail</text>
                         </svg>
                     </div>
                     <div class="col-6">
                         <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                             role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                             focusable="false">
                             <title>Placeholder</title>
                             <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                 dy=".3em">Thumbnail</text>
                         </svg>
                     </div>
                 </div>
             </div>
         </div>

         <div class="row g-4">
             <div class="col-md-8">
                 @for ($i = 1; $i < 6; $i++)
                     <div class="card mb-3 pe-lg-0 rounded-0">
                         <div class="row g-0">
                             <div class="col-md-8">
                                 <div class="card-body">
                                     <strong class="d-inline-block mb-2 text-dark">Design</strong>
                                     <a href="#" class="stretched-link text-dark text-decoration-none">

                                         <h5 class="card-title h4">Lorem ipsum dolor sit amet, consectetur adipisicing
                                             elit. Sapiente expedita
                                             nesciunt</h5>
                                     </a>
                                     <p class="card-text text-muted small">This is a wider card with supporting text
                                         below
                                         as
                                         a
                                         natural lead-in to additional content. This content is a little bit longer.
                                     </p>
                                     <p class="card-text"><small
                                             class="text-muted">{{ date('d, M - Y') }}</small></p>

                                 </div>
                             </div>
                             <div class="col-md-4 p-0">
                                 <svg class="bd-placeholder-img" width="100%" height="100%"
                                     xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                     preserveAspectRatio="xMidYMid slice" focusable="false">
                                     <title>Placeholder</title>
                                     <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                         fill="#eceeef" dy=".3em">Thumbnail</text>
                                 </svg>
                             </div>
                         </div>
                     </div>
                 @endfor
             </div>

             <div class="col-md-4">
                 <div class="position-sticky" style="top: 2rem;">
                     <div class=" btn-group mb-2 text-center w-100">
                         <a href="#" class="btn btn-light">
                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-facebook" viewBox="0 0 16 16">
                                 <path
                                     d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                             </svg>
                             Facebook</a>
                         <a href="#" class="btn btn-light">
                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-instagram" viewBox="0 0 16 16">
                                 <path
                                     d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                             </svg>
                             Instagram</a>
                         <a href="#" class="btn btn-light">
                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-twitter" viewBox="0 0 16 16">
                                 <path
                                     d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                             </svg>
                             Twitter</a>
                     </div>

                     <svg class="bd-placeholder-img" width="!00%" height="100%" xmlns="http://www.w3.org/2000/svg"
                         role="img" aria-label="Placeholder: Advertisment" preserveAspectRatio="xMidYMid slice"
                         focusable="false">
                         <title>Placeholder</title>
                         <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                             dy=".3em">Advertisment</text>
                     </svg>
                 </div>

                 <div class="card my-4">
                     <div class="card-body">
                         <h3 class="h4 fw-bold card-title">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                         </h3>
                         <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla alias,
                             eum mollitia officia
                             obcaecati vel eaque dignissimos!</p>

                         <form action="#" class="d-flex">

                             <div class="form-floating w-100">
                                 <input type="email" class="form-control" id="floatingInputValue"
                                     placeholder="name@example.com" value="">
                                 <label for="floatingInputValue">{{ __('E-Mail Address') }}</label>
                             </div>

                             <button class="btn btn-dark px-4 ms-1">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                     <path fill-rule="evenodd"
                                         d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                 </svg>
                             </button>
                         </form>

                     </div>
                 </div>
             </div>
         </div>
     </main>

     <aside class="container my-4">

         <div class="jumbotron my-4">
             <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img"
                 aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                 <title>Placeholder</title>
                 <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                     dy=".3em">Advertisment</text>
             </svg>
         </div>

         <div class="row">
             @for ($i = 1; $i <= 3; $i++)
                 <div class="col-lg-4">
                     <div class="card border-0 bg-transparent">
                         <div class="card-header bg-transparent px-0">
                             Categoria {{ $i }}
                         </div>
                         <div class="card-body p-0">
                             <div class="card text-white border-0">
                                 <svg class="bd-placeholder-img card-img rounded-0" width="100%" height="230"
                                     xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                     preserveAspectRatio="xMidYMid slice" focusable="false">
                                     <title>Placeholder</title>
                                     <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                         fill="#eceeef" dy=".3em">Thumbnail</text>
                                 </svg>
                                 <div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
                                     <h5 class="card-title h6 fw-bold">Lorem ipsum dolor sit amet consectetur
                                         adipisicing
                                         elit. Nihil error libero optio quos.</h5>
                                     <p class="card-text text-light small"><small
                                             class="text-muted">{{ date('d, M - Y') }}</small></p>
                                 </div>
                             </div>

                             @for ($j = 1; $j <= 3; $j++)
                                 <article class="d-flex my-4">
                                     <svg class="bd-placeholder-img me-4" height="75" xmlns="http://www.w3.org/2000/svg"
                                         role="img" aria-label="Placeholder: Thumbnail"
                                         preserveAspectRatio="xMidYMid slice" focusable="false">
                                         <title>Placeholder</title>
                                         <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                             fill="#eceeef" dy=".3em">Thumbnail</text>
                                     </svg>
                                     <div>
                                         <h6 class="h6 small">Lorem ipsum dolor sit amet consectetur adipisicing
                                             elit. Amet iusto repudiandae
                                             provident facilis maiores iste, quam ea libero</h6>
                                         <p class="card-text text-light small"><small
                                                 class="text-muted">{{ date('d, M - Y') }}</small></p>
                                     </div>
                                 </article>
                             @endfor
                         </div>
                     </div>
                 </div>
             @endfor
         </div>

     </aside>

     <footer class="small text-light">
         <div class="bg-secondary py-3">
             <div class="container py-4">
                 <div class="row justify-content-end align-items-start">
                     <div class="col-lg-3">
                         <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                             role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                             focusable="false">
                             <title>Placeholder</title>
                             <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                 dy=".3em">Thumbnail</text>
                         </svg>
                     </div>
                     <div class="col-lg-6 px-lg-5">
                         <h3 class="fw-bold mb-4">About us</h3>
                         <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt
                             explicabo neque ut vitae accusamus eum similique commodi tempore repellat labore, illum,
                             vero quia excepturi sunt.
                         </p>
                     </div>
                     <div class="col-lg-3">
                         <h3 class="fw-bold mb-4">Follow Us</h3>
                         <a href="#" class="btn btn-outline-light">
                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-app" viewBox="0 0 16 16">
                                 <path
                                     d="M11 2a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V5a3 3 0 0 1 3-3h6zM5 1a4 4 0 0 0-4 4v6a4 4 0 0 0 4 4h6a4 4 0 0 0 4-4V5a4 4 0 0 0-4-4H5z" />
                             </svg>
                         </a>
                         <a href="#" class="btn btn-outline-light">
                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-app" viewBox="0 0 16 16">
                                 <path
                                     d="M11 2a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V5a3 3 0 0 1 3-3h6zM5 1a4 4 0 0 0-4 4v6a4 4 0 0 0 4 4h6a4 4 0 0 0 4-4V5a4 4 0 0 0-4-4H5z" />
                             </svg>
                         </a>
                         <a href="#" class="btn btn-outline-light">
                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-app" viewBox="0 0 16 16">
                                 <path
                                     d="M11 2a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V5a3 3 0 0 1 3-3h6zM5 1a4 4 0 0 0-4 4v6a4 4 0 0 0 4 4h6a4 4 0 0 0 4-4V5a4 4 0 0 0-4-4H5z" />
                             </svg>
                         </a>
                     </div>
                 </div>
             </div>
         </div>

         <section class="bg-dark text-light py-2">
             <div class="container d-flex justify-content-between">
                 © {{ date('Y') }} - {{ config('app.name') }} - All rights reserved

                 <ul class="list-inline m-0">
                     <li>
                         @for ($i = 1; $i < 5; $i++)
                             <a href="#" class="text-muted text-decoration-none mx-lg-1">Menu item
                                 {{ $i }}</a>
                         @endfor
                     </li>
                 </ul>
             </div>
         </section>
     </footer>
 </body>

 </html>
