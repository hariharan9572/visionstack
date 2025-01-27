<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VisionStack</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}?v={{ time() }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <script defer src="{{ asset('js/script.js') }}"></script>
</head>

<body>

<header id="main-header">
    <div class="container">
        <div class="logo">
            <img src="{{ asset('assets/VisionStack_Logo(white).png') }}" alt="VisionStack Logo">
        </div>
        <nav id="navbar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Careers</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Hero Section -->
<section id="hero">
    <div class="hero-content">
        <h1>Welcome to VisionStack</h1>
        <p>Your trusted partner for IT services and innovative tech solutions</p>
        <a href="#services" class="cta-button">Discover Our Services</a>
    </div>
</section>

<!-- Services Section -->
<section id="services">
    <div class="container">
        <h2>Our IT Services</h2>
        <div class="service-list">
            <div class="service-item" onclick="window.location.href='/it-support-form';">
                <h3>Tech Support</h3>
                <p>Get expert IT support for your devices and systems. We provide troubleshooting, software solutions, and more.</p>
            </div>
            <div class="service-item">
                <h3>Cloud Solutions</h3>
                <p>Enhance your business with our cloud computing solutions, from data storage to cloud-based software integration.</p>
            </div>
            <div class="service-item">
                <h3>Custom SaaS Development</h3>
                <p>We design and develop custom SaaS applications tailored to meet your unique business needs and challenges.</p>
            </div>
        </div>
    </div>
</section>

<!-- Product Showcase Section -->
<section id="products">
    <div class="container">
        <h2>Featured Products</h2>
        <div class="product-grid">
            <!-- Product 1 -->
            <div class="product-card">
                <img src="{{ asset('assets/apple_intelligence__gbh77cvflkia_xlarge.jpg') }}" alt="Product 1">
                <h3>Product 1</h3>
                <p>Price: $499</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Product 2 -->
            <div class="product-card">
                <img src="{{ asset('assets/personalize__dwg8srggrbo2_xlarge.jpg') }}" alt="Product 2">
                <h3>Product 2</h3>
                <p>Price: $699</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Product 3 -->
            <div class="product-card">
                <img src="{{ asset('assets/environment__e3v3gj88dl6q_xlarge.jpg') }}" alt="Product 3">
                <h3>Product 3</h3>
                <p>Price: $999</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- Product 4 -->
            <div class="product-card">
                <img src="{{ asset('assets/innovation__os9bmmo3mjee_xlarge.jpg') }}" alt="Product 4">
                <h3>Product 4</h3>
                <p>Price: $1299</p>
                <button class="product-button">Buy Now</button>
            </div>

            <!-- More products can be added here -->
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials">
    <div class="container">
        <h2>Customer Testimonials</h2>
        <div class="testimonial-slider">
            <div class="testimonial">
                <img src="{{ asset('assets/african-american-girl-with-thumbs-up-office_191555-9171.png') }}" alt="Customer 1">
                <p>"VisionStack transformed our IT infrastructure and helped streamline our business processes!"</p>
                <h4>Sarah J.</h4>
            </div>
            <div class="testimonial">
                <img src="{{ asset('assets/indian-happy-guy-man-arabian-ethnic-businessman-smiling-employee-entrepreneur-manager-use-laptop_717737-10886.png') }}" alt="Customer 2">
                <p>"Their custom software solutions helped us improve productivity and achieve our business goals!"</p>
                <h4>John D.</h4>
            </div>
            <div class="testimonial">
                <img src="{{ asset('assets/carefree-happy-young-african-american-man-with-funky-hairstyle-showing-ok-sign_273609-14095.png') }}" alt="Customer 3">
                <p>"Top-notch customer service, quick problem resolution, and efficient IT solutions."</p>
                <h4>Alice B.</h4>
            </div>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section id="about">
    <div class="container">
        <h2>About VisionStack</h2>
        <p>At VisionStack, we are passionate about providing innovative IT services and solutions that drive business success. Whether you need cloud services, custom software development, or IT support, we are here to empower your business with cutting-edge technologies. Our team is dedicated to delivering reliable, scalable, and secure IT solutions that meet the unique needs of each client.</p>
    </div>
</section>

<!-- Contact Us Section -->
<section id="contact">
    <div class="container">
        <h2>Contact Us</h2>
        <form id="contact-form">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Your Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
</section>

<!-- Footer Section -->
<footer id="footer">
    <div class="footer-container">
        <div class="footer-logo">
            <img src="{{ asset('assets/VisionStack_Logo(white).png') }}" alt="VisionStack Logo">
        </div>
        <div class="footer-nav">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
        <div class="footer-social">
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">LinkedIn</a>
        </div>
        <div class="footer-contact">
            <p>Contact us at: support@visionstack.com</p>
        </div>
    </div>
</footer>

</body>
</html>
