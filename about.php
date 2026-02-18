<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #fefefe;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* ================= NAVBAR ================= */
        header {
            width: 100%;
            padding: 20px 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: linear-gradient(to right, #1a1a1a, #111);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            color: #fff;
            font-size: 22px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .logo span {
            background: #ffb703;
            color: #000;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin-left: 30px;
            font-weight: 400;
            position: relative;
            padding-bottom: 6px;
            transition: color 0.3s;
        }

        /* underline animation */
        nav a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0%;
            height: 2px;
            background: #ffb703;
            transition: 0.3s;
        }

        nav a:hover::after,
        nav a.active::after {
            width: 100%;
        }

        nav a:hover {
            color: #ffb703;
        }

        nav a.active {
            color: #ffb703;
            font-weight: 500;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1b/6a/cb/7a/restaurant-is-open-now.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 100px 20px;
            margin-bottom: 60px;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 20px;
            max-width: 700px;
            margin: 0 auto;
        }

        /* Stats Section */
        .stats {
            display: flex;
            justify-content: center;
            margin-bottom: 60px;
        }

        .stat-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            padding: 30px;
            text-align: center;
            margin: 0 20px;
            min-width: 180px;
            transition: transform 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-10px);
        }

        .stat-number {
            font-size: 48px;
            font-weight: bold;
            color: #d32f2f;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 18px;
            color: #666;
            font-weight: 500;
        }

        /* Content Sections */
        .section {
            margin-bottom: 80px;
        }

        .section-title {
            font-size: 36px;
            color: #333;
            margin-bottom: 30px;
            text-align: center;
            position: relative;
        }

        .section-title:after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background-color: #ff9800;
            margin: 10px auto 0;
        }

        .content-box {
            display: flex;
            align-items: center;
            gap: 40px;
            margin-bottom: 40px;
        }

        .content-text {
            flex: 1;
        }

        .content-text p {
            font-size: 18px;
            margin-bottom: 20px;
            color: #555;
        }

        .content-image {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .content-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s;
        }

        .content-image:hover img {
            transform: scale(1.05);
        }

        /* Footer */
        footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 50px 0 30px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: 40px;
        }

        .footer-section {
            flex: 1;
            min-width: 250px;
            margin-bottom: 30px;
            padding-right: 30px;
        }

        .footer-section h3 {
            font-size: 22px;
            margin-bottom: 20px;
            color: #ff9800;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #bdc3c7;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: #ff9800;
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #34495e;
            color: #95a5a6;
            font-size: 14px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header {
                padding: 20px;
                flex-direction: column;
                gap: 15px;
            }

            nav a {
                margin: 0 10px;
            }

            .hero h1 {
                font-size: 36px;
            }

            .stats {
                flex-direction: column;
                align-items: center;
            }

            .stat-card {
                margin: 10px 0;
                width: 80%;
            }

            .content-box {
                flex-direction: column;
            }

            .footer-section {
                padding-right: 0;
            }
        }

        @media (max-width: 480px) {
            nav {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 10px;
            }
            
            nav a {
                margin: 0 5px;
                font-size: 14px;
            }
            
            .hero {
                padding: 60px 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <a href="#" class="logo">
            <span>🍽</span> About Recipes
        </a>

        <nav>
            <a href="index.php">Home</a>
            <a href="recipes.php">Recipes</a>
            <a href="about.php" class="active">About</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>About  Recipes</h1>
            <p>Where passion for cooking meets the joy of sharing. We believe that great food has the power to bring people together.</p>
        </div>
    </section>

    <!-- Stats Section -->
    <div class="container">
        <div class="stats">
            <div class="stat-card">
                <div class="stat-number">1</div>
                <div class="stat-label">Year of Experience</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">40+</div>
                <div class="stat-label">Recipes</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">25+</div>
                <div class="stat-label">Happy Cooks</div>
            </div>
        </div>
    </div>

    <!-- Our Mission Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Our Mission</h2>
            <div class="content-box">
                <div class="content-text">
                    <p>Welcome to DeliciousRecipes, where passion for cooking meets the joy of sharing. We believe that great food has the power to bring people together, create lasting memories, and transform ordinary moments into extraordinary ones.</p>
                    <p>Our mission is simple: to make delicious cooking accessible to everyone, regardless of skill level. Whether you're a beginner just starting your culinary journey or an experienced home chef looking for inspiration, we're here to guide you every step of the way.</p>
                </div>
                <div class="content-image">
                    <img src="https://www.seriouseats.com/thmb/OavkmWKLtDWfKir0RW3DMUy3Eo4=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/Filipino-Features-Hero-Final-2-b785e627967843b0aa631c6a977adabe.jpg">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Our Story</h2>
            <div class="content-box">
                <div class="content-image">
                    <img src="https://www.harwoodinternational.com/wp-content/uploads/2024/04/0K9A3615-web-scaled.jpg">
                </div>
                <div class="content-text">
                    <p>Our restaurant was born from a deep love for Filipino food and culture. What started as home-cooked meals shared with family and friends grew into a place where we can serve the comforting flavors of the Philippines to everyone.

Filipino cuisine is rich in history and tradition. Every dish we serve carries the warmth of Filipino hospitality — from the savory taste of adobo and kare-kare to the comforting sourness of sinigang. These recipes are inspired by generations of Filipino kitchens, prepared with fresh ingredients and heartfelt care.

We believe that great food brings people together. Our restaurant is a space where families gather, friends celebrate, and memories are made over plates of delicious Filipino dishes. We stay true to authentic flavors while adding our own touch to make each meal special.

At Delicious Recipes Restaurant, our goal is simple:
to serve honest, flavorful Filipino food that feels like home.

Kain na po! 🇵🇭</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>DeliciousRecipes</h3>
                    <p>Bringing people together through the joy of cooking and sharing delicious meals.</p>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Recipes</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Contact Us</h3>
                    <ul class="footer-links">
                        <p>Email: paulomondares211@gmail.com</p>
   						 <p>Phone: 0932-862-8024</p>
        				<p>Branch: San Carlos City Pangasinan Branch.</p>
                </div>
            </div>
            <div class="copyright">
                <p> 2026 Paulo Mondares DeliciousRecipes. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>