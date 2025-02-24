<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

Admin

<form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form> 
</body>
</html>