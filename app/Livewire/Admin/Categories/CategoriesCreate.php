<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoriesCreate extends Component
{
    public $name;


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
        Category::create($data);
        $this->reset(['name']);

        #hide modal
        $this->dispatch('createModalToggle');

        #refresh services data
        $this->dispatch('refreshData')->to(CategoriesData::class);
    }
    public function render()
    {
        return view('admin.categories.categories-create');
    }
}
