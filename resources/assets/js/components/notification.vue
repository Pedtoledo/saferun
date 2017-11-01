<template>
   
                            <li class="dropdown" id="markasread" onclick="markNotificationAsRead('{{count(auth()->user()->unreadNotifications)}}')">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                               Notificações  <span class="glyphicon glyphicon-globe"</span>  <span class="badge" id="badge-notification">{{count(auth()->user()->unreadNotifications)}}</span></a>
                                </a>
                              
                                <ul class="dropdown-menu" role="menu">
                                   <li>
                                    @forelse(auth()->user()->unreadNotifications as $notification)
                                 @include('partials.notification.'.snake_case(class_basename($notification->type)))
                              @empty
                              <a href="#"> Sem notificações</a>
                                    @endforelse
                                   </li>
                            
                                   
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
