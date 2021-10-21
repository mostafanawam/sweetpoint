<div>

  <script type="text/javascript">
    function confirm1(id) {
        var del=confirm("Do you want to delete user?");//ask the user if want to delete
            if(del){//if yes => delete item
                let stateObj = { id: "100" };
                window.history.replaceState(stateObj,
                    "delete", "/admin/list/delete/"+id);
            }
    }
    </script>
  <div class="row mb-4">
    <div class="col form-inline">
      per page: &nbsp;
      <select class="custom-select" wire:model="perpage">
        <option value="2">2</option>
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="25">25</option>
      </select>
    </div>
    <div class="col">
      <input wire:model.debounce.300ms="search" type="text" class="form-control" placeholder="Search Products...">
    </div>
  </div>
<div class="table-responsive">
  <table class="table data-table" id='UserTable'>
    <thead>

      <tr>
        <th style="cursor:pointer;width:7%;" wire:click="sortBy('prod_id')">ID  @include('partials.sorticon',['field'=>'prod_id'])</th>
        <th style="cursor:pointer;width:7%;" wire:click="sortBy('name')">Name @include('partials.sorticon',['field'=>'name'])</th>
        <th style="cursor:pointer;width:20%;" wire:click="sortBy('description')">Desc @include('partials.sorticon',['field'=>'description'])</th>
        <th style="cursor:pointer;" wire:click="sortBy('price')">Price @include('partials.sorticon',['field'=>'price'])</th>
        <th style="cursor:pointer;" wire:click="sortBy('cat_name')">Cat @include('partials.sorticon',['field'=>'cat_name'])</th>
        <th style="cursor:pointer;" wire:click="sortBy('quantity')">Qty @include('partials.sorticon',['field'=>'quantity'])</th>
        <th style="cursor:pointer;width:8%;" wire:click="sortBy('rank')">Rank @include('partials.sorticon',['field'=>'rank'])</th>
        <th>Image</th>
        <th style="width:10%;">Action</th>
    </tr>
    </thead>
    <?php $i=0; ?>
@foreach ($products as $prod)
    <tr>

      <th>{{ $prod->prod_id }}</th>
      <th>{{ $prod->name }}</th>
      <th>{{ $prod->description }}</th>
      <th>{{ $prod->price }}</th>
      <th>{{ $prod->cat_name }}</th>
      <th>{{ $prod->quantity }}</th>
      <th>{{ $prod->rank }}</th>
      <th> <img src="{{asset('products/'.$prod->image.'') }}" alt="product"> </th>
      <th>
        <a href="list/view/{{ $prod->prod_id }}" class="btn btn-primary form-group">View</a>
        

        <a  href="" onclick="confirm1('{{ $prod->prod_id }}')" class="btn btn-danger">Delete</a>

    </th>
     
    </tr>
@endforeach
  </table>

  </div>
  <p>showing  {{$products->firstItem()}} to {{$products->lastItem()}} out of {{$products->total()}} items</p>


   <!--<p > {{ $products->links() }} </p> --> 

          
</div>
