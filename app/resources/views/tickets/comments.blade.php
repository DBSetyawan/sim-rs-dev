<div class="comments">
    @forelse($ticket->comments as $comment)
        <div class="bg-@if($ticket->user->id === $comment->user_id){{"white"}}@else{{"green"}}@endif">
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <div class="relative px-5 py-3 text-left">
                    <div>
                        @if( $comment->user_id == 33 || $comment->user_id == 6)
                            <span class="material-icons">
                                support_agent
                            </span>
                                {{ __('Support') }} 
                        @else 
                            <span class="material-icons">
                                account_circle
                            </span>
                                {{ __('User') }} 
                        @endif
                    </div>
                    <hr>
                </div>
                <div class="relative px-5 py-3 text-left">
                    <span class="material-icons">
                        book_online
                        </span>
                        {{ __('Title Ticket') }}
                    <hr>
                </div>
                <div class="relative px-5 py-3 text-right">
                    <span class="material-icons">
                        edit_calendar
                        </span>
                        {{ __('Reply At') }}
                    <hr>
                </div>
                <dt class="text-sm font-medium text-gray-500">
                    {{ $comment->user->name }}
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $ticket->message }}
                    <span class="pull-right">{{ $comment->created_at->format('Y-m-d H:i:s') }}</span>
                </dd>
              </div>
            @if(Auth::user()->id != $comment->user_id)
                <div class="relative px-1 py-3">
                    <div>
                        <span class="text-lg inline-block py-1 px-2.5 leading-none whitespace-nowrap align-baseline font-bold bg-green-600 text-white rounded-full">
                            {{ $comment->comment }}
                        </span>
                    </div>
                </div>
                @else
                <div class="relative py-5">
                    <div class="relative px-1 py-1 text-right">
                        <span class="text-lg inline-block py-1 px-2.5 leading-none whitespace-nowrap align-baseline font-bold bg-green-600 text-white rounded-full">
                            {{ $comment->comment }}
                        </span>
                    </div>
                </div>
            @endif
        </div>
        @empty
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <div class="relative px-5 py-3 text-left">
                    <div>
                        <span class="material-icons">
                            support_agent
                        </span>
                        {{ __('Support') }} 
                    </div>
                    <hr>
                </div>
                <div class="relative px-5 py-3 text-left">
                    <span class="material-icons">
                        book_online
                        </span>
                        {{ __('Title Ticket') }}
                    <hr>
                </div>
                <div class="relative px-5 py-3 text-right">
                    <span class="material-icons">
                        edit_calendar
                        </span>
                    {{ __('Reply At') }}
                    <hr>
                </div>
                <dt class="text-sm font-medium text-gray-500">
                    {{ __('Not yet replies, please be patient.') }}
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ __('Not found ticket.') }}
                    <span class="pull-right">
                        {{ __('0000-00-00 00:00:00') }}
                    </span>
                </dd>
            </div>
    @endforelse
</div>