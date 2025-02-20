<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRegister extends Model
{
    public function products()
    {
        return $this->hasMany(ProductModel::class, 'id', 'product_id');
    }
}

/**
 * 
 * 
 * 
 * class User extends Model {
 *      public function products() {
 *         return $this->hasMany(Product::class);
*   }
 * }
 * 
 * class Product extends Model {
 *      public function users() {
 *         return $this->hasMany(User::class);
*   }
 * }
 * 
 * 
 * 
 * 
 */
