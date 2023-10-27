<?php

namespace App\Livewire;

use Livewire\Component;

class XO extends Component
{
    public $turn;
    public $winner;
    public $matrix = [
        '1'=>null, '2'=>null, '3'=>null,
        '4'=>null, '5'=>null, '6'=>null,
        '7'=>null, '8'=>null, '9'=>null
    ];
    public function side($turn){
        $this->turn = $turn;
        
    }
    public function winner(){
        for($i = 1 ; $i<=7 ; $i = $i+3){
            if($this->matrix[$i] == $this->matrix[$i+1] && $this->matrix[$i] == $this->matrix[$i+2] && $this->matrix[$i] !== null ){
              $this->winner = $this->turn;
          }
         }
  
         for($i = 1 ; $i<=3 ;  $i++){
            if($this->matrix[$i] == $this->matrix[$i+3] && $this->matrix[$i] == $this->matrix[$i+6] && $this->matrix[$i] !== null ){
              $this->winner = $this->turn;
          }
     
          }
  
          if($this->matrix[1] == $this->matrix[5] && $this->matrix[5] == $this->matrix[9] && $this->matrix[5] !== null ){            
              $this->winner = $this->turn;
          }
          if($this->matrix[9] == $this->matrix[5] && $this->matrix[5] == $this->matrix[7] && $this->matrix[3] !== null ){            
              $this->winner = $this->turn;
          }
    }
    public function click($key ){
        if($this->winner == null){
            if( $this->matrix[$key] == null){
                $this->matrix[$key] = $this->turn;
           }
         
            if($this->turn == 1 ){
                    $this->winner();
                    $this->turn++;
                
                    
            }
            else{
                    $this->winner();
                    $this->turn--;
            }
          
    
        }
       
       

    }
    public function render()
    {
        return view('livewire.x-o');
    }
}
