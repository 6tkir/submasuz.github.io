<?php

/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 31.08.2017
 * Time: 17:47
 */
namespace app\components;
use frontend\models\Categories;
use frontend\models\Products;
use yii\base\Widget;

class MyWidget extends Widget
{
    public $tpl;
    public $data;
    public $tree;
    public $menuHtml;
    public $count=0;

    public function init()
    {
        parent::init();
        if($this->tpl === null){
            $this->tpl = 'sidebar';
        }
        $this->tpl.= '.php';
    }
    public function run()
    {
        $this->data = Categories::find()->indexBy('id')->asArray()->all();
        $this->tree = $this->getTree();
        $this->menuHtml = $this->getMenuHtml($this->tree);
       return $this->menuHtml;
    }
    protected function getTree(){
        $tree = [];
        foreach ($this->data as $id=>&$node){
            if(!$node['parent'])
                $tree[$id] = &$node;
        else
            $this->data[$node['parent']]['childs'][$node['id']] = &$node;
    }
    return $tree;
        }
    protected  function getMenuHtml($tree){
        $str = '';
        foreach ($tree as $category) {
            $str .= $this->catToTemplate($category);
        }
        return $str;

    }
    protected function catToTemplate($category){
        ob_start();
        include __DIR__ . '/menu_tpl/' . $this->tpl;
        return ob_get_clean();
    }
}
?>
