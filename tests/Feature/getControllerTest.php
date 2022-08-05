<?php

namespace Tests\Feature;

use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use function PHPUnit\Framework\returnValue;

class getControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
    public function verify_data_in_db_tb_projects()
    {
    
  $this->withoutExceptionHandling();
     $b=$this->post("/store",[
        'name_pj'=>'Polk',
        'description_pj'=>'polk es polk',
        'url'=>'https//www.polk.com',
      ]);
      $b->assertOk();

    
     
    }
}
