@include('client.components.head-import')
@include('client.components.header')
<div id="app">
     @switch($page ?? 'home')
     @case('home.index')
     @include('client.page.home.index')
     @break
     @case('course.index')
     @include('client.page.course.index')
     @break
     @case('course.detail')
     @include('client.page.course.detail')
     @break
     @case('course.list')
     @include('client.page.course.list')
     @break
     @case('contact.index')
     @include('client.page.contact.index')
     @break
     @case('news.index')
     @include('client.page.news.index')
     @break
     @case('news.detail')
     @include('client.page.news.detail')
     @break
     @case('login.index')
     @include('client.page.login.index')
     @break
     @default
     @include('client.page.home.index')
     @endswitch
</div>

@include('client.components.footer')
