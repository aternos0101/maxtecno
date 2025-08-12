<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max Tecno AI Shop - Premium AI</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            /* Changed from purple-ish to professional blue tones */
            --primary-blue: #2196F3; /* A standard, professional blue */
            --secondary-blue: #1976D2; /* A slightly darker blue for contrast */
            --text-dark: #333;
            --text-light: #fff;
            --bg-light: #f4f7fa;
            --card-bg: #ffffff;
            --price-color: #e74c3c;
            --accent-green: #28a745;
            --accent-gold: #FFD700;
            --shadow-light: rgba(0,0,0,0.1);
            --shadow-medium: rgba(0,0,0,0.15);
            --shadow-dark: rgba(0,0,0,0.25);
            /* Button gradient updated to new blue colors */
            --button-gradient: linear-gradient(45deg, var(--primary-blue) 0%, var(--secondary-blue) 100%);
            --button-gradient-hover: linear-gradient(45deg, var(--secondary-blue) 0%, var(--primary-blue) 100%);
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background: linear-gradient(135deg, #e0eafc 0%, #cfdef3 100%);
            color: var(--text-dark);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
            box-sizing: border-box;
            overflow-x: hidden;
            position: relative;
        }
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at top left, rgba(255,255,255,0.1) 0%, transparent 40%),
                        radial-gradient(circle at bottom right, rgba(255,255,255,0.1) 0%, transparent 40%);
            pointer-events: none;
            opacity: 0.5;
            animation: backgroundPulse 10s infinite alternate ease-in-out;
        }
        @keyframes backgroundPulse {
            0% { transform: scale(1); opacity: 0.5; }
            100% { transform: scale(1.05); opacity: 0.6; }
        }

        .container {
            max-width: 800px;
            width: 100%;
            margin: 0 auto;
            background-color: var(--card-bg);
            padding: 35px 40px;
            border-radius: 20px;
            box-shadow: 0 15px 40px var(--shadow-medium);
            animation: fadeIn 1s ease-out;
            position: relative;
            z-index: 1;
        }

        .home-hero {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 80px 40px;
            animation: fadeIn 1s ease-out;
            position: relative;
            z-index: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h1, h2, h3 {
            color: var(--primary-blue); /* Now uses the new blue */
            text-align: center;
            font-weight: 700;
            margin-bottom: 25px;
            letter-spacing: 0.5px;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.08);
        }
        h1 {
            font-size: 3em;
            margin-bottom: 40px;
            /* Updated gradient to new blue colors */
            background: -webkit-linear-gradient(45deg, var(--primary-blue), var(--secondary-blue));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: textGlow 2s infinite alternate;
        }
        .home-hero h1 {
            font-size: 3.8em;
            margin-bottom: 50px;
            animation: textGlow 2s infinite alternate, pulseWave 3s infinite alternate ease-in-out;
        }
        @keyframes textGlow {
            /* Updated text glow colors to match new blue palette */
            from { text-shadow: 0 0 5px rgba(33, 150, 243, 0.5), 0 0 10px rgba(25, 118, 210, 0.5); }
            to { text-shadow: 0 0 10px rgba(33, 150, 243, 0.8), 0 0 20px rgba(25, 118, 210, 0.8); }
        }
        @keyframes pulseWave {
            0% { transform: scale(1); }
            50% { transform: scale(1.02); }
            100% { transform: scale(1); }
        }

        h2 {
            font-size: 2.2em;
            color: var(--accent-green);
            margin-bottom: 30px;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.05);
        }
        h3 {
            font-size: 1.4em;
            color: var(--secondary-blue);
            margin-top: 30px;
            margin-bottom: 15px;
            text-align: left;
            padding-bottom: 8px;
            display: inline-block;
            position: relative;
        }
        h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 3px;
            background: var(--secondary-blue);
            transform: scaleX(0);
            transform-origin: bottom left;
            transition: transform 0.3s ease-out;
        }
        .product-card:hover h3::after, h3.animate-underline::after {
            transform: scaleX(1);
        }

        .welcome-message {
            font-size: 1.3em;
            text-align: center;
            margin-bottom: 40px;
            color: #666;
            line-height: 1.6;
            animation: fadeInUp 0.8s ease-out 0.2s forwards;
            opacity: 0;
        }
        .home-hero .welcome-message {
            font-size: 1.5em;
            margin-bottom: 50px;
            animation: fadeInUp 0.8s ease-out 0.4s forwards;
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Robot Animation Styles */
        .robot-animation {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 30px; /* Space between robot and H1 */
            position: relative;
            perspective: 1000px; /* For 3D transforms */
        }

        .robot-img {
            width: 150px; /* Adjust size as needed */
            height: auto;
            animation: floatBob 3s ease-in-out infinite alternate;
            margin-bottom: 10px; /* Space between robot and bubble */
            filter: drop-shadow(0 5px 10px rgba(0,0,0,0.1));
        }

        @keyframes floatBob {
            0% { transform: translateY(0) rotateY(0deg); }
            50% { transform: translateY(-10px) rotateY(5deg); }
            100% { transform: translateY(0) rotateY(0deg); }
        }

        .robot-bubble {
            background-color: #fff;
            border: 2px solid var(--secondary-blue);
            border-radius: 20px;
            padding: 10px 20px;
            font-size: 1.2em;
            color: var(--text-dark);
            position: relative;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            animation: fadeInScale 0.8s ease-out forwards;
            transform: scale(0);
            opacity: 0;
            transform-origin: center bottom;
            margin-top: 10px; /* Adjust to position below robot if needed */
        }

        .robot-bubble::after {
            content: '';
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 0;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-bottom: 15px solid var(--secondary-blue); /* Pointer color */
        }
        .robot-bubble::before { /* Inner part of pointer */
            content: '';
            position: absolute;
            bottom: calc(100% - 2px); /* Adjust based on border thickness */
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 0;
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-bottom: 13px solid #fff; /* Inner pointer color */
        }

        @keyframes fadeInScale {
            0% { opacity: 0; transform: scale(0.5); }
            100% { opacity: 1; transform: scale(1); }
        }
        /* End Robot Animation Styles */


        .button-container {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 40px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .home-hero .button-container {
            margin-top: 50px;
            margin-bottom: 50px;
        }
        .button {
            display: inline-block;
            padding: 16px 32px;
            margin: 0;
            background: var(--button-gradient);
            color: var(--text-light);
            text-decoration: none;
            border-radius: 35px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(0, 123, 255, 0.3);
            border: none;
            cursor: pointer;
            font-size: 1.1em;
            position: relative;
            overflow: hidden;
        }
        .button::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255,255,255,0.2);
            transform: skewX(-20deg);
            transition: all 0.5s ease;
        }
        .button:hover::after {
            left: 100%;
        }
        .button:hover {
            transform: translateY(-5px) scale(1.03);
            box-shadow: 0 12px 25px rgba(0, 123, 255, 0.45);
            background: var(--button-gradient-hover);
        }
        .home-hero .button {
            padding: 18px 36px;
            font-size: 1.2em;
        }

        /* Styles for the enhanced download button */
        .super-download-button {
            background: linear-gradient(45deg, #34495e 0%, #2c3e50 100%); /* Darker, more serious tone */
            padding: 20px 40px; /* Larger padding */
            font-size: 1.3em; /* Larger font */
            border-radius: 40px; /* Slightly more rounded */
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.35); /* Stronger shadow */
            transition: all 0.4s ease;
            letter-spacing: 1px;
            font-weight: 700;
        }
        .super-download-button:hover {
            background: linear-gradient(45deg, #2c3e50 0%, #34495e 100%);
            transform: translateY(-7px) scale(1.04); /* More pronounced lift */
            box-shadow: 0 18px 45px rgba(0, 0, 0, 0.5); /* Even stronger shadow on hover */
        }
        .super-download-button::after {
            background: rgba(255,255,255,0.25); /* Stronger shimmer */
        }


        .product-list {
            display: grid;
            gap: 25px;
            margin-top: 30px;
        }
        .product-card {
            background-color: var(--card-bg);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            transition: transform 0.4s ease, box-shadow 0.4s ease, opacity 0.6s ease, transform 0.6s ease;
            opacity: 0; /* Ensures cards are hidden before animation */
            transform: translateY(20px); /* Ensures cards start from below */
        }
        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }
        /* Animations for product cards when viewing specific page (e.g., apk-chatgpt) */
        .container .product-card:nth-child(1) { animation: fadeInUp 0.6s ease-out forwards 0.1s; }
        .container .product-card:nth-child(2) { animation: fadeInUp 0.6s ease-out forwards 0.2s; }
        .container .product-card:nth-child(3) { animation: fadeInUp 0.6s ease-out forwards 0.3s; }
        .container .product-card:nth-child(4) { animation: fadeInUp 0.6s ease-out forwards 0.4s; }
        .container .product-card:nth-child(5) { animation: fadeInUp 0.6s ease-out forwards 0.5s; }
        .container .product-card:nth-child(6) { animation: fadeInUp 0.6s ease-out forwards 0.6s; }
        .container .product-card:nth-child(7) { animation: fadeInUp 0.6s ease-out forwards 0.7s; }
        .container .product-card:nth-child(8) { animation: fadeInUp 0.6s ease-out forwards 0.8s; }
        .container .product-card:nth-child(9) { animation: fadeInUp 0.6s ease-out forwards 0.9s; }
        .container .product-card:nth-child(10) { animation: fadeInUp 0.6s ease-out forwards 1.0s; } /* For contact info */


        /* Animations for product cards on the home page */
        .home-hero .product-list .product-card:nth-child(1) { animation: fadeInUp 0.8s ease-out forwards 0.7s; }
        .home-hero .product-list .product-card:nth-child(2) { animation: fadeInUp 0.8s ease-out forwards 0.9s; }


        .product-card h3 {
            border-bottom: none;
            padding-bottom: 0;
            margin-top: 0;
            margin-bottom: 12px;
            font-size: 1.6em;
            color: var(--secondary-blue);
            text-align: center;
            position: relative;
            padding-bottom: 10px;
        }
        .product-card h3::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: var(--primary-blue);
            border-radius: 2px;
        }
        .product-card .price {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 1em;
            margin-bottom: 25px;
            color: var(--price-color);
            font-weight: 700;
            letter-spacing: 0.5px;
            animation: priceFlash 1.5s infinite alternate ease-in-out;
        }
        @keyframes priceFlash {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.02); }
        }
        .product-card .price .duration {
            font-size: 0.8em;
            font-weight: 500;
            color: #777;
            margin-bottom: 5px;
        }
        .product-card .price .amount {
            font-size: 1.6em;
            color: var(--price-color);
            font-weight: 700;
        }

        .product-card ul {
            list-style: none;
            padding: 0;
            margin-top: 15px;
            margin-bottom: 25px;
        }
        .product-card li {
            margin-bottom: 12px;
            line-height: 1.6;
            display: flex;
            align-items: flex-start;
            font-size: 1.1em;
            color: #444;
        }
        .product-card li::before {
            content: '👉';
            margin-right: 12px;
            font-size: 1.5em;
            color: var(--accent-gold);
            flex-shrink: 0;
            animation: sparkle 1s infinite alternate;
            text-shadow: 0 0 5px var(--accent-gold), 0 0 10px rgba(255,215,0,0.4);
        }
        @keyframes sparkle {
            0% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.1); opacity: 0.8; }
            100% { transform: scale(1); opacity: 1; }
        }

        .product-card .button-wrapper {
            text-align: center;
            margin-top: 25px;
        }
        .product-card .button {
            padding: 15px 30px;
            font-size: 1em;
        }

        .contact-info {
            margin-top: 50px;
            text-align: center;
            padding-top: 30px;
            border-top: 1px dashed #cfdef3;
            animation: fadeInUp 0.8s ease-out 0.6s forwards;
            opacity: 0;
            transform: translateY(20px);
        }
        .home-hero .contact-info {
            margin-top: 60px;
            padding-top: 40px;
            animation: fadeInUp 0.8s ease-out 1.1s forwards;
        }
        .contact-info h3 {
            text-align: center;
            border-bottom: none;
            background: -webkit-linear-gradient(45deg, var(--accent-green), #4CAF50);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 1.8em;
            margin-bottom: 20px;
        }
        .home-hero .contact-info h3 {
            font-size: 2em;
        }
        .contact-info p {
            margin-bottom: 20px;
            font-size: 1.15em;
            color: #555;
            line-height: 1.5;
        }
        .home-hero .contact-info p {
            font-size: 1.25em;
        }
        .contact-info .button {
            margin-top: 20px;
            font-size: 1em;
            padding: 14px 28px;
            background: linear-gradient(45deg, #FFD700 0%, #FFA500 100%);
            box-shadow: 0 6px 15px rgba(255, 215, 0, 0.3);
        }
        .contact-info .button:hover {
            background: linear-gradient(45deg, #FFA500 0%, #FFD700 100%);
            box-shadow: 0 9px 20px rgba(255, 215, 0, 0.4);
            transform: translateY(-3px) scale(1.02);
        }

        .not-available {
            text-align: center;
            font-size: 2em;
            color: var(--price-color);
            margin-top: 60px;
            font-weight: 700;
            animation: bounceIn 1s ease-out;
            padding: 20px;
            background-color: #fff0f0;
            border-radius: 10px;
            border: 2px dashed var(--price-color);
        }
        @keyframes bounceIn {
            0% { transform: scale(0.3); opacity: 0; }
            50% { transform: scale(1.1); opacity: 1; }
            70% { transform: scale(0.95); }
            100% { transform: scale(1); }
        }

        @media (max-width: 768px) {
            .container {
                padding: 25px;
                margin: 15px;
            }
            .home-hero {
                padding: 40px 25px;
                margin: 0 auto;
            }
            h1 {
                font-size: 2.5em;
            }
            .home-hero h1 {
                font-size: 3em;
            }
            h2 {
                font-size: 1.8em;
            }
            h3 {
                font-size: 1.3em;
            }
            .welcome-message {
                font-size: 1.1em;
            }
            .home-hero .welcome-message {
                font-size: 1.2em;
            }
            .robot-img {
                width: 120px;
            }
            .robot-bubble {
                font-size: 1em;
                padding: 8px 15px;
            }
            .button-container {
                flex-direction: column;
                gap: 15px;
            }
            .button {
                padding: 14px 25px;
                font-size: 1em;
                width: 80%;
                max-width: 300px;
            }
            .super-download-button {
                padding: 16px 30px;
                font-size: 1.1em;
            }
            .product-card {
                padding: 25px;
            }
            .product-card h3 {
                font-size: 1.4em;
            }
            .product-card .price .amount {
                font-size: 1.3em;
            }
            .product-card li {
                font-size: 1em;
            }
            .product-card li::before {
                font-size: 1.3em;
            }
            .contact-info p {
                font-size: 1em;
            }
            .contact-info h3 {
                font-size: 1.5em;
            }
            .not-available {
                font-size: 1.6em;
            }
        }
        @media (max-width: 480px) {
            h1 {
                font-size: 2em;
            }
            .home-hero h1 {
                font-size: 2.5em;
            }
            .robot-img {
                width: 100px;
            }
            .robot-bubble {
                font-size: 0.9em;
                padding: 7px 12px;
            }
            .button {
                width: 95%;
            }
            .super-download-button {
                padding: 14px 28px;
                font-size: 1em;
            }
        }
    </style>
</head>
<body>
    <?php
    if (isset($_GET['page'])) {
        ?>
        <div class="container">
            <?php
            echo '<div class="button-container" style="margin-top: 0; margin-bottom: 30px;">';
            echo '<a href="index.php" class="button">← Kembali ke Beranda</a>';
            echo '</div>';

            $page = $_GET['page'];

            if ($page == 'apk-chatgpt') {
                ?>
                <h2>✨ PREMIUM AI CHAT ✨</h2>
                <div class="product-list">
                    <div class="product-card">
                        <h3>🔰 BASIC GPT</h3>
                        <p class="price"><span class="duration">PERMANENT</span> | <span class="amount">Rp 10.000</span></p>
                        <ul>
                            <li>No Login</li>
                            <li>GPT-4o</li>
                            <li>AI Art</li>
                            <li>Gemini Support</li>
                            <li>Real Time AI</li>
                            <li>Premium Tools</li>
                        </ul>
                        <div class="button-wrapper">
                            <a href="https://wa.me/081802051086?text=Halo%2C%20saya%20tertarik%20dengan%20paket%20Basic%20GPT%20%28Rp%2010.000%29%20di%20Max%20Tecno%20AI%20Shop." target="_blank" class="button">Order Via WhatsApp</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <h3>🔱 SUPREMIUM GPT</h3>
                        <p class="price"><span class="duration">PERMANENT</span> | <span class="amount">Rp 30.000</span></p>
                        <ul>
                            <li>All Basic GPT Features</li>
                            <li>Deepseek R1</li>
                            <li>Gemini 1.5 Flash & Pro</li>
                            <li>Grok 2</li>
                            <li>Style Image Generator</li>
                            <li>Real Time AI</li>
                            <li>Premium Tools</li>
                        </ul>
                        <div class="button-wrapper">
                            <a href="https://wa.me/081802051086?text=Halo%2C%20saya%20tertarik%20dengan%20paket%20Supremium%20GPT%20%28Rp%2030.000%29%20di%20Max%20Tecno%20AI%20Shop." target="_blank" class="button">Order Via WhatsApp</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <h3>💠 TRINITIUM GPT</h3>
                        <p class="price"><span class="duration">PERMANENT</span> | <span class="amount">Rp 50.000</span></p>
                        <ul>
                            <li>All Supremium Features</li>
                            <li>Claude 3 Haiku</li>
                            <li>Claude 3.5 Sonnet</li>
                            <li>GPT-4o</li>
                            <li>Perplexity Sonar</li>
                            <li>Long Prompt Support</li>
                            <li>Super Premium Tools</li>
                        </ul>
                        <div class="button-wrapper">
                            <a href="https://wa.me/081802051086?text=Halo%2C%20saya%20tertarik%20dengan%20paket%20Trinitium%20GPT%20%28Rp%2050.000%29%20di%20Max%20Tecno%20AI%20Shop." target="_blank" class="button">Order Via WhatsApp</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <h3>⚜️ EXTRA SUPER GPT</h3>
                        <p class="price"><span class="duration">PERMANENT</span> | <span class="amount">Rp 100.000</span></p>
                        <ul>
                            <li>All Trinitium Features</li>
                            <li>Special Voice AI</li>
                            <li>All Style AI Image</li>
                            <li>Gemini Pro</li>
                            <li>Deepseek R1 (USA)</li>
                            <li>GPT4 & Qwen AI</li>
                            <li>Claude AI & AI Lens</li>
                            <li>Create Music</li>
                            <li>AI Summarize</li>
                            <li>Character Assistant</li>
                        </ul>
                        <div class="button-wrapper">
                            <a href="https://wa.me/081802051086?text=Halo%2C%20saya%20tertarik%20dengan%20paket%20Extra%20Super%20GPT%20%28Rp%20100.000%29%20di%20Max%20Tecno%20AI%20Shop." target="_blank" class="button">Order Via WhatsApp</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <h3>👑 HIGH EXTRA GPT</h3>
                        <p class="price"><span class="duration">PERMANENT</span> | <span class="amount">Rp 200.000</span></p>
                        <ul>
                            <li>All Extra Super Features</li>
                            <li>Tampilan Mirip ChatGpt Ori</li>
                            <li>GPT 4.1 Series</li>
                            <li>Deepseek R1 & V3</li>
                            <li>Claude 3.7</li>
                            <li>Gemini 2.0</li>
                            <li>Grok 3 Mini</li>
                            <li>Agent X</li>
                            <li>AI Art Generator</li>
                            <li>Super Premium Tools</li>
                        </ul>
                        <div class="button-wrapper">
                            <a href="https://wa.me/081802051086?text=Halo%2C%20saya%20tertarik%20dengan%20paket%20High%20Extra%20GPT%20%28Rp%20200.000%29%20di%20Max%20Tecno%20AI%20Shop." target="_blank" class="button">Order Via WhatsApp</a>
                        </div>
                    </div>

                    <div class="contact-info">
                        <h3>💳 Pilihan Pembayaran:</h3>
                        <p>Kami menerima pembayaran melalui DANA dan QRIS (semua aplikasi pembayaran).</p>
                        <a href="https://whatsapp.com/channel/0029VauUfhu84OmC73twWg1O" target="_blank" class="button">⭐ Lihat Testimoni Kami</a>
                    </div>
                </div>
                <?php
            } elseif ($page == 'max-tecno') {
                ?>
                <h2>✨ MAX TECNO AI PREMIUM ✨</h2>
                <div class="button-container" style="margin-top: 30px; margin-bottom: 40px;">
                    <a href="https://maxtecnoai.unaux.com/linkunlock?unlock=688f63aa5b497&i=1" target="_blank" class="button super-download-button">⬇️ Download Aplikasi Max Tecno V2</a>
                </div>
                <div class="product-list">
                    <?php
                    // Define the standard features for Max Tecno AI Premium packages
                    $standard_features = [
                        'Akses Semua Fitur Tanpa Batas',
                        'Semua Model AI Terbuka',
                        'Upload Image Unlimited',
                        'Upload Video Unlimited',
                        'Support Premium'
                    ];

                    $packages = [
                        ['duration_text' => '3 Hari', 'price_amount' => '5.000'],
                        ['duration_text' => '7 Hari', 'price_amount' => '10.000'],
                        ['duration_text' => '15 Hari', 'price_amount' => '20.000'],
                        ['duration_text' => '21 Hari', 'price_amount' => '25.000'],
                        ['duration_text' => '30 Hari', 'price_amount' => '30.000'],
                        ['duration_text' => '45 Hari', 'price_amount' => '50.000'],
                        ['duration_text' => '60 Hari', 'price_amount' => '65.000'],
                        ['duration_text' => '75 Hari', 'price_amount' => '80.000'],
                        ['duration_text' => '100 Hari', 'price_amount' => '100.000'],
                    ];

                    foreach ($packages as $package) {
                        $whatsapp_text = urlencode("Halo, saya tertarik dengan paket Max Tecno AI Premium {$package['duration_text']} (Rp {$package['price_amount']}) di Max Tecno AI Shop.");
                        echo '<div class="product-card">';
                        echo '<h3>' . $package['duration_text'] . '</h3>';
                        echo '<p class="price"><span class="duration">Durasi: ' . $package['duration_text'] . '</span> | <span class="amount">Rp ' . $package['price_amount'] . '</span></p>';
                        echo '<ul>';
                        foreach ($standard_features as $feature) { // Use the standard features for all
                            echo '<li>' . $feature . '</li>';
                        }
                        echo '</ul>';
                        echo '<div class="button-wrapper">';
                        echo '<a href="https://wa.me/081802051086?text=' . $whatsapp_text . '" target="_blank" class="button">Order Via WhatsApp</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                    <div class="contact-info">
                        <h3>💳 Pilihan Pembayaran:</h3>
                        <p>Kami menerima pembayaran melalui DANA dan QRIS (semua aplikasi pembayaran).</p>
                        <a href="https://whatsapp.com/channel/0029VauUfhu84OmC73twWg1O" target="_blank" class="button">⭐ Lihat Testimoni Kami</a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <?php
    } else {
        ?>
        <div class="home-hero">
            <div class="robot-animation">
            <h1>Selamat Datang Di Max Tecno AI Shop</h1>
                            <img src="https://media.tenor.com/CigpzapemsoAAAAi/hi-robot.gif" alt="Animated Robot" class="robot-img">
                <div class="robot-bubble">Halo Sobat Tecno</div>
            </div>
            <p class="welcome-message">Selamat datang di Max Tecno AI Shop! Kami menyediakan <strong>Aplikasi Premium Mirip ChatGpt</strong> dan menjual <strong>Premium Aplikasi Max Tecno AI Murah 2025</strong>. Dapatkan akses ke berbagai AI premium dan alat canggih untuk kebutuhan digital Anda.</p>

            <!-- Moved: Download Button Section on Home Page to be below the welcome message -->
            <div class="button-container" style="margin-top: 50px;">
                <a href="https://maxtecnoai.unaux.com/linkunlock?unlock=688f63aa5b497&i=1" target="_blank" class="button super-download-button">⬇️ Download Aplikasi Max Tecno V2</a>
            </div>

            <h2 style="margin-top: 60px; margin-bottom: 40px; text-align: center; color: var(--primary-blue);">Produk Unggulan Kami</h2>

            <div class="product-list" style="display: flex; flex-direction: column; gap: 25px; max-width: 600px; margin: 40px auto 0 auto;">
                <div class="product-card">
                    <h3>Apk Mirip ChatGpt Premium</h3>
                    <p style="text-align: center; font-size: 1.1em; color: #555; margin-bottom: 20px;">Akses ke berbagai model AI canggih seperti GPT-4o, Gemini, Claude, dan AI Art Generator dengan harga terjangkau.</p>
                    <div class="button-wrapper">
                        <a href="?page=apk-chatgpt" class="button">Beli</a>
                    </div>
                </div>

                <div class="product-card">
                    <h3>Max Tecno Ai Premium</h3>
                    <p style="text-align: center; font-size: 1.1em; color: #555; margin-bottom: 20px;">Dapatkan akses ke aplikasi AI canggih Max Tecno AI untuk produktivitas dan kreativitas Anda.</p>
                    <div class="button-wrapper">
                        <a href="?page=max-tecno" class="button">Beli</a>
                    </div>
                </div>
            </div>
            
            <div class="contact-info">
                <h3>Hubungi Kami</h3>
                <p>Ada pertanyaan atau ingin informasi lebih lanjut? Jangan ragu untuk menghubungi kami!</p>
                <a href="https://wa.me/081802051086" target="_blank" class="button">✉️ Hubungi Via WhatsApp</a>
            </div>
        </div>
        <?php
    }
    ?>
        <script>
        if (!sessionStorage.getItem('pageRefreshed')) {
            sessionStorage.setItem('pageRefreshed', 'true');
            setTimeout(function() {
                location.reload();
            }, 2000);
        } else {
            sessionStorage.removeItem('pageRefreshed');
        }
    </script>
</body>
</html>
