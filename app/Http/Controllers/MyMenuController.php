<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\MenuItem;


class MyMenuController extends Controller
{
    public $menu;
    public function __construct(){
        $items=MenuItem::where('menu_id',2)->orderBy('parent_id')->get();

        foreach ($items as $val)
        {
            $data['id']=$val->id;
            if($val->parent_id==null)$data['parent_id']=0; else $data['parent_id']=$val->parent_id;
            $data['title']=$val->title;
            $data['url']=$val->url;
            $this->menu[$data['parent_id']][$data['id']]=$data;
        }
//dd($this->menu);
//        echo "<pre>";
//        print_r($this->menu);
//        echo "<pre>";
    }

  public function buildTree($menu, $parentId){
      if(is_array($menu) and isset($menu[$parentId])){
          $tree = '<ul class="nav navbar-nav">';

          foreach($menu[$parentId] as $val){
              if(isset($menu[$val['id']])) $tree .= '<li class="nav-item dropdown">'; else $tree .= '<li class="nav-item">';
                $tree.='<a href="'.$val['url'].'"  class="nav-link">'.$val['title'].'</a>';
              if(isset($menu[$val['id']])) $tree.='<span class="caret"></span>';
                 if(isset($menu[$val['id']])) {$tree.=$this->buildTree($menu, $val['id']);}
              $tree .= '</li>';
          }
          $tree .= '</ul>';

//          if($onlyParent==false){
//              foreach($menu[$parentId] as $val){
//                  $tree .= '<li class="nav-item"><a href=""  class="nav-link">'.$val['title'].' #'.$val['id'].'</a>';
//                  $tree .=  $this->buildTree($this->menu,$val['id']);
//                  $tree .= '</li>';
//              }
//          }elseif(is_numeric($onlyParent)){
//              $val = $menu[$parentId][$onlyParent];
//              $tree .= '<li class="nav-item dropdown"><a >'.$val['name'].' #'.$val['id'].'</a><span class="caret"></span>';
//              $tree .=  $this->buildTree($this->menu,$val['id']);
//              $tree .= '</li>';
//          }
//          $tree .= '</ul>';
      }
      else return null;
      return $tree;
 }

    public function showTree(){
        $tree=$this->buildTree($this->menu,0);
        //dd($tree);
       return view('welcome',['tree'=>$tree]);
    }


}
