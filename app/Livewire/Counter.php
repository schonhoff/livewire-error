<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Cache;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Counter extends Component
{
    public function render()
    {
        return view('livewire.counter');
    }

    /**
     * @return array<string, string>
     */
    #[Computed]
    public function someData(): array
    {
        return Cache::rememberForever('test-data', function () {
            return ['hello' => 'world'];
        });
    }

    /**
     * @return array<string, string>
     */
    #[Computed(persist: true)]
    public function someOtherData(): array
    {
        return ['hello' => 'world'];
    }
}
