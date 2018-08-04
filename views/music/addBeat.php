<div class="container-login100" style="background-image: url('images/bg-01.jpg');">


    <ul class="wrap-ul">
      <li class="li"><a class="li-a-active" href="?controller=accounts&action=home">Home</a></li>
      <li class="li-r"><a class="li-a" href="?controller=accounts&action=logout">Log out</a></li>
      <li class="li-r"><a class="li-a" href="?controller=accounts&action=modify">Modify</a></li>
      <?php
        if($_SESSION['account']->getID()==1) echo '<li class="li-r"><a class="li-a" href="?controller=accounts&action=manage">Manage</a></li>'?>
      <?php
        if($_SESSION['account']->getID()==1) echo '<li class="li"><a class="li-a" href="?controller=music&action=show">Music</a></li>'?>
    </ul>

    <div class="wrap-index p-t-60 p-b-50">
      <form class="login100-form validate-form" id="signupform" method="post">
        <a href="?controller=accounts&action=home" class="login100-form-bigtitle p-t-40 p-b-60">
          Musicaction
        </a>

        <span class="login100-form-title p-b-30">
          Add Beat
        </span>


        <table class="table">
          <tr class="tr">
            <th class="th">Select</th>
            <th class="th">Music ID</th>
            <th class="th">Music Name</th>
            <th class="th">Music Mode</th>
          </tr>
        <?php foreach (Music::show() as $row) {
          echo '
          <tr class="tr">
              <td class="td"><input type="checkbox" name="del[]" value="'.$row->getMID().'"></td>
              <td class="td">'.$row->getMID().'</td>
              <td class="td">'.$row->getMname().'</td>
              <td class="td">'.$row->getMode().'</td>
          </tr>';
        }
        ?>
        </table>

        <div class="container-login100-form-btn p-t-40 p-b-25">
          <input class="login100-form-btn" type="submit" name="addBeat" value="add beat" formaction="?controller=music&action=Beat"
          />
        </div>
      </form>
    </div>
</div>
