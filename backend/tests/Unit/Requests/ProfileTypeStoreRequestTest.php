<?php

namespace Tests\Unit\Requests;

use Tests\TestCase;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ProfileTypeStoreRequest;

class ProfileTypeStoreRequestTest extends TestCase
{
    /** @dataProvider additionProvider */
    public function testExample($params, $expect)
    {
        $request = new ProfileTypeStoreRequest();
        $rules = $request->rules();
        $validator = Validator::make($params, $rules);
        $this->assertEquals($expect, $validator->passes());
    }

    public function additionProvider()
    {
        return [
            'pass' => [[
                'name' => 'テスト',
                'comment' => 'テスト',
            ], true],
            'name required' => [[
                'name' => '',
                'comment' => 'テスト',
            ], false],
            'name max:255' => [[
                'name' => 'テスト',
                'comment' => str_repeat('a', 256),
            ],  false],
            'comment max:255' => [[
                'name' =>  str_repeat('a', 256),
                'comment' => 'テスト',
            ],  false],
        ];
    }
}
