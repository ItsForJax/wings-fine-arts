<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wings Fine Arts</title>
    <script data-cfasync="false" type="text/javascript" 
        src="https://app.ecwid.com/script.js?125341251&data_platform=code&data_date=2025-11-11" 
        charset="utf-8"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            color: #c1b39a;
        }

        /* Header Styles */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 60px;
            background: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            background-color: #646A56;
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
            font-family: 'Georgia', serif;
            letter-spacing: 1px;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 35px;
        }

        nav a {
            text-decoration: none;
            color: #333;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #666;
        }

        .header-icons {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .icon {
            cursor: pointer;
            width: 20px;
            height: 20px;
        }

        .icon-wrapper {
            position: relative;
        }

        .cart-count {
            background: #000;
            color: white;
            border-radius: 50%;
            width: 16px;
            height: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            position: absolute;
            top: -8px;
            right: -8px;
        }

        /* Hero Section */
        .hero {
            height: 500px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 60px;
        }

        .hero-text h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero-text p {
            font-size: 16px;
            max-width: 700px;
            margin: 0 auto 30px;
            line-height: 1.6;
        }

        .cta-button {
            background: white;
            color: #667eea;
            padding: 15px 35px;
            border: none;
            cursor: pointer;
            font-size: 12px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: all 0.3s;
            font-weight: bold;
        }

        .cta-button:hover {
            background: #f0f0f0;
            transform: translateY(-2px);
        }

        /* Collections Section */
        .collections-section {
            padding: 80px 60px;
            text-align: center;
        }

        .section-title {
            font-size: 32px;
            margin-bottom: 50px;
            font-weight: bold;
        }

        .collections-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .collection-card {
            overflow: hidden;
            cursor: pointer;
            aspect-ratio: 3/4;
            background: #f5f5f5;
        }

        .collection-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .collection-card:hover img {
            transform: scale(1.05);
        }

        /* Responsive */
        @media (max-width: 768px) {
            header {
                padding: 15px 20px;
            }

            nav ul {
                gap: 15px;
            }

            .hero {
                height: auto;
                padding: 40px 20px;
            }

            .hero-text h1 {
                font-size: 32px;
            }

            .collections-grid {
                grid-template-columns: 1fr;
            }

            .collections-section {
                padding: 40px 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <img src="assets/images/Wings_gold.avif" alt="Search" style="max-width: 250px; height: auto;">
        <nav>
            <ul>
                <li><a href="/">HOME</a></li>
                <li><a href="#shops">SHOPS</a></li>
                <li><a href="#collections">COLLECTIONS</a></li>
                <li><a href="#about">ABOUT</a></li>
            </ul>
        </nav>
        <div class="header-icons">
            <div id="my-search-125341251"></div>
            <div>
            <script data-cfasync="false" type="text/javascript" src="https://app.ecwid.com/script.js?125341251&data_platform=code&data_date=2025-11-13" charset="utf-8"></script>
            <script type="text/javascript"> xSearch("id=my-search-125341251"); </script>
            </div>
            
            <a href="#!/~/account"><img src="assets/images/user.png" alt="User" class="icon"></a>
            <div class="ec-cart-widget"></div>
            <div>
            <script data-cfasync="false" type="text/javascript" src="https://app.ecwid.com/script.js?125341251&data_platform=code&data_date=2025-11-13" charset="utf-8"></script>
            <script type="text/javascript">Ecwid.init();</script>
            </div>
        </div>
    </header>

    <!-- Collections Section -->
    <section class="collections-section">
        <div id="my-store-125341251"></div>
        <div>
        <script type="text/javascript"> 
            xProductBrowser(
                "categoriesPerRow=3",
                "views=grid(20,3) list(60) table(60)",
                "categoryView=grid",
                "searchView=list",
                "id=my-store-125341251"
            );
        </script>
        </div>
    </section>
</body>
</html>