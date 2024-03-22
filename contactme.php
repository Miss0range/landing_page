<!-- contact me form -->
<section id="contact">
    <div class="container-lg">
        <div class="text-center">
            <h4 class="display-6">Contact Me</h4>
            <p class="lead">Looking forward to hearing from you! &#128522</p>
        </div>
        <div class="row justify-content-center my-5">
            <div class="col-lg-6">
                <form action="sendemail.php" method = "POST">
                    <!-- name input -->
                    <label for="name" class="form-label lead mx-1 mb-2">Your Name</label>
                    <div class="mb-4 input-group">
                        <span class="input-group-text">
                            <i class="bi bi-person-circle"></i>
                        </span>
                        <input type="text" class="form-control" id="name" name = "firstName" placeholder="FirstName" required />
                        <input type="text" class="form-control" id="name" name = "lastName" placeholder="LastName" required />
                    </div>
                    <!-- email input -->
                    <label for="email" class="form-label lead mx-1 mb-2">Your Email Address</label>
                    <div class="mb-4 input-group">
                        <span class="input-group-text">
                            <i class="bi bi-envelope"></i>
                        </span>
                        <input type="email" class="form-control" id="email" name = "email" placeholder="hello@example.com" required />
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
                        <input type="text" class="form-control" id="message-subject" name = "subject" placeholder="This message is about..." required />
                    </div>
                    <!-- message body -->
                    <div class="form-floating mb-4 mt-5">
                        <textarea class="form-control" name="body" id="message-body" style="height:200px"></textarea>
                        <label for="message-body" class="form-label">Your message...</label>
                    </div>
                    <!-- submit btn -->
                    <div class="text-center">
                        <button class="btn btn-secondary" type="submit">Send</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</section>