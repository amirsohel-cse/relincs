<div id="messages" wire:poll
    class="flex flex-col h-screen space-y-4 p-3 overflow-y-auto scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-indigo-lighter scrollbar-w-2 scrolling-touch">
    @foreach ($data as $i)
    @php
    $id=$i->to_id;
    @endphp
    @if ($i->message !== null)
    @if ($i->from_id === Auth::user()->id)
    <div class="chat-message">
        <div class="flex items-end justify-end">
            <div class="flex flex-col space-y-2 lg:text-md text-sm max-w-xs mx-2 order-1 items-end">
                <div><span
                        class="text-gray-900 shadow-lg px-4 text-left py-2 rounded-lg inline-block rounded-br-none bg-gray-200">
                        {{$i->message}}
                    </span></div>
            </div>

        </div>
    </div>
    @else
    <div class="chat-message">
        <div class="flex items-end">
            <img src="{{App\Models\User::where('id' , $i->to_id)->select('image_profile')->first()->profile()}}"
                alt="My profile" class="w-10 h-10 object-cover rounded-full order-2">
            <div class="flex flex-col space-y-2 lg:text-md text-sm max-w-xs mx-2 order-1 items-start">
                <div><span class="px-4 text-left py-2 rounded-lg inline-block rounded-br-none bg-indigo-600 text-white ">
                        {{$i->message}}
                    </span></div>
            </div>
        </div>
    </div>
    @endif
    @endif
    @endforeach

</div>
