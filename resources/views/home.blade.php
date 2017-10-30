@extends('layouts.app')

@section('content')
<v-container grid-list-md text-lg-left>
    <v-layout row>
     <v-flex md10 offset-lg1>  
      <v-layout row wrap>
         <v-flex d-flex d-flex xs12 sm6 lg2>
           <v-layout row wrap align-content-start>
             
           <v-flex >
            <v-layout row wrap>
              <v-flex xs12>
                <v-card color="red lighten-2" dark>
                  <left-menu></left-menu>
                </v-card>
              </v-flex>
               <v-flex xs12>
                <v-card color="grey lighten-2" dark>
                   <v-card color="white" dark>
                     <!-- <left-bottom-menu></left-bottom-menu> -->
                   </v-card>
                </v-card>
              </v-flex>
            </v-layout>
            </v-flex>
           </v-layout> 
          </v-flex>
      <v-flex d-flex xs12 lg10>
        <v-layout row wrap>
        <carousel></carousel>
        <v-flex d-flex xs12 sm6 lg4>
          <v-layout row wrap>
           <v-flex d-flex v-for="n in 2" :key="n" xs12>
                  <v-card color="white" dark>
                    <v-card-text>
                    </v-card-text>
                  </v-card>
                </v-flex>   
           </v-layout> 
          </v-flex>
    
      <!--  <v-flex md2>
         <v-card color="white" dark>
            <left-bottom-menu></left-bottom-menu>
         </v-card>
        </v-flex>-->

        <v-flex md12> 
            <shop-pagination></shop-pagination> 
          <v-layout wrap >
            <v-flex md2  v-for="n in 12" :key="n">
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
  </v-flex> 

</v-layout>
  </v-container>
@endsection
