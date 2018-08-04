<?php
  function call($controller, $action) {
    // require the file that matches the controller name
    require_once('controllers/' . $controller . '_controller.php');

    // create a new instance of the needed controller
    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;
      case 'accounts':
        require_once('models/Account.php');
        $controller = new AccountsController();
      break;
      case 'music':
        require_once('models/Music.php');
        $controller = new MusicController();
      break;
      case 'game':
        require_once('models/Game.php');
        $controller = new GameController();
      break;
    }

    // call the action
    $controller->{ $action }();
  }

  // just a list of the controllers we have and their actions
  // we consider those "allowed" values
  $controllers = array('pages' => ['home', 'error'],
                      'accounts' => ['signin', 'signup', 'home', 'verify', 'logout', 'modify','manage'],
                      'music' => ['show', 'add','delete','addBeat', 'Beat',  'transfer_beat'],
                      'game' => ['update','play','settings','board','showInstruction', 'transfer', 'insert'] );

  // check that the requested controller and action are both allowed
  // if someone tries to access something else he will be redirected to the error action of the pages controller
  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>
