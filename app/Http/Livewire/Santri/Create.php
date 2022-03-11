<?php

namespace App\Http\Livewire\Santri;

use Livewire\Component;
use Filament\Forms;
use Illuminate\Contracts\View\View;

class Create extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms; 

    public function render()
    {
        return view('livewire.santri.create');
    }

    protected function getFormSchema(): array 
    {
        return [
            Forms\Components\TextInput::make('title')->required(),
            Forms\Components\MarkdownEditor::make('content'),
            // ...
        ];
    } 
}
