<?php

  /*
   * To change this license header, choose License Headers in Project Properties.
   * To change this template file, choose Tools | Templates
   * and open the template in the editor.
   */

  namespace Kinghip\FroalaEditor;

  class Froala {

    static function initCss() {
      return view('Froala::css');
    }

    static function initJs() {
      return view('Froala::js');
    }

    static function initEditor($name,$id,$content='',$is_required=false, $configs = []){
      $required="";
      if($is_required){
        $required="required";
      }
      $data['name']=$name;
      $data['id']=$id;
      $data['content']=$content;
      $data['required']=$required;
      $configs = array_merge(config('froala'));
      $data['configs'] = $configs;
      return view('Froala::editor',$data);
    }

  }
