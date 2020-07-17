<?php

namespace App\Http\ViewComposers;

use App\Model\Category;
use Illuminate\View\View;

class NavigationComposer
{
    public function compose(View $view)
    {
        $categories = Category::ofSort(['parent_id' => 'asc'])
        ->get();

    $categories = $this->buildTree($categories);



    return $view->with('categories', $categories);
    }

     public function buildTree($items)
    {
        $grouped = $items->groupBy('parent_id');

        foreach ($items as $item) {
            if ($grouped->has($item->id)) {
                $item->children = $grouped[$item->id];
            }
        }

        return $items->where('parent_id', null);
    }


}
