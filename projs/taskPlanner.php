<html lang="en">
<style>
    .parallax{
        background-image : url('../assets/parallax1.jpg');
        
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
    }
    /* .demo-iframe{
        vertical-align: center;
    } */
</style>
<?php include('blogHeader.php');?>

<!-- display -->
<section id = "blog-display" >
    <div class="container-xl my-5 py-5">
        <div class="row" >
            <div class="col-lg-6 col-xl-8">
                <div class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../assets/light2500.png" class= "d-block w-100" alt="light">
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/light2500.png" class= "d-block w-100" alt="light">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <h1 class="display-2">
                    Task Planner
                </h1>
                <p class="leading" style="font-size: 24px">
                    A remaining time oriented task planner. It automatically update and track the remaining time of your tasks for you, help you to plan ahead and prevent procrastination. The calendar view provide a big picture of all the dues to come. Make the best use of your time and never miss a deadline again! 
                </p>
            </div>
        </div>
    </div>
</section>

<section id = "blog-demo" class= "bg-light" >
    <div class="container-lg my-5 py-5" id = "demo">
        <div class="row" >
            <div class="col-lg-8 col-md-8 col-xs-12 ">
                <h1 class="display-3 mb-3">
                    Motivation of Creating this App
                </h1>
                <p style = "font-size:24px; line-height: 1.5;">
                    When I was in grad school, I took a course that was extremely tough for me. I spend an average of 3-4 days working on a single homework and I realized I need to find a way to manage my time and track my deadlines for all my courses. <br></br>This idea come to me that I can build an app which automatically calculate how many hours I have left before something is due and sort my task according to time left. Then I build my desktop app "Deadline tracker" with Electron powered by Javascript HTML & CSS. But it was not ideal for me. (check out my post about this app). <br></br> A friend of mine suggest it's better if I can build a similar app on a mobile platform. Thus I decided to make a mobile version with Flutter.
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12 mx-12 justify-content-center align-items-center" style= "display:flex">
                <iframe src="https://appetize.io/embed/chhemo35roji7csbfsikxrspyu?device=pixel4&osVersion=12.0&scale=75" width="283.5px" height="600px" frameborder="0" scrolling="no" class= "demo-frame"></iframe>
            </div>
        </div>
    </div>
</section>

<section id= "structure" >
    <div class="container-lg">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <img src="../assets/architecture.png" class= "img-fluid"alt="Architecture">
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <h1 class="display-4">Building The Fundamential Structure</h1>
                <p>This app have 4 pages, a "to-do list" page, a "finished list" page, a "past due list" page, and a calendar including all the tasks above.</p>
            </div>
        </div>
    </div>
</section>



<?php include('../footer.php');?>    
</body>
</html>