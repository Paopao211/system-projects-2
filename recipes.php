<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Our Recipes</title>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

<style>
*{margin:0;padding:0;box-sizing:border-box}

body{
    font-family:'Poppins', sans-serif;
    background:#f8fafc;
    color:#111;
}

/* NAVBAR */
header{
    padding:20px 60px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    background:#111;
}

.logo{
    color:#fff;
    font-size:22px;
    display:flex;
    align-items:center;
    gap:10px;
}

.logo span{
    background:#ffb703;
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

/* HEADER */
.page-header{
    text-align:center;
    padding:60px 20px 30px;
}

.page-header h1{
    font-family:'Playfair Display', serif;
    font-size:42px;
    color:#ff5733;
}

/* RECIPES */
.container{
    max-width:1200px;
    margin:auto;
    padding:0 20px 60px;
}

.grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:25px;
}

.card{
    background:#fff;
    border-radius:12px;
    overflow:hidden;
    box-shadow:0 5px 15px rgba(0,0,0,0.08);
}

.card img{
    width:100%;
    height:180px;
    object-fit:cover;
}

.card-content{
    padding:16px;
}

.card-content h3{
    margin-bottom:8px;
}

.card-content p{
    font-size:13px;
    color:#555;
    margin-bottom:12px;
}

/* DETAILS */
details{
    background:#f1f5f9;
    padding:12px;
    border-radius:8px;
    font-size:13px;
}

summary{
    cursor:pointer;
    font-weight:500;
    color:#0f172a;
}

details ul, details ol{
    margin-left:18px;
    margin-top:8px;
}

.card-footer{
    display:flex;
    justify-content:space-between;
    font-size:13px;
    color:#555;
    margin-top:12px;
}

/* FOOTER */
footer div{
    background:orange;
    color:black;
    text-align:center;
    padding:15px;
}

/* RESPONSIVE */
@media(max-width:768px){
    header{flex-direction:column;gap:15px}
    .page-header h1{font-size:34px}
}
</style>
</head>

<body>

<header>
    <div class="logo"><span>🍽</span> Delicious Recipes</div>
    <nav>
        <a href="index.php">Home</a>
        <a href="recipes.php">Recipes</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>

<section class="page-header">
    <h1>Our Recipes</h1>
    <p>6 Classic Filipino Recipes with full cooking details</p>
</section>

<section class="container">
<div class="grid">

<!-- 1 BULALO -->
<div class="card">
<img src="https://images.yummy.ph/yummy/uploads/2022/12/180222-Yummy-Knorr-CMS-1.jpg">
<div class="card-content">
<h3>Bulalo</h3>
<p>Rich beef soup with bone marrow.</p>
<details>
<summary>View Recipe</summary>
<b>Ingredients:</b>
<ul>
<li>1 kg beef shank</li>
<li>1 onion</li>
<li>Corn, cabbage</li>
<li>Fish sauce, pepper</li>
</ul>
<b>Steps:</b>
<ol>
<li>Boil beef until tender.</li>
<li>Add onion and corn.</li>
<li>Season to taste.</li>
<li>Add cabbage last.</li>
</ol>
</details>
<div class="card-footer"><span>⏱ 2 hrs</span><span>Medium</span></div>
</div>
</div>

<!-- 2 TINOLA -->
<div class="card">
<img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c">
<div class="card-content">
<h3>Chicken Tinola</h3>
<p>Healthy ginger chicken soup.</p>
<details>
<summary>View Recipe</summary>
<b>Ingredients:</b>
<ul>
<li>Chicken</li>
<li>Ginger, garlic, onion</li>
<li>Sayote / papaya</li>
<li>Fish sauce</li>
</ul>
<b>Steps:</b>
<ol>
<li>Sauté aromatics.</li>
<li>Add chicken.</li>
<li>Pour water and simmer.</li>
<li>Add vegetables.</li>
</ol>
</details>
<div class="card-footer"><span>⏱ 35 min</span><span>Easy</span></div>
</div>
</div>

<!-- 3 MENUDO -->
<div class="card">
<img src="https://images.yummy.ph/yummy/uploads/2022/12/180222-Yummy-Knorr-CMS-4.jpg">
<div class="card-content">
<h3>Pork Menudo</h3>
<p>Tomato-based pork stew.</p>
<details>
<summary>View Recipe</summary>
<b>Ingredients:</b>
<ul>
<li>Pork belly</li>
<li>Tomato sauce</li>
<li>Potato, carrot</li>
<li>Soy sauce</li>
</ul>
<b>Steps:</b>
<ol>
<li>Sauté garlic & onion.</li>
<li>Add pork.</li>
<li>Add sauce and simmer.</li>
<li>Add vegetables.</li>
</ol>
</details>
<div class="card-footer"><span>⏱ 45 min</span><span>Medium</span></div>
</div>
</div>

<!-- 4 AFRTITADA -->
<div class="card">
<img src="https://images.yummy.ph/yummy/uploads/2022/12/180222-Yummy-Knorr-CMS-2.jpg">
<div class="card-content">
<h3>Chicken Afritada</h3>
<p>Simple tomato chicken stew.</p>
<details>
<summary>View Recipe</summary>
<b>Ingredients:</b>
<ul>
<li>Chicken</li>
<li>Tomato sauce</li>
<li>Bell pepper</li>
<li>Potato</li>
</ul>
<b>Steps:</b>
<ol>
<li>Sauté garlic and onion.</li>
<li>Add chicken.</li>
<li>Add sauce and simmer.</li>
<li>Add vegetables.</li>
</ol>
</details>
<div class="card-footer"><span>⏱ 40 min</span><span>Easy</span></div>
</div>
</div>

<!-- 5 PANCIT -->
<div class="card">
<img src="https://images.yummy.ph/yummy/uploads/2022/12/180222-Yummy-Knorr-CMS-6.jpg">
<div class="card-content">
<h3>Pancit Canton</h3>
<p>Stir-fried noodles with vegetables.</p>
<details>
<summary>View Recipe</summary>
<b>Ingredients:</b>
<ul>
<li>Canton noodles</li>
<li>Vegetables</li>
<li>Soy sauce</li>
<li>Pork or shrimp</li>
</ul>
<b>Steps:</b>
<ol>
<li>Sauté meat.</li>
<li>Add vegetables.</li>
<li>Add noodles.</li>
<li>Season and toss.</li>
</ol>
</details>
<div class="card-footer"><span>⏱ 30 min</span><span>Easy</span></div>
</div>
</div>

<!-- 6 LIEMPO -->
<div class="card">
<img src="https://www.unileverfoodsolutions.com.ph/chef-inspiration/food-delivery/10-crowd-favorite-filipino-dishes/jcr:content/parsys/set1/row2/span12/columncontrol_copy_c/columnctrl_parsys_2/textimage_copy/image.transform/jpeg-optimized/image.1697455322977.jpg">
<div class="card-content">
<h3>Inihaw na Liempo</h3>
<p>Grilled pork belly Filipino-style.</p>
<details>
<summary>View Recipe</summary>
<b>Ingredients:</b>
<ul>
<li>Pork belly</li>
<li>Soy sauce</li>
<li>Garlic</li>
<li>Calamansi</li>
</ul>
<b>Steps:</b>
<ol>
<li>Marinate pork.</li>
<li>Grill until cooked.</li>
<li>Baste while grilling.</li>
<li>Serve hot.</li>
</ol>
</details>
<div class="card-footer"><span>⏱ 45 min</span><span>Medium</span></div>
</div>
</div>

</div>
</section>

<footer>
<div>
© 2026 Paulo Mondares | San Carlos City Pangasinan 2420. All Rights Reserved.
</div>
</footer>

</body>
</html>
