<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;

class Sample extends Component
{
    public $name, $slug;

    public function render()
    {
        return view('livewire.sample')->extends('layouts.sample')->section('content');
    }

    public function updatedName($value)
    {
        $this->slug = Str::slug($value);
    }
}
