<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&family=Russo+One&display=swap" rel="stylesheet">
    <title>Document</title>
    <link href="{{ asset('css/design.css') }}" rel="stylesheet">
     <link rel="stylesheet" id="theme-style" href="">

</head>
<body>
    <div class="header">
        <nav >
            <div class="logo"><a href="/sample">Logo</a></div>
            <div class="navbar">
                <ul>
                    <li><a href="/sample">Home</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>

            <nav class="loginsignup">
                <ul>

                   @if (Session::get('name') != null)
                   <li><a href="/simple-out">LogOut</a></li>
                   <li><a href="#">{{ Session::get('name') }}</a></li>
                   @else
                   <li><a href="/simple-login">Login</a></li>
                   <li><a href="/simple-regi">Sign Up</a></li>
                   @endif


                </ul>
            </nav>
        </nav>
    </div>
    <section>
        <div class="banner">
            <div class="service">
                <h1>Welcome To my Web page</h1>
                <a href="#">Get Started</a>
            </div>

        </div>
    </section>
    <section class="main-container">
        <div id="theme-option-wrepper">

            <div class="theme">
                <div data-mode="light" class="theme-dots" id="light-mode"></div>
                <div data-mode="blue" class="theme-dots" id="blue-mode"></div>
                <div data-mode="green" class="theme-dots" id="green-mode"></div>
                <div data-mode="gray" class="theme-dots" id="purple-mode"></div>
            </div>

                <p id="settings-note">*Theme settings will be saved for <br> your next visit</p>
        </div>

        <div class="container">
            <div class="post">
                <h1>An Amazing Blog Post</h1>

                <p>By <em>Stephanie Eckles</em> | Posted on: <em>02/02/2020</em></p>
                <hr>
                <div class="paragraph">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ex orci, ultricies sit amet ante id, fermentum iaculis ligula. Donec ut ligula in est ultrices egestas sed ac leo. Aenean lobortis est quis ex bibendum ultricies. Pellentesque ex est, interdum eget augue ut, lacinia tristique odio. Curabitur facilisis mattis urna a sagittis. Fusce malesuada libero vel quam efficitur, sed convallis tortor vehicula. Aliquam erat volutpat. Suspendisse potenti.

                        Cras arcu nibh, fermentum ac tristique aliquam, consectetur sit amet metus. Integer sagittis eu orci eget consequat. In blandit, enim sit amet egestas consectetur, ipsum mauris sollicitudin velit, malesuada finibus justo ipsum vel risus. Nam convallis efficitur ipsum a suscipit. Aliquam in metus diam. Curabitur condimentum erat eu dui congue, vel posuere dolor pellentesque. Suspendisse porta, erat tempus pharetra varius, nunc libero lobortis felis, in ornare eros urna vitae erat. Sed eu luctus leo. In sed purus vitae justo blandit tincidunt vel ac massa. Duis pharetra orci quam, sed laoreet ligula fringilla vel. Nam porta nunc eu nisl faucibus sagittis. Mauris cursus felis eu semper consequat. Nullam et feugiat lectus, non sodales metus. Integer ornare at lorem vulputate convallis.

                        Sed quis felis vitae sem euismod lacinia at sit amet nulla. Sed eu arcu odio. Etiam id quam blandit, auctor ante ornare, elementum enim. Aenean vitae est ullamcorper, lacinia velit sed, mattis arcu. Morbi mollis lobortis consectetur. Nulla bibendum egestas euismod. Curabitur in lobortis ligula, vel vestibulum odio. Nam vitae nunc eget urna condimentum malesuada. Duis et purus odio. Curabitur sed varius lorem. Etiam mauris nunc, pulvinar id dui et, placerat malesuada quam. Vivamus et nunc auctor, viverra lorem vitae, lacinia magna. Nunc in dolor id odio condimentum iaculis. Aliquam tempus tortor massa, eu porttitor tellus bibendum eget. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;

                        Fusce gravida turpis in vestibulum mattis. Praesent ac purus facilisis ipsum sollicitudin varius. Etiam convallis, ipsum at hendrerit efficitur, quam diam feugiat orci, ut congue sem sem id eros. In vestibulum turpis sit amet enim pretium, eget tincidunt urna ultrices. Etiam sodales rutrum elementum. Aliquam ullamcorper augue nunc, vel pulvinar mi facilisis sed. Vestibulum sed quam odio. Phasellus tellus leo, tempor vel ligula at, convallis semper massa. In mollis est in diam fringilla sodales. Aliquam urna elit, porta hendrerit tellus et, imperdiet hendrerit tortor. Sed sit amet nisl ut purus pellentesque rutrum at nec velit. Nam vitae tempus risus. Maecenas rhoncus, nunc vel ullamcorper pellentesque, enim ex malesuada lacus, ac bibendum magna ipsum quis dolor. Fusce ultricies feugiat velit, at aliquet risus volutpat ac. Donec lacus metus, cursus sit amet ullamcorper non, dictum at ligula. Proin maximus ac turpis ut volutpat.

                        In aliquam erat id quam gravida, a consectetur justo varius. In non cursus ipsum. Quisque maximus interdum nisl, in faucibus urna mollis vitae. Suspendisse potenti. Maecenas consectetur porta lorem, nec placerat sapien mattis in. Integer lacinia a velit eu sollicitudin. In eu mi mauris. Donec semper neque magna, et pulvinar magna volutpat id. Vivamus accumsan lorem eget quam fermentum luctus. Curabitur mi mi, molestie quis sodales nec, vestibulum nec lacus. Proin tincidunt dui fermentum erat pulvinar rhoncus. Fusce interdum libero tempus libero hendrerit accumsan. Aliquam bibendum diam non tempus convallis.

                        </p>
                </div>
            </div>

        </div>

        <div class="left-navbar">


                <div class="search">
                    <form class="form-search">
                        <input placeholder="Enter your search term..." type="search" value="" name="search" id="search">
                        <input class="button-go"  type="submit" value="Go">

                    </form>
                </div>

                <div class="sidenav">
                    <a href="#">About</a>
                    <a href="#">Services</a>
                    <a href="#">Clients</a>
                    <a href="#">Contact</a>
                  </div>
        </div>
    </section>

    <div class="footer">
        <p>&copy; 2020 - All Ritght Reserved!</p>
    </div>

    <script type="text/javascript" src="{{ asset("js/design.js") }}"></script>
</body>
</html>
