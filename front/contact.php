<?php
include "../includes/header.php";
?>
    <div class="card" data-state="#form">
        <div class="card-header">
            <div class="card-cover" style="background-image: url('blue.png')">
            </div>
            <img class="card-avatar"
                src="https://images.unsplash.com/photo-1522096823084-2d1aa8411c13?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                alt="avatar" />
            <h1 class="card-fullname">CONTACT</h1>
            <h2 class="card-jobtitle">Let's work together</h2>
        </div>
        <div class="card-main">
            <div class="card-section is-active" id="form">
                <div class="card-content">
                    <div class="form">
                    <form action="../back/contact_handler.php" method='post'>
                        <div class="input-container">
                            <input type="text" id="visitor_name" required='' name='visitor_name'>
                            <label for="visitor_name" class="label">Your name</label>
                            <div class="underline"></div>
                        </div>
                        <div class="input-container">
                            <input type="email" id="visitor_email" required="" name='visitor_email'>
                            <label for="visitor_email" class="label">Your e-mail address</label>
                            <div class="underline"></div>
                        </div>
                        <div class="input_textarea">
                            <textarea class="message" id="visitor_message" name="visitor_message" rows="3" cols="33"
                                placeholder="Hi Nicolas,..." name='visitor_message'></textarea>
                            <div class="label_message" id="label_message">Message</div>
                        </div>
                        <!-- <a href="confirmation.php"><button class="contact-me">SEND</button></a> -->
                        <div class="button">
                            <input type="submit" id="submit" value="SEND" class="contact-me"></input>
                        </div>
                        </form>
                </div>
                </div>

            </div>
            <div class="card-buttons">
                <button data-section="#about" class="is-active"><a href="../index.php"
                        class="home_button">HOME</a></button>
            </div>
        </div> <!-- closes card-main -->
    </div>
    <?php include "../includes/footer.php"; ?>