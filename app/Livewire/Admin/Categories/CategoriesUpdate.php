<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoriesUpdate extends Component
{

    public $category, $name;

    protected $listeners = ['categoryUpdate'];

    public function categoryUpdate($id)
    {
        #fill $category with the same eloquent model of the same id
        $this->category = Category::find($id);
        $this->name = $this->category->name;
        $this->resetValidation();

        #show edit modal
        $this->dispatch('editModalToggle');
    }

    #----------------------------------------------------------
    public function rules()
    {
        return [
            'name' => 'required',
        ];
    }
    public function submit()
    {
        $data = $this->validate();
        #save data
        $this->category->update($data);

        #hide modal
        $this->dispatch('editModalToggle');

        #refresh services data
        $this->dispatch('refreshData')->to(CategoriesData::class);
    }
    #----------------------------------------------------------
    public function render()
    {
        return view('admin.categories.categories-update');
    }
}
