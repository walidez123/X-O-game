
    <div style="width: 100%; text-align:center;">
        <div style="margin:50px">
           @if ($turn == null)
                <button wire:click='side(1)' style="width: 150px; hieght:80px; padding:50px ; ">play X</button>
                <button wire:click='side(2)' style="width: 150px; hieght:80px; padding:50px ; ">play O</button> 
           @endif
        </div>
        <div>
           
            <table>
             
                @if ($turn !== null )
                    <tr>
                        @foreach ($matrix as $key => $value)
                            <button wire:click='click({{ $key }})' style="width: 150px; height: 150px; padding: 50px; margin: 10px; background-color: bisque">
                            @if (  $value  == 2)
                                O
                            @endif
                            @if (  $value  == 1)
                                X
                            @endif
                            </button>
                        @if ($loop->iteration % 3 == 0)
                            <br>
                        @endif
                        @endforeach
                    </tr>
                @endif
                @if ($winner)
                    <h1>the winner is  
                    @if (  $winner  == 2)
                        O
                    @endif
                    @if (  $winner  == 1)
                        X
                    @endif</h1>
                @endif
         
            </table>
        </div>
    </div>

