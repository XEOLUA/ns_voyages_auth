<ul class="navbar-nav mr-auto" >
{!! $tree !!}
</ul>

{{--dd($items);--}}

{{--<ul class="navbar-nav mr-auto" >--}}
{{--    @php--}}
{{--        if (Voyager::translatable($items)) {--}}
{{--            $items = $items->load('translations');--}}
{{--        }--}}
{{--    @endphp--}}

{{--    @foreach ($items as $item)--}}
{{--        @php--}}
{{--            $originalItem = $item;--}}
{{--            if (Voyager::translatable($item)) {--}}
{{--                $item = $item->translate($options->locale);--}}
{{--            }--}}
{{--            $isActive = null;--}}
{{--            $styles = null;--}}
{{--            $icon = null;--}}
{{--            // Background Color or Color--}}
{{--            if (isset($options->color) && $options->color == true) {--}}
{{--                $styles = 'color:'.$item->color;--}}
{{--            }--}}
{{--            if (isset($options->background) && $options->background == true) {--}}
{{--                $styles = 'background-color:'.$item->color;--}}
{{--            }--}}
{{--            // Check if link is current--}}
{{--            if(url($item->link()) == url()->current()){--}}
{{--                $isActive = 'active';--}}
{{--            }--}}
{{--            // Set Icon--}}
{{--            if(isset($options->icon) && $options->icon == true){--}}
{{--                $icon = '<i class="' . $item->icon_class . '"></i>';--}}
{{--            }--}}
{{--        @endphp--}}

{{--        @if(!$originalItem->children->isEmpty())--}}
{{--            <li class="{{ $isActive }} nav-item dropdown"> є діти--}}
{{--                <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                    {!! $icon !!}--}}
{{--                    <span>{{ $item->title }}</span>--}}
{{--                </a>--}}
{{--            @include('voyager::menu.default', ['items' =>$originalItem->children, 'options' => $options])--}}
{{--            </li>--}}
{{--        @endif--}}
{{--        @if($originalItem->children->isEmpty())--}}
{{--        <li class="{{ $isActive }} nav-item"> без дітей--}}
{{--            <a class="nav-link" href="{{ url($item->link()) }}" target="{{ $item->target }}" style="{{ $styles }}"  >--}}
{{--                {!! $icon !!}--}}
{{--                <span>{{ $item->title }}</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        @endif--}}



{{--    @endforeach--}}

{{--</ul>--}}

