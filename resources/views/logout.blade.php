<x-layout>
<form class="col-3 offset-4 border rounded" method="POST" action="{{ route('user.logout',app()->getLocale())}}">
    @csrf

</x-layout>
