<?php
if (!defined('varovalka')) {
    exit('403');
}
?>
<section id="home" class="section-home">
    <h1>WELCOME TO <?php echo strtoupper($site_name); ?></h1>
    <div class="mission-container">
        <div class="mission-left">
            <h2>Our Journey</h2>
            <p>Welcome to our eco-friendly portal. We are dedicated to providing the latest news, services, and missions focused on sustainability and environmental protection. Explore our site to learn more about how you can contribute to a greener future.</p>
            <button onclick="window.location.href='?naloga=mission'">Learn More</button>
        </div>
        <div class="mission-right">
            <img src="slike/pexels-akos-szabo-145938-440731.jpg" alt="Home Image">
        </div>
    </div>
</section>
