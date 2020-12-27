<div>
    {{-- The best athlete wants his opponent at his best. --}}

    {{-- <form action="{{route('cart.update', $item['id']) }}"> --}}

        @if(!empty($item['associatedModel']->wholesale_id))
        <input wire:model="quantity" type="number" wire:change="updateCart" class="form-control" min='5'/>
        @else
        <input wire:model="quantity" type="number" wire:change="updateCart" class="form-control" min='1'/>
        @endif

        {{-- <input type="submit" value="save"/> --}}


    {{-- </form> --}}

</div>
