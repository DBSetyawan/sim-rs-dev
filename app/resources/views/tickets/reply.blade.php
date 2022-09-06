@isset($tickets)
    @if($tickets == "Closed")
    <div class="flex items-center justiyf-between">
        <hr class="w-full">
        <p tabindex="0" class="focus:outline-none text-sm flex flex-shrink-0 leading-normal px-3 py-16 text-gray-500">Ticket is Closed.</p>
        <hr class="w-full">
    </div>
    @else 
    <div class="panel-heading">You can create something message below :</div>
        <div class="comment-form">
            <form action="{{ route('comment.post') }}" method="POST" class="form">
                {!! csrf_field() !!}
                <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
                <div class="mt-1 form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                    <textarea maxlength="101" rows="10" style="background-color: rgb(238, 238, 238);" required id="comment" name="comment" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Enter reply message"></textarea>
                    @if ($errors->has('comment'))
                        <span class="help-block">
                            <strong>{{ $errors->first('comment') }}</strong>
                        </span>
                    @endif
                    <p class="mt-2 text-sm text-gray-500">
                        Scope of replying messages
                    </p>
                </div><br />
            
                <div class="form-group">
                    <button type="submit" class="text-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-blue-700 text-white rounded-full">Reply</button>
                    <a class="text-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-rose-800 text-white rounded-full" href="{{ route('index.tickets') }}">Cancel</a>
                    </div>
                </form>
        </div>
    @endif
    @else 
    <div class="panel-heading">You can create something message below :</div>
    <div class="comment-form">
        <form action="{{ route('comment.post') }}" method="POST" class="form">
            {!! csrf_field() !!}
            <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
            <div class="mt-1 form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                <textarea maxlength="101" rows="10" required id="comment" style="background-color: rgb(238, 238, 238);" name="comment" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Enter reply message"></textarea>
                @if ($errors->has('comment'))
                    <span class="help-block">
                        <strong>{{ $errors->first('comment') }}</strong>
                    </span>
                @endif
                <p class="mt-2 text-sm text-gray-500">
                    Scope of replying messages
                </p>
            </div><br />
        
            <div class="form-group">
                <button type="submit" class="text-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-blue-700 text-white rounded-full">Reply</button>
                <a class="text-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-rose-800 text-white rounded-full" href="{{ route('index.tickets') }}">Cancel</a>
                </div>
            </form>
    </div>
@endisset
