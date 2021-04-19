<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="com.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Project</title>
</head>
<body>
    <div class = "full-root">
        <div class="header-root">
            <div class="search-box">
                <input class="search-txt" type="text" name="" placeholder="Search by Questions, Answers and Authors" width="500px" height="500px">
                <a href="#" class="search-btn">

                </a>
            </div>
            <div class="navbar">
                <div class="user_profile">
                    <img id="profile_img" src="https://cdn3.iconfinder.com/data/icons/avatars-round-flat/33/man5-256.png" alt="">
                    <p id="user_name">Henry Ford</p>
               </div>
                <button  type="button" class="btn-signup">Login</button>
                <button  type="button" class="btn-signin">Sign in</button>
                
            </div>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Config::get('languages')[App::getLocale()] }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                @foreach (Config::get('languages') as $lang => $language)
                    @if ($lang != App::getLocale())
                            <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                    @endif
                @endforeach
                </div>
            </li>
            
        </div>

    <div class="finder">
            <img src="https://cdn2.iconfinder.com/data/icons/abc-3/500/Q_abc_alphabet_font_graphic_language_letter_text-128.png" alt="logo" width="70px" height="60px" class="logo">
            
            <div class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Communities</a></li>
                <li><a href="#">My Profile</a></li>
                <li><a href="charts">Charts</a></li>
            </div>
            <button  type="button" class="btn-ask">Ask a Question</button>
            
            <footer>
                <div class="footer-content">
                    <ul class="socials">
                        <li><a href="#"><img src="https://cdn2.iconfinder.com/data/icons/social-media-applications/64/social_media_applications_3-instagram-256.png" alt="" width="30px" height="30px">     </a></li>
                        <li><a href="#"><img src="https://cdn3.iconfinder.com/data/icons/social-media-2169/24/social_media_social_media_logo_facebook-256.png" alt=""                          width="30px" height="30px">     </a></li>
                        <li><a href="#"><img src="https://cdn2.iconfinder.com/data/icons/social-flat-buttons-3/512/telegram-256.png" alt=""                     width="30px" height="30px">     </a></li>
                        <li><a href="#"><img src="https://cdn0.iconfinder.com/data/icons/social-network-7/50/11-256.png" alt=""       width="30px" height="30px">     </a></li>
                        <li><a href="#"><img src="https://cdn3.iconfinder.com/data/icons/2018-social-media-logotypes/1000/2018_social_media_popular_app_logo_youtube-256.png" alt=""                   width="30px" height="30px">     </a></li>
                    </ul>
                    
                    
                </div>

                
            </footer>
            <div class="footer-bottom">
                <p>copyright &copy; 2021 codeOpacity. design by <span>Batko</span></p>
            </div>
    </div>
    </div>
    
</body>
</html>