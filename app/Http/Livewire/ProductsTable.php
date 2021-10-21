<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
class ProductsTable extends Component
{
    use WithPagination;
    public $sortBy='prod_id';
    public $sortDirection='asc';
    public $perpage=10;
    public $search='';
    public function render()
    {
        $products=Product::query()
        ->join("stocks", 'products.prod_id','=',"stocks.prodid")
        ->join("categories", 'products.cat_id','=',"categories.cat_id")
        ->search($this->search)
        ->orderBy($this->sortBy,$this->sortDirection)
        ->paginate($this->perpage);
        return view('livewire.products-table',['products'=>$products]);
    }
    public function sortBy($field){
        if($this->sortDirection=='asc'){
            $this->sortDirection='desc';
        }else{
            $this->sortDirection='asc';
        }
        return $this->sortBy=$field;
    }
    public function updatingSearch(){
        $this->resetPage();
    }
}
