<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About - FarMart</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<style>
  body {
    min-height: 100vh;
    display: flex;
    align-items: center;
    background-color: rgb(177, 228, 195);
  }

  .about-section {
    background: url(/images/about-us.avif) no-repeat left;
    background-size: 55%;
    background-color: rgb(177, 228, 195);
    overflow: hidden;
    padding: 100px 0;
  }

  .inner-container {
    width: 55%;
    float: right;
    background-color: rgb(177, 228, 195);
    padding: 150px;
  }

  .inner-container h1 {
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: 900;
  }

  .text {
    font-size: 13px;
    color: #545454;
    line-height: 30px;
    text-align: justify;
    margin-bottom: 40px;
  }

  .skills {
    display: flex;
    justify-content: space-between;
    font-weight: 700;
    font-size: 13px;
  }

  @media screen and (max-width:1200px) {
    .inner-container {
      padding: 80px;
    }
  }

  @media screen and (max-width:1000px) {
    .about-section {
      background-size: 100%;
      padding: 100px 40px;
    }

    .inner-container {
      width: 100%;
    }
  }

  @media screen and (max-width:600px) {
    .about-section {
      padding: 0;
    }

    .inner-container {
      padding: 60px;
    }
  }
</style>
<script src=""></script>

<body>
  <header></header>
  <main>

    <div class="about-section">
      <div class="inner-container">
        <h1>About Us</h1>
        <p class="text">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus velit ducimus, enim inventore earum,
          eligendi nostrum pariatur necessitatibus eius dicta a voluptates sit deleniti autem error eos totam nisi neque
          voluptates sit deleniti autem error eos totam nisi neque.
        </p>
        <div class="skills">
          <span>Let's connect Customers and Farmers</span>

        </div>
      </div>
    </div>
  </main>
  <footer></footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $("header").load("./headfoot/header.html");
    $("footer").load("./headfoot/footer.html");
  </script>

  <script src="script.js"></script>
</body>

</html>