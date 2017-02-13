<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class NavigationController extends Controller
{
 

    /**
     * Returns Menu View
     */
    public function Menus()
    {

        $menu_items=App\Navigation::where('parent_id',null)->get();
        $parent_num=count($menu_items);
        $menuItems=App\Navigation::orderBy('order','asc')->get();
    	return view('Menus.Menus',compact('menu_items','menuItems','parent_num'));
    }

    /**
     * Add menu item
     * @param Request $request [description]
     */
    public function AddMenu(Request $request)
    {

        $order=App\Navigation::getOrder($request->parent_id);
       
        $menu= new App\Navigation($request->all());
       
        $menu->order=$order;

        $menu->save();

    }


    /**
     * [MenuData description]
     * @param Request $request [description]
     */
    public function MenuData(Request $request)
    {
        $id = $request->id;

        $data=App\Navigation::find($id);

        header('Content-Type: application/json');
        
        echo json_encode($data);
    }


    /**
     * [Update_Menu_Data description]
     * @param Request $request [description]
     */
    public function Update_Menu_Data(Request $request)
    {
        
        
        $id= $request->menu_id;
        $Menu=App\Navigation::find($id);
        
        $Menu->update($request->all());

        header('Content-Type: application/json');
        
        echo json_encode($Menu);
        
        
    }

    /**
     * [SortMenuItem description]
     * @param Request $request [description]
     */
    public function SortMenuItem(Request $request)
    {
        $order= $request->order_array;
        
        $count=0;

        foreach ($order as $ord) {

            $menu_item = App\Navigation::find($ord);        
            $menu_item->order=$count;
            $menu_item->update();

            $count++;
        }
        echo json_encode("ok");
    }

    /**
     * [Get_total_children description]
     * @param Request $request [description]
     */
    public function Get_total_children(Request $request)
    {

        $parent_id=$request->parent_id;

        $total=count(App\Navigation::where('parent_id',$parent_id)->get() );

        echo json_encode($total);
    }

    /**
     * [SortchildMenuItem description]
     * @param Request $request [description]
     */
    public function SortchildMenuItem(Request $request)
    {
        $order= $request->order_array;
        $parent_id=$request->parent_id;
        $count=0;

        foreach ($order as $ord) {

             $menu_item=App\Navigation::where([ 
                                                
                                                ['id','=',$ord],
                                                ['parent_id','=',$parent_id ], 

            ])->first();

            $menu_item->order=$count;
            $menu_item->update();

            $count++;
        }
        echo json_encode("ok");
    }



    /**
     * [Delete_Menu_Item description]
     * @param Request $request [description]
     */
    public function Delete_Menu_Item(Request $request)
    {
        $id =$request->menu_id;
        $Navigation = App\Navigation::find($id);
        $Navigation->delete();

        echo json_encode("deleted");
        

    }
}
