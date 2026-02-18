<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Delicious Recipes</title>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Poppins', sans-serif;
    background:#111;
    color:#fff;
}

/* NAVBAR */
header{
    width:100%;
    padding:20px 60px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    position:fixed;
    top:0;
    left:0;
    z-index:10;
    background:rgba(0,0,0,0.6);
    animation: slideDown 1s ease forwards;
}

.logo{
    font-size:22px;
    font-weight:600;
    display:flex;
    align-items:center;
    gap:10px;
}

.logo span{
    background:#ffb703;
    color:#000;
    width:28px;
    height:28px;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
}

nav a{
    color:#fff;
    text-decoration:none;
    margin-left:30px;
}

nav a:hover{
    color:#ffb703;
}

/* HERO SECTION */
.hero{
    height:100vh;
    background:
        linear-gradient(to right, rgba(0,0,0,0.8), rgba(0,0,0,0.3)),
        url('https://images.unsplash.com/photo-1504674900247-0877df9cc836') center/cover no-repeat;
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;
    padding:0 20px;
}

.hero-content{
    max-width:900px;
    margin-top:80px;
}

/* VIDEO CIRCLES */
.video-wrapper{
    display:flex;
    justify-content:center;
    gap:25px;
    margin-bottom:35px;
}

.video-circle{
    width:160px;
    height:160px;
    border-radius:50%;
    overflow:hidden;
    border:4px solid #ffb703;
    box-shadow:0 0 20px rgba(255,183,3,0.4);
    animation: float 4s ease-in-out infinite;
}

.video-circle:nth-child(2){ animation-delay:.5s; }
.video-circle:nth-child(3){ animation-delay:1s; }

.video-circle iframe{
    width:100%;
    height:100%;
    border:none;
}

/* TEXT */
.hero h1{
    font-family:'Playfair Display', serif;
    font-size:64px;
    margin-bottom:15px;
    animation: fadeUp 1.2s ease forwards;
}

.hero p{
    font-size:18px;
    color:#f5d76e;
    margin-bottom:30px;
    animation: fadeUp 1.6s ease forwards;
}

/* BUTTON */
.btn-custom{
    background:#ffb703;
    color:#000;
    padding:16px 40px;
    border-radius:40px;
    font-size:16px;
    text-decoration:none;
    font-weight:500;
    transition:.3s;
    animation: fadeUp 2s ease forwards;
    display:inline-block;
}

.btn-custom:hover{
    background:#ffa200;
    box-shadow:0 0 20px rgba(255,183,3,.8);
    transform:scale(1.05);
}

/* TITLE */
.section-title{
    text-align:center;
    margin:80px 0 40px;
    font-family:'Playfair Display', serif;
}

/* CAROUSEL */
.carousel{
    opacity:0;
    transform:translateY(50px);
    transition:1s ease;
}

.carousel.show{
    opacity:1;
    transform:translateY(0);
}

.carousel-item img{
    height:500px;
    object-fit:cover;
}

/* FOOTER */
footer div{
    background:orange;
    color:black;
    text-align:center;
    padding:15px;
    font-size:16px;
}

/* ANIMATIONS */
@keyframes slideDown{
    from{transform:translateY(-80px);opacity:0}
    to{transform:translateY(0);opacity:1}
}

@keyframes fadeUp{
    from{transform:translateY(40px);opacity:0}
    to{transform:translateY(0);opacity:1}
}

@keyframes float{
    0%{transform:translateY(0)}
    50%{transform:translateY(-12px)}
    100%{transform:translateY(0)}
}

/* RESPONSIVE */
@media(max-width:768px){
    header{padding:15px}
    nav a{margin-left:15px;font-size:14px}
    .hero h1{font-size:38px}
    .video-wrapper{flex-direction:column}
}
</style>
</head>

<body>

<header>
    <div class="logo">
        <span>🍽</span> Delicious Food Pilipino Recipes
    </div>
    <nav>
        <a href="index.php">Home</a>
        <a href="recipes.php">Recipes</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>

<section class="hero">
    <div class="hero-content">

        <div class="video-wrapper">
            <div class="video-circle">
                <iframe src="https://www.youtube.com/embed/FQ2DyDHvZrg?autoplay=1&mute=1&loop=1&playlist=FQ2DyDHvZrg"
                allow="autoplay; encrypted-media"></iframe>
            </div>

            <div class="video-circle">
                <iframe src="https://www.youtube.com/embed/wbHJmqvcgcU?autoplay=1&mute=1&loop=1&playlist=wbHJmqvcgcU"
                allow="autoplay; encrypted-media"></iframe>
            </div>

            <div class="video-circle">
                <iframe src="https://www.youtube.com/embed/w5_kKyt21r0?autoplay=1&mute=1&loop=1&playlist=w5_kKyt21r0"
                allow="autoplay; encrypted-media"></iframe>
            </div>
        </div>

        <h1>Discover Amazing<br>Home Recipes</h1>
        <p>Explore our collection of delicious, easy-to-follow recipes that bring joy to your kitchen</p>
        <a href="#" class="btn-custom">Browse Recipes →</a>
    </div>
</section>

<h1 class="section-title">FOOD RESTAURANT</h1>

<div id="carouselExample" class="carousel slide mb-5">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2a/33/10/3e/manila-bay-kitchen-is.jpg?w=600&h=600&s=1" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092?w=600&h=600&fit=crop" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="https://img.freepik.com/free-vector/restaurant-business-poster-template-vector-with-yes-we-rsquo-re-open-text_53876-126486.jpg" class="d-block w-100">
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<footer>
  <div>
    © 2026 Paulo Mondares | San Carlos City, Pangasinan 2420. All Rights Reserved.
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
window.addEventListener("scroll", () => {
    const carousel = document.querySelector(".carousel");
    const pos = carousel.getBoundingClientRect().top;
    if(pos < window.innerHeight - 100){
        carousel.classList.add("show");
    }
});
</script>

</body>
</html>
