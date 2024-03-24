<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>code darshan</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <div id="loading"></div>
    

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Khand:wght@600&display=swap');


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {
            padding: 25px;
            background-color: rgb(138, 0, 115);
            color: black;
            font-size: 25px;
        }

        .dark-mode {
            background-color: rgb(0, 11, 40);
            color: rgb(134, 77, 28);
        }


        #loading {
            
            position: fixed;
            width: 100%;
            height: 100vh;
            background: #ffffff url(buffer.gif) no-repeat center center;
            z-index: 99999;
        }


        .contain {
            width: 100%;
            height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn {
            padding: 10px 60px;
            background: #0f0f1b;
            border: 0;
            outline: none;
            cursor: pointer;
            font-size: 22px;
            font-weight: 500;
            border-radius: 30px;
            color: yellowgreen;
        }

        .popup {
            width: 500px;
            height: 300px;
            background: #0d0a1f;
            border-radius: 6px;
            position: absolute;
            top: 0;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.1);
            text-align: center;
            padding: 0 30px 30px;
            color: #333;
            visibility: hidden;
            transition: transform 0.4s, top 0.4s;
            color: rgb(225, 255, 0);

        }

        .open-popup {
            visibility: visible;
            top: 50%;
            transform: translate(-50%, -50%)scale(1);
        }

        .remove-popup {
            visibility: none;
            bottom: 50%;
            transform: translate(-50%, -50%)scale(1);
        }

        .popup img {
            width: 100px;
            margin-top: -50px;
            border-radius: 50%;
            box-shadow: 0 0px 10px rgb(255, 238, 0);
            stroke-width: 2px solid black;
        }

        .popup h2 {
            font-size: 38px;
            font-weight: 500;
            margin: 30px 0 10px;
        }

        .popup button {
            width: 100%;
            margin-top: 50px;
            padding: 10px 0;
            background: #726fdb;
            color: #eaff00;
            border: 0;
            outline: none;
            font-size: 18px;
            border-radius: 4px;
            cursor: pointer;
            box-shadow: 0 5px 5px rgb(0, 238, 255);
        }
        .wrapper{
  position: absolute;
  bottom: 30px;
  left: 30px;
  max-width: 365px;
  background: hsl(57, 100%, 50%);
  padding: 25px 25px 30px 25px;
  border-radius: 15px;
  box-shadow: 1px 7px 14px -5px rgba(0,0,0,0.15);
  text-align: center;
}
.wrapper.hide{
  opacity: 0;
  pointer-events: none;
  transform: scale(0.8);
  transition: all 0.3s ease;
}
::selection{
  color: #004b74;
  background: #eae8e7;
}
.wrapper img{
  max-width: 90px;
}
.content header{
  font-size: 25px;
  font-weight: 600;
}
.content{
  margin-top: 10px;
}
.content p{
  color: #f20909;
  margin: 5px 0 20px 0;
}
.content .buttons{
  display: flex;
  align-items: center;
  justify-content: center;
}
.buttons button{
  padding: 10px 20px;
  border: none;
  outline: none;
  color: #ffffff;
  font-size: 16px;
  font-weight: 500;
  border-radius: 5px;
  background: #3d5d64;
  cursor: pointer;
  transition: all 0.3s ease;
}
.buttons button:hover{
  transform: scale(0.97);
}
.buttons .item{
  margin: 0 10px;
}
.buttons a{
  color: #000000;
}

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        


</head>

<body style="font-family: 'Poppins', sans-serif;">
    <script src="https://kit.fontawesome.com/305d530da5.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>

             
        

<nav class="navbar navbar-expand-lg  bg-warning">
      <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Code दर्शन..</a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="upcoming.html">Upcomings...</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="overapi.html">Code सन्दर्भ..</a>
                  </li>

                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          Explore More
                      </a>

                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="codedarshan.html">HTML</a></li>
                          <li>
                              <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="css.html">CSS</a></li>
                          <li>
                              <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="js.html">JAVASCRIPT</a></li>
                          <li>
                              <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item , nav-link-disabled " href="#">BOOTSTRAP</a></li>
                          <li>
                              <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="php.html">PHP</a></li>
                          <li>
                              <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="quiz.html">QUIZES</a></li>
                         

                      </ul>
                  </li>

              </ul>

              <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
              </form>&ensp;
              <!-- Button trigger modal -->
            



              <a href="app.html" class="btn btn-primary position-relative">
                                      Download App
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                       New

                      </span>
                      </a>&ensp;&ensp;&ensp;






              <a href="x.php" class="btn btn-danger" role="button" aria-disabled="true">Sign In</a>&ensp;&ensp;

              <i class="fa-duotone fa-gear-complex-code fa-beat-fade"></i>
          </div>
          <i class="fa-solid fa-circle-half-stroke fa-shake fa-xl" onclick="myFunction()" style="color: #000000;"></i>
      </div>&ensp;

      <a href="http://localhost/damodar/admin/login.php" 
      class="btn btn-secondary" role="button" aria-pressed="true"><i class="fa-solid fa-user-tie fa-xl"></i></a>&ensp;&ensp;
      <div id="google_element"><script src="https://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate">

      </script>
      <script>
          function loadGoogleTranslate(){
              new google.translate.TranslateElement("google_element");
          }
      </script></div>
      
  </nav>




    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="C1.gif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p class="text text-white">“First, solve the problem. Then, write the code.”.</p>
                    <h5 class="text text-white"> John Johnson</h5>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="C2.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p class="text text-primary"> “Experience is the name everyone gives to their mistakes.”</p>


                </div>
            </div>
            <div class="carousel-item">
                <img src="C4.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <hr>


    <body>
  <div class="wrapper">
    <img src="cookie.png" alt="">
    <div class="content">
      <header>Cookies Consent</header>
      <p>This website use cookies to ensure you get the best experience on our website.</p>
      <div class="buttons">
        <button class="item">I understand</button>
        <a href="#" class="item">Learn more</a>
      </div>
    </div>
  </div>


    <h3 class="text-shadow-1">Welcome to CodeDarshan</h1>
        <h3 class="text-warning">Learn <h3 class="text-success"><span class="auto-type"></span></h3>


            <div class="container my-4">
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="card flex-md-row mb-4 box-shadow h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                                <strong class="d-inline-block mb-2 text-primary">STRUCTURE</strong>
                                <h3 class="">
                                    <a class="text-danger" href="codedarshan.html">HTML</a>
                                </h3>
                                <p class="card-text mb-auto">The HyperText Markup Language or HTML is
                                    the standard markup language for documents designed to be displayed
                                    in a web browser. It can be assisted by technologies such as Cascading
                                    Style Sheets (CSS) and scripting languages such as JavaScript.</a>
                                    <br>
                                    <br>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#cd">Know More...</button>
                                <div class="body modal" id="cd">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 id="cd">HTML</h1>
                                                <p>The HyperText Markup Language or HTML is the standard markup
                                                    language
                                                    for
                                                    documents
                                                    designed to be displayed in a web browser. It can be assisted by
                                                    technologies such
                                                    as Cascading Style Sheets (CSS) and scripting languages such as
                                                    JavaScript.
                                                    Web browsers
                                                    receive HTML documents from a web server or from local storage
                                                    and
                                                    render
                                                    the documents into
                                                    multimedia web pages. HTML describes the structure of a web page
                                                    semantically and originally
                                                    included cues for the appearance of the document. HTML elements
                                                    are
                                                    the
                                                    building blocks of HTML
                                                    pages. With HTML constructs, images and other objects such as
                                                    interactive
                                                    forms may be embedded
                                                    into the rendered page. HTML provides a means to create
                                                    structured
                                                    documents
                                                    by denoting structural
                                                    semantics for text such as headings, paragraphs, lists, links,
                                                    quotes, and
                                                    other items.</p>

                                                <button type="button" class="btn btn-warning my-4"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <img class="card-img-right flex-auto d-none d-md-block" style="width: 200px; height: 250px;"
                                src="thumb1.png" data-holder-rendered="true">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card flex-md-row mb-4 box-shadow h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                                <strong class="d-inline-block mb-2 text-success">Design</strong>
                                <h3 class="mb-0">
                                    <a class="text-danger" href="css.html">CSS</a>
                                </h3>
                                <p class="card-text mb-auto">Cascading <br>Style Sheets (CSS) is a style sheet
                                    language
                                    used for
                                    describing the presentation of a document written in a markup language such as
                                    HTML
                                    or XML
                                    (including
                                    XML dialects such as SVG, MathML or<BR> XHTML).</a>
                                    <br><br>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#css">Know More...</button>
                                <div class="modal" id="css">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 id="css">CSS</h1>
                                                <p>CSS is designed to enable the separation of content and
                                                    presentation,
                                                    including layout,
                                                    colors, and fonts.This separation can improve content
                                                    accessibility;
                                                    provide
                                                    more
                                                    flexibility and control in the specification of presentation
                                                    characteristics; enable multiple
                                                    web pages to share formatting by specifying the relevant CSS in
                                                    a
                                                    separate
                                                    .css file, which
                                                    reduces complexity and repetition in the structural content; and
                                                    enable the
                                                    .css file to be
                                                    cached to improve the page load speed between the pages that
                                                    share
                                                    the file
                                                    and its formatting.</p>

                                                <button type="button" class="btn btn-warning my-4"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>




                            </div> <img class="card-img-right flex-auto d-none d-md-block"
                                style="width: 200px; height: 250px;" src="thumb2.png" data-holder-rendered="true">
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="card flex-md-row mb-4 box-shadow h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                                <strong class="d-inline-block mb-2 text-primary">Fast,Flexible and pragmatic</strong>
                                <h3 class="">
                                    <a class="text-danger" href="upcoming.html">PHP</a>
                                </h3>
                                <p class="card-text mb-auto">PHP is a general-purpose scripting language geared
                                    toward
                                    web development.It was originally created by Danish-Canadian programmer Rasmus
                                    Lerdorf in 1993 and released in <BR>1995.</a>
                                    <br>
                                    <br>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#cdh">Know More...</button>
                                <div class="body modal" id="cdh">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 id="cdh">PHP</h1>
                                                <p>PHP code is usually processed on a web server by a PHP
                                                    interpreter
                                                    implemented as a module, a daemon or as a Common Gateway
                                                    Interface
                                                    (CGI) executable. On a web server, the result of the interpreted
                                                    and
                                                    executed PHP code – which may be any type of data, such as
                                                    generated
                                                    HTML or binary image data – would form the whole or part of an
                                                    HTTP
                                                    response. Various web template systems, web content management
                                                    systems, and web frameworks exist which can be employed to
                                                    orchestrate or facilitate the generation of that response.
                                                    Additionally, PHP can be used for many programming tasks outside
                                                    the
                                                    web context, such as standalone graphical applications and
                                                    robotic
                                                    drone control.</p>
                                                <button type="button" class="btn btn-warning my-4"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <img class="card-img-right flex-auto d-none d-md-block" style="width: 200px; height: 250px;"
                                src="6.png" data-holder-rendered="true">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card flex-md-row mb-4 box-shadow h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                                <strong class="d-inline-block mb-2 text-primary">Write Less<br>Do More</strong>
                                <h3 class="">
                                    <a class="text-danger" href="upcoming.html">jQuery</a>
                                </h3>
                                <p class="card-text mb-auto">jQuery is a JavaScript framework designed to simplify
                                    HTML
                                    DOM tree traversal and manipulation, as well as event handling, CSS animation,
                                    and
                                    Ajax.It is free, open-source software using the permissive MIT <BR>License.</a>
                                    <br>
                                    <br>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#cdd">Know More...</button>
                                <div class="body modal" id="cdd">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 id="cdd">jQuery</h1>
                                                <p>jQuery, at its core, is a Document Object Model (DOM)
                                                    manipulation
                                                    library. The DOM is a tree-structure representation of all the
                                                    elements of a Web page. jQuery simplifies the syntax for
                                                    finding,
                                                    selecting, and manipulating these DOM elements. For example,
                                                    jQuery
                                                    can be used for finding an element in the document with a
                                                    certain
                                                    property (e.g. all elements with an h1 tag), changing one or
                                                    more of
                                                    its attributes (e.g. color, visibility), or making it respond to
                                                    an
                                                    event (e.g. a mouse click).</p>
                                                <button type="button" class="btn btn-success my-4"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <img class="card-img-right flex-auto d-none d-md-block" style="width: 200px; height: 250px;"
                                src="5.png" data-holder-rendered="true">
                        </div>
                    </div>

                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="card flex-md-row mb-4 box-shadow h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                                <strong class="d-inline-block mb-2 text-primary">Soul of the Web</strong>
                                <h3 class="mb-0">
                                    <a class="text-danger" href="js.html">JScript</a>
                                </h3>

                                <p class="card-text mb-auto">JavaScript often abbreviated as JS, is a programming
                                    language that
                                    is one of the core technologies of the World Wide Web, alongside HTML and CSS.
                                    As of
                                    2022,
                                    98%
                                    of websites use JavaScript on the client side for webpage behavior, often
                                    incorporating
                                    third-party libraries.</p>
                                <br>
                                <br>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#jscr">Know
                                    More...</button>

                                <div class="modal" id="jscr">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 id="jscr"> Jscript </h1>
                                                <p>JavaScript is a high-level, often just-in-time compiled language
                                                    that conforms to the ECMAScript standard. It has dynamic typing,
                                                    prototype-based object-orientation, and first-class functions.
                                                    It is
                                                    multi-paradigm, supporting event-driven, functional, and
                                                    imperative
                                                    programming
                                                    styles. It has application programming interfaces (APIs) for
                                                    working
                                                    with
                                                    text,
                                                    dates, regular expressions, standard data structures,and the
                                                    Document Object
                                                    Model (DOM).</p>
                                                <br><br>
                                                <button type="button" class="btn btn-warning my-4"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                             <img class="card-img-right flex-auto d-none d-md-block"
                                style="width: 200px; height: 250px;" src="thumb3.png" data-holder-rendered="true">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card flex-md-row mb-4 box-shadow h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                                <strong class="d-inline-block mb-2 text-success">Build Fast,Responsive Sites</strong>
                                <h3 class="mb-0">
                                    <a class="text-danger" href="upcoming.html">Bootstrap</a>
                                </h3>

                                <p class="card-text mb-auto">Bootstrap <br> is a free and open-source CSS framework
                                    directed at
                                    responsive,
                                    mobile-first front-end web development. It contains HTML, CSS and (optionally)
                                    JavaScript-based design
                                    templates for typography, forms, buttons, navigation, and other interface
                                    components.</a>
                                    <br><br>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#bs">Know More...</button>
                                <div class="modal" id="bs">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 id="bs">B-Strap</h1>
                                                <p> <b>Bootstrap</b> is a free and open-source CSS framework
                                                    directed at
                                                    responsive,
                                                    mobile-first front-end web development. It contains HTML, CSS
                                                    and
                                                    (optionally)
                                                    JavaScript-based design templates for typography, forms,
                                                    buttons,
                                                    navigation, and other interface components.
                                                    As of December 2022, Bootstrap is the 14th most starred project
                                                    (4th
                                                    most
                                                    starred library) on GitHub, with
                                                    over 161,000 stars.According to W3Techs, Bootstrap is used by
                                                    19.2%
                                                    of all
                                                    websites.</p>

                                                <button type="button" class="btn btn-warning my-4"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <br>

                            </div> <img class="card-img-right flex-auto d-none d-md-block"
                                style="width: 200px; height: 250px;" src="thumb4.png" data-holder-rendered="true">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" id="a">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title">HTML!!!!</h6>
                            <button class="button" class="btn-close" data-bs-dismiss="modal"></button>
                            <div class="modal-body">
                                <p>loper5

                                </p>
                            </div>
                        </div>
                    </div>


                </div>


            </div>


            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="2.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="33.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="2.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button"="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
<!-- Footer -->
<footer class="bg-dark text-center text-white my-4">
    
                <!-- Grid container -->
                <div class="container p-4">
                    <!-- Section: Social media -->

                    <!-- Section: Social media -->

                    <!-- Section: Form -->
                    <section class="">
                        <form action="">
                            <!--Grid row-->
                            <div class="row d-flex justify-content-center">
                                <!--Grid column-->
                                <div class="col-auto">
                                    <p class="pt-2">
                                        <strong>Sign up for our newsletter :- </strong>
                                    </p>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-5 col-12">
                                    <!-- Email input -->
                                    <div class="form-outline form-white mb-4">
                                        <input type="email" id="form5Example21" class="form-control" />
                                        <label class="form-label" for="form5Example21">Email address</label>
                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-auto">
                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-outline-danger mb-4">
                                        Subscribe
                                    </button>&ensp; &ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<a href="http://localhost/damodar/chatbott/bot.php" class="btn btn-primary position-relative"><i class="fa-solid fa-message-smile fa-fade fa-2xl" style="color: #0804f1;"></i>Code सारथी</a>
                                </div>
                                <!--Grid column-->
                            </div>
                            <!--Grid row-->
                        </form>
                    </section>
                    <!-- Section: Form -->

                    <!-- Section: Text -->
                    <section class="mb-4">
                        <p>
                            Coding is essentially a problem-solving process that helps to
                            analyze a situation or goal and then use problem-solving skills
                            to determine and implement a solution. While the goal or challenge
                            may be the same, the solution itself may look different depending on
                            the strategies taken to achieve the desired result.
                        </p>
                    </section><br><br>
                    <!-- Section: Text -->

                    <!-- Section: Links -->
                    <section class="">
                        <!--Grid row-->
                        <div class="row">



                            <!--Grid column-->
                            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                <h5 class="text-uppercase">Useful Links</h5>

                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="https://www.w3.org/" class="text-white">W3C</a>
                                    </li>
                                    <li>
                                        <a href="https://instituteofcoding.open.ac.uk/" class="text-white">IoC</a>
                                    </li>
                                    <li>
                                    <a href="https://www.mysql.com/" class="text-white">My Sql</a>
                                </li>
                                <li>
                                    <a href="https://www.php.net/" class="text-white">PhP</a>
                                </li>
                                <li>
                                    <a href="https://www.php.net/" class="text-white">About Us</a>
                                </li>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                <h5 class="text-uppercase"></h5>
                                
                                    <a href="https://www.php.net/" class="text-white"></a>
                                
                                
                                    <a href="https://www.mysql.com/" class="text-white"></a>
                                
                                </ul>
                            </div>
                            <!--Grid column-->
                            

                            <!--Grid column-->
                            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                <h5 class="text-uppercase"></h5>

                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="https://www.w3schools.com/" class="text-white"></a>
                                    </li>
                                    <li>
                                        <a href="https://www.javatpoint.com/" class="text-white"></a>
                                    </li>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                <h5 class="text-white">CONNECT US</h5>
                                
                                    <a class="text-white">NSTI (W) PATNA</a><br>
                                    <a class="text-white">Govt. Women ITI Campus, Third floor, Digha Ghat, Patna, Bihar Pin Code : 800011</a>
                                <BR><br><br>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3596.7575946997135!2d85.0914599752735!3d25.646169577424697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed5773ee3059f7%3A0xd17227447720f100!2sNSTI(W)%20PATNA!5e0!3m2!1sen!2sin!4v1688459734007!5m2!1sen!2sin" width="250" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                
                                    <a></a>
                                
                                </ul>
                            </div>





                        </div>
                        <!--Grid row-->
                    </section>
                    <!-- Section: Links -->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(15, 11, 99, 0.2);">
                    © 2023 Copyright:
                    <a class="text-white" href="index.html">www.codedarshan.com</a><br>
                    Mail us at :- codedarshan@hotmail.com
                </div>

                <p class="text-warning">Total Visitors till Now..</p>
                <a href="https://www.hitwebcounter.com" target="_blank">
                    <img src="https://hitwebcounter.com/counter/counter.php?page=8299016&style=0032&nbdigits=4&type=page&initCount=100"
                        title="Free Counter" Alt="web counter" /></a><br><br>
                <!-- Copyright -->
            </footer>

            
            

            





            <body class="text-center">
                

    
            <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
            <script>
                var Typed = new Typed(".auto-type", {
                    strings: ["HTML", "CSS", "JavaScript", "Bootstrap", "jQuery"],
                    typeSpeed: 50,
                    backSpeed: 5,
                    loop: true
                })
                function myFunction() {
                    var element = document.body;
                    element.classList.toggle("dark-mode");
                }
                let popup = document.getElementById("popup");
                function openPopup() {
                    popup.classList.add('open-popup');
                }
                function closePopup() {
                    popup.classList.remove('open-popup');

                }

                setTimeout(function () {
                    $('#loading').fadeOut('fast');
                }, 1000);
                
                 const cookieBox = document.querySelector(".wrapper"),
    acceptBtn = cookieBox.querySelector("button");

    acceptBtn.onclick = ()=>{
      //setting cookie for 1 month, after one month it'll be expired automatically
      document.cookie = "CookieBy=CodeDarshan; max-age="+60*60*24*30;
      if(document.cookie){ //if cookie is set
        cookieBox.classList.add("hide"); //hide cookie box
      }else{ //if cookie not set then alert an error
        alert("Cookie can't be set! Please unblock this site from the cookie setting of your browser.");
      }
    }
    let checkCookie = document.cookie.indexOf("CookieBy=CodeDarshan"); //checking our cookie
    //if cookie is set then hide the cookie box else show it
    checkCookie != -1 ? cookieBox.classList.add("hide") : cookieBox.classList.remove("hide");
    $(function(){
   setTimeout(function(){
     $('#wrapper').show();
   },5000);
});



  </script>
  

            

</body>


</html>