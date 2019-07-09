<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Events</title>
        <link rel="stylesheet" type="text/css" href="css/Style_Events.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script>
            $(document).ready(function(){
                $("#chem").click(function(){
                    $("#senior").hide();
                    $.post(
                           './BranchRet.php',
                   {
                      id:"chem"
                   },
                   function(response)
                   {
                      var full=response;
                      var eve_ind=new Array(10);
                      var even_data=full.split("\n");
                      var i=0;
                      while(i<even_data.length)
                      {
                          //document.write("Started");
                          eve_ind[i]=even_data[i].split("%");
                          //document.getElementById("heading").innerHTML=eve_ind[0][1];
                          i=i+1;
                       }
                       var ele = $("<div class='card'><div class='thumbnail'><img class='left' src='css/images/events/chem.jpg'/></div><div class='right'> <h1 class='textofhead' id='heading'></h1><div class='separator'></div><p class='textofpara'> </p></div><h2 class='date'>12</h2><h5 class='month'>JANUARY</h5><div class='fab'>R</div> </div>")
                       window.console.log(ele);
                      $("#junior").append(ele);
                      $("#junior").show();
                   });
                });
            });  
            </script>
                </head>
    <body>
        <div class="head" id="heade">
            <h1 class="eve_font"> Events</h1>
        </div>
        <div class="branches" id="senior">
            <div class="cols">
                <div class="col" ontouchstart="this.classList.toggle('hover');">
                    <div class="container">
                        <div class="front" style="background-image: url(css/images/events/chem.jpg)">
                            <div class="inner">
                                <p>Chemical Engineering</p>
                  <span></span>
                            </div>
                        </div>
                        <div class="back">
                            <div class="inner">
                                <button class="join" id="chem" value="chem">Check events</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" ontouchstart="this.classList.toggle('hover');">
                    <div class="container">
                        <div class="front" style="background-image: url(css/images/events/civil.jpg)">
                            <div class="inner">
                                <p>Civil Engineering</p>
                  <span></span>
                            </div>
                        </div>
                        <div class="back">
                            <div class="inner">
                                <button class="join" id="civil" value="civil">Check events</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" ontouchstart="this.classList.toggle('hover');">
                    <div class="container">
                        <div class="front" style="background-image: url(css/images/events/cse.jpg)">
                            <div class="inner">
                                <p>Computer Science Engineering</p>
                  <span></span>
                            </div>
                        </div>
                        <div class="back">
                            <div class="inner">
                                <div class="join" id="cse" value="cse">Check events</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" ontouchstart="this.classList.toggle('hover');">
                    <div class="container">
                        <div class="front" style="background-image: url(css/images/events/ece.jpg)">
                            <div class="inner">
                                <p>Electronics and Communication Engineering</p>
                  <span></span>
                            </div>
                        </div>
                        <div class="back">
                            <div class="inner">
                                <div class="join" id="ece" value="ece">Check events</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" ontouchstart="this.classList.toggle('hover');">
                    <div class="container">
                        <div class="front" style="background-image:url(css/images/events/eee.jpg)">
                            <div class="inner">
                                <p>Electrical and Electronics Engineering</p>
                  <span></span>
                            </div>
                        </div>
                        <div class="back">
                            <div class="inner">
                                <div class="join" id="eee" value="eee">Check events</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" ontouchstart="this.classList.toggle('hover');">
                    <div class="container">
                        <div class="front" style="background-image: url(css/images/events/mechanical.jpg)">
                            <div class="inner">
                                <p>Mechanical Engineering</p>
                  <span></span>
                            </div>
                        </div>
                        <div class="back">
                            <div class="inner">
                                <div class="join" id="mech" value="mech">Check events</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" ontouchstart="this.classList.toggle('hover');">
                    <div class="container">
                        <div class="front" style="background-image: url(css/images/events/mme.png)">
                            <div class="inner">
                                <p>Metallurgical Engineering</p>
                  <span></span>
                            </div>
                        </div>
                        <div class="back">
                            <div class="inner">
                                <div class="join" id="mme" value="mme">Check events</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" ontouchstart="this.classList.toggle('hover');">
                    <div class="container">
                        <div class="front" style="background-image: url(https://unsplash.it/508/508/)">
                            <div class="inner">
                                <p>Chemistry</p>
                  <span></span>
                            </div>
                        </div>
                        <div class="back">
                            <div class="inner">
                                <div class="join" id="chemistry" value="chemistry">Check events</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" ontouchstart="this.classList.toggle('hover');">
                    <div class="container">
                        <div class="front" style="background-image: url(https://unsplash.it/505/505/)">
                            <div class="inner">
                                <p>English</p>
                  <span></span>
                            </div>
                        </div>
                        <div class="back">
                            <div class="inner">
                                <div class="join" id="eng" value="eng">Check events</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" ontouchstart="this.classList.toggle('hover');">
                    <div class="container">
                        <div class="front" style="background-image: url(https://unsplash.it/505/505/)">
                            <div class="inner">
                                <p>Management</p>
                  <span></span>
                            </div>
                        </div>
                        <div class="back">
                            <div class="inner">
                                <div class="join" id="man" value="man">Check events</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" ontouchstart="this.classList.toggle('hover');">
                    <div class="container">
                        <div class="front" style="background-image: url(https://unsplash.it/505/505/)">
                            <div class="inner">
                                <p>Mathematics</p>
                  <span></span>
                            </div>
                        </div>
                        <div class="back">
                            <div class="inner">
                                <div class="join" id="mat" value="mat">Check events</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" ontouchstart="this.classList.toggle('hover');">
                    <div class="container">
                        <div class="front" style="background-image: url(https://unsplash.it/505/505/)">
                            <div class="inner">
                                <p>Physics</p>
                  <span></span>
                            </div>
                        </div>
                        <div class="back">
                            <div class="inner">
                                <div class="join" id="phy" value="phy">Check events</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" ontouchstart="this.classList.toggle('hover');">
                    <div class="container">
                        <div class="front" style="background-image: url(https://unsplash.it/505/505/)">
                            <div class="inner">
                                <p>Telugu</p>
                  <span></span>
                            </div>
                        </div>
                        <div class="back">
                            <div class="inner">
                                <div class="join" id="tel" value="tel">Check events</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            $i=0;       
            echo "<div id='junior' style='display:none'>";
          /*  while($i<3){
            echo "<div class='card'>";
            echo "    <div class='thumbnail'><img class='left' src='css/images/events/chem.jpg'/></div>";
            echo "    <div class='right'>";
            echo "        <h1 class='textofhead' id='heading'></h1>";
            echo "        <div class='separator'></div>";
            echo "        <p class='textofpara'> </p>";
            echo "    </div>";
            echo "    <h2 class='date'>12</h2>";
            echo "    <h5 class='month'>JANUARY</h5>";
            echo "    <div class='fab'>R</div>";
            echo "</div>";
            $i++;
            }*/
        echo "</div>";
         
        ?>
        
       
    </body>
</html>
