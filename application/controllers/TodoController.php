<?php
namespace application\controllers;

class TodoController extends Controller {
public function index() {
  switch(getMethod()){
    case _GET:
      return 0;
    case _POST:
      return 0;
    case _DELETE:
      return 0;
  }
}

}