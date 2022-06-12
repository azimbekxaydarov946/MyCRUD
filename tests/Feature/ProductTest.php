<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends Base
{
    public function setUp(): void
    {
        $this->modelName = 'products';
        $this->modelClass = new Product;

        $this->singleStructure = [
            "id",
            "name",
            "price",
            "quantity",
            "category_id",
            "created_at",
            "updated_at"
        ];

        $this->indexStructure = [
            '*' => [
                "id",
                "name",
                "price",
                "quantity",
                "category_id",
            ]
        ];

        $this->rawData = [
            "name" => "Product 1",
            "price" => "100",
            "quantity" => "10",
            "category_id" => "1"
        ];
    }


    // create

    public function test_can_create_item()
    {
        $this->withExceptionHandling();
        $this->json("post", route($this->modelName . '.store'), $this->rawData)
            ->assertStatus(201);
    }

    // // create da agar required fieldlar jo'natilmasa 422 xato qaytishi kerak
    // public function test_return_validation_error_when_required_fields_not_sent_on_create()
    // {
    //     $rawData = $rawData1 = $rawData2 = $rawData3 =   $this->rawData;
    //     unset($rawData['name']);
    //     unset($rawData1['price']);
    //     unset($rawData2['quantity']);
    //     unset($rawData3['category_id']);
    //     $this->json("post", route($this->modelName . '.store'), $rawData)
    //         ->assertStatus(422);
    //     $this->json("post", route($this->modelName . '.store'), $rawData1)
    //         ->assertStatus(422);
    //     $this->json("post", route($this->modelName . '.store'), $rawData2)
    //         ->assertStatus(422);
    //     $this->json("post", route($this->modelName . '.store'), $rawData3)
    //         ->assertStatus(422);

    // }



    // // update

    // public function test_can_update_item()
    // {
    //     $model = $this->createModels()[0];
    //     $rawData = [
    //         "name"=>"Product Updated",
    //         "price"=>200,
    //         "quantity"=>20,
    //         "category_id"=>2
    //     ];
    //     $this->putJson(route($this->modelName . '.update', [$this->modelName => $model->id]), $rawData)
    //         ->assertStatus(200);
    // }


    // // updateda agar required fieldlar jonatilmasa xato qaytishi kerak
    // public function test_return_validation_error_without_sending_required_fields_on_update()
    // {
    //     $model = $this->createModels()[0];
    //     $rawData = [
    //          "price"=>$model->price,
    //          "quantity"=>$model->quantity,
    //          "category_id"=>$model->category_id
    //     ];
    //     $rawData1 = [
    //          "name"=>$model->name,
    //          "quantity"=>$model->quantity,
    //          "category_id"=>$model->category_id
    //     ];
    //     $rawData2 = [
    //          "name"=>$model->name,
    //          "price"=>$model->price,
    //          "category_id"=>$model->category_id
    //     ];
    //     $rawData3 = [
    //          "name"=>$model->name,
    //          "price"=>$model->price,
    //          "quantity"=>$model->quantity
    //     ];
    //     $this->putJson(route($this->modelName . '.update', [$this->modelName => $model->id]), $rawData)
    //         ->assertStatus(422);
    //     $this->putJson(route($this->modelName . '.update', [$this->modelName => $model->id]), $rawData1)
    //         ->assertStatus(422);
    //     $this->putJson(route($this->modelName . '.update', [$this->modelName => $model->id]), $rawData2)
    //         ->assertStatus(422);
    //     $this->putJson(route($this->modelName . '.update', [$this->modelName => $model->id]), $rawData3)
    //         ->assertStatus(422);

    // }

    // // index

    // // 200 qaytishi kerak
    // public function test_can_index_items()
    // {
    //     $this->createModels(1);
    //     $this->getJson(route($this->modelName . '.index', ['search' => '']))
    //         ->assertStatus(200)
    //         ->assertJsonStructure($this->indexStructure);
    // }

    // // show

    // public function test_can_show_item()
    // {
    //     $model = $this->createModels()[0];

    //     $data = [
    //         'id' => $model->id,
    //     ];

    //     $params = [
    //         $this->modelName => $model->id,
    //     ];

    //     $this->getJson(route($this->modelName . '.show', $params))
    //         ->assertStatus(200)
    //         ->assertJsonStructure($this->singleStructure)
    //         ->assertJsonFragment($data);
    // }

    // // show da agar berilgan model_id topilmasa xato qaytishi kerak
    // public function test_return_not_found_error_when_wrong_item_id_is_sent_on_show()
    // {
    //     $model = $this->createModels()[0];
    //     $params = [
    //         $this->modelName => $model->id + 1,
    //     ];
    //     $this->getJson(route($this->modelName . '.show', $params))
    //         ->assertStatus(404);
    // }


    // // delete

    // public function test_can_delete_item()
    // {
    //     $model = $this->createModels()[0];
    //     $this->deleteJson(route($this->modelName . '.destroy', [$this->modelName => $model->id]), [])
    //         ->assertStatus(204);
    // }

    // // delete da agar berilgan model_id topilmasa xato qaytishi kerak
    // public function test_return_not_found_error_when_wrong_item_id_is_sent_on_delete()
    // {
    //     $model = $this->createModels()[0];
    //     $this->deleteJson(route($this->modelName . '.destroy', [$this->modelName => $model->id + 1]))
    //         ->assertStatus(404);
    // }
}
