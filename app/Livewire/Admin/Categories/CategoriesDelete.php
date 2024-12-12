<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoriesDelete extends Component
{
    public $category;

    protected $listeners = ['categoryDelete'];

    public function categoryDelete($id)
    {
        #fill $category with the same eloquent model of the same id
        $this->category = Category::find($id);

        #show delete modal
        $this->dispatch('deleteModalToggle');
    }
    #----------------------------------------------------------
    public function submit()
    {
        #delete record
        $this->category->delete();
        $this->reset('category');

        #hide modal
        $this->dispatch('deleteModalToggle');

        #refresh categories data
        $this->dispatch('refreshData')->to(CategoriesData::class);
    }
    #----------------------------------------------------------
    public function render()
    {
        return view('admin.categories.categories-delete');
    }
}
