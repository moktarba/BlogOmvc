<?php
  require('controller.php');

  if ( isset($_GET['action']) ) {
    if ( $_GET['action'] == 'list' ) {
      listAction();
    } else if (isset($_GET['action']) && $_GET['action']=='post' ){
      if (isset($_GET['id']) && $_GET['id'] >0) {
        postAction();
      }
    }
  }
  else {
    listAction();
  }
