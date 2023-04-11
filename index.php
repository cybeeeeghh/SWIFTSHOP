<html>
  <head>
    <title>ORDERGE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="lib/css/main.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
  <style>
    

      /* Определяем стили для текста */
      .shimmer {
        font-size: 10px;
        font-weight: bold;
        color: #fff;
        text-shadow: 0px 0px 20px #fff;
      }

      /* Определяем анимацию */
      @keyframes shimmer {
        0% { opacity: 0.2; }
        50% { opacity: 1; }
        100% { opacity: 0.2; }
      }

      /* Применяем анимацию к тексту */
      .shimmer {
        animation-name: shimmer;
        animation-duration: 3s;
        animation-timing-function: ease-in-out;
        animation-iteration-count: infinite;
      }

      /* Определяем стили для текста */
      .shimmer {
        font-family: 'Montserrat', sans-serif;
        font-size: 48px;
        font-weight: bold;
        color: #fff;
        text-shadow: 0px 0px 20px #fff;
      }

      .image-container {
      position: relative;
      width: 100%;
      height: absolute; /* здесь можно задать высоту контейнера под ваше изображение */
    }

    .my-image {
      position: absolute;
      top: 90%; /* задаем вертикальное выравнивание в середину */
      left: 50%; /* задаем горизонтальное выравнивание в середину */
      transform: translate(-50%, -50%); /* сдвигаем изображение на половину его размеров в обе стороны */
      width: 450px; /* здесь можно задать ширину вашего изображения */
      height: 350px; /* здесь можно задать высоту вашего изображения */
    }
    </style>
  </head>

  <body>

    <header>
  <div class="container">
  <div class="shimmer">Order Your Equipment from<br> Turkey to Georgia - Fast and Easy</div>
  <img src="img/videos/box.png" class="box">
</div>

<style>
.container {
  position: relative;
  width: 100%;
  height: 500px;
}

.shimmer {
  font-size: 36px;
  font-weight: bold;
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
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

    
    <div class="image-container">
      <img alt src="img/videos/truck.png" class="my-image">
    </div>
  </div>




          <div class="topnav">
  <a href="#home">Main</a>
  <a href="#order">Order</a>
  <a href="#info">Information</a>
  <a href="#social">Social media</a>
  <a href="#location">Location</a>
    </div>
 </div>

<div class="animated-bg"></div>



        <a href="#" class="button">ORDER</a>

<section class="pricing-section">
  <div class="pricing-container">
    <div class="pricing-item">
      <div class="pricing-header">
        <h3>Базовый</h3>
        <h4>5$ в месяц</h4>
      </div>
      <ul class="pricing-features">
        <li>Полный доступ к контенту</li>
        <li>Доступ к новым видео сразу после публикации</li>
        <li>Поддержка в течение 24 часов</li>
      </ul>
      <button class="pricing-btn">Купить</button>
    </div>
    <div class="pricing-item">
      <div class="pricing-header">
        <h3>Стандартный</h3>
        <h4>10$ в месяц</h4>
      </div>
      <ul class="pricing-features">
        <li>Полный доступ к контенту</li>
        <li>Доступ к новым видео сразу после публикации</li>
        <li>Поддержка в течение 12 часов</li>
        <li>Эксклюзивные бонусы</li>
      </ul>
      <button class="pricing-btn">Купить</button>
    </div>
    <div class="pricing-item">
      <div class="pricing-header">
        <h3>Продвинутый</h3>
        <h4>20$ в месяц</h4>
      </div>
      <ul class="pricing-features">
        <li>Полный доступ к контенту</li>
        <li>Доступ к новым видео сразу после публикации</li>
        <li>Поддержка в течение 6 часов</li>
        <li>Эксклюзивные бонусы</li>
        <li>Персональный менеджер</li>
      </ul>
      <button class="pricing-btn">Купить</button>
    </div>
  </div>
</section>

<section class="contact-section">
  <div>
    <h2>Email</h2>
    <p>orderge@gmail.com</p>
  </div>
  <div>
    <h2>საკონტაქტო ნომერი</h2>
    <p>+995 595-120-300</p>
  </div>
</section>

<script src="main.js">



  function openTab(evt, tabName) {
  // Получаем все элементы с классом "tabcontent" и скрываем их
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Получаем все элементы с классом "tablinks" и удаляем у них класс "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }


  function scrollToBottom() {
    window.scrollTo({
      top: document.body.scrollHeight,
      behavior: 'smooth'
    });
  }

  window.addEventListener('scroll', function() {
    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
      scrollToBottom();
    }
  });

  function palindrome(str) {
  // Убираем из строки все, кроме букв и цифр
  let regex = /[^a-z0-9]/gi;
  str = str.replace(regex, '').toLowerCase();

  // Разбиваем строку на массив символов и переворачиваем его
  let reversedStr = str.split('').reverse().join('');

  // Сравниваем исходную строку и перевернутую
  return str === reversedStr;
}

console.log(palindrome("А роза упала на лапу Азора")); // true
console.log(palindrome("Almost every word palindrome")); // false

// получение кнопки и текстового поля ввода из DOM
const button = document.querySelector('button');
const input = document.querySelector('input');

// добавление слушателя событий на клик кнопки
button.addEventListener('click', () => {
  // получение значения из текстового поля ввода
  const value = input.value;

  // проверка на пустое значение
  if (value.trim() === '') {
    alert('Введите текст');
    return;
  }

  // создание нового элемента списка
  const listItem = document.createElement('li');

  // добавление текста из поля ввода в элемент списка
  listItem.innerText = value;

  // добавление элемента списка в DOM
  const list = document.querySelector('ul');
  list.appendChild(listItem);

  // очистка текстового поля ввода
  input.value = '';
});

// создание кнопки удаления
const deleteButton = document.createElement('button');
deleteButton.innerText = 'Удалить';

// добавление слушателя событий на клик кнопки удаления
deleteButton.addEventListener('click', () => {
  list.removeChild(listItem);
});

// добавление кнопки удаления в элемент списка
listItem.appendChild(deleteButton);

</script>

<div class="intro" id="intro"></div>

<script src="three.r134.min.js"></script>
<script src="vanta.waves.min.js"></script>
<script>
  VANTA.WAVES('#intro', {
    color: 0xffffff, // Color of the waves
    shininess: 40, // Shininess of the waves
    waveHeight: 25, // Height of the waves
    waveSpeed: 0.8, // Speed of the waves
    zoom: 1.2 // Zoom level of the waves
  });
  
  VANTA.WAVES({
  el: "body", // селектор элемента, на который будет применен эффект
  minHeight: window.innerHeight,
  minWidth: window.innerWidth
});

</script>

 </body>
</html>