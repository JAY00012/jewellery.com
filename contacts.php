<!DOCTYPE html>
<html>
<head>
    <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    </head>
    <body>

<?php include 'menu.php';   ?>
<p>&nbsp;</p>
      <p>&nbsp;</p></th>
<h2 class="text-center">CONTACT US</h2>
<div class="w-50 m-auto">
  <form action="userinfo.php" method="post">
    <div class="form-group">
      <label>Username</label>
      <input type="text"name="user" autocomplete="off" 
      class="form-control">
    </div>
    <div class="form-group">
      <label>Email Id</label>
      <input type="text"name="email"autocomplete="off" 
      class="form-control">
    </div>
    <div class="form-group">
      <label>Mobile</label>
      <input type="text"name="mobile" autocomplete="off"
      class="form-control">
    </div>
    <div class="form-group">
      <label>Comment</label>
      <textarea class="form-control" name="comment">
      </textarea>
    </div>
     <button type="submit"  class="btn btn-primary">Submit</button>
  </form>
</div>
</section>

 <footer id="footer">
      <h1><span>J</span>WELLERY</h1>
      <p>“Jewellery is like the perfect spice – it always complements what's already there.” “Jewellery is eternal, it never goes out of fashion, it will always be there.” “Into every girl's life, a little diamond should fall.” “I favour pearls on screen and in my private life.”</p>
      <div class="credit">
        <p>Designed By <a href="#">JW</a></p>
      </div>
      <div class="copyright">
        <p>&copy;Copyright JW Coding. All Rights Reserved</p>
        <p class="py-3 bg-dark text-white text-center">
  @jaywandhekarProduction</p>
      </div>
    </footer>
</body>
</html>