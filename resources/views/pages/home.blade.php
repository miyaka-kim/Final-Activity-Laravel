@extends('layouts.default')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>I'm Miaca khasfe Amoyo</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <style>
  *
  .header
  {

      width: 100%;
      padding: 10px;
      display: flex;
      align-items: center;
      position:relative;
  }

  {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
    text-transform: sentence case;
    font-weight: bold;
    align-items: center;
    justify-content: center;
  }
  body
  {
      font-family: 'Roboto', sans-serif;
      background-color:#94B49F;
  }
  .head
  {
    background-color: #FCF8E8;
    width: 100%;
    height: 20vh;
    border-bottom: 6px solid rgb(27, 27, 27);
    display: inline-flex;
    align-items: center;
    position:relative;
    padding: 10px;
  }

  .container
  {
      background-color: rgba(248, 248, 248, 0.63);
      box-shadow: 5px 5px 10px rgb(170, 170, 170);
      width: 85%;
      margin: auto;
      border-radius: 50px;
  }

  .description
  {
      width: 85%;
      margin: auto;
      padding-top: 30px;
      padding-bottom: 30px;
      margin-bottom: 20px;

  }
  .description>p
  {
      margin: 20px;
      text-align: justify;
      text-justify: inter-word;
      line-height: 30px;
      font-size: 18px;
      color: #4A403A;
  }

  .text {
    color: #06283D;
    font-size: 50px;
    width: 100%;
    height:10%;
    text-align: center;
    padding: 8px 12px;
    bottom: 8px;
    position: relative;
    margin-bottom: 20px;
  }

  .banner>span{
      background-color: whitesmoke;
      width: 100px;
      height: 3px;
  }
  .container
  {
      background-color: rgba(248, 248, 248, 0.63);
      box-shadow: 5px 5px 10px rgb(170, 170, 170);
      width: 85%;
      margin: auto;
      border-radius: 50px;
  }
  .banner
  {
      background-position: bottom;
      background-size: cover;
      width: 100%;
      height: 20vh;
      text-align: center;
      display: flex;
      align-items: center;
      justify-content: center;
      text-transform: uppercase;
      font-weight: bold;
      font-size: 8vh;
      letter-spacing: 5px;
      color: whitesmoke;
  }
  .description
  {
      width: 85%;
      margin: auto;
      padding-top: 30px;
      padding-bottom: 30px;
      margin-bottom: 20px;
  }
  .first
  {
      float: left;
      width: 200px;
      height: 200px;
      margin-top: 10px;
      margin-right: 30px;
      margin-bottom: 10px;
      border-radius: 50px;
  }
  .second
  {
      float: right;
      width: 200px;
      height: 200px;
      margin-top: 0px;
      margin-left: 30px;
      margin-bottom: 10px;
      border-radius: 50px;
  }
  .description>p
  {
      margin: 20px;
      text-align: justify;
      text-justify: inter-word;
      line-height: 30px;
      font-size: 18px;
      color: #4A403A;
  }
  .learn-container
  {
      background-size: cover;
      background-repeat: repeat;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      padding: 20px;
  }
  .learn-container>p
  {
      text-align: center;
      width: 100%;
      font-weight: bold;
      font-size: 8vh;
      letter-spacing: 5px;
      color: whitesmoke;
      text-shadow: 5px 5px 10px rgb(65, 65, 65);
      margin-bottom: 20px;
  }
  .name
  {
      font-weight: bold;
  }
</style>
</head>

<body>

  <div class="head">
      <p class="text">My Personal Web Page</p>
      </div>
      <br></br>
      <br></br>
      <br></br>

<!--FAVORITE lesson-->
      <div class="container">
          <div class="header">
          </div>
          <div class="banner">
              <span class="line"></span>
              INTERCONNECTION TOPOLOGIES
              <span class="line"></span>
          </div>
          <div class="description">
            <p> &nbsp;&nbsp;&nbsp;&nbsp; Switching elements make up interconnection networks. The pattern that connects individual switches to other elements such as processors, memories, and other switches is known as topology. In a parallel system, a network allows data to be exchanged between processors. An interconnection topology is defined in this way.
            <br></br> &nbsp;&nbsp;&nbsp;Links are the first and most basic component of interconnection topologies. A link is a cable with one or more optical fibers or electrical wires connected to a switch or network interface port at each end. To obtain the original digital information stream, an analog signal is transmitted from one end and received at the other.Switches is up next. A switch is made up of a set of input and output ports, an internal "cross-bar" that connects all input to all output, internal buffering, and control logic that affects the input-output connection at any given time. In general, the number of input ports and output ports are equal. The third component is Network Interfaces. The network interface differs from switch nodes in that it can be connected with special links.
            <br></br>In a parallel system, a network allows data to be shared between processors:
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Direct networks have nodes connected by point-to-point connections. The point-to-point connections on these networks are fixed, making them static. Rings, meshes, and cubes are a few examples of direct networks.
            </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Networks with indefinite neighbors are known as indirect networks. Depending on the application requirements, the communication topology can be changed dynamically. Bus networks, multistage networks, and crossbar switches are three different types of indirect networks.
            <br></br><br></br>Simply put, interconnection allows businesses to transfer data reliably between these assets by providing low latency, high availability connections. Dedicated or direct interconnect connects assets physically, improving network security and performance while increasing costs. The understanding of two key concepts is aided by network topology. It enables us to comprehend our network's various components and their interconnections. Two, it shows how they work together and what we can expect from their performance.
            </div>
            </div>
            </div>

            <br></br>
            <br></br>
            <br></br>


<!--LARAVEL-->
            <div class="container">
                <div class="header">
                </div>
                <div class="banner">
                    <span class="line"></span>
                    LARAVEL
                    <span class="line"></span>
                </div>
                <div class="description">
                  <p> &nbsp;&nbsp;&nbsp;&nbsp; Laravel is a robust and simple-to-understand open-source PHP framework. It is designed in the model-view-controller style. Laravel reuses components from various frameworks to aid in the development of web applications. The result is a more structured and practical web application.
                  <br></br> &nbsp;&nbsp;&nbsp;&nbsp;Laravel includes the basic features of PHP frameworks such as CodeIgniter and Yii, as well as other programming languages such as Ruby on Rails. Laravel comes with a large number of features that will help you develop websites faster.
                  <br></br> &nbsp;&nbsp;&nbsp;&nbsp;Laravel will make your job easier if you know how to use Core PHP and Advanced PHP. If you're building a website from scratch, it will save you a lot of time. In addition, a Laravel-based website is secure and resistant to a variety of web attacks.
                  <br></br><br> The PHP Laravel Framework has six best features that make it popular among developers and businesses.
                  <br></br>1.) Template Generator:
                  <br> &nbsp;&nbsp;&nbsp;&nbsp; - The Laravel framework is well-known for its lightweight templates, which can be used to create beautiful layouts with dynamic content seeding. It also includes multiple widgets that incorporate CSS and JS code and have solid structures. Laravel templates are cleverly designed to produce simple and complex layouts with distinct sections.
                  <br></br>2.) Support for the MVC architecture
                  <br> &nbsp;&nbsp;&nbsp;&nbsp; - The MVC architecture pattern is supported by Laravel, ensuring that business logic and presentation layers are separated. The MVC pattern in Laravel comes with a lot of built-in features that boost application performance, security, and scalability.
                  <br></br>3.) Object Relational Mapping (ORM) with Eloquence:
                  <br> &nbsp;&nbsp;&nbsp;&nbsp; - Laravel's Eloquent Object Relational Mapping (ORM) feature includes a PHP Active Record implementation. Instead of writing SQL code, web application developers can write database queries using PHP syntax. ORMs outperform other PHP frameworks.
                  <br></br>4.) Security
                  <br> &nbsp;&nbsp;&nbsp;&nbsp; - For web applications, the Laravel framework provides a high level of security. It uses hashed and salted password mechanisms to prevent plain text password storage. It uses the "Bcrypt Hashing Algorithm" to generate an encrypted password, as well as prepared SQL statements to protect against SQL injection attacks.
                  <br></br>5.) Artisan
                  <br> &nbsp;&nbsp;&nbsp;&nbsp; - Artisan, a built-in command-line tool in the Laravel framework, helps to automate the majority of tedious, repetitive programming tasks. These artisans can also create the database structure, skeleton code, and migrations, making it a relatively simple database system to manage. It can also use the command line to generate basic MVC files and manage those assets as well as their configurations. Artisan even assists developers in creating and using their own commands.
                  <br></br>6.) Libraries and Modules
                  <br> &nbsp;&nbsp;&nbsp;&nbsp; - Laravel comes with pre-installed Object-Oriented and Modular libraries, which are not found in many other PHP Laravel frameworks. For instance, consider a simple authentication library with features such as active user checking, Bcrypt hashing, password reset, CSRF (Cross-site Request Forgery) protection, and encryption. Furthermore, this framework is broken down into individual modules using modern PHP principles, allowing for the creation of responsive and modular web applications.
                </div>
                </div>
                </div>
                </div>
                <br></br>
                <br></br>
                <br></br>


                  <!--about me-->
                              <div class="container">
                                  <div class="header">
                                  </div>
                                  <div class="banner">
                                      <span class="line"></span>
                                      ABOUT ME
                                      <span class="line"></span>
                                  </div>
                                  <div class="description">
                                    <p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;  I'm Miaca Khasfe C. Amoyo. I am 21 years old and from Pinagbuhatan, Pasig City. I am a third-year student pursuing a Bachelor of Science in Computer Science at Pamantasan ng Lungsod ng Pasig.
                                    <p>
                                        &nbsp;Here's a quick rundown of my life philosophy: Every new day, in my opinion, should be treated as a fresh start. For me, life is a challenge, and I've set a number of lofty goals for myself. In addition, I find it difficult to sit still for long periods of time. Our ability to learn is, in my opinion, our most valuable asset. Many great people have said, "Knowledge is power, and with power comes respect." I'd like to add that you have to earn respect before you can expect it. As a result, I believe that the phrase "treat others as you would like to be treated" has a lot of power.
                            </div>
                          </div>
                          <br></br>
                          <br></br>
                          <br></br>

<!--6 YEARS FROM NOW-->
                          <div class="container">
                              <div class="header">
                              </div>
                              <div class="banner">
                                  <span class="line"></span>
                                  6 years from now
                                  <span class="line"></span>
                              </div>
                              <div class="description">
                                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In six years from now, I'll be in a management position. Until then, I'll continue to learn and gain experience, but my ultimate ambition is to work as a web developer manager. I recognize that I have a lot to learn, but I intend to work hard over the next six years to do so. Great workers, I believe, should be rewarded with opportunities, and I intend to be one of them.

                              </div>
                          </div>
                        </div>

                            </body>
                            </html>

@stop
