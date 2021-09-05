<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title
 * @property string|null $desc
 * @property string|null $content
 * @property string|null $image
 * @property int|null $elect
 */
class News extends \yii\db\ActiveRecord
{
    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            [['title'], 'required'],
            [['content'], 'string'],
            [['elect'], 'integer'],
            [['title', 'desc', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'desc' => 'Краткое описание',
            'content' => 'Текст',
            'image' => 'Изображение',
            'elect' => 'Избранное',
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $filename = uniqid() . '.' . $this->imageFile->extension;
            
            $this->image = $filename;
            $this->save();

            $this->imageFile->saveAs(Yii::getAlias('@app') . "\\web\\uploads\\" . $filename);
            return true;
        } else {
            return false;
        }
    }
}
