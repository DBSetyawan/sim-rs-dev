@extends('email-sender.send-mail-mkt')
@section('content')
<script src="https://cdn.tailwindcss"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          clifford: '#da373d',
        }
      }
    }
  }
</script>
### Summary Detail :
<br />
Transaction Orders #<b> {{ $code }} </b>:

<table class="table table-striped">
    <thead>
        @isset ($materials)
      <tr>
          <th scope="col">Material</th>
          <th scope="col">Quantity</th>
          <th scope="col">Size</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($materials as $ConCurrent)
        <tr>
          <td>{{ isset($materials[$loop->index]) ? $materials[$loop->index] : $materials[0] }}</td>
          <td>{{ number_format(isset($qtys[$loop->index]) ? $qtys[$loop->index] : (float) $qtys[0], 2,',','.') }} (PCS)</td>
          <td>{{ isset($sizes[$loop->index]) ? $sizes[$loop->index] : $sizes[0] }}</td>
        </tr>
      @if (count([$ConCurrent]) == 1)
        @break
            @else 
          @continue
      @endif

      @endforeach
      @else  
      <td class="px-6 py-4 whitespace-nowrap">
          <div class="text-sm text-gray-900"> Data not found..</div>
      </td>
  @endisset
    </tbody>
  </table>
<table class="table table-striped">
    <thead>
    @isset ($component)
      <tr>
          <th scope="col">GSM</th>
          <th scope="col">Paper Type</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($component as $ConCurrent)
        @if(count([$ConCurrent]) > 0)
          <tr>
            {{--
              <?php
                $arr=array('Hello','world');//(0=>Hello,1=>world)
                echo $arr[2];
                ?>
                >>> 'error: Undefined offset 2'
              --}}
            <td>{{ number_format(isset($jenisKrtasGSM[$loop->index]) ? $jenisKrtasGSM[$loop->index] : (float) $jenisKrtasGSM[0], 2,',','.') }}
            </td>
            <td>{{ isset($jenisKrtas[$loop->index]) ? $jenisKrtas[$loop->index] : (String) $jenisKrtas[0] }}
            </td>
          </tr>
          @else  
          <tr>
            <td>{{ number_format((float) $jenisKrtasGSM[0], 2,',','.') }}
            </td>
            <td>{{ $jenisKrtas[0]  }}
            </td>
          </tr>
        @endif

        @if (count([$jenisKrtasGSM]) == 1)
          @break
              @else 
            @continue
        @endif

      @endforeach

      @else  

      <td class="px-6 py-4 whitespace-nowrap">
          <div class="text-sm text-gray-900"> Data not found..</div>
      </td>
  @endisset
    </tbody>
  </table>


{{-- <div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Size
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Quantity
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Material
                  </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
        @isset ($materials)
          @foreach ($materials as $ConCurrent)
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">{{ $materials[$loop->index] }} </div>
                </td>
                <td></td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{ number_format($qtys[$loop->index], 2,',','.') }} (PCS) 
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{  $sizes[$loop->index]  }}
                  </td>
              </tr>
              @endforeach

                    @else  

                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900"> Data not found..</div>
                    </td>
                @endisset
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div> --}}

{{-- 
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  GSM
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Paper Type
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
          @foreach ($component as $ConCurrent)
              <tr>
                {{-- <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="flex-shrink-0 h-10 w-10">
                      <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                    </div>
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        Jane Cooper
                      </div>
                      <div class="text-sm text-gray-500">
                        jane.cooper@example.com
                      </div>
                    </div>
                  </div>
                </td> --}}
                {{-- <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">{{ number_format($jenisKrtasGSM[$loop->index], 2,',','.') }}</div> --}}
                  {{-- <div class="text-sm text-gray-500">Optimization</div> --}}
                {{-- </td>
                <td></td> --}}
                {{-- <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    Active
                  </span>
                </td> --}}
                {{-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{ $jenisKrtas[$loop->index] }}
                </td>
              </tr>
              @endforeach --}}
              <!-- More people... -->
            {{-- </tbody>
          </table>
        </div>
      </div>
    </div> 
  </div> --}}  
<table class="table table-striped">
    <thead>
    @isset ($flattened)
      <tr>
          <th scope="col">Detail information :</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($flattened as $Files)
      <tr>
        <td>{{ $Files }}
        </td>
      </tr>
      @endforeach
      @else  
      <td class="px-6 py-4 whitespace-nowrap">
          <div class="text-sm text-gray-900"> Data not found..</div>
      </td>
  @endisset
    </tbody>
  </table>
{{-- @isset($flattened)  
    @foreach ($flattened as $expand)
    <ul>
        <li>
            {{ $expand }}  
        </li>    
    </ul>
    @endforeach
@endisset  --}}

@endsection