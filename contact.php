<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us</title>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

/* ================= BODY BACKGROUND ================= */
body{
    background:
        linear-gradient(rgba(0,0,0,.45), rgba(0,0,0,.45)),
        url("https://unblast.com/wp-content/uploads/2020/06/Food-Recipes-App-Template-1.jpg")
        center / cover no-repeat fixed;
    color:#333;
}

/* ================= CONTAINER ================= */
.container{
    max-width:1100px;
    margin:auto;
    padding:0 20px;
}

/* ================= NAVBAR ================= */
header{
    background:#111;
    padding:20px 60px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    position:sticky;
    top:0;
    z-index:100;
}

.logo{
    color:#fff;
    font-size:22px;
    font-weight:600;
    text-decoration:none;
    display:flex;
    align-items:center;
    gap:10px;
}

.logo span{
    background:#ffb703;
    color:#000;
    width:30px;
    height:30px;
    border-radius:50%;
    display:flex;
    justify-content:center;
    align-items:center;
}

nav a{
    color:#fff;
    margin-left:30px;
    text-decoration:none;
    position:relative;
}

nav a::after{
    content:'';
    position:absolute;
    left:0;
    bottom:-6px;
    width:0;
    height:2px;
    background:#ffb703;
    transition:.3s;
}

nav a:hover::after,
nav a.active::after{
    width:100%;
}

nav a:hover,
nav a.active{
    color:#ffb703;
}

/* ================= CONTACT SECTION ================= */
.contact-wrapper{
    padding:80px 0;
}

.contact-box{
    background:#fff;
    border-radius:10px;
    padding:60px;
    box-shadow:0 15px 40px rgba(0,0,0,.15);
}

.contact-header h1{
    font-size:42px;
    margin-bottom:10px;
}

.contact-header p{
    color:#666;
    margin-bottom:50px;
}

/* GRID */
.contact-content{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:60px;
}

/* INFO */
.contact-info h2,
.contact-form h2{
    margin-bottom:25px;
    font-size:24px;
}

.info-item{
    margin-bottom:25px;
}

.info-label{
    font-size:13px;
    color:#999;
    text-transform:uppercase;
}

.info-value{
    font-size:17px;
    color:#222;
}

.social-icons{
    display:flex;
    gap:12px;
    margin-top:15px;
}

.social-icon{
    width:40px;
    height:40px;
    border:1px solid #ddd;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    text-decoration:none;
    color:#555;
}

/* FORM */
.form-group{
    margin-bottom:25px;
}

.form-input{
    width:100%;
    border:none;
    border-bottom:1px solid #ccc;
    padding:10px 0;
    font-size:16px;
}

.form-input:focus{
    outline:none;
    border-color:#ffb703;
}

textarea{
    resize:none;
}

.submit-btn{
    background:#ffb703;
    color:#000;
    border:none;
    padding:14px 40px;
    font-size:16px;
    border-radius:5px;
    cursor:pointer;
}

.submit-btn:hover{
    background:#ffa000;
}

/* ================= FOOTER ================= */
footer {
    background: #ff9800; /* orange background */
    padding: 50px 0 30px;
}

.footer-content {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 30px;
}

.footer-section {
    flex: 1;
    min-width: 250px;
}

.footer-section h3 {
    color: #000; /* BLACK */
    font-size: 20px;
    margin-bottom: 15px;
}

.footer-section p {
    color: #000; /* BLACK */
    font-size: 15px;
    margin-bottom: 8px;
}

.copyright {
    margin-top: 30px;
    padding-top: 20px;
    border-top: 1px solid rgba(0,0,0,0.3);
    text-align: center;
    color: #000; /* BLACK */
    font-size: 14px;
    font-weight: 500;
}


/* ================= RESPONSIVE ================= */
@media(max-width:768px){
    header{
        flex-direction:column;
        gap:15px;
        padding:20px;
    }
    nav a{
        margin:0 10px;
    }
    .contact-content{
        grid-template-columns:1fr;
    }
    .contact-box{
        padding:40px 30px;
    }
}
</style>
</head>

<body>

<header>
    <a href="#" class="logo"><span>🍽</span> Contact Here</a>
    <nav>
        <a href="index.php">Home</a>
        <a href="recipes.php">Recipes</a>
        <a href="about.php">About</a>
        <a href="contact.php" class="active">Contact</a>
    </nav>
</header>

<section class="contact-wrapper">
<div class="container">
<div class="contact-box">

<div class="contact-header">
    <h1>Send This Infomation</h1>
    <p>Have a question or message? We'd love to hear from you.</p>
</div>

<div class="contact-content">

<!-- INFO -->
<div class="contact-info">
    <h2>Contact Information</h2>

    <div class="info-item">
        <span class="info-label">Email</span>
        <div class="info-value">paulomondares211@gmail.com</div>
    </div>

    <div class="info-item">
        <span class="info-label">Phone</span>
        <div class="info-value">0932-862-8024</div>
    </div>

    <div class="info-item">
        <span class="info-label">Location</span>
        <div class="info-value">San Carlos City, Pangasinan</div>
    </div>
 
</div>

<!-- FORM -->
<div class="contact-form">
    <h2>Send a Message</h2>

    <form>
        <div class="form-group">
            <input type="text" class="form-input" placeholder="Your Name" required>
        </div>
        <div class="form-group">
            <input type="email" class="form-input" placeholder="Email Address" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-input" placeholder="Subject">
        </div>
        <div class="form-group">
            <textarea class="form-input" placeholder="Your Message" rows="4" required></textarea>
        </div>
        <button class="submit-btn">Send Message</button>
    </form>
</div>

</div>
</div>
</div>
</section>

<footer>
<div class="container">
<div class="footer-content">

<div class="footer-section">
    <h3>Delicious Recipes</h3>
    <p>Authentic Filipino food made with love 🇵🇭</p>
</div>
 

<div class="footer-section">
    <h3>Contact</h3>
    <p>Email: paulomondares211@gmail.com</p>
    <p>Phone: 0932-862-8024</p>
    <p>Branch: San Carlos City Pangasinan Branch.</p>
</div>

</div>

<div class="copyright">
   <h3>  2026 Paulo Mondares | DeliciousRecipes</h3>
</div>
</div>
</footer>

</body>
</html>
