<html>
<head>
  <title>SWIFTSHOP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="assets/img/logo.png">
  <link rel="stylesheet" href="lib/css/main.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css" type="text/css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
  <script src="./vanta/vanta.net.min.js"></script>
  <script>
    VANTA.NET({
      el: "#vantajs-background",
      color: 0x282828,
      backgroundColor: 0x000000,
      points: 14,
      maxDistance: 20,
      spacing: 20
    }); 
  </script>
  <style>
    .shimmer {
      font-size: 10px;
      font-weight: bold;
      color: #fff;
      text-shadow: 0px 0px 20px #fff;
    }
    @keyframes shimmer {
      0% { opacity: 0.2; }
      50% { opacity: 1; }
      100% { opacity: 0.2; }
    }
    .shimmer {
      animation-name: shimmer;
      animation-duration: 3s;
      animation-timing-function: ease-in-out;
      animation-iteration-count: infinite;
    }
    .shimmer {
      font-family: 'Montserrat', sans-serif;
      font-size: 48px;
      font-weight: bold;
      color: #fff;
      text-shadow: 0px 0px 20px #fff;
    }
  </style>
</head>
<body>
  <div class="intro" id="intro"></div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
  <script>
    VANTA.NET({
      el: "#intro",
      mouseControls: true,
      touchControls: true,
      gyroControls: false,
      minHeight: 200.00,
      minWidth: 200.00,
      scale: 1.00,
      scaleMobile: 1.00
    });
  </script>
  <header>
    <div class="container">
      <div class="shimmer">Be THE MOST FASHIONABLE WITH<br> SWIFTSHOP - Fast and Easy</div>
    </div>
    <style>
      .container {
        position: relative;
        width: 100%;
        height: 500px;
      }
      .shimmer {
        font-size: 56px;
        font-weight: bold;
        text-align: center;
        position: absolute;
        top: 80%;
        left: 30%;
        transform: translate(-50%, -50%);
        color: #fff;
        z-index: 1;
      }
      .box {
        position: absolute;
        bottom: -50px;
        left: 0;
        z-index: 0;
        transform: scale(0.7);
      }
    </style>
  </header>
  <div class="topnav">
    <a href="#home">Main</a>
    <a href="#order">Order</a>
    <a href="#info">Information</a>
    <a href="#social">Social media</a>
    <a href="#location">Location</a>
  </div>
  <div class="fon">
    <img src="assets/img/qali.png">
  </div>
  <div class="animated-bg"></div>
  <section class="pricing-section">
    <div class="pricing-container">
      <div class="pricing-item">
        <div class="pricing-header">
          <h3>Sweatshorts</h3>
          <h4>from 29.99$</h4>
        </div>
        <ul class="pricing-features">
          <li>Best quality</li>
          <li>Acceptable price</li>
          <li>Warranty 1 year</li>
        </ul>
        <div class="image-frame">
          <img src="assets/img/airpods.png" alt="yuri">
        </div>
        <button class="pricing-btn">Order</button>
      </div>
      <div class="pricing-item">
        <div class="pricing-header">
          <h3>Sneakers</h3>
          <h4>from 119.99$</h4>
        </div>
        <ul class="pricing-features">
          <li>Style meets comfort</li>
          <li>Wide range, endless choices</li>
          <li>Experience long-lasting durability and reliability</li>
        </ul>
        <div class="image-frame">
          <img src="assets/img/smart.png" alt="xeli">
        </div>
        <button class="pricing-btn">Order</button>
      </div>
      <div class="pricing-item">
        <div class="pricing-header">
          <div class="image-frame">
            <img src="assets/img/main.png" alt="main">
          </div>
          <h3>Wide range for you</h3>
          <h4>Follow us</h4>
        </div>
        <ul class="pricing-features">
          <li>Trendy tees for every style.</li>
          <li>Elegant dresses that enhance your femininity.</li>
          <li>Stylish jeans in various fits and washes.</li>
          <li>Comfortable sportswear for an active lifestyle.</li>
          <li>Fashionable accessories that add charm to complete your look.</li>
        </ul>
        <button class="pricing-btn">More</button>
      </div>
    </div>
      <div class="pricing-item">
        <div class="pricing-header">
          <div class="image-frame">
            <img src="assets/img/skin.png" alt="feri" class="xviti">  
          <h3>Unlock the Secrets of Youthful Skin:</h3>
        <h4>Introducing Our Range of Revitalizing Creams</h4>    
        </div>
        <ul class="pricing-features">
          <li>Nourish and Hydrate: Experience the Power of Our Moisturizing Creams</li>
          <li>Reveal Your Radiance: Transform Your Skin with our Renewal Creams</li>
          <li>Age-Defying Elixir: Discover the Benefits of Our Anti-Aging Creams</li>
          <li>Soothe and Protect: Restore Your Skin's Balance with Our Calming Creams</li>
          <li>Illuminate Your Complexion: Enhance Your Skin's Glow with our Brightening Creams</li>
        </ul>
        <button class="pricing-btn">Order</button>
      </div>

  </section>
  <section class="contact-section">
    <div>
      <h2>Email</h2>
      <p>swiftshop@gmail.com</p>
    </div>
    <div>
      <h2>Support Number</h2>
      <p>+995 595-120-300</p>
    </div>
  </section>
  <script>
    function openTab(evt, tabName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(tabName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    function scrollToBottom() {
      window.scrollTo({
        top: document.body.scrollHeight,
        behavior: 'smooth'
      });
    }
    window.addEventListener('scroll', function () {
      if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
        scrollToBottom();
      }
    });
    function palindrome(str) {
      let regex = /[^a-z0-9]/gi;
      str = str.replace(regex, '').toLowerCase();
      let reversedStr = str.split('').reverse().join('');
      return str === reversedStr;
    }
    console.log(palindrome("text")); // true
    console.log(palindrome("Almost every word palindrome")); // false
    const button = document.querySelector('button');
    const input = document.querySelector('input');
    button.addEventListener('click', () => {
      const value = input.value;
      if (value.trim() === '') {
        alert('Enter text');
        return;
      }
      const listItem = document.createElement('li');
      listItem.innerText = value;
      const list = document.querySelector('ul');
      list.appendChild(listItem);
      input.value = '';
    });
    const deleteButton = document.createElement('button');
    deleteButton.innerText = 'Delete';
    deleteButton.addEventListener('click', () => {
      list.removeChild(listItem);
    });
    listItem.appendChild(deleteButton);
  </script>
</body>
</html>
