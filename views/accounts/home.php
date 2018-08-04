  <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
      <span class="index-form-bigtitle p-t-70 p-b-20">
          Musicaction
      </span>
    <ul class="wrap-ul">
      <li class="li"><a class="li-a-active" href="?controller=accounts&action=home">Home</a></li>
      <li class="li-r"><a class="li-a" href="?controller=accounts&action=logout">Log out</a></li>
      <li class="li-r"><a class="li-a" href="?controller=accounts&action=modify">Modify</a></li>
      <?php
        if($_SESSION['account']->getID()==1) echo '<li class="li-r"><a class="li-a" href="?controller=accounts&action=manage">Manage</a></li>'?>
      <?php
        if($_SESSION['account']->getID()==1) echo '<li class="li"><a class="li-a" href="?controller=music&action=show">Music</a></li>'?>
    </ul>

    <div class="container-login100-form-btn p-b-40">
       <a href="?controller=game&action=settings"  class="login100-form-btn">
          PLAY ^ ^
       </a>
    </div>
    <div class="wrap-index p-l-55 p-r-55 p-t-30 p-b-30">
      <form class="login100-form">
          <div class="output1">
          Username:
          </div>
          <div class="output2">
          <?php
            $row = $_SESSION['account'];
            echo $row->getUsername();
          ?>
          </div>
          <div class="output1">
          Email:
          </div>
          <div class="output2">
          <?php
            echo $row->getEmail();
          ?>
          </div>
          <div class="output1">
          Create Date:
          </div>
          <div class="output2">
          <?php
            echo $row->getCreateDate();
          ?>
          </div>
          <span class="focus-input100"></span>

      </form>
    </div>
  </div>
<script>
    var title1 = document.getElementsByTagName("title")[0];
    title1.innerHTML = "Musicaction - Account Home";
</script>
