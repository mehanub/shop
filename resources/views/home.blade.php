@extends('layouts.app')

@section('content')
<v-container grid-list-md text-lg-left>
    <v-layout row>
     <v-flex md10 offset-lg1>  
       <v-layout row>
       <v-flex d-flex xs12 lg2>
       <v-card color="white" dark>
          <left-menu></left-menu>    
       </v-card>
       </v-flex>

      <carousel></carousel>


        <v-flex d-flex xs12 sm6 lg3>
          <v-layout row wrap>
           <v-flex d-flex v-for="n in 2" :key="n" xs12>
                  <v-card color="white" dark>
                    <v-card-text>
                    </v-card-text>
                  </v-card>
                </v-flex>   
           </v-layout> 
          </v-flex>
      </v-layout>
      <v-layout row>
        <v-flex md2>
         <v-card color="white" dark>
            <left-bottom-menu></left-bottom-menu>
         </v-card>
        </v-flex>
        <v-flex md10> 
            <shop-pagination></shop-pagination> 
          <v-layout wrap >
            <v-flex md3  v-for="n in 12" :key="n">
              <v-card color="white" dark>
                  <shop-card></shop-card>
              </v-card>    
            </v-flex>
          </v-layout>     
          <shop-pagination></shop-pagination> 
        </v-flex>
      </v-layout> 
  </v-flex> 
</v-layout>
  </v-container>
@endsection
