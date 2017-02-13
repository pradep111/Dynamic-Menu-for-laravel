<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class Navigation extends Model
{
    /**
     * The attributes that are mass assignable.
     * @var [type]
     */
    protected $fillable=[
            'menu_name',
            'parent_id',
            'url',
            'order',
   ];

   /**
    * Navigation model has one parent as model Navigation itself. 
    * return     relation ( description_of_the_return_value )
    */ 
   public function parent()
  {
    return $this->belongsTo('App\Navigation', 'parent_id');
  }


   /**
    * Model has many children .
    * @return relation. 
    */
  public function children()
  {
    return $this->hasMany('App\Navigation', 'parent_id');
  }


  /**
   * [getOrder description]
   * @param  [type] $parent_id [description]
   * @return [type]            [description]
   */
  public static function getOrder($parent_id)
  {
      
      $count= count(App\Navigation::where('parent_id',$parent_id)->get());
      $order=$count+1;
      return $order;
    
  }

}
