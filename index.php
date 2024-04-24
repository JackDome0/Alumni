<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>font page</title>
    <link rel="stylesheet" href="style.css">
	<style>
	#selection{
	    width:200px;
        height:30px;	   
	  }
	  .opt{
	    color:grey;
		font-size:16px;
	   }
	</style>
</head>
<body>
    <section id="header">
        <div class="container">
            <img src="project_image/background4.jpg" class="logo">
            <div class="header-text">
                <h1> WELL COME IN <br>VUCS ALUMNI <br>ASSOCIATION</h1>
                <span class="square"></span>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                     Quae architecto ipsa, natus ducimus
                     beatae quisquam similique illo, perspiciatis quibusdam,
                     unde animi del</p>

            </div>

        </div>

    </section>

    <nav id="sideNav">
        <ul>
            <li><a href=" ">HOME</a></li>
            <li><a href=" ">About</a></li>
            <li><a href=" ">JOBS</a></li>
            <li><a href=" ">CONTACT</a></li>
            <li><a href=" ">GALLERY</a></li>
            <li><a href=" ">EVENTS</a></li>
            <li><a href=" ">PROFILE</a></li>
            <li><a href=" ">LOGIN</a></li>

        </ul>

    </nav>
    <img src="project_image/menubtn.png" id="menubtn">



    <!--about-->
    <section id="About">
        <div class="About-left-col"> 
            <img src="project_image/about.png">
        </div>
        <div class="About-right-col"> 
            <div class="About-text">
                <h1> About us </h1>
                <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                    Commodi, voluptas nemo corporis,
                    vitae quisquam dolorem eius a,
                     quis quae blanditiis hic harum impedit in repellat
                      magnam et odio totam dignissimos!</p>

            </div>
        </div>
    </section>


        <!--job-->
        <section id="JOBS">
            <div class="JOBS-left-col"> 
                <img src="project_image/p.png">
            </div>
            <div class="JOBS-right-col"> 
                <div class="JOBS-post">

                <h2>Post a Job</h2>
                    <form id="form1">
                        <input  type="text" name="company" placeholder="enter company name" required>
                        <input  type="text" name="job_title" placeholder="enter  job title" required>
                        <input  type="text" name=" job_location" placeholder="enter job location" required>
                        <input  type="text" name="job_description" placeholder="enter job description" required>
                        <input  type="text" name="job_requirment" placeholder="enter job requirment" required>
                        <input  type="url" name="job_link" placeholder="enter job apply link" required>


                            <div class="btn-box">
                                 <button type="button">Submit</button>
                            </div>

                    </form>
                </div>
    
            
            </div>
        </section>
        <!--contact us-->
        <section id="CONTACT">

            <div class="CONTACT-left-col"> </div>
            
            <div class="CONTACT-right-col">
                <div class="CONTACT-text">
                    <h1>CONTUCT US</h1>
                    <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Commodi, voluptas nemo corporis,
                        vitae quisquam dolorem eius a,
                         quis quae blanditiis hic harum impedit in repellat
                          magnam et odio totam dignissimos!</p>
    
                </div>
                
            </div>
        </section>

        <!--login-->
        <section id="login">
           <div class="container login-row">
            <div class="login-left-col">
                <h1> login to join with us</h1>
				<br>
                <form action="login.php" id="form2" method="POST">
                    <label for="Selection">Choose an option : </label>
					<select name="selection" id="selection">
					<option class="opt" value="Choose one" >Choose one </option>
					  <option class="opt" value="Student">Student</option>
					  <option class="opt" value="Alumni">Alumni </option>
					  </select>
					  
                    <input type="email" name="email" placeholder="Enter Email Here" required>
                   <input type="password" name="password" placeholder="Enter Password Here" required>
            
                <div class="btn-box">
                     <button class="common-button">login</button>
                </div>
                <a href="std-regeistation.php">register here as student</a> <br>
                <a href="alu-regeistation.php">register here as alumni</a>
    
                </form>
            </div>
            <div class="login-right-col">
            <img src="project_image/llogin2.png">
            </div>

        </div>
    
        </section>




    







  <!--click event of menubtn-->
  <script>
     var menubtn =document.getElementById("menubtn");
     var sideNav =document.getElementById("sideNav");

     sideNav.style.right = "-250px";
     menubtn.onclick = function()
      {
          if( sideNav.style.right =="-250px")
          {
            sideNav.style.right ="0";
           }
            else
            {
                sideNav.style.right = "-250px";

            }
       }
    </script>

</body>
</html>