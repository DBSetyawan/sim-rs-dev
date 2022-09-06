<div>
    <div class="row mb-4">
      <div class="col-md-12">
          @if (session()->has('message'))
            <div id="alert" class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-500">
                <span class="inline-block align-middle mr-8">
                    {{ session('message') }}
                </span>
                    <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" onclick="document.getElementById('alert').remove();">
                        <span>×</span>
                    </button>
                </div>
                <script>
                    $("#alert").click(function () {
                      $(this).fadeOut(1000);
                    })
                  </script>
            @endif
            <div class="md:flex">
                <div class="w-full p-3">
                    <div class="relative"> 
                        <input wire:model.debounce.800ms="search" type="text" placeholder="@lang('message.searchComponent')" class="bg-white h-14 w-full px-12 rounded-lg focus:outline-none hover:cursor-pointer">
                        <span class="absolute top-4 right-5 border-l pl-4">
                        <i class="fa fa-search text-gray-500 hover:text-green-500 hover:cursor-pointer">
                        </i>
                    </span>
                </div>
                <div wire:loading wire:target="search">
                    @lang('message.RefreshStatus')
                </div>
            </div>
        </div>
      </div>
  </div>
<div class="row">
@if($searchments == [])
    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
        <div class="flex">
        <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
        <div>
            <p class="font-bold text-xl">Warning</p>
            <p class="text-lg">The system did not find the keyword you are looking for.</p>
        </div>
        </div>
    </div>
@else
    @isset($searchments)
    <div class="text-left py-4 lg:px-4">
        <div class="p-2 bg-green-700 items-center text-yellow-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
          <span class="flex rounded-full bg-yellow-700 uppercase px-2 py-1 text-xs font-bold mr-3">KOP</span>
            <span class="font-semibold mr-2 text-left flex-auto" wire:loading.table>@lang('message.process') </span>
          <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
        </div>
      </div>
      <div class="flex flex-col">
          <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
              <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
              <tr>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      <a wire:click.prevent="sortBy('assets_uid')" role="button" href="#">
                          Transaction ID
                          @include('includes.sort-icon', ['field' => 'assets_uid'])
                      </a>
                  </th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    <a wire:click.prevent="sortBy('component')" role="button" href="#">
                    Component
                    @include('includes.sort-icon', ['field' => 'component'])
                    </a>
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    <a wire:click.prevent="sortBy('created_at')" role="button" href="#">
                    Created
                    @include('includes.sort-icon', ['field' => 'created_at'])
                    </a>
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    <a wire:click.prevent="sortBy('jenis_kertas')" role="button" href="#">
                        Design
                        @include('includes.sort-icon', ['field' => 'jenis_kertas'])
                    </a>
                </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      <a wire:click.prevent="sortBy('jenis_kertas')" role="button" href="#">
                        Plan 
                        @include('includes.sort-icon', ['field' => 'jenis_kertas'])
                      </a>
                  </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    <a wire:click.prevent="sortBy('created_at')" role="button" href="#">
                        Status
                      @include('includes.sort-icon', ['field' => 'created_at'])
                    </a>
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    <a wire:click.prevent="sortBy('order_name')" role="button" href="#">
                        Customers
                      @include('includes.sort-icon', ['field' => 'order_name'])
                    </a>
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    <a wire:click.prevent="sortBy('send_at')" role="button" href="#">
                        Send At
                      @include('includes.sort-icon', ['field' => 'send_at'])
                    </a>
                </th>
            </th>
                  <th scope="col" class="relative px-6 py-3">
                    Detail
                  </th>
              </tr>
          </thead>
          <tbody>
          @inject('assets', 'App\Models\Assetsuser')
              @php
                function __KOPMethodDuplicateArray($array, $key) {
                    $temp_array = array();
                    $i = 0;
                    $key_array = array();
                        foreach($array as $val) {
                            //cari bedasarkan index-nya
                            if (!in_array($val[$key], $key_array)) {
                                //intialize ke index dari set value yang teridentifikasi.
                                $key_array[$i] = $val[$key];
                                //simpan array value
                                $temp_array[$i] = $val;
                            }
                            $i++;
                        }

                    return $temp_array;
                }

                $floops = __KOPMethodDuplicateArray($searchments, 'component');

              @endphp
            @forelse ($floops as $rx => $customers)
            @php
                if(isset($customers->assets_uid)){
                    $code = $customers->assets_uid;
                }
                if(isset($customers->component)){
                    $component = $customers->component;
                } else {
                    $component = $customers->definition;
                }
            @endphp   
            <form id="payment-form" method="post" action="{{ route('payment.finish') }}">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <input type="hidden" name="result_type" id="result-type" value=""></div>
                <input type="hidden" name="result_data" id="result-data" value=""></div>
            </form> 
                @if(count([$customers]) >= 1)
                    <tr>
                        <td class="px-5 py-5 @if($customers->finished_status == 0) w-1/6 @else w-1/6 @endif bg-white text-sm @if (!$loop->last) border-gray-200 border-b @endif text-center text-lg">
                            {{-- <span class="text-lg inline-block py-1 px-2.5 leading-none whitespace-nowrap align-baseline font-bold bg-purple-500 text-white rounded-full"> --}}
                                {{ $code }}
                            {{-- </span> --}}
                        </td>
                        <td class="px-5 py-5 @if($customers->finished_status == 0) w-1/6 @else w-1/6 @endif bg-white text-sm @if (!$loop->last) border-gray-200 border-b @endif text-center text-lg">
                            <span class="text-lg inline-block py-1 px-2.5 leading-none whitespace-nowrap align-baseline font-bold bg-gray-800 text-white rounded-full">
                                @if(Auth::user()->accessable == "marketing")
                                    {{ $component }}
                                @else 
                                    {{ $component }}
                                @endif
                            </span>
                        </td>
                        <td class="px-5 py-5 bg-white text-sm @if($customers->finished_status == 0) w-1/6 @else w-1/6 @endif @if (!$loop->last) border-gray-200 border-b @endif text-right text-lg">
                            @php
                                $date = \Carbon\Carbon::parse($customers->created_at)->locale(Config::get('languages')[App::getLocale()]['flag-icon']);
                                $date->settings(['formatFunction' => 'translatedFormat']);
                            @endphp
                            {{ $date->format('g:i a d/m/y') }}</td>
                        <td class="px-5 py-5 bg-white text-sm text-center @if (!$loop->last) border-gray-200 border-b @endif text-lg">
                            @php
                                $countDesign = collect($customers->design)->map(function ($rtDataC) {
                                    $IndepedenciesArray = $rtDataC["value"];
                                    return $IndepedenciesArray;
                                }); 
                            @endphp
                            <span class="text-lg inline-block py-1 px-2.5 leading-none whitespace-nowrap align-baseline font-bold bg-yellow-500 text-white rounded-full">
                                    {{ count($countDesign->toArray()) - 1 }} 
                            </span>
                        </td>
                        <td class="px-5 py-5 bg-white text-sm @if (!$loop->last) border-gray-200 border-b @endif text-right text-lg">
                            <span class="text-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-green-500 text-white rounded-full">
                                {{ $dts[$customers->design_plan] }} plan
                            </span>
                        </td>
                        <td class="px-5 py-5 bg-white text-sm @if (!$loop->last) border-gray-200 border-b @endif text-right text-lg">
                            <div class="inline-block whitespace-no-wrap">
                                @if($customers->finished_status == 0)
                                    @if(Auth::user()->accessable == "marketing") 
                                            @if($customers->flow_process == "canceled")
                                                <span class="text-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-500 text-white rounded-full">
                                                    <i class="fas fa-ban" style="cursor:pointer"></i> cancel
                                                </span>
                                            @else 
                                                <span class="text-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-fuchsia-700 text-white rounded-full">
                                                    <i class="fas fa-clock" style="cursor:pointer"></i> waiting
                                                </span>
                                            @endif
                                        @else 
                                            @if($customers->flow_process == "canceled")
                                                <span class="text-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-700 text-white rounded-full">
                                                    <i class="fas fa-ban" style="cursor:pointer"></i> cancel
                                                </span>
                                            @else 
                                                <span class="text-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-neutral-300 text-white rounded-full">
                                                    <i class="fas fa-clock" style="cursor:pointer"></i> pending
                                                </span>
                                            @endif
                                    @endif
                                @else
                                    @if(Auth::user()->accessable == "marketing") 
                                        @if($customers->flow_process == "finished")   
                                            <span class="text-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-green-500 text-white rounded-full">
                                                <i class="fas fa-check-circle" style="cursor:pointer"></i> Finish
                                            </span>
                                        @else 
                                            <span class="text-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-yellow-700 text-white rounded-full">
                                                <i class="fas fa-microchip" style="cursor:pointer"></i> process
                                            </span>
                                        @endif
                                    @else 
                                        @if($customers->flow_process == "finished")
                                            <span class="text-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-green-700 text-white rounded-full">
                                                <i class="fas fa-clipboard-check" style="cursor:pointer"></i> Finish
                                            </span>
                                        @else 
                                            <span class="text-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-purple-500 text-white rounded-full">
                                                <i class="fas fa-briefcase" style="cursor:pointer"></i> in Work
                                            </span>
                                        @endif
                                    @endif
                                @endif
                            </div>
                        </td>
                        <td class="px-5 py-5 bg-white text-sm @if (!$loop->last) border-gray-200 border-b @endif text-right text-lg">
                            {{ $customers->order_name }}
                        </td>
                        <td class="px-5 py-5 bg-white text-sm @if($customers->finished_status == 0) w-1/6 @else w-1/6 @endif @if (!$loop->last) border-gray-200 border-b @endif text-right text-lg">
                            @if($customers->send_at == null)
                            <span class="text-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-amber-300 text-danger rounded-full">
                                <p>not send</p>
                            </span>
                            @else 
                                @php
                                    $dated = \Carbon\Carbon::parse($customers->send_at)->locale(Config::get('languages')[App::getLocale()]['flag-icon']);
                                    $dated->settings(['formatFunction' => 'translatedFormat']);
                                @endphp
                                {{ $dated->format('g:i a d/m/y') }}
                            @endif
                        </td>
                        <td class="px-5 py-5 w-3/5 bg-white text-sm @if (!$loop->last) border-gray-200 border-b @endif text-right">
                            <div class="inline-block whitespace-no-wrap">
                                @if($customers->finished_status == 0)
                                    @if(Auth::user()->accessable == "marketing")
                                    <div class="flex items-center justify-center mb-3">
                                        <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                                            <a href="{{ route('detailDataComponent', ['compUIDs' => $customers->id ] ) }}" class="text-base bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded"><i class="fas fa-shopping-bag"></i></a>
                                        </div>
                                      </div>
                                    @else  
                                        @if($customers->flow_process == "canceled")
                                        <div class="flex items-center justify-center mb-3">
                                            <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                                                <a wire:click="$emit('triggerReordersRestored', {{ $customers->id }}, {{ $customers->order_to }})" class="text-base bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded"  style="cursor:pointer"><i class="fas fa-sort"></i> Restore Order</a>
                                            </div>
                                          </div>
                                          <div class="flex items-center justify-center mb-3">
                                            <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                                                <a href="{{ route('detailDataComponent', ['compUIDs' => $customers->id ] ) }}" class="text-base bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded"><i class="fas fa-shopping-bag"></i></a>
                                            </div>
                                          </div>
                                        @else 
                                            @if(is_null($customers->flow_process))
                                              <div class="flex items-center justify-center mb-3">
                                                <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                                                    <a href="{{ route('detailDataComponent', ['compUIDs' => $customers->id ] ) }}" class="text-base bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded"><i class="fas fa-shopping-bag"></i></a>
                                                </div>
                                              </div>
                                              <div class="flex items-center justify-center mb-3">
                                                <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                                                    <a wire:click="$emit('triggerCancel', {{ $customers->id }}, {{ $customers->order_to }})" class="text-base bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"  style="cursor:pointer"><i class="fas fa-ban"></i></a>
                                                </div>
                                              </div>
                                              <div class="flex items-center justify-center mb-3">
                                                <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                                                    <a wire:click="$emit('triggerReorders', {{ $customers->id }}, {{ $customers->order_to }})" class="text-base bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"  style="cursor:pointer"><i class="fas fa-envelope"></i></a>
                                                </div>
                                              </div>
                                              <div class="flex items-center justify-center mb-3">
                                                <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                                                    <a wire:click="$emit('Midtrans')" class="text-base bg-emerald-500 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded"  style="cursor:pointer">
                                                        <span class="material-icons">
                                                            credit_card
                                                        </span>
                                                    </a>
                                                </div>
                                              </div>
                                            @endif
                                        @endif
                                    @endif
                                @else
                                    @if(Auth::user()->accessable == "marketing")
                                        @if($customers->flow_process == "finished")
                                        <div class="flex items-center justify-center mb-3">
                                            <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                                                <a href="{{ route('detailDataComponent', ['compUIDs' => $customers->id ] ) }}" class="text-base bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded"><i class="fas fa-shopping-bag"></i></a>
                                            </div>
                                          </div>
                                        @else 

                                        <div class="flex items-center justify-center mb-3">
                                            <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                                                 <a wire:click="$emit('triggerFinish', {{ $customers->id }})" class="text-base bg-blue-400 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded"  style="cursor:pointer"><i class="fas fa-clipboard-check"></i> Finish</a>
                                            </div>
                                          </div>
                                          <div class="flex items-center justify-center mb-3">
                                            <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                                                <a href="{{ route('detailDataComponent', ['compUIDs' => $customers->id ] ) }}" class="text-base bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded"><i class="fas fa-shopping-bag"></i></a>
                                            </div>
                                          </div>
                                        @endif
                                    @else 
                                    <div class="flex items-center justify-center mb-3">
                                        <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                                            <a href="{{ route('detailDataComponent', ['compUIDs' => $customers->id ] ) }}" class="text-base bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded"><i class="fas fa-shopping-bag"></i></a>
                                        </div>
                                      </div>
                                    @endif
                                @endif
                            </div>
                        </td>
                    </tr>
                    @else 
                    <tr>
                        <td class="px-5 py-5 @if($customers->finished_status == 0) w-1/3 @else w-1/3 @endif bg-white text-sm @if (!$loop->last) border-gray-200 border-b @endif text-center text-lg">
                            <span class="text-lg inline-block py-1 px-2.5 leading-none whitespace-nowrap align-baseline font-bold bg-purple-500 text-white rounded-full">
                                {{ $code }}
                            </span> 
                        </td>
                        <td class="px-5 py-5 @if($customers->finished_status == 0) w-1/6 @else w-1/6 @endif bg-white text-sm @if (!$loop->last) border-gray-200 border-b @endif text-center text-lg">
                            <span class="text-lg inline-block py-1 px-2.5 leading-none whitespace-nowrap align-baseline font-bold bg-gray-800 text-white rounded-full">
                            @if(Auth::user()->accessable == "marketing")
                                {{ $component }}
                            @else 
                                {{ $component }}
                            @endif
                        </span>
                            </span>
                        </td>
                        <td class="px-5 py-5 @if($customers->finished_status == 0) w-1/5 @else w-1/3 @endif bg-white text-sm @if (!$loop->last) border-gray-200 border-b @endif text-right text-lg">
                            @php
                                $date = \Carbon\Carbon::parse($customers->created_at)->locale(Config::get('languages')[App::getLocale()]['flag-icon']);
                                $date->settings(['formatFunction' => 'translatedFormat']);
                            @endphp
                            {{ $date->format('g:i a d/m/y') }}</td>
                        <td class="px-5 py-5 bg-white text-sm  text-center @if (!$loop->last) border-gray-200 border-b @endif text-lg">
                            <span class="text-lg inline-block py-1 px-2.5 leading-none whitespace-nowrap align-baseline font-bold bg-yellow-500 text-white rounded-full">
                                {{ $dts[$customers->design_plan] }} 
                            </span>
                        </td>
                        <td class="px-5 py-5 bg-white text-sm @if (!$loop->last) border-gray-200 border-b @endif text-right text-lg">
                            <span class="text-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-green-500 text-white rounded-full">
                                {{ $dts[$customers->design_plan] }} plan
                            </span>
                        </td>
                        <td class="px-5 py-5 @if($customers->finished_status == 0) w-1/6 @else w-1/5 @endif bg-white text-sm @if (!$loop->last) border-gray-200 border-b @endif text-right text-lg">
                            <div class="inline-block whitespace-no-wrap">
                                @if($customers->finished_status == 0)
                                    @if(Auth::user()->accessable == "marketing") 
                                            @if($customers->flow_process == "canceled")
                                                <span class="text-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-500 text-white rounded-full">
                                                    <i class="fas fa-ban" style="cursor:pointer"></i> cancel
                                                </span>
                                            @else 
                                                <span class="text-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-fuchsia-700 text-white rounded-full">
                                                    <i class="fas fa-clock" style="cursor:pointer"></i> waiting
                                                </span>
                                            @endif
                                        @else 
                                            @if($customers->flow_process == "canceled")
                                                <span class="text-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-700 text-white rounded-full">
                                                    <i class="fas fa-ban" style="cursor:pointer"></i> cancel
                                                </span>
                                            @else 
                                                <span class="text-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-neutral-300 text-white rounded-full">
                                                    <i class="fas fa-clock" style="cursor:pointer"></i> pending
                                            </span>
                                        @endif
                                    @endif
                                @else
                                    @if(Auth::user()->accessable == "marketing") 
                                        <span class="text-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-green-500 text-white rounded-full">
                                            <i class="fas fa-check-circle" style="cursor:pointer"></i> process
                                        </span>
                                    @else 
                                        <span class="text-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-green-500 text-white rounded-full">
                                            <i class="fas fa-check-circle" style="cursor:pointer"></i> done
                                        </span>
                                    @endif
                                @endif
                            </div>
                        </td>
                        <td class="px-5 py-5 bg-white text-sm @if (!$loop->last) border-gray-200 border-b @endif text-right text-lg">
                            {{ $customers->order_name }}
                        </td>
                        <td class="px-5 py-5 @if($customers->finished_status == 0) w-1/5 @else w-1/3 @endif bg-white text-sm @if (!$loop->last) border-gray-200 border-b @endif text-right text-lg">
                            @if($customers->send_at == null)
                                <span class="text-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-amber-300 text-red rounded-full">
                                    <p>not send</p> 
                                </span>
                            @else 
                              @php
                                $dates = \Carbon\Carbon::parse($customers->send_at)->locale(Config::get('languages')[App::getLocale()]['flag-icon']);
                                $dates->settings(['formatFunction' => 'translatedFormat']);
                            @endphp
                             {{ $dates->format('g:i a d/m/y') }}
                         @endif
                        </td>
                        <td class="px-5 py-5 @if($customers->finished_status == 0) w-4/5 @else w-1/4 @endif bg-white text-sm @if (!$loop->last) border-gray-200 border-b @endif text-right">
                            <div class="inline-block whitespace-no-wrap">
                                @if($customers->finished_status == 0)
                                    @if(Auth::user()->accessable == "marketing")
                                        <div class="flex items-center justify-center mb-3">
                                            <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                                                <a href="{{ route('detailDataComponent', ['compUIDs' => $customers->id ] ) }}" class="text-base bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded"><i class="fas fa-shopping-bag"></i></a>
                                            </div>
                                        </div>
                                        @else  
                                            @if($customers->flow_process == "canceled")
                                            <div class="flex items-center justify-center mb-3">
                                                <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                                                    <a wire:click="$emit('triggerReordersRestored', {{ $customers->id }}, {{ $customers->order_to }})" class="text-base bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded"  style="cursor:pointer"><i class="fas fa-sort"></i> Restore Order</a>
                                                </div>
                                              </div>
                                              <div class="flex items-center justify-center mb-3">
                                                <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                                                    <a href="{{ route('detailDataComponent', ['compUIDs' => $customers->id ] ) }}" class="text-base bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded"><i class="fas fa-shopping-bag"></i></a>
                                                </div>
                                              </div>
                                                {{-- <a wire:click="$emit('triggerCancel', {{ $customers->id }})" class="text-base bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"  style="cursor:pointer"><i class="fas fa-ban"></i></a> --}}
                                            @else 
                                            @if(is_null($customers->flow_process))

                                            <div class="flex items-center justify-center mb-3">
                                                <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                                                    <a wire:click="$emit('triggerReorders', {{ $customers->id }}, {{ $customers->order_to }})" class="text-base bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"  style="cursor:pointer"><i class="fas fa-envelope"></i> Sending</a>
                                                </div>
                                              </div>

                                              <div class="flex items-center justify-center mb-3">
                                                <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                                                    <a wire:click="$emit('triggerCancel', {{ $customers->id }}, {{ $customers->order_to }})" class="text-base bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"  style="cursor:pointer"><i class="fas fa-ban"></i></a>
                                                </div>
                                              </div>

                                              <div class="flex items-center justify-center mb-3">
                                                <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                                                    <a href="{{ route('detailDataComponent', ['compUIDs' => $customers->id ] ) }}" class="text-base bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded"><i class="fas fa-shopping-bag"></i></a>
                                                </div>
                                              </div>
                                            @endif
                                        @endif
                                    @endif
                                @else
                                    @if(Auth::user()->accessable == "marketing")
                                        @if($customers->flow_process == "finish")
                                        <div class="flex items-center justify-center mb-3">
                                            <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                                                <a href="{{ route('detailDataComponent', ['compUIDs' => $customers->id ] ) }}" class="text-base bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded"><i class="fas fa-shopping-bag"></i></a>
                                            </div>
                                          </div>
                                        @else 
                                        <div class="flex items-center justify-center mb-3">
                                            <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                                                <a wire:click="$emit('triggerFinish', {{ $customers->id }}, {{ $customers->order_to }})" class="text-base bg-blue-400 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded"  style="cursor:pointer"><i class="fas fa-clipboard-check"></i> Finish</a>
                                            </div>
                                          </div>
                                          <div class="flex items-center justify-center mb-3">
                                            <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                                                <a href="{{ route('detailDataComponent', ['compUIDs' => $customers->id ] ) }}" class="text-base bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded"><i class="fas fa-shopping-bag"></i></a>
                                            </div>
                                          </div>
                                        @endif
                                    @else 
                                    <div class="flex items-center justify-center mb-3">
                                        <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                                            <a href="{{ route('detailDataComponent', ['compUIDs' => $customers->id ] ) }}" class="text-base bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded"><i class="fas fa-shopping-bag"></i></a>
                                        </div>
                                      </div>
                                    @endif
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endif
                        @empty
                            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                                <div class="flex">
                                    <div class="py-1">
                                        <svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                                    <div>
                                        <p class="font-bold text-xl">Warning</p>
                                        @if (Auth::user()->accessable == "marketing")
                                            <p class="text-lg">@lang('message.transactionmkt')</p>
                                        @else  
                                            <p class="text-lg">@lang('message.productwasnotfound')</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforelse
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  @else  
  <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
      <div class="flex">
        <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
        <div>
          <p class="font-bold text-xl">Warning</p>
          <p class="text-lg">The system did not find the keyword you are looking for.</p>
        </div>
      </div>
    </div>
  @endisset
@endif
    @if($isOpen)
        <div class="fixed z-100 w-full h-full bg-gray-500 opacity-75 top-0 left-0"></div>
            <div class="fixed z-101 w-full h-full top-0 left-0 overflow-y-auto">
                <div class="table w-full h-full py-6">
                    <div class="table-cell text-center align-middle">
                    <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="bg-white rounded-lg text-left overflow-hidden shadow-xl">
                            <form>
                                <div class="px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label for="titleInput" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="titleInput" placeholder="Enter Title" wire:model="customers_id">
                                    @error('customers_id') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                </div>
                                <div class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                <span class="flex w-full sm:ml-3 sm:w-auto">
                                    <button wire:click.prevent="store()" type="button" class="inline-flex bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
                                </span>
                                <span class="mt-3 flex w-full sm:mt-0 sm:w-auto">
                                    <button wire:click="closeModal()" type="button" class="inline-flex bg-white hover:bg-gray-200 border border-gray-300 text-gray-500 font-bold py-2 px-4 rounded">Cancel</button>
                                </span>
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
<div class="row">
    <div class="col">
        {{ $searchments->links() }}
    </div>
</div>
</div>