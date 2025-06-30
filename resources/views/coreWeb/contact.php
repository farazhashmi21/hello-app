<?php
require_once 'header.php'; // Include your header file
?> 
<!-- Page Content-->
        <section class="pt-4">
            <div class="container px-lg-5">
                    <div class="col mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5">
                                <div class="col">
                                    <h1 class="display-5 fw-bold">Contact</h1>
                                    <p class="fs-4">Feel free to contact us by using this Contact Form.</p>
                                </div>
                                <form name="contactForm" id="contactForm" method="post" action="contact.php">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputName" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputMessage" class="form-label">Comments</label>
                                    <textarea row="20" col="20" class="form-control" id="exampleInputMessage" aria-describedby="commentHelp"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
require_once 'footer.php'; // Include your footer file
?>