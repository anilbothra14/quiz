<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Fruit Shop Landing Page</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="shortcut icon" href="images/style.png" type="image/x-icon" width="100%">
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <header id="header">
      <div class="header-content-div">
        <a href="#home-sec">
          <img
            src="images/download.jpg" height="100%" width="100%"
            alt="Company Logo"
            id="header-img"
        /></a>
        <nav id="nav-bar">
          <a href="#about" class="nav-link">ABOUT</a>
          <a href="#varieties" class="nav-link">VARIETIES</a>
          <a href="#our-service" class="nav-link">OUR SERVICE</a>
          <a href="#benefits" class="nav-link">BENEFITS</a>
          <a href="#contact us" class="nav-link">CONTACT US</a>
        </nav>
      </div>
    </header>
    <main>
      <section id="home-sec" class="flexible home-sec">
        <div class="eye-grabber-img">
          <img src="images/download1.jpg"height="90%" width="90%" alt="Image of Apples" />
        </div>
        <div class="eye-grabber">
          <h1>Fresh, Crispy, Heavenly.</h1>
          <h2>
            100% Organic, vivid varieties of apples grown in Kashmir aka The
            Heaven of Earth.
          </h2>
          <button class="btn" onclick="window.location.href = '#contact';">
            Buy Now
          </button>
        </div>
      </section>
      <section id="about" class="sec-padding">
        <h3 class="section-heading">ABOUT US</h3>
        <div class="sec-content-div flexible">
          <p>
            <i>
            We are a group of people with decades of experience in growing and
            selling apples. We know what a good apple looks like and how they
            are grown. This essential fruit requires a temperate climate, loamy
            soil that is rich in organic matter apart from needing proper
            drainage and aeration facilities. Lucky for us we live in Kashmir
            which is proudly known as paradise of earth is also home to
            temperate fruits like apple for which the state is very famous
            across globe. The main factor which influence temperate fruit
            bearing trees is soil, climate and environment which are highly
            favorable and unparalleled in the province of Kashmir. Kashmiri
            apples a unique look, taste, flavor, size and color.
</i>
          </p>
          <img src="images/fg.jpg" height="80%" width="90%" alt="A man plucking apples from the tree" />
        </div>
      </section>
      <section id="varieties" class="sec-padding">
        <h3 class="section-heading">VARIETIES</h3>
        <div class="sec-content-div flexible">
          <div class="tile">
            <img src="images/litchi.jpg"height="50%" alt="photo of amber apples" />
            <h4>Litchi</h4>
            <p>
            The fruits are similar to longan, with the edible part being the translucent aril, which are juicy and sweet to sour in taste. The pericarp is green when unripe and pink when ripe. The fruits are rich in phytochemicals.
            </p>
          </div>
          <div class="tile">
            <img
              src="https://i.ibb.co/H4Cnh7v/american-trel.png" height="50%"
              alt="photo of american trel apples"
            />
            <h4>American Trel</h4>
            <p>
              A small, rounded, very crispy and sweet fruit variety that ripens
              in mid-September.
            </p>
          </div>
          <div class="tile">
            <img src="images/mango.jpg" height="50%" alt="photo of red delicious apple" />
            <h4>Mango Fruit</h4>
            <p>
            Mango fruit is roughly oval in shape, with uneven sides. The fruit is a drupe, with an outer flesh surrounding a stone. The flesh is soft and yellow-orange in color. The fruit's skin ranges from yellow-green to red.
            </p>
          </div>
          <div class="tile">
            <img src="images/o.jpg" alt="photo of Maharaej apples"height="50%" />
            <h4>Orange Fruit</h4>
            <p>
            Oranges are round, orange-coloured fruit that grow on a tree which can reach 10 metres (33 ft) high. Orange trees have dark green shiny leaves and small white flowers with five petals. 
          </div>
          <div class="tile">
            <img src="images/g.jpg" alt="photo of Hazratbael apples"height="50%" />
            <h4>Guava Fruit</h4>
            <p>
            The fruit has a yellow skin and white, yellow, or pink flesh. The musky, at times pungent, odour of the sweet pulp is not always appreciated.
            </p>
          </div>
          <div class="tile">
            <img src="images/df.jpg" alt="photo of Golden Delicious apples"height="50%" />
            <h4>Dragon Fruit</h4>
            <p>
            They have scaly skin that can be pink or yellow, while the inside flesh may be red or white with tiny, black seeds. It has a crunchy texture and sweet flavor like a kiwi or pear.
            </p>
          </div>
        </div>
      </section>
      <section id="our-service" class="sec-padding">
        <h3 class="section-heading">OUR SERVICE</h3>
        <div class="sec-content-div">
          <div class="bars">
            <div class="icon-container">
              <img src="https://i.ibb.co/w6H542X/Fresh.png" alt="" />
            </div>
            <div class="txt-container">
              <h5>Fresh</h5>
              <p>We deliver fresh apples with a 100% guarantee of freshness.</p>
            </div>
          </div>
          <div class="bars">
            <div class="icon-container">
              <img src="https://i.ibb.co/FKNq4Qr/delivered.png" alt="" />
            </div>
            <div class="txt-container">
              <h5>Fast</h5>
              <p>
                We deliver your orders as fast as possible, delivery procedure
                begins as soon as apple is plucked from tree.
              </p>
            </div>
          </div>
          <div class="bars">
            <div class="icon-container">
              <img src="https://i.ibb.co/HHQK1wV/happy.png" alt="" />
            </div>
            <div class="txt-container">
              <h5>Satisfying</h5>
              <p>
                We guarantee 100% customer satisfaction. We do our best to make
                your purchase experience smooth. But if we mess up somehow you
                will get compensated for every inconvenience.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section id="benefits" class="sec-padding">
        <h3 class="section-heading">BENEFITS</h3>
        <div class="sec-content-div flexible">
          <iframe
            id="video"
            width="560"
            title="Benefits of fruits"
            height="315"
            src="images/benefits.mp4"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
        </div>
      </section>
      <section id="contact us">
    <i><b><h1> Contact Us</h1></b></i>
    
       <div class="container">
        <font color="red">
       <h2>Mobile Number</h2></font>
       <h2>9313902060</h2> 
       <font color="green">
       <h2>Gmail</h2></font>
       <h2>anilbothra14@gmail.com</h2>

</section>
</div>
</main>   

  </body>
</html>