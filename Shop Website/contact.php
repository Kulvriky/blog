<!doctype html>
<html lang="en">
  <style>
    * {
        margin: 0;
        padding: 0;
    }
</style>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>I code professional sites!</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">i code for you</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pricings.php">Pricings</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container py-4">

        <!-- Bootstrap 5 starter form -->
        <form action="https://formsubmit.co/nils.zimmer@protonmail.com" method="POST">
      
          <!-- Name input -->
          <div class="mb-3">
            <label class="form-label" for="name">Name</label>
            <input  name="name" type="name" class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
          </div>
      
          <!-- Email address input -->
          <div class="mb-3">
            <label class="form-label" for="emailAddress">Email Address</label>
            <input name="email" class="form-control" id="email" type="email" placeholder="Email Address" data-sb-validations="required, email" />
          </div>
      
          <!-- Message input -->
          <div class="mb-3">
            <label class="form-label" for="message">Message</label>
            <textarea name="message" class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
          </div>
      
          <!-- Form submit button -->
          <div class="d-grid">
            <button class="btn btn-primary" type="submit">Submit</button>
          </div>
      
        </form>
      
      </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    
  </body>
</html>