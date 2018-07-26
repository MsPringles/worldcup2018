<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180725
    
*/
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "wcup_team".
 *
 * @property string $team_nation
 */
class WcupTeam extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wcup_team';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['team_nation'], 'required'],
            [['team_nation'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'team_nation' => 'Team Nation',
        ];
    }
}
