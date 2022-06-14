<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\User;
use App\Models\farmer;
use App\Models\Vender;

class UserController extends Controller
{
    public function insertrecord(){
        $phone = new Phone();
        $phone->phone = "126537154";

        $user = new User();
        $user->name ="Jenthan";
        $user->email = "jen@gmail.com";
        $user->password = encrypt('secret');
        $user->save();
        $user->phone()->save($phone);

        

        return "success!!!";
    }

    public function insertfarmer(){
        $farm = new farmer();
        $farm->firstName = "kumar";
        $farm->lastName = "kum";
        $farm->gsCertificate ="yes";
        $farm->farmName = "kumarfarm";
        $farm->farmAddressNo = "2tst";
        $farm->farmAddressStreet = "munaitivu";
        $farm->farmAddressCity = "Batticaloa";
        $farm->farmerphone = "065765434";

        $user = new User();
        $user->name ="kumar";
        $user->email = "kumkum@gmail.com";
        $user->password = encrypt('success');
        $user->save();
        $user->farmer()->save($farm);

        return "farmer success";

    }

    public function insertvender(){
        $vender = new Vender();
        $vender->vendername = "kannan";
        $vender->lisencePhoto = "lijpg";


        $user = new User();
        $user->name ="kannan";
        $user->email = "kannankan@gmail.com";
        $user->password = encrypt('loss');
        $user->save();
        $user->vender()->save($vender);

        return "vender success";

    }
}
