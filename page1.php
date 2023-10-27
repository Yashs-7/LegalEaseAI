<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LegalEaseAI</title>
	<link type="text/css" rel="stylesheet" href="styles.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</head>
<body>
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="index.html">LegalEaseAI</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
    </nav>
	<!-- Header-->
	<header class="bg-primary bg-gradient text-white btm-pad" id="header">
            <div class="container px-4 text-center" >
                <h1 class="fw-bolder btm-pad pt-5">Edit this templates with the help of our chatbot</h1>
            </div>
    </header>
    <div class="container-big">
    <div id="chat-window">
      <div class="main-title">CHAT BOT USING CHAT-GPT</div>
      <div id="chat-messages"></div>
      <form id="chat-form">
        <input
          type="text"
          id="chat-input"
          autocomplete="off"
          placeholder="Type your message here"
          required
        />
        <button type="submit">Send</button>
      </form>
    </div>
        <!-- Services section-->
        <section class="bg-light" id="services">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Sales Contract</h2>
                        <?php
                            include('db.php'); // Include the database connection configuration

                            // Define the specific 'id' you want to retrieve
                            $targetId = 1; // Change this to the desired 'id'

                            // Query the database to retrieve data from the 'content' table for the specified 'id'
                            $res = mysqli_query($con, "select * from content where id = $targetId");

                            if ($row = mysqli_fetch_assoc($res)) {
                                // If a row is found, display the content
                                ?>
                                <div  contenteditable="true" id="<?php echo $row['id'] ?>">
                                    <?php echo $row['content'] ?>
                                </div>
                                <input type="button" onclick="updateData('<?php echo $row['id'] ?>')" value="Update">
                                <div id="msg<?php echo $row['id'] ?>"></div>
                                <br/><br/>
                                <?php
                            } else {
                                // Handle the case where no row with the specified 'id' is found
                                echo "No data found for the specified ID.";
                            }
                            ?>
                    </div>
                </div>
            </div>
        </section>
		</div>
        <!-- Contact section-->
        <section id="contact">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Contact us</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
	<script src="jquery-3.6.0.min.js"></script>
	<script src ="index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.3/axios.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>