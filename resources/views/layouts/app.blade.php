<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">

</head>
<body>
    <div align="center" id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <v-container grid-list-xs text-xs-center>
                  <v-layout row>
                     <v-flex md10 offset-lg1>  
                         <v-layout row>
                             <v-flex d-flex xs12 lg12>
                                <v-layout row>
                                     <v-flex lg2>
                                     <div class="logo" >
                                        <a href="#" class="icon-button twitter"><i class="fa fa-twitter"></i><span></span></a>
                                        <a href="#" class="icon-button facebook"><i class="fa fa-facebook"></i><span></span></a>
                                        <a href="#" class="icon-button google-plus"><i class="fa fa-vk"></i><span></span></a>
                                     </div>
                                   
                                    </v-flex>
                                    <v-flex lg10>
                                       <div class="collapse navbar-collapse" id="app-navbar-collapse">
                                             
                                      <ul class="snip1189">
                                          <li class="current"><a href="#">Home</a></li>
                                          <li><a href="#">About Us</a></li>
                                          <li><a href="#">Contacts</a></li>
                                        </ul>
                                        <div style="display: block; float: left;">
                                          <input placeholder="Search..." type="text" name="search" class="search_field">
                                        </div>
                                         <ul class="nav navbar-nav navbar-right">

                                            <!-- Authentication Links -->
                                            @if (Auth::guest())
                                                <li><a href="{{ route('login') }}">Login</a></li>
                                                <li><a href="{{ route('register') }}">Register</a></li>
                                            @else
                                            <!-- <shoptoolbar></shoptoolbar> -->
                                             <div class="toolbanges" >
                                              <a href="">
                                                <v-badge >
                                                  <span slot="badge">6</span>
                                                  <v-icon color="grey lighten-1">shopping_cart</v-icon>
                                                  Card
                                                </v-badge>
                                                </a>
                                                <a href="">
                                                <v-badge  color="red">
                                                  <span slot="badge">2</span>
                                                  <v-icon  color="grey">mail</v-icon>
                                                </v-badge>
                                               </a>
                                                
                                                 <li style="float:left" class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                       <i class="fa fa-user" aria-hidden="true"></i><span> User</span> <span class="caret"></span>
                                                    </a>

                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                             <a href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                            Logout
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            {{ csrf_field() }}
                                                        </form>
                                                        </li>
                                                    </ul> 
                                                </li>
                                              
                                              </div>
                                     
                                                @endif
                                            </ul>
                                            
                                        </div>
                                    </v-flex>
                             
                              </v-flex>
                         </v-layout>
                        </v-flex>
                      </v-layout>
                  </v-container>        
                            
                    
                         
                  
              
          </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://use.fontawesome.com/574b11570b.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
