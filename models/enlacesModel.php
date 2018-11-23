<?php

class EnlacesModels{

  static public function enlacesModel($enlacesModel){

    switch ($enlacesModel) {
      case 'inicio':
          $module = "backend/views/modules/".$enlacesModel.".php";
        break;

      case 'about':
          $module = "views/modules/".$enlacesModel.".php";
        break;

      case 'portafolio':
          $module = "views/modules/".$enlacesModel.".php";
        break;

      case 'asistencia':
            $module = "views/modules/".$enlacesModel.".php";
        break;

      default:
          $module = "views/modules/top.php";
        break;
    }

    return $module;

  }

}
