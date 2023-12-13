<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMDb</title>
    <link rel="icon" type="image/x-icon" href="../web Project/Images/amdb.ico">
    <link rel="stylesheet" href="style.css">
    <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    
</head>
<script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}
</script>

<body >
  <div>
    <nav> 
        <div id="navbar" >
          <a href="index.php" target="_top"><b> Home</b></a>
          <a href="Movies.php"><b> Movies</b></a>
          <a href="Series.php"><b> Series</b></a>
          <a href="Plays.php"><b> Plays</b></a>
          <a href="TvShows.php"><b> Tv Shows</b></a>
          <a href="Anime.php" ><b> Anime</b></a>
         
        </div>
   <header>
       <h1>
         <img src="Images/amdb.png" alt="erreur" width="50" height="30">
          <b> All Movies Database</b>
       </h1>
   </header>
   
   </nav>
     <div class="container">
      <div class="content-container">
        <div class="featured-content" > 
          <div class="movie-list-container">
              <h1 class="movie-list-title">Movies</h1>
              <div class="movie-list-wrapper">
                  <div class="movie-list">
                      <div class="movie-list-item">
                          <form action="output.php" method="GET">
                          <img class="movie-list-item-img" src="Images/interstellar-poster.jpg" alt="">
                          <button class="movie-list-item-button" type="submit" name="details" value="M1">Details</button>
                          </form>
                            <span class="movie-list-item-title">Interstellar</span>
                          <p class="movie-list-item-desc">(2014) By christopher nolan</p>
                               
                      </div>
                      <div class="movie-list-item">
                          <form action="output.php" method="GET">
                          <img class="movie-list-item-img" src="Images/avengers-endgame-journey-s-end-i122136.jpg" alt="" name="M2">
                          <button class="movie-list-item-button" type="submit" name="details" value="M2">Details</button>
                          </form>
                          <span class="movie-list-item-title">Endgame</span>
                          <p class="movie-list-item-desc">(2019) By  Anthony Russo/Joe Russo</p>
                      </div>
                      <div class="movie-list-item">
                          <form action="output.php" method="GET">
                          <img class="movie-list-item-img" src="Images/Koe no Katachi.jpg" alt="" name="M3">
                          <button class="movie-list-item-button" type="submit" name="details" value="M3">Details</button>
                         </form>
                          <span class="movie-list-item-title">Koe no Katachi</span>
                          <p class="movie-list-item-desc">(2016) By Kyoto Animation</p>
                          
                      </div>
                      <div class="movie-list-item">
                          <form action="output.php" method="GET">
                          <img class="movie-list-item-img" src="img/4.jpg" alt="" name="M4">
                         <button class="movie-list-item-button" name="details" value="M4">Details</button>
                        </form>
                          <span class="movie-list-item-title">1917</span>
                          <p class="movie-list-item-desc">(2019) by  Sam Mendes</p>
                              
                              
                      </div>
                      <div class="movie-list-item">
                          <form action="output.php" method="GET">
                          <img class="movie-list-item-img" src="img/3.jpg" alt="" name="M5">
                          <button class="movie-list-item-button" name="details" value="M5">Details</button>
                          </form>
                          <span class="movie-list-item-title">Storm</span>
                          <p class="movie-list-item-desc">(2017) By  Dennis Bots </p>
                              
                              
                      </div>
                      
                      <div class="movie-list-item">
                          <form action="output.php" method="GET">
                          <img class="movie-list-item-img" src="img/6.jpg" alt="">
                          <button class="movie-list-item-button">Details</button>
                            </form>
                          <span class="movie-list-item-title">Rampage</span>
                          <p class="movie-list-item-desc">(2018) By  Brad Peyton</p>      
                      </div>
                      <div class="movie-list-item">
                          <img class="movie-list-item-img" src="img/8.jpg" alt="">
                          <span class="movie-list-item-title">Oblivion</span>
                          <p class="movie-list-item-desc">(2013) By Joseph Kosinski</p>
                              <form action="output.php" method="GET">
                              <a href="output.html"><button class="movie-list-item-button">Details</button></a>
                            </form>
                      </div>
                  </div>
                  <i class="fas fa-chevron-right arrow"></i>
              </div>
          </div>
          <div class="movie-list-container">
              <h1 class="movie-list-title">Series</h1>
              <div class="movie-list-wrapper">
                  <div class="movie-list">
                      <div class="movie-list-item">
                          <form action="output.php" method="GET">
                          <img class="movie-list-item-img" src="Images/GOT.webp" alt="" name="S1">
                          <button class="movie-list-item-button" type="submit" name="details" value="S1">Details</button>
                            </form>
                          <span class="movie-list-item-title">Game of Thrones</span>
                          <p class="movie-list-item-desc">8 seasons By HBO</p>
                              
                              
                      </div>
                      <div class="movie-list-item">
                          <form action="output.php" method="GET">
                          <img class="movie-list-item-img" src="Images/Dark.jpg" alt="" name="S2">
                          <button class="movie-list-item-button" name="details" value="S2">Details</button>
                        </form>
                          <span class="movie-list-item-title">Dark</span>
                          <p class="movie-list-item-desc">3 seasons By Netflix</p>
                          
                      </div>
                      <div class="movie-list-item">
                        <form action="output.php" method="GET">
                          <img class="movie-list-item-img" src="Images/The Vampire Diaries.jpg" alt="" name="S3">
                          <button class="movie-list-item-button" name="details" value="S3">Details</button>
                        </form>
                          <span class="movie-list-item-title">The Vampire Diaries</span>
                          <p class="movie-list-item-desc">7 seasons By CW TV Network</p>
                          
                      </div>
                      <div class="movie-list-item">
                          <form action="output.php" method="GET">
                          <img class="movie-list-item-img" src="Images/Friends.jpg" alt="" name="S4">
                          <button class="movie-list-item-button" name="details" value="S4">Details</button>
                        </form>
                          <span class="movie-list-item-title">Friends</span>
                          <p class="movie-list-item-desc">10 seasons By NBC&Warner Bros Studios</p>
                          
                      </div>
                      <div class="movie-list-item">
                          <img class="movie-list-item-img" src="Images/Himym.jfif" alt="">
                          <span class="movie-list-item-title">Himym</span>
                          <p class="movie-list-item-desc">How I Met Your Mother 9 seasons By CBS&20th Century Fox Television</p>
                          <button class="movie-list-item-button">Details</button>
                      </div>
                      <div class="movie-list-item">
                          <img class="movie-list-item-img" src="Images/TWD.jfif" alt="">
                          <span class="movie-list-item-title">The Walking Dead </span>
                          <p class="movie-list-item-desc">11 seasons By ABC </p>
                          <button class="movie-list-item-button">Details</button>
                      </div>
                      <div class="movie-list-item">
                          <img class="movie-list-item-img" src="Images/Breaking Bad.jpg" alt="">
                          <span class="movie-list-item-title">Breaking Bad</span>
                          <p class="movie-list-item-desc">5 seasons By AMC</p>
                          <button class="movie-list-item-button">Details</button>
                      </div>
                  </div>
                  <i class="fas fa-chevron-right arrow"></i>
              </div>
          </div>
          <div class="featured-content">
              <table>
                  <tr>
                      
                      <td>
                           <img class="featured-title" src="Images/House Of The Dragon.jfif" alt="">
                      </td>
                      <td>
                          <p class="featured-desc">The story of the Targaryen civil war that took place 
                  about 300 years before events portrayed in "Game of Thrones".</p>
                  <button class="featured-button">Details</button>
                      </td>
                      <td>
                          <iframe src="https://www.youtube.com/embed/fNwwt25mheo" frameborder="0" width="770px" height="450px" style="padding-left: 20px;"></iframe>
                      </td>
                  </tr>
              </table>
              
          </div>
          <div class="movie-list-container">
              <h1 class="movie-list-title">Anime</h1>
              <div class="movie-list-wrapper">
                  <div class="movie-list">
                      <div class="movie-list-item">
                          <form action="output.php" method="GET">
                          <img class="movie-list-item-img" src="Images/Steins;Gate.jpg" alt="" name="A1">
                          <button class="movie-list-item-button" name="details" value="A1">Details</button>
                          </form>
                          <span class="movie-list-item-title">Steins;Gate</span>
                          <p class="movie-list-item-desc">24 Episodes By White Fox Studios</p>
                          
                      </div>
                      <div class="movie-list-item">
                        <form action="output.php" method="GET">
                          <img class="movie-list-item-img" src="Images/One Piece.jpg" alt="" name="A2">
                          <button class="movie-list-item-button" name="details" value="A2">Details</button>
                        </form>
                          <span class="movie-list-item-title">One Piece</span>
                          <p class="movie-list-item-desc">1015 Episodes By Toei Animation</p>
                      </div>
                      <div class="movie-list-item">
                          <form action="output.php" method="GET">
                          <img class="movie-list-item-img" src="Images/Naruto Shippuden.jfif" alt="" name="A3">
                          <button class="movie-list-item-button" name="details" value="A3">Details</button>
                          </form>
                          <span class="movie-list-item-title">Naruto Shippuden</span>
                          <p class="movie-list-item-desc">500 Episodes By Studio Pierrot</p>
                          
                      </div>
                      <div class="movie-list-item">
                          <form action="output.php" method="GET">
                          <img class="movie-list-item-img" src="Images/Dr Stone.jpg" alt="" name="A4">
                          <button class="movie-list-item-button" name="details" value="A4">Details</button>
                          </form>
                          <span class="movie-list-item-title">Dr. Stone</span>
                          <p class="movie-list-item-desc">24 Episodes By TMS Entertainment</p>
                          
                      </div>
                      <div class="movie-list-item">
                          <img class="movie-list-item-img" src="Images/Violet Evergarden.jpg" alt="">
                          <span class="movie-list-item-title">Violet Evergarden</span>
                          <p class="movie-list-item-desc">13 Episodes By  Kyoto Animation Studios</p>
                          <button class="movie-list-item-button">Details</button>
                      </div>
                      <div class="movie-list-item">
                          <img class="movie-list-item-img" src="Images/Zankyou No Terror.jpg" alt="">
                          <span class="movie-list-item-title">Zankyou no Terror</span>
                          <p class="movie-list-item-desc">11 Episodes By MAPPA Studios</p>
                          <button class="movie-list-item-button">Details</button>
                      </div>
                      <div class="movie-list-item">
                          <img class="movie-list-item-img" src="Images/Shingeki no Kyojin.jpg" alt="">
                          <span class="movie-list-item-title">Shingeki no Kyojin</span>
                          <p class="movie-list-item-desc">4 seasons By MAPPA Studios</p>
                          <button class="movie-list-item-button">Details</button>
                      </div>
                  </div>
                  <i class="fas fa-chevron-right arrow"></i>
              </div>
          </div>
          <div class="movie-list-container">
              <h1 class="movie-list-title">Plays</h1>
              <div class="movie-list-wrapper">
                  <div class="movie-list">
                      <div class="movie-list-item">
                          <img class="movie-list-item-img" src="Images/مدرسة المشاغبين.jpg" alt="">
                          <span class="movie-list-item-title">مدرسة المشاغبين</span>
                          <p class="movie-list-item-desc">1973 By Galal al Sharkawy</p>
                          <button class="movie-list-item-button">Details</button>
                      </div>
                      <div class="movie-list-item">
                          <img class="movie-list-item-img" src="Images/العيال كبرت.jpg" alt="">
                          <span class="movie-list-item-title">العيال كبرت</span>
                          <p class="movie-list-item-desc">1979 BY Bahgat Kamar&Samir Khafaga</p>
                          <button class="movie-list-item-button">Details</button>
                      </div>
                      <div class="movie-list-item">
                          <img class="movie-list-item-img" src="Images/الواد سيد الشغال.jpg" alt="">
                          <span class="movie-list-item-title">الواد سيد الشغال</span>
                          <p class="movie-list-item-desc">1985 By Samir Abdelazim</p>
                          <button class="movie-list-item-button">Details</button>
                      </div>
                      <div class="movie-list-item">
                          <img class="movie-list-item-img" src="Images/BodyGuard.jpg" alt="">
                          <span class="movie-list-item-title">BodyGuard</span>
                          <p class="movie-list-item-desc">2021 By Rami Imam</p>
                          <button class="movie-list-item-button">Details</button>
                      </div>
                      <div class="movie-list-item">
                          <img class="movie-list-item-img" src="Images/azaeem1.jpg" alt="">
                          <span class="movie-list-item-title">الزعيم</span>
                          <p class="movie-list-item-desc">1993 By Farouk Sabri</p>
                          <button class="movie-list-item-button">Details</button>
                      </div>
                      <div class="movie-list-item">
                          <img class="movie-list-item-img" src="Images/ريا وسكينة.jpg" alt="">
                          <span class="movie-list-item-title">ريا وسكينة</span>
                          <p class="movie-list-item-desc">1982 By houssain kamal</p>
                          <button class="movie-list-item-button">Details</button>
                      </div>
                  </div>
                  <i class="fas fa-chevron-right arrow"></i>
              </div>
          </div>
      </div>
  </div>
  <script src="app.js"></script>
        
        
     
   </section>
  </div>  

  
</body>
</html>