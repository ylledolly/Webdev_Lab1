<!-- resources/views/labAct.blade.php -->
@extends('Components.Layout')

@section('title', 'Lab Activities')

@section('content')
    <section class="labAct-section">
        <div class="lab-container">
            <div class="lab-header">
            <img src="{{ asset('images/imageProfile.png') }}" alt="">
            <p>Welcome to the compilation of all the laboratory activities we've completed during the first 
                term of our Web Development course, showcasing the projects and skills learned throughout the semester. 
                Feel free to explore the content and enjoy the process of learning.</p>
            </div>
            <!-- Top Section with Folder Icons -->
            <div class="top-section">
                <div class="folder" onclick="showContent('folder1')">
                    <img src="{{ asset('images/folder1.png') }}" alt="Folder 1">
                    <p>Lab 1</p>
                </div>
                <div class="folder" onclick="showContent('folder2')">
                    <img src="{{ asset('images/folder2.png') }}" alt="Folder 2">
                    <p>Lab 2</p>
                </div>
                <div class="folder" onclick="showContent('folder3')">
                    <img src="{{ asset('images/folder1.png') }}" alt="Folder 3">
                    <p>Lab 3</p>
                </div>
                <div class="folder" onclick="showContent('folder4')">
                    <img src="{{ asset('images/folder2.png') }}" alt="Folder 4">
                    <p>Lab 4</p>
                </div>
            </div>

            <!-- Bottom Section to Display Folder Content -->
            <div class="bottom-section">
                <div id="folder1" class="folder-content">
                    <h2>Laboratory 1</h2>
                    <p>Introduction to Laravel</p>
                    <h3>Main Directories Laravel and their Functions</h3>
                    <div class="folder1-box">
                        <p>app/</p>
                        <p>app/Http/Middleware</p>
                        <p>bootsrap/</p>
                        <p>config/</p>
                        <p>routes/</p>
                        <p>resources/</p>
                        <p>resouces/views</p>
                        <p>public/</p>
                    </div>
                    <div class="function-column">
                        <p>The <span>app/</span> directory contains the core code of the application.</p>
                        <p>The <span>app/Http/Middleware</span> directory is where you define middleware classes. It filters incoming requests 
                            before they reach your application's routes.</p>
                        <p>The <span>bootstrap/</span> directory contains files that are used to initialize the framework and configure your application. </p>
                        <p>The <span>config/</span> directory holds all of the application's configuration files.</p>
                        <p>The <span>routes/</span> directory defines all the routes for the application.</p>
                        <p>The <span>resources/</span> directory contains views, raw assets, and language files.</p>
                        <p>The <span>resources/views</span> directory to store Blade templates.</p>
                        <p>The <span>public/</span> directory serves as the entry point for all requests.</p>
                    </div>
                </div>
                <div id="folder2" class="folder-content" style="display:none;">
                    <h2>Laboratory 2</h2>
                    <p>Basic Routing in Laravel</p>
                    <div class="slider">
                        <div class="slides">
                            <div class="slide active">
                                <img src="{{ asset('images/login.png') }}" alt="Image 1">
                                <div class="caption">Log in page.</div>
                            </div>
                            <div class="slide active">
                                <img src="{{ asset('images/doc1.png') }}" alt="Image 1">
                                <div class="caption">Defining basic route.</div>
                            </div>
                            <div class="slide">
                                <img src="{{ asset('images/doc2.png') }}" alt="Image 2">
                                <div class="caption">Using Route Parameters.</div>
                            </div>
                            <div class="slide">
                                <img src="{{ asset('images/doc4.png') }}" alt="Image 3">
                                <div class="caption">Using optional parameters.</div>
                            </div>
                            <div class="slide">
                                <img src="{{ asset('images/doc3.png') }}" alt="Image 3">
                                <div class="caption">Apply regular expression constraints.</div>
                            </div>
                        </div>
                        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
                        <button class="next" onclick="changeSlide(1)">&#10095;</button>
                    </div>
                </div>
                <script src="{{ asset('js/labActJs.js') }}"></script>

                <div id="folder3" class="folder-content" style="display:none;">
                    <h2>Laboratory 3</h2>
                    <p>Lay out File</p>
                    <div class="slider2">
                        <div class="slides2">
                            <div class="slide2 active">
                                <img src="{{ asset('images/doc5.png') }}" alt="Image 1">
                                <div class="caption">Creating folder named "Components" inside the resources/views.</div>
                            </div>
                            <div class="slide2">
                                <img src="{{ asset('images/doc6.png') }}" alt="Image 2">
                                <div class="caption">Defining Layout.blade.php inside the Components folder.</div>
                            </div>
                            <div class="slide2">
                                <img src="{{ asset('images/doc7.png') }}" alt="Image 3">
                                <div class="caption">Layout.blade.php.</div>
                            </div>
                            <div class="slide2">
                                <img src="{{ asset('images/doc8.png') }}" alt="Image 3">
                                <div class="caption">Extends the Components.Layout view which is the basic layout for all pages</div>
                            </div>
                            <div class="slide2">
                                <img src="{{ asset('images/doc9.png') }}" alt="Image 3">
                                <div class="caption">Directives used to define sections of content that can be injected into the layout.</div>
                            </div>
                            <div class="slide2">
                                <img src="{{ asset('images/doc10.png') }}" alt="Image 3">
                                <div class="caption">The @section('title', 'Welcome Page') directive sets the title of the page.</div>
                            </div>
                        </div>
                        <button class="prev" onclick="changeSlide2(-1)">&#10094;</button>
                        <button class="next" onclick="changeSlide2(1)">&#10095;</button>
                    </div>
                    <script src="{{ asset('js/labActJs1.js') }}"></script>
                </div>

                <div id="folder4" class="folder-content" style="display:none;">
                    <h2>Laboratory 4</h2>
                    <p>Middleware</p>
                    <div class="slider3">
                        <div class="slides3">
                            <div class="slide3 active">
                                <img src="{{ asset('images/doc11.png') }}" alt="Image 1">
                                <div class="caption">Command to create a middleware.</div>
                            </div>
                            <div class="slide3">
                                <img src="{{ asset('images/doc12.png') }}" alt="Image 2">
                                <div class="caption">The generated middleware class file will be placed in the app/Http/Middleware directory.</div>
                            </div>
                            <div class="slide3">
                                <img src="{{ asset('images/doc13.png') }}" alt="Image 3">
                                <div class="caption">This middleware checks if the user's name from the request input is either "Karylle" or "Azore" 
                                    and redirects them to the homepage if it matches; otherwise, 
                                    it redirects them to an access denied page.</div>
                            </div>
                            <div class="slide3">
                                <img src="{{ asset('images/denied.png') }}" alt="Image 2">
                                <div class="caption">The access denied page.</div>
                            </div>
                            <div class="slide3">
                                <img src="{{ asset('images/doc14.png') }}" alt="Image 3">
                                <div class="caption">This is another middleware code designed to log information about incoming HTTP requests in a Laravel application. The configuration for the 'custom' logging channel sets up Laravel to log information at the info level to a specific file (log.txt). </div>
                            </div>
                            <div class="slide3">
                                <img src="{{ asset('images/doc15.png') }}" alt="Image 3">
                                <div class="caption">When your middleware is triggered, it captures and logs details about incoming requests just like this.</div>
                            </div>
                            <div class="slide3">
                                <img src="{{ asset('images/doc16.png') }}" alt="Image 3">
                                <div class="caption">The CheckRole middleware is applied to this route. Middleware in Laravel is used to 
                                    filter HTTP requests entering your application. In this case, CheckRole likely checks if the authenticated user has the appropriate role or permissions to access the /welcome route. If the user does not meet the criteria set by the middleware, 
                                    they may be redirected or denied access.</div>
                            </div>
                            <div class="slide3">
                                <img src="{{ asset('images/doc17.png') }}" alt="Image 3">
                                <div class="caption">This code defines a route group in Laravel that applies multiple middleware to all routes inside the group.</div>
                            </div>
                            <div class="slide3">
                                <img src="{{ asset('images/doc18.png') }}" alt="Image 3">
                                <div class="caption">Modify the CheckAge middleware to accept a parameter.</div>
                            </div>
                        </div>
                        <button class="prev" onclick="changeSlide3(-1)">&#10094;</button>
                        <button class="next" onclick="changeSlide3(1)">&#10095;</button>
                    </div>
                    <script src="{{ asset('js/labActJs2.js') }}"></script>
                </div>
            </div>
        </div>

        <script>
            function showContent(folderId) {
                // Hide all folder content
                document.querySelectorAll('.folder-content').forEach(function(content) {
                    content.style.display = 'none';
                });
                // Show the selected folder content
                document.getElementById(folderId).style.display = 'block';
            }
        </script>
        </div>
    </section> 
@endsection