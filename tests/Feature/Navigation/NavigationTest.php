<?php

namespace Tests\Feature\Navigation;

use App\Http\Livewire\Navigation\Navigation;
use App\Models\NavItem;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class NavigationTest extends TestCase
{
    use RefreshDatabase;
    /** @test    */
    public function navigation_component_can_be_render(){
        $this->get('/')->assertStatus(200)->assertSeeLivewire('navigation.navigation');
    }
    /** @test    */
    public function component_can_load_items_navigation(){
        $items= NavItem::factory(3)->create();
        Livewire::test(Navigation::class)
        ->assertSee($items->first()->label)
        ->assertSee($items->first()->url);
    }
}
