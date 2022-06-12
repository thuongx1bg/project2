<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {$text=$this->faker->text();
      
            return [
                'config_key'=>$text,
                'config_value'=> $text.'value',
    
               
                'created_at'=>now(),
            ];
        
    }
}
