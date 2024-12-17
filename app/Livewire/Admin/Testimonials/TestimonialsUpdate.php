<?php

namespace App\Livewire\Admin\Testimonials;

use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithFileUploads;

class TestimonialsUpdate extends Component
{
    use WithFileUploads;

    public $testimonial, $name, $position, $image,  $description;




    protected $listeners = ['testimonialUpdate'];

    public function testimonialUpdate($id)
    {
        // fill $testimonial with the eloquent model of the same id
        $this->testimonial = Testimonial::find($id);
        $this->name = $this->testimonial->name;
        $this->position = $this->testimonial->position;
        $this->description = $this->testimonial->description;
        $this->resetValidation();
        // show edit modal
        $this->dispatch('editModalToggle');
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'position' => 'required',
            'image' => 'required',
            'description' => 'required|string',
        ];
    }



    public function submit()
    {
        $data = $this->validate($this->rules());
        // check if testimonial has image -> delete previous image -> save new image
        if ($this->image) {
            unlink($this->testimonial->image);
            $imageName = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('images', $imageName, 'public');
            $data['image'] = 'storage/images/' . $imageName;
        } else {
            unset($data['image']);
        }
        // save data in db
        $this->testimonial->update($data);
        // hide modal
        $this->dispatch('editModalToggle');
        // refresh skills data component
        $this->dispatch('refreshData')->to(testimonialsData::class);
    }
    public function render()
    {
        return view('admin.testimonials.testimonials-update');
    }
}
