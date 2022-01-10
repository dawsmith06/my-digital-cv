@extends('layouts.app')

@section('content')
    <div id = "cv-container" v-show = "ready" style = "display:none" v-init:office = "">
        <img id="app-icon" src="{{asset('img/vue.png')}}">
        @verbatim
            <div id = "app-content">
                <transition  name     = "custom-classes-transition"  
                            :duration = "{ enter: 500, leave: 200 }" 
                            mode      = "out-in"
                            enter-active-class="animated slideInRight faster"  
                            leave-active-class="animated bounceOutLeft" 
                            @leave       = "onLeave"
                            @enter       = "onEnter">
                    <keep-alive>
                        <router-view></router-view>
                    </keep-alive>
                </transition>
            </div>
            
            <footer class = "text-white pb-1 pl-2 pr-2 m-0 d-none">
                <small class = "float-left">
                   Fylapp Software
                </small>
    
                <small class = "float-right">
                    Diseñado por Asesoritech ®
                </small>
            </footer>
        @endverbatim
    </div>
    <script src="{{ mix('js/cv-vue.js')}}" defer></script>

    <style>
        :root{
            --primary-gradient: linear-gradient(to right, #3eb17d, #34495e);
            --secondary-gradient: linear-gradient(to right, #34495e, #386a68);
        }
        .text-primary {
            color: #398078!important;
        }
    </style>
@endsection