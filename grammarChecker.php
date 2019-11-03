<?php
          session_start();
          if (!isset($_SESSION['loggedin'])) {
              header('Location: login.php');
              exit();
         }
   ?>
		
    <!DOCTYPE html>
    <html lang="en">
        <head>
           <meta charset="utf-8">
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <title>Docufix |GRAMMAR/SPELLING CHECKER APP</title>
           <meta name="description" content="">
           <meta name="viewport" content="width=device-width, initial-scale=1">
           <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
           <link rel="manifest" href="manifest.json" />
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700&display=swap" rel="stylesheet" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
       integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
     <link rel="stylesheet" type="text/css" href="./css/wysiwyg.css">
     <link rel="stylesheet" type="text/css" href="css/fileupload.css">
     <link rel="stylesheet" type="text/css" href="css/header&footer.css">
     <link rel="stylesheet" type="text/css" href="css/grammarChecker.css">
     
     <script type="text/javascript" src ="//widget.instabot.io/jsapi/rokoInstabot.js" crossorigin>
       apiKey: "vXj90M2ifAvu8fS739jFKepTXtES72ur59sGR5TPK9c="
       </script>
   
</head>

<body style = "background-color: #c0c0c0">

    <header>
          <nav class="navbar navbar-expand-lg navbar-light scrolling-navbar fixed-top">
            <a class="navbar-brand px-sm-5 ml-3" href="index.html"><img src="https://res.cloudinary.com/kuic/image/upload/v1572638901/docufix/Docufix_Logo_lnsgsr.svg" alt="DOCUFIX" id="image"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto px-5">
                <li class="nav-item">
                  <a class="nav-link text-center" href="about_us.html">About</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tools
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-justify" href="fileUpload.html">Compare files</a>
                    <a class="dropdown-item text-justify" href="grammarChecker.php">Grammar Check</a>
                    <a class="dropdown-item text-justify" href="fileDuplicate.php">Duplicates Check</a>
                    <a class="dropdown-item text-justify" href="plagiarismChecker.php">Plagiarism Check</a>
                    <a class="dropdown-item text-justify" href="paraphrase.php">Paraphrasing tool</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Support
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-justify" href="faq.html">FAQ</a>
                    <a class="dropdown-item text-justify" href="contact.html">Contact Us</a>
                    <a class="dropdown-item text-justify" href="why-use-docufix.html">Why use Docufix</a>
                    <a class="dropdown-item text-justify" href="privacy.html">Privacy Policy</a>
                    <a class="dropdown-item text-justify" href="termsOfService.html">Terms of Service</a>
                  </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="teampage.html">Our Team</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-center" href="logout.php">Log Out</a>
                </li>
                
              </ul>
            </div>
          </nav>
    </header>
    
    
    <!--END OF MODAL-->




    <div class="container mt-5 pt-5" style="min-height: 100vh" >
          
      <div class="row m-1">
          <div class="col-md-7  ml-0 ml-md-4"  style="border: 1px solid rgb(245, 238, 238); background-color:rgba(59, 31, 158, 0.05)">
              <div class="row pt-2">
                  <div class=" mx-auto bg-light my-auto " style="border-radius: 50%;height: 120px; min-width: 120px;color: white;"> </div>
                  <div class="col-md-8 p-2 text">
                      <h4 class="font-weight-bold">Correct grammatical Errors:</h4>
                      <p> Docufix Grammar and Spelling feature is a Technology to bring efficency in the construction of spoken and written grammar. Built solidly with the latest technical tools. </p>
                    </div>
              </div>
          </div>
          <div class="col-md-4 ml-0 ml-md-3 mt-4 mt-md-0 p-2 bounce animated" style="border: 1px solid rgba(222, 230, 234, 0.6); background: #F6F8F9">
                  <h5 class="mb-5" style="color: rgba(12, 10, 90, 0.8)">Other Tools:</h5>
                  <a class="bt btn-sm rounded-pill font-weight-bold" style="color: rgba(12, 10, 90, 0.8);background-color: rgba(59, 31, 158, 0.05)" href = "fileUpload.html">Compare files</a>
                  <a class="bt btn-sm rounded-pill font-weight-bold mt-md-0 mt-2" style="color:rgba(12, 10, 90, 0.8);background-color: rgba(59, 31, 158, 0.05)" href = "fileDuplicate.html">Check Duplicates</a>
                </div>
      </div>
    
    <div>


        <form name="checkform" action="http://community.languagetool.org" method="post" style = "padding: 20px; background-color:rgba(59, 31, 158, 0.1);"  id = "form">
            <h1>GRAMMAR AND SPELLING CHECKER</h1>
            
            
            <p id="checktextpara">
              
              


              <div class="card-body" style="border-color: teal;">
                <textarea placeholder="Write your text here" class="" id="checktext" cols="" rows="10" style="border: 10; border-color: yellowgreen; background-color: black;" name="text"  
                rows="6"></textarea>
              </div>
            </p>
           
            <div id = "keyslang">
                <select name="lang" id="lang" style="padding: 15px" class="btn btn-info btn-lg">
                    <option value="en-US">English</option>
                    <option value="de-DE">German</option>
                    <option value="it">Italian</option>
                </select>
               <input type="submit" name="_action_checkText"
                    value="Check Text" onClick="doit();return false;" style="padding: 15px" class="btn btn-info btn-lg"> 
                <input type="button" class="btn btn-info btn-lg" id ="b3" data-toggle="modal" data-target="#myModal" style = "padding: 15px" value = "Dictionary">
                   <input type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2" style="padding: 15px" value ="Help">

                    <!--<h1 class="text-center text-light p-3 mt-5 ">
                        <span class="text-light mr-md-5 pr-md-5 active1"><a href="#" id="fileBtn" class="pb-1 active1" style="text-decoration: none; margin-right: 10px;">
                        </a></span><span class="text-light ml-md-5 pl-md-5"><a href="#" id="textBtn" style="text-decoration: none; margin-left: 10px" class="">
                          </a></span>-->
                      </h1>
                    <div id="feedbackErrorMessage" style="color: red;"></div>
            </div>
           
          </form>
<br>
<br>

          <!-- Modal 1-->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content 1-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
           <iframe  height="315" src="https://www.dictionary.com/browse/google" frameborder="0" allowullscreen style="max-width: 500px;"></iframe>
                
              </iframe>

              
              



      </div>
      

      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    
  </div>
</div>

<!--modal2-->
    <!-- Modal 1-->
    <div class="modal fade" id="myModal2" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content 1-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            
          </div>
          <div class="modal-body">
               The Grammar and Spelling App is A Ducufix feature that enables the users to check grammatical errors while trying to get an accurate result.
      
               <h2 style="color: red">IMPORTANT</h2>

               <input type="submit" name="_action_checkText"
                class="btn btn-info btn-lg" value = "Check Text">
                <div>The button enables users to check for errors in the text field when clicked. After clicking on this button, grammatical, puntuations and spelling errors are highlighted, and that allows the user to right-click on the highlighted texts. When that is done, a quick corrections comes as a dropdown which enables the user to select the appropriate. </div>
                <div>After the first click, the grammar might not be totally correct, which means you can keep on checking till you can not mor see highlighted texts.</div>
                  <br/>
                  
                  <input type="submit" name="_action_checkText"
                  class="btn btn-info btn-lg" value = "Dictionary">
                  <div>The Dictionary button enables you sort out new words from a live dictionary. with this, you can be sure of adding new words, check for synonyms and antonyms to structure your grammar.
    </div>
                    <br>
                    <input type="submit" name="_action_checkText"
                    class="btn btn-info btn-lg" value = "English"> 
<div>The above key is a dropdown of language tools that enables those who understand some other languages rather than English Language to out grammatical and spelling errors.</div>
    <br>

    <input type="submit" name="_action_checkText"
                    class="btn btn-info btn-lg" value = "Help">
                    <div>The help button makes it easy for a user to understand how to make use of this tool with ease.</div>
          </div>
          
    
          
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>

    <footer id="footer">
              <div class="container mt-3 mb-3">
                <div class="row">
                  <div class="col-sm-12 text-center">
                      <ul class="list-inline text-center">
                          <li class="list-inline-item">
                            <a class="text-center" href="#">&copy; 2019 Copyright Docufix</a>
                          </li>
                          <li class="list-inline-item">
                            <a class="text-center" href="faq.html">FAQ</a>
                          </li>
                          <li class="list-inline-item">
                            <a class="text-center" href="contact.html">Contact us</a>
                          </li>
                          <li class="list-inline-item">
                              <a class="text-center" href="privacy.html">Privacy Policy</a>
                          </li>
                          <li class="list-inline-item">
                            <a class="text-center" href="termsOfService.html">Terms of Service</a>
                          </li>
                        </ul>
                  </div>
                </div>
              </div>
              <p class="text-center">This app was built by <a href="https://hng.tech/" target="_blank">HNGi6</a> interns</p>
      </footer>
         
<!--footer-->
     <!---- <footer id="footer">
        <div class="container mt-3 mb-3">
          <div class="row">
            <div class="col-sm-12 text-center">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                      <a class="text-center" href="#">&copy; 2019 Copyright <a href="https://hng.tech/">HNG</a>  Internship</a>
                    </li>
                    <li class="list-inline-item">
                      <a class="text-center" href="faq.html">FAQ</a>
                    </li>
                    <li class="list-inline-item">
                      <a class="text-center" href="feedback.html">Feedback</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-center" href="privacy.html">Privacy Policy</a>
                    </li>
                    <li class="list-inline-item">
                      <a class="text-center" href="termsOfService.html">Terms of Service</a>
                    </li>
                  </ul>
            </div>
          </div>
        </div>
        <p class="text-center">This app was built by <a href="https://hng.tech/">HNGi6</a> interns</p>
      </footer>-->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
      <script>
        var SCROLLING_NAVBAR_OFFSET_TOP = 50;
        $(window).on("scroll", function() {
        var $navbar = $(".navbar");
        
        if ($navbar.length) {
        if ($navbar.offset().top > SCROLLING_NAVBAR_OFFSET_TOP) {
        $(".scrolling-navbar").addClass("top-nav-collapse");
        } else {
        $(".scrolling-navbar").removeClass("top-nav-collapse");
        }
        }
        });
      </script>
            <script>
                var form = document.getElementById('b3');
                form.addEventListener('click', function(e){
                  console.log('form submitted')
                  e.preventDefault();
                })
                document.getElementsById('b33').addEventListener("click", function(e){
                  e.preventDefault()
                })
                
                </script> 
             
             <!---Spelling Check App-->
             <script type="text/javascript"
                 src="https://www.languagetool.org/js/jquery-1.7.0.min.js"></script>
             <script type="text/javascript"
                 src="https://www.languagetool.org/online-check/tiny_mce/tiny_mce.js"></script>
             <script type="text/javascript"
                 src="https://www.languagetool.org/online-check/tiny_mce/plugins/atd-tinymce/editor_plugin2.js"></script>
              
             
             
             <script language="javascript" type="text/javascript">  
               tinyMCE.init({
                  mode : "textareas",
                  plugins : "AtD,paste",
                  paste_text_sticky : true,
                  setup : function(ed) {
                      ed.onInit.add(function(ed) {
                          ed.pasteAsPlainText = true;
                      });
                  },  
                  /* translations: */
                  languagetool_i18n_no_errors : {
                      // "No errors were found.":
                      "de-DE": "Keine Fehler gefunden."
                  },
                  languagetool_i18n_explain : {
                      // "Explain..." - shown if there is an URL with a detailed description:
                      "de-DE": "Mehr Informationen..."
                  },
                  languagetool_i18n_ignore_once : {
                      // "Ignore this error":
                      "de-DE": "Hier ignorieren"
                  },
                  languagetool_i18n_ignore_all : {
                      // "Ignore this kind of error":
                      "de-DE": "Fehler dieses Typs ignorieren"
                  },
                  languagetool_i18n_rule_implementation : {
                      // "Rule implementation":
                      "de-DE": "Implementierung der Regel"
                  },
              
                  languagetool_i18n_current_lang :
                      function() { return document.checkform.lang.value; },
                  /* The URL of your LanguageTool server.
                     If you use your own server here and it's not running on the same domain 
                     as the text form, make sure the server gets started with '--allow-origin ...' 
                     and use 'https://your-server/v2/check' as URL: */
                  languagetool_rpc_url                 : "https://languagetool.org/api/v2/check",
                  /* edit this file to customize how LanguageTool shows errors: */
                  languagetool_css_url :
                      "https://www.languagetool.org/online-check/" +
                      "tiny_mce/plugins/atd-tinymce/css/content.css",
                  /* this stuff is a matter of preference: */
                  theme                              : "advanced",
                  theme_advanced_buttons1            : "",
                  theme_advanced_buttons2            : "",
                  theme_advanced_buttons3            : "",
                  theme_advanced_toolbar_location    : "none",
                  theme_advanced_toolbar_align       : "left",
                  theme_advanced_statusbar_location  : "bottom",
                  theme_advanced_path                : false,
                  theme_advanced_resizing            : true,
                  theme_advanced_resizing_use_cookie : false,
                  gecko_spellcheck                   : false
               });
              
               function doit() {
                  var langCode = document.checkform.lang.value;
                  tinyMCE.activeEditor.execCommand("mceWritingImprovementTool", langCode);
               }
             </script>
             
                
  </body>
</html>
        
