<?php

namespace me\api\models;

use Yii;
use yii\helpers\Url;
use yii\web\Link;
use yii\web\Linkable;

/**
 * This is the model class for table "{{%api_guide}}".
 *
 * @property integer $id
 * @property string $imgurl
 * @property integer $status
 * @property integer $flag
 */
class ApiGuide extends \yii\db\ActiveRecord implements Linkable
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%api_guide}}';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('test');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'flag'], 'integer'],
            [['imgurl'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'imgurl' => 'Imgurl',
            'status' => 'Status',
            'flag' => 'Flag',
        ];
    }

    public function fields(){
       $fields = parent::fields();
        unset($fields['imgurl']);
         return $fields;
    }

    public function getLinks()
    {
        // TODO: Implement getLinks() method.
        return [
            Link::REL_SELF => Url::to(['api-guide/index', 'id' => $this->id], true),
        ];
    }

    public function actionView($id){
        return ApiGuide::find($id);
    }
}
