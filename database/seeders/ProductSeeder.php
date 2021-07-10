<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert(
        [
            [
                
             'name'=>'Oppo mobile',
            "price"=>"300",
            "description"=>"A smartphone with 8gb ram and much more feature",
             "category"=>"mobile",
             "gallery"=>"https://www.google.com/search?q=phones&source=lnms&tbm=isch&sa=X&ved=2ahUKEwie9-OpgI3xAhXk7OAKHTyfDhcQ_AUoAXoECAIQAw&biw=929&bih=932#imgrc=_tlYuhkrsR0PVM"
                    
                            
            ],
            [
            'name'=>'Panasonic TV',
             "price"=>"400",
             "description"=>"A smartTV with much more feature",
            "category"=>"TV",
            "gallery"=>"https://www.google.com/search?q=tv&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjTgrKXho3xAhVPqxoKHbutBj0Q_AUoAnoECAEQBA&biw=929&bih=932#imgrc=C4jUnFZZai_iYM"
                
            ],
                        [
             'name'=>'Sony tv',
             "price"=>"500",
            "description"=>"A smarttv with 2gb ram and much more features",
            "category"=>"TV",
            "gallery"=>"https://www.google.com/search?q=tv&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjTgrKXho3xAhVPqxoKHbutBj0Q_AUoAnoECAEQBA&biw=929&bih=932#imgrc=HMp8T7Mylm5E2M"
                            
                        ],
                 [
                 'name'=>'Fridge LG',
                 "price"=>"200",
                 "description"=>"A fridge with amazing feature",
                 "category"=>"fridge",
                "gallery"=>"https://www.google.com/search?q=fridge&source=lnms&tbm=isch&sa=X&ved=2ahUKEwik3sWBh43xAhVCTBoKHZ-oDYAQ_AUoAXoECAIQAw&biw=929&bih=932#imgrc=O7NJ6YVmtixAEM"
                                        
                  ]
         ]
        );
    }
}
