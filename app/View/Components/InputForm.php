<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputForm extends Component
{
    public $type;
    public $label;
    public $value;
    public $name;
    public $class;
    public $placeholder;
    public $classGroup;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = "", $label = "", $value = "", $name = "", $class = "", $placeholder = "", $classGroup = false)
    {
        // merge attributes
        $this->type = $type;
        $this->label = $label;
        $this->value = $value;
        $this->name = $name;
        $this->class = $class;
        $this->placeholder = $placeholder;
        $this->classGroup = $classGroup;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.input-form');
    }
}
