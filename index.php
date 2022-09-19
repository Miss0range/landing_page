<!DOCTYPE html>
<html lang="en">
    <?php include('header.php');?>

    <!-- About me. Short Introduction with showcase -->
    <section id="about">
        <div class="container-lg justify-content-center align-items-center my-5 py-5">
            <div class="row">
                <div class="col-lg-6 col-xl-4">
                    <div id="about-me-text" class ="justify-content-center align-items-center" >
                        <h1 class="display-5">Hello there,...</h1>
                        <p class="lead">My name is Jiachen (Jeniffer) Zhang. I am a front end developer with working experience of HTML, CSS, JS and WordPress. Check out my projects <a href="" class="text-success fw-bold">here</a></p>

                        <p class="lead">I h</p>
                    </div>
                </div>
                <div id="showcaseimg" class="col-lg-6 col-xl-8 carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active"><img src="assets/dark2500.png" alt="" class="img-fluid "></div>
                        <div class="carousel-item"><img src="assets/light2500.png" alt="" class="img-fluid"></div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#showcaseimg" data-bs-slide = "prev">
                            <span class="carousel-control-prev-icon text-primary" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#showcaseimg" data-bs-slide = "next">
                            <span class="carousel-control-next-icon fw-bold" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    <!-- Project show case with card-->
    <section id="projects" class="bg-light">
        <div class="container-lg my-5 py-5">
            <div class="row justify-content-center position-relative my-5 py-5">
                <!-- first showcase card -->
                <div class="col-md-4">
                    <div id="showcasecard" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active"><img src="assets/dark2500.png" alt="" class="img-fluid "></div>
                            <div class="carousel-item"><img src="assets/light2500.png" alt="" class="img-fluid"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h5 class="mt-1">
                        Task Planner
                    </h5>
                    <p class=" lead">
                        A due date oriented personal digital planner on android 12. Built with Flutter frame work powered by Dart. This digital planner helps users to keep track of remaning time and due date of their tasks, manage daily tasks with a single click and plan ahead with our calendar view. All storage are local to protect your privacy. 
                    </p>
                    <a href="index.html" class="btn btn-primary stretched-link">Read More</a>
                </div>
            </div>
            <!-- second showcase card -->
            
            <!-- third showcase card -->
        </div>
    </section>


    <!-- contact me form -->
    <section id="contact">
        <div class="container-lg">
            <div class="text-center">
                <h4 class="display-6">Contact Me</h4>
                <p class="lead">Looking forward to hearing from you! &#128522</p>
            </div>
            <div class="row justify-content-center my-5">
                <div class="col-lg-6">
                    <form action="">
                        <!-- name input -->
                        <label for="name" class="form-label lead mx-1 mb-2">Your Name</label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-person-circle"></i>
                            </span>
                            <input type="text" class="form-control" id="name" placeholder="FirstName" required />
                            <input type="text" class="form-control" id="name" placeholder="LastName" required />
                        </div>
                        <!-- email input -->
                        <label for="email" class="form-label lead mx-1 mb-2">Your Email Address</label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input type="email" class="form-control" id="email" placeholder="hello@example.com" required />
                            <span class="tt input-group-text" title="Please enter an eamil address we can reply to.">
                                <i class="bi bi-question-circle"></i>
                            </span>
                        </div>
                        <!-- message subject -->
                        <label for="message-subject" class="form-label lead mx-1 mb-2">Message Subject</label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-chat-left-text"></i>
                            </span>
                            <input type="text" class="form-control" id="message-subject" placeholder="This message is about...">
                        </div>
                        <!-- message body -->
                        <div class="form-floating mb-4 mt-5">
                            <textarea class="form-control" name="" id="message-body" style="height:200px"></textarea>
                            <label for="message-body" class="form-label">Your message...</label>
                        </div>
                        <!-- submit btn -->
                        <div class="text-center">
                            <button class="btn btn-secondary" type="submit">Submit</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>

    <?php include('footer.php');?>
    
</body>
</html>