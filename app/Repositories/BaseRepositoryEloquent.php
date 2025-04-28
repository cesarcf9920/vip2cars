<?php
namespace App\Repositories;

use App\Interfaces\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class BaseRepositoryEloquent implements BaseRepositoryInterface
{
    protected $model;
    private $relations;

    public function __construct(Model $model, array $relations = [])
    {
        $this->model = $model;
        $this->relations = $relations;
    }

    public function all()
    {
        $query = $this->model;

        if(!empty($this->relations ) ){
            $query = $query->with($this->relations);
        }

        return $query->get();
    }

    public function get(int $id)
    {
        return $this->model->find($id);
    }

    public function getByIds($ids)
    {
        return $this->model->whereIn('id', $ids)->get();
    }

    public function save(Model $model)
    {
        $model->save();

        return $model;
    }

    public function saveByArray($array)
    {
         $this->model->create($array);

        return $this->model;
    }

    public function updateByArray(Model $model,$array)
    {

        $model->update($array);

        return $model;
    }

    public function delete(Model $model)
    {
        $model->delete();

        return $model;
    }

    public function filterDynamic($filters)
    {
        return $this->model->filterDynamic($filters);
    }

    /**
     * @param int $id
     * @param array $columns
     * @return mixed
     */
    public function getColumnsById(int $id, array $columns)
    {
        if (!in_array('id', $columns)) {
            array_unshift($columns, 'id');
        }

        return $this->model->where('id', $id)
            ->select($columns)
            ->first();
    }

    /**
     * @param array $ids
     * @param array $columns
     * @return mixed
     */
    public function getColumnsByIds(array $ids, array $columns)
    {
        if (!in_array('id', $columns)) {
            array_unshift($columns, 'id');
        }

        return $this->model->whereIn('id', $ids)
            ->select($columns)
            ->get();
    }

    public function getInJSON(array $_attributes) : string
    {
        $tableName = $this->model->getTable();
        $arr = $this->model->get()->map(function($item,$idx) use($tableName, $_attributes){

            foreach($_attributes AS $_attribute){
                $attributeExists = Schema::hasColumn($tableName, $_attribute);
                if($attributeExists){
                    $arr[$_attribute] = $item->$_attribute;
                }
            }
            $arr['id'] = $item->id;
            return $arr;
        });
        return json_encode($arr);
    }

}
