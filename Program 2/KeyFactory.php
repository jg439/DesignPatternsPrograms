<?php

interface Factory {

  function description();
  function securityLevel();
}


class Key implements Factory {



    function description ()
    {
      return "Key ";
    }

    function securityLevel()
    {
      return "1";
    }




}



?>
