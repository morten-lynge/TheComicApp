<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Usercomic extends Model
{
    /********************
    * This function looks up the Global Comic Details based on the comic_id contained in users comics table
    */
    public function getComicDetail()
    {
        return Comic::find($this->comic_id);
    }

    /********************
    * This function looks up the Users Details based on the user_id contained in users comics table
    */
    public function getUserDetail()
    {
        return User::find($this->user_id);
    }
   

    public function getConditionName()
    {
        switch($this->condition)
        {
            case 100:$result="(10.0) - Gem Mint";break;
            case 99:$result="(9.9) - Mint";break;
            case 98:$result="(9.8) - Near Mint/Mint";break;
            case 96:$result="(9.6) - Near Mint+";break;
            case 94:$result="(9.4) - Near Mint";break;
            case 92:$result="(9.2) - Near Mint-";break;
            case 90:$result="(9.0) - Very Fire/Near Mint";break;
            case 85:$result="(8.5) - Very Fine+";break;
            case 80:$result="(8.0) - Very Fine";break;
            case 75:$result="(7.5) - Very Fine-";break;
            case 70:$result="(7.0) - Fine / Very Fine";break;
            case 60:$result="(6.0) - Fine";break;
            case 55:$result="(5.5) - Fine-";break;
            case 50:$result="(5.0) - Very Good/Fine";break;
            case 45:$result="(4.5) - Very Good+";break;
            case 40:$result="(4.0) - Very Good";break;
            case 35:$result="(3.5) - Very Good-";break;
            case 30:$result="(3.0) - Good/Very Good-";break;
            case 25:$result="(2.5) - Good+";break;
            case 20:$result="(2.0) - Good";break;
            case 18:$result="(1.8) - Good-";break;
            case 18:$result="(1.5) - Fair/Good";break;
            case 18:$result="(1.0) - Fair";break;
            default:$result=NULL;
        }
        
        return $result;
    }

    public function getWantedTextString()
    {
        switch($this->wanted)
        {
            case 8:$result="Søger flot samlerstand. Jeg skal have den for enhver pris !";break;
            case 7:$result="Søger god samlerstand. Jeg skal have den for enhver pris !";break;
            case 6:$result="Søger flot samlerstand. Jeg vil gerne give en god pris";break;
            case 5:$result="Søger flot samlerstand. Jeg vil gerne give en god pris";break;
            case 4:$result="Søger flot samlerstand, men til en rimelig pris";break;
            case 3:$result="Søger god samlerstand, men til en rimelig pris";break;
            case 2:$result="Søger et læse eksemplar, men til en rimelig pris";break;
            case 1:$result="Søger et billigt læse eksemplar. Stand er ikke vigtig";break;
            case 0:$result="";break;
            default:$result=NULL;
        }
        return $result;
    }

    public function getLikesTextString()
    {
        switch($this->likes)
        {
          
            case 5:$result="5 Stjerner - En af de bedste jeg længe har læst";break;
            case 4:$result="4 Stjerner - Rigtig God";break;
            case 3:$result="3 Stjerner - Over middel";break;
            case 2:$result="2 Stjerner - Middelmådig";break;
            case 1:$result="1 Stjerne - Under middel";break;
            case 0:$result="0 Stjerner - Dårlig";break;
            default:$result=NULL;
        }
        return $result;
    }
   
}
