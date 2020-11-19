<?php
namespace App\Models;
use App\Models\Simple\JSONModel;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class ActorsInfo extends JSONModel{
    protected $origin = WRITEPATH . 'data/ActorsData.json'; 
    protected $keyField = 'id'; 
    protected $validationRules = []; 

    //mock data : an array of records
//    protected $data = [
//        '1' => [
//            'id' => 1,
//            'name' => 'Cheng Long',
//            'description' => 'Occupation: Actor, director, screenwriter, singer, voice actor',
//            'position'=>'china',
//            'favorite food'=>'apple',
//            'specialty'=>'fight',
//            'representative works'=>'《Drunken Master》，《Plan A》 ',
//            'image' => 'chenglong.jpg',
//        ],
//        '2' => [
//            'id' => 2,
//            'name' => 'Li XiaoLong',
//            'description' => 'Bruce Lee: Martial arts master, kung fu movie star',
//            'position'=>'USA',
//            'favorite food'=>'steak',
//            'specialty'=>'strong',
//            'representative works'=>'《Fist of Fury》，《The Way of the Dragon》',
//            'image' => 'lixiaolong.jpg',
//            
//        ],
//        '3' => [
//            'id' => 3,
//            'name' => 'Zhen ZiDan',
//            'description' => 'Donnie Yen: Career: Director, actor',
//            'position'=>'china',
//            'favorite food'=>'toufu',
//            'specialty'=>'Punch fast',
//            'representative works'=>'《Ip Man》，《Kill Zone》',
//            'image' => 'zhenzidan.jpg',
//        ],
//        '4' => [
//            'id' => 4,
//            'name' => 'Lin ZhengYing',
//            'description' => 'Lin Zhengying: Hong Kong, China male artist',
//            'position'=>'china',
//            'favorite food'=>'rice',
//            'specialty'=>'exorcism',
//            'representative works'=>'《Mr. Vampire》，《Prodigal Son》',
//            'image' => 'linzhengying.jpg',
//        ],
//        '5' => [
//            'id' => 5,
//            'name' => 'Li LianJie',
//            'description' => 'Jet Li: Chinese actor, director and producer',
//            'position'=>'china',
//            'favorite food'=>'pork',
//            'specialty'=>'handsome',
//            'representative works'=>'《Huo Yuanjia》，《Shaolin Temple》',
//            'image' => 'lilianjie.jpg',
//        ],
//    ];
//
//    public function findAll() {
//        return $this->data;
//    }
//
//    public function find($id = null) {
//        if (!empty($id) && isset($this->data[$id])) {
//            return $this->data[$id];
//        }
//        return null;
//    }

}
