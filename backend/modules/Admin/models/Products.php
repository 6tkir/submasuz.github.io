<?php

namespace backend\modules\admin\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $content
 * @property integer $rating
 * @property integer $parent
 * @property string $price
 * @property string $img_src
 * @property string $color
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'content', 'rating', 'parent', 'price', 'img_src', 'color'], 'required'],
            [['content'], 'string'],
            [['rating', 'parent'], 'integer'],
            [['name', 'description', 'price', 'img_src', 'color'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'content' => 'Content',
            'rating' => 'Rating',
            'parent' => 'Parent',
            'price' => 'Price',
            'img_src' => 'Img Src',
            'color' => 'Color',
        ];
    }
}
