<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charts</title>
</head>
<body>
    <div class = "full-root">
        <div class="header-root">
            <div class="search-box">
                <input class="search-txt" type="text" name="" placeholder="Поиск по вопросам, ответами и авторам" width="500px" height="500px">
                <a href="#" class="search-btn">

                </a>
            </div>
            <div class="navbar">
                <div class="user_profile">
                   <a href="sessia.html"> <img id="profile_img" src="https://cdn3.iconfinder.com/data/icons/avatars-round-flat/33/man5-256.png" alt=""> </a>
                    <p id="user_name">Henry Ford</p>
               </div>
                <button  type="button" class="btn-signup">Log in</button>
                <button type="button" class="btn-signin">Sign in</button>
            </div>
        </div>

    <div class="finder">
            <img src="https://cdn2.iconfinder.com/data/icons/abc-3/500/Q_abc_alphabet_font_graphic_language_letter_text-128.png" alt="logo" width="70px" height="60px" class="logo">
            
            <div class="menu">
                <li><a href="main">Home</a></li>
                <li><a href="#">Communities</a></li>
                <li><a href="#">My Profile</a></li>
                <li><a href="charts">Charts</a></li>
            </div>
            <a href="ask"> <button  type="button" class="btn-ask">Ask a Question</button> </a>
            
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
    
    <div class="line-chart">
    <canvas id="myChart" width="400" height="200"></canvas>

    <script type="text/javascript">
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        type: "pie",
        data: {
            labels: ["Red", "Purple", "Yellow"], 
            datasets: [
                {label:'Pie chart example',
                data: [10, 20, 30], 
            backgroundColor :[
                'rgb(255, 129, 102, 1)',
                'rgb(234, 162, 235, 1)',
                'rgb(255, 206, 36, 1)', 
            ],
        }
    ]
    },
    options:{
        scales: {
            yAxes: [{
                tickets: {
                    beginAtZero: true
                }
            }]
        }
    }});
    </script>
    </div>
    </div>
</body>
</html>